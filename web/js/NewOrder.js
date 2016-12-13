$(function() {
      $('#productosAdd').select2();
      $('#appbundle_pedido_proveedor').change(function() {
        $.ajax({
          method: "POST",
          url: url,
          data: {id: $(this).val()}
        })
          .done(function( data ) {
            $('#productosAdd > option').remove();
            if (data.bien.length == 0) {
              $('#productosAdd').append('<option>No hay productos por agregar</option>');
            }else{
              $('#productosAdd').append('<option>Seleccione un producto</option>');
            }
            $.each(data.bien, function (index, product) {
              $('#productosAdd').append('<option value="'+product.id+'">'+product.nombre+'</option>');
            });
            $('#listProduct > tr').remove();
            $.each(data.criticos, function (index, product) {
              $('#listProduct').append('<tr id="product_'+product.id+'"><td>'+product.id+'</td><td>'+product.nombre+'</td><td><input type="number" class="form-control" min="1" name="producto['+product.id+']" value="'+(product.stockIdeal-product.stock)+'"/></td><td class="table-operations"><span role="button" onclick="remove('+product.id+',\''+product.nombre+'\')"  title="eliminar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></span></td></tr>');
            });
          });
       });

       $('#productosAdd').change(function(){
         $('#listProduct').append('<tr id="product_'+$(this).val()+'"><td>'+$(this).val()+'</td><td>'+$('#productosAdd option:selected').text()+'</td><td><input type="number" class="form-control" name="producto['+$(this).val()+']" value="0"/></td><td class="table-operations"><span role="button" onclick="remove('+$(this).val()+',\''+$('#productosAdd option:selected').text()+'\')" title="eliminar"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></span></td></tr>');
         $('#productosAdd option:selected').remove();
         if ($('#productosAdd option').length == 1){
           $('#productosAdd option').remove();
           $('#productosAdd').append('<option>No hay productos por agregar</option>');
         }
       });
});
