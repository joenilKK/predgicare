$(document).ready(function(){
    $('#patient-archived-table').DataTable({
        dom: '<"top"fp>t<"bottom"lp><"clear">',
        language: { 
            search: '', 
            searchPlaceholder: "Search..." ,
            processing: 'Loading...'
        },
        processing: true,
        serverSide: true,
        order: [],
        ajax: {
            url: "pages/archive/server_processing.php",
            type: "POST",
        },
    })

    $('#patient-archived-table').on('draw.dt', function(){
        $('#patient-archived-table').Tabledit({
        
            url:'pages/archive/actions.php',
            dataType:'json',
            columns:{
                identifier : [0, 'uid'],
                editable:[[1, 'uFirstName'], [2, 'uContact'], [3, 'uStatus']]
            },
            restoreButton:false,
            onSuccess:function(data, textStatus, jqXHR){
                if(data.action == 'delete'){
                    $('#' + data.id).remove();
                    $('#patient-archived-table').DataTable().ajax.reload();
                }
            }
        });
    });
})