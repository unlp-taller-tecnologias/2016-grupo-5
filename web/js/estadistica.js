
$(function() {
    $('#productos').select2();
    $("#fecha_inicio").datepicker({
        maxDate: new Date(),
        dateFormat: 'dd/mm/yy',
        constrainInput: true,
        altField: "#fecha_inicio_o",
        altFormat: 'yy-mm-dd'
    });
    $("#fecha_fin").datepicker({
        maxDate: new Date(),
        dateFormat: 'dd/mm/yy',
        constrainInput: true,
        altField: "#fecha_fin_o",
        altFormat: 'yy-mm-dd'
    });
});

$('#botonMostrar').on('click',function(){
    var fechainicio = $("#fecha_inicio_o").val();
    var fechafin = $("#fecha_fin_o").val();
    var producto_id = $("#productos").val();

    $.ajax({
        type: 'GET',
        url: 'estadisticasproducto',
        data: {fecha_inicio: fechainicio, fecha_fin: fechafin, producto_id: producto_id},

        success: function(datos){
              graficar(datos);
        },
        error: function(){
            var msg = 'La fecha inicial es posterior a la fecha final'
            $('#msj').addClass('modal-danger');
            $('#textModal').html(msg);
            $('#msj').modal('show');
        }

    });
});
