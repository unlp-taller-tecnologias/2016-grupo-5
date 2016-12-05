$(function() {
  $(".chosen-select").chosen({no_results_text: "Oops, no hay resultados!"});
  $('#productSelect').change(function(){
    if ($('#product_'+$(this).val()).length == 0) {
      $('#listProduct').append('<tr id="product_'+$(this).val()+'"><td>'+$(this).val()+'</td><td>'+$('#productSelect option:selected').text()+'</td><td><input type="number" class="form-control productCant" view=false name="producto['+$(this).val()+']" max="'+$('#productSelect option:selected').attr('stock')+'"value="0" stockMinimo="'+$('#productSelect option:selected').attr('stockmin')+'"/></td><td>'+$('#productSelect option:selected').attr('stock')+'</td><td class="table-operations"><span role="button" onclick="remove('+$(this).val()+',\''+$('#productSelect option:selected').text()+'\')" title="eliminar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></span></td></tr>');
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
            $('#textModal').html('El producto modificado intenta entregar mas productos de los disponibles en stock! <br /> el sistema redujo a la cantidad maxima disponible en stock, pero recuerde que este producto va a quedar con stock critico<br /><br />' );
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
      console.log('no entro al else');
    }else{
        if ($('input[name="responsable"]').val() != "") {
          return true;
        }else {
          return false;
        }
    }
  });
      // $('#appbundle_pedido_proveedor').change(function() {
      //   $.ajax({
      //     method: "POST",
      //     url: url,
      //     data: {id: $(this).val()}
      //   })
      //     .done(function( data ) {
      //       $('#productosAdd > option').remove();
      //       if (data.bien.length == 0) {
      //         $('#productosAdd').append('<option>No hay productos por agregar</option>');
      //       }else{
      //         $('#productosAdd').append('<option>Seleccione un producto</option>');
      //       }
      //       $.each(data.bien, function (index, product) {
      //         $('#productosAdd').append('<option value="'+product.id+'">'+product.nombre+'</option>');
      //       });
      //       $('#listProduct > tr').remove();
      //       $.each(data.criticos, function (index, product) {
      //         $('#listProduct').append('<tr id="product_'+product.id+'"><td>'+product.id+'</td><td>'+product.nombre+'</td><td><input type="number" class="form-control" name="producto['+product.id+']" value="'+(product.stockIdeal-product.stock)+'"/></td><td class="table-operations"><span role="button" onclick="remove('+product.id+',\''+product.nombre+'\')"  title="eliminar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></span></td></tr>');
      //       });
      //     });
      //  });
      //
});
