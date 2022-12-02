$(document).ready(function(){
    const ctx = $('.reporting');
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'March', 'April', 'May', 'June','July','Aug','Sept','Oct','Nov','Dec'],
            datasets: [
                {
                    label: 'Area 1',
                    data: [32, 109, 3, 5, 72, 23, 52, 28, 12,12, 19, 3],
                    backgroundColor: '#F14878',
                },
                {
                    label: 'Area 2',
                    data: [52, 190, 39, 95, 22, 53, 35, 22, 83,95, 22, 53],
                    backgroundColor: '#00AFB6',
                },
                {
                    label: 'Area 3',
                    data: [128, 91, 93, 59, 28, 43, 5, 25, 73,19, 93, 59],
                    backgroundColor: '#BD00B6',
                },
            ]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    //datatable midwife init
    $('#activity-log').DataTable({
        dom: '<"top"f>t<"bottom"p><"clear">',
        language: { 
            search: '', 
            searchPlaceholder: "Search..." ,
            processing: 'Loading...'
        },
        processing: true,
        serverSide: true,
        order: [],
        ajax: {
            url: "pages/home/server_processing.php",
            type: "POST",
        },
    })

    //datatable admin latest report
    $('#latest-report').DataTable({
        dom: '<"top"f>t<"bottom"p><"clear">',
        language: { 
            search: '', 
            searchPlaceholder: "Search..." ,
            processing: 'Loading...'
        },
        processing: true,
        serverSide: true,
        order: [],
        ajax: {
            url: "pages/home/admin/server_processing.php",
            type: "POST",
        },
    })

    //datatable admin recent user
    $('#recent-user').DataTable({
        dom: '<"top"f>t<"bottom"p><"clear">',
        language: { 
            search: '', 
            searchPlaceholder: "Search..." ,
            processing: 'Loading...'
        },
        processing: true,
        serverSide: true,
        order: [],
        ajax: {
            url: "pages/home/admin/server_processing.php",
            type: "POST",
            
        },
    })
    
})