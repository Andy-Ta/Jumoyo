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

    $("#businessEditButton").click(function (e) {
        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var request = $.post('/business/businessinfo/update', $('#businessEditForm').serialize());

        request.done(function() {
            window.location = "/business/businessinfo";
        });

        request.fail(function(jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            if(data.errors !== undefined) {
                var err = data.errors;

                $.each(err, function (key, value) {
                    var errMsg = '<div class=\"col-md-12 showErr\">' + value + '</div>';
                    //dd(errMsg);
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