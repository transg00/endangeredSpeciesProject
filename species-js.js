$(document).ready(function(){

    $('#table-rest').DataTable({
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