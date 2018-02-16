$(function () {
    if($('#messageDiv').text().trim() !== "No message available.") {
        $("#message").modal();
    }
});