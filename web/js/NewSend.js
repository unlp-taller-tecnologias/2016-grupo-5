$(function() {
  $('#productSelect').select2();
  $('input[name="responsable"]').keyup(function(){
    $('span.help-block').addClass('hidden');
    $('span.help-block').parent().removeClass('has-error');
  });
  $('#productSelect').change(function(){
    if ($('#product_'+$(this).val()).length == 0) {
      $('#listProduct').append('<tr id="product_'+$(this).val()+'"><td>'+$(this).val()+'</td><td>'+$('#productSelect option:selected').text()+'</td><td><input type="number" class="form-control productCant" oninvalid="setCustomValidity(\'La cantidad debe ser mayor a 0.\')" min="1" view=false name="producto['+$(this).val()+']" max="'+$('#productSelect option:selected').attr('stock')+'"value="0" stockMinimo="'+$('#productSelect option:selected').attr('stockmin')+'"/></td><td>'+$('#productSelect option:selected').attr('stock')+'</td><td class="table-operations"><span role="button" onclick="remove('+$(this).val()+',\''+$('#productSelect option:selected').text()+'\')" title="eliminar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></span></td></tr>');
      $('#productSelect option:selected').remove();
      if ($('#productosAdd option').length == 1){
        $('#productosAdd option').remove();
        $('#productosAdd').append('<option>No hay productos por agregar</option>');
      }
      $('.productCant').keyup(function(event){
        if(event.keyCode != 13) {
          var result = $(this).attr('max')-$(this).val();
          $('#productName').text($(this).parent().prev().text());
          if ( result <= $(this).attr('stockminimo') && result >= 0){
            $('#msj').removeClass('modal-danger');
            $('#msj').addClass('modal-warning');
            $('#textModal').html('El producto modificado va a quedar con el stock critico! <br /><br />');
            $('#msj').modal('show');
          }else if (result <= 0 ) {
            $('#msj').addClass('modal-danger');
            $('#msj').removeClass('modal-warning');
            $(this).val($(this).attr('max'));
            $('#textModal').html('Stock insuficiente para cumplir lo solicitado! <br /> el sistema ajustara a la cantidad maxima disponible, pero recuerde que este quedara sin stock<br /><br />' );
            $('#msj').modal('show');
          }
        }else{
        };
      });
    }else {
      $('#msj').removeClass('modal-danger');
      $('#msj').addClass('modal-warning');
      $('#productName').text('El producto seleccionado ya se encuentra en la lista');
      $('#textModal').html(' ' );
      $('#msj').modal('show');
      $('#product_'+$(this).val()).find('input').focus();
    }
  });
  $('#formSend').submit(function(event){
    if ($('#msj')[0].style.display == "block") {
      $('#msj').modal('hide');
      event.preventDefault();
    }else{
        if ($('input[name="responsable"]').val() != "") {
          return true;
        }else {
          $('input[name="responsable"]').attr('id', 'inputError');
          $('span.help-block').removeClass('hidden');
          $('span.help-block').parent().addClass('has-error');
          return false;
        }
    }
  });
});
