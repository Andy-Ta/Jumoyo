// This JS is responsible to display the data of the services

$(function() {
    /*
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


    $(".editBtn").click(function() {
        var id = $(this).attr("data-id");
        var serviceId = $(this).attr("data-serviceId");
        var title = $(this).attr("data-title");
        var text = $(this).attr("data-text");

        $("#postId").val(id);
        $("#editSelect").val(serviceId);
        $("#editTitle").val(title);
        $("#editText").val(text);
    });

    $("#editPost").click(function (e) {
        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var request = $.post('post/update', $('#editServiceForm').serialize());

        request.done(function() {
            window.location = '/business/post';
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
    */
});
