$(function(){
    $("#signUpNow").click(function () {
        $('#loginModal').modal('toggle');
    });

    $("#loginButton").click(function (e) {
        e.preventDefault();
        $(".showErr").hide();

        var request = $.post('/login', $('#loginForm').serialize());

        request.done(function () {
            window.location = '/';
        });

        request.fail(function (jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.message;

            var errMsg = '<div class=\"col-md-12 showErr\">' + err + '</div>';

            $("#loginError").empty().append(errMsg);
        });
    });
});