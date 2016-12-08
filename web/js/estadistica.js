
$(function() {
    $("#fecha_inicio").datepicker({
        maxDate: new Date(),
        dateFormat: 'dd/mm/yy',
        constrainInput: true,
        altField: "#fecha_inicio",
        altFormat: 'yy-mm-dd'
    });
    $("#fecha_fin").datepicker({
        maxDate: new Date(),
        dateFormat: 'dd/mm/yy',
        constrainInput: true,
        altField: "#fecha_fin",
        altFormat: 'yy-mm-dd'
    });
});

$('#botonMostrar').on('click',function(){
    var fechainicio = $("#fecha_inicio").val();
    var fechafin = $("#fecha_fin").val();
    var producto_id = $("#productos").val();

    $.ajax({
        type: 'GET',
        url: 'estadisticasproducto',
        data: {fecha_inicio: fechainicio, fecha_fin: fechafin, producto_id: producto_id},
        
        success: function(datos){
              graficar(datos);
        }
    }); 
});