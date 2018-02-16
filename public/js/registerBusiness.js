$(function() {
    $("#businessRegisterButton").click(function (e) {
        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var request = $.post('/business/register', $('#businessRegisterForm').serialize());

        request.done(function() {
            window.location = "/business/services";
        });

        request.fail(function(jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            if(data.errors !== undefined) {
                var err = data.errors;

                $.each(err, function (key, value) {
                    var errMsg = '<div class=\"col-md-12 showErr\">' + value + '</div>';

                    $("#displayErrors").append(errMsg);
                    $("#" + key).toggleClass('formError', true);
                });
            }
            else {
                var errMsg = '<div class=\"col-md-12 showErr\">' + data.message + '</div>';
                $("#displayErrors").append(errMsg);
            }
        });
    });
});