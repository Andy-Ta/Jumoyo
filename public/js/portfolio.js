$(function() {
    $(':input[type=file]').change( function() {
        $(':input[name=link]').attr('disabled', true).attr('placeholder', 'Cannot upload a youtube video with an image.');
    });

    $(':input[name=link]').change( function() {
        $(':input[type=file]').attr('disabled', true);
    });

    $("form#addPortfolioForm").submit(function(e) {
        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var formData = new FormData(this);
        $.ajax({
            url: '/business/portfolio/add',
            type: 'POST',
            data: formData,
            success: function () {
               window.location = '/business/portfolio';
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
});