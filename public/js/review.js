$(function() {
    $("#reviewBtn").click(function() {
        var serviceId = $(this).attr("data-serviceId");

        $("#review").modal();

        $("#serviceId").val(serviceId);
    });

    $("form#reviewForm").on('submit', function (e) {
        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var formData = new FormData(this);

        $.ajax({
            url: '/{id}',
            type: 'POST',
            data: formData,
            success: function () {
                location.reload();
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
