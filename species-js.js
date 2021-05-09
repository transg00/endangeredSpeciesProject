$(document).ready(function(){

    $('#table-employee').DataTable({
        "dom": 'Blfrtip',
        "ordering":false,
        "bLengthChange": false,
        "searching": false,
        "paging": false,
        "ajax":{
            url:"species.php",
            type:"POST",
            data:{
                    action:'listSpecies'
                 },
            dataType:"json"
        }
    });

});