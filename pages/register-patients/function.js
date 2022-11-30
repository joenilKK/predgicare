$(document).ready(function () {
    function toasts(message, color) {
        Toastify({
            text: message,
            duration: 3000,
            newWindow: true,
            close: true,
            gravity: "top", // `top` or `bottom`
            position: "center", // `left`, `center` or `right`
            stopOnFocus: true, // Prevents dismissing of toast on hover
            style: {
                background: color,
            },
        }).showToast();
    }

    var newTable = $("#new-added-table").DataTable({
        dom: '<"top"fp>t<"bottom"lp><"clear">',
        language: { search: "", searchPlaceholder: "Search..." },
        processing: true,
        serverSide: true,

        order: [],
        ajax: {
            url: "pages/register-patients/server_processing.php",
            type: "POST",
        },
    });
    

    //regiser a user
    $(".regisert-form").on("submit", function (e) {
        e.preventDefault();
        var data = new Array();

        data.push($(".u_fname ").val());
        data.push($(".u_mname").val());
        data.push($(".u_lname").val());
        data.push($(".u_BOD").val());
        data.push($(".u_age").val());
        data.push($(".u_fsn").val());
        data.push($(".u_husband").val());
        data.push($(".u_number").val());
        data.push($(".u_area").val());

        $.ajax({
            url: "pages/register-patients/save.php",
            type: "POST",
            data: {
                type: "register",
                data: data,
            },
            success: function (response) {
                var r = JSON.parse(response);
                if (r.error) {
                    toasts(r.error, "red")
                }
                if (r.success) {
                    toasts(r.success, "#F14878")
                    $(".regisert-form input").val('')
                    newTable.ajax.reload()
                }
            },
        });
    });
});
