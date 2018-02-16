$(function() {

    $("form#postForm").submit(function(e) {
        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var formData = new FormData(this);

        $.ajax({
            url: 'post',
            type: 'POST',
            data: formData,
            success: function () {
                window.location = 'post';
            },
            error: function(jqXHR) {
                var data = $.parseJSON(jqXHR.responseText);
                var err = data.errors;

                $.each(err, function(key, value) {
                    var errMsg = '<div class=\"col-md-12 showErr\">' + value + '</div>';

                    $("#displayErrors").append(errMsg);
                    $("#" + key).toggleClass('formError', true);
                });
            },
            cache: false,
            contentType: false,
            processData: false
        });
    });


    $(".businessEditButton").click(function() {
        //var id = $(this).attr("data-id");
        //var client = $(this).attr("data-serviceId");
        var name = $(this).attr("data-name");
        var email = $(this).attr("data-email");
        var mobile = $(this).attr("data-mobile");
        var address = $(this).attr("data-address");
        var city = $(this).attr("data-city");
        var postal_code = $(this).attr("data-postal_code");
        var state = $(this).attr("data-state");
        var country = $(this).attr("data-country");
        var facebook = $(this).attr("data-facebook");
        var twitter = $(this).attr("data-twitter");
        var instagram = $(this).attr("data-instagram");

        $("#name").val(name);
        $("#email").val(email);
        $("#mobile").val(mobile);
        $("#address").val(address);
        $("#city").val(city);
        $("#postal_code").val(postal_code);
        $("#state").val(state);
        $("#country").val(country);
        $("#facebook").val(facebook);
        $("#twitter").val(twitter);
        $("#instagram").val(instagram);
    });

    $("#businessEditButton").click(function (e) {
        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var request = $.post('business/businessinfo/update', $('#businessEditForm').serialize());

        request.done(function() {
            window.location = '/business';
        });

        request.fail(function(jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.errors;

            $.each(err, function(key, value) {
                var errMsg = '<div class=\"col-md-12 showErr\">' + value + '</div>';

                $("#displayError").append(errMsg);
                $("#" + key).toggleClass('formError', true);
            });
        });
    });
});
