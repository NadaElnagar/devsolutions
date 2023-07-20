// Delete item.
var delete_route;
var item_id;

$(document).on("click", ".delete-button", function () {
    delete_route = $(this).data("url");
    item_id = $(this).data("item-id");
});

$(document).on("click", "#delete-button", function () {

    $.ajax({
        url: delete_route,
        type: "POST",
        data: {
            _method: "DELETE",
            _token: $('meta[name="csrf-token"]').attr("content"),
        },
        success: function (response) {
            $(`#row-${item_id}`).remove();
              toastr.success(response.message);
        },
        error(data) {
            $("#delete_modal").modal("toggle");
            toastr.error(data.responseJSON.message);
        },
    });
});
