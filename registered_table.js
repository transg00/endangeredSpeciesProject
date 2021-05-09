$(document).ready(function(){

    $('#table-rest').DataTable({
        "dom": 'Blfrtip',
        "ordering":false,
        "bLengthChange": false,
        "searching": false,
        "paging": false,
        "ajax":{
            url:"Animals_registered.php",
            type:"POST",
            data:{
                    action:'listAnimals'
                 },
            dataType:"json"
        }
    });

});