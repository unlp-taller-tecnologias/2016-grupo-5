$(function() {
     $('.dataTable').DataTable({
        "language": {
            "lengthMenu": "Mostrando _MENU_ registros por página",
            "zeroRecords": "Ningún registro encontrado",
            "info": "Mostrando página _PAGE_ de _PAGES_",
            "infoEmpty": "Ningún registro listado",
            "infoFiltered": "(filtered from _MAX_ total records)",
            "search": "Buscar:",
            "paginate": { "previous": "Anterior", "next": "Siguiente"}
        }
      });
      $('.dataTableTimestamp').DataTable({
         "language": {
             "lengthMenu": "Mostrando _MENU_ registros por página",
             "zeroRecords": "Ningún registro encontrado",
             "info": "Mostrando página _PAGE_ de _PAGES_",
             "infoEmpty": "Ningún registro listado",
             "infoFiltered": "(filtered from _MAX_ total records)",
             "search": "Buscar:",
             "paginate": { "previous": "Anterior", "next": "Siguiente"}
         },
         "aoColumnDefs": [
             { "bVisible": false, "aTargets": [ 0 ] }
         ],
         "aaSorting": [[0,'desc']]
       });
});
