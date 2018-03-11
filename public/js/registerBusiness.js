$(function() {
    $("#businessRegisterButton").click(function (e) {
        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var request = $.post('/business/register', $('#businessRegisterForm').serialize());

        request.done(function(jqXHR) {
            if(jqXHR !== "STRIPE")
                window.location = "/business/services";
            else
                window.location = "https://connect.stripe.com/oauth/authorize?response_type=code&client_id=ca_CS2bEBfcZagN5M8d0U6sJlGZOVhKeOyN&scope=read_write";
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