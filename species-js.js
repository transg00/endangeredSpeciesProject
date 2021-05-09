$(document).ready(function(){


    $('#table-rest').DataTable({
         "dom": 'Blfrtip',
         "autoWidth": false,
         "processing":true,
         "serverSide":true,
         "pageLength":15,
         "lengthMenu":[[15, 25, 50, 100, -1], [15, 25, 50, 100, "All"]],
         "processing": true,
         "language": {processing: '<i class="fa fa-spinner fa-spin fa-2x fa-fw"></i>'},
         "order":[],
         "ajax":{
             url:"species.php",
             type:"POST",
             data:{
                     action:'listSpecies'
                 },
             dataType:"json"
         },
         "columnDefs":[ {"targets":[0], "visible":true} ],

     });
 

 });
 
