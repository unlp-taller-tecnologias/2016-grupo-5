function graficar(datos) {
    xAxis = datos.fechas;
    series = [
        {
            name: 'Salidas',
            data: castear_a_int(datos.envios)
        },
        {
            name: 'Entradas',
            data: castear_a_int(datos.pedidos)
        }
    ];
    $('#graficontainer').highcharts(getChartOpt('area',
            'Estadisticas de entrada y salidas de productos',
            xAxis,
            series));

}
function getChartOpt(chartType, chartTitle, xAxis, chartSeries) {
    return {
        chart: {
            spacingLeft: 0,
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: chartType
          
        },
        title: {
            text: chartTitle
        },
        xAxis: {
            categories: xAxis
        },
        tooltip: {
            pointFormat: '{series.name}: {point.y}'
        },
        plotOptions: {
            pie: {
                allowPointSelect: true,
                cursor: 'pointer',
                dataLabels: {
                    enabled: false
                },
                showInLegend: true
            }
        },
        series: chartSeries
    };
}

function castear_a_int(jsonArray) {
    for (var i = 0; i < jsonArray.length; i++) {
        jsonArray[i] = parseInt(jsonArray[i]);
    }
    return jsonArray;
}
