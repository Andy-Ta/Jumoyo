$(function() {
    $("#registerButton").click(function (e) {
        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var request = $.post('/register', $('#registerForm').serialize());

        request.done(function(response) {
            $("#messageDiv").text(response);
            $("#message").modal();

        });

        request.fail(function(jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.errors;

            $.each(err, function(key, value) {
                var errMsg = '<div class=\"col-md-12 showErr\">' + value + '</div>';

                $("#displayErrors").append(errMsg);
                $("#" + key).toggleClass('formError', true);
            });
        });
    });
});
