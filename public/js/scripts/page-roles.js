$(document).ready(function () {

    // variable declaration
    var usersTable;
    var rolesDataArray = [];
    // datatable initialization
    if ($("#roles-list-datatable").length > 0) {
        usersTable = $("#roles-list-datatable").DataTable({
            responsive: true,
            'columnDefs': [{
                "orderable": false,
                "targets": [0, 8, 9]
            }]
        });
    };
    // on click selected users data from table(page named page-users-list)
    // to store into local storage to get rendered on second page named page-users-view
    $(document).on("click", "#roles-list-datatable tr", function () {
        $(this).find("td").each(function () {
            rolesDataArray.push($(this).text().trim())
        })
        localStorage.setItem("usersId", rolesDataArray[1]);
         localStorage.setItem("usersDisplayName", rolesDataArray[2]);
        localStorage.setItem("Name", rolesDataArray[3]);
        localStorage.setItem("usersCount", rolesDataArray[4]);
        localStorage.setItem("createdAt", rolesDataArray[5]);
        localStorage.setItem("updatedAt", rolesDataArray[6]);

    })
    // render stored local storage data on page named page-users-view
    if (localStorage.usersId !== undefined) {
        $(".users-view-id").html(localStorage.getItem("usersId"));
        $(".users-view-username").html(localStorage.getItem("usersDisplayName"));
        $(".users-view-name").html(localStorage.getItem("Name"));
        $(".users-view-count").html(localStorage.getItem("usersCount"));
        $(".users-view-created-at").html(localStorage.getItem("createdAt"));
        $(".users-view-updated-at").html(localStorage.getItem("updatedAt"));
        $(".users-view-status").html(localStorage.getItem("usersStatus"));
        // update badge color on status change
        if ($(".users-view-status").text() === "Banned") {
            $(".users-view-status").toggleClass("badge-light-success badge-light-danger")
        }
        // update badge color on status change
        if ($(".users-view-status").text() === "Close") {
            $(".users-view-status").toggleClass("badge-light-success badge-light-warning")
        }
    }

    // users language select
    if ($("#users-language-select2").length > 0) {
        $("#users-language-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // users music select
    if ($("#users-music-select2").length > 0) {
        $("#users-music-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }
    // users movies select
    if ($("#users-movies-select2").length > 0) {
        $("#users-movies-select2").select2({
            dropdownAutoWidth: true,
            width: '100%'
        });
    }

    // Input, Select, Textarea validations except submit button validation initialization
    if ($(".users-edit").length > 0) {
        $("#accountForm, #infotabForm").validate({
            rules: {
                username: {
                    required: true,
                    minlength: 5
                },
                name: {
                    required: true
                },
                email: {
                    required: true
                },
                datepicker: {
                    required: true
                },
                address: {
                    required: true
                }
            },
            errorElement: 'div'
        });
        $("#infotabForm").validate({
            rules: {
                datepicker: {
                    required: true
                },
                address: {
                    required: true
                }
            },
            errorElement: 'div'
        });
    }
});
