$(function () {
    if($('#messageDiv').text().trim() !== "No message available.") {
        $("#message").modal();
    }

    if($(window).width() < 992) {
        $("video").removeAttr("autoplay");
    }
});