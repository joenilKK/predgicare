$(document).ready(function(){
    
    $('#patient-record-table').DataTable({
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
            url: "pages/patient-records/server_processing.php",
            type: "POST",
        },
    })
})