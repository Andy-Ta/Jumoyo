$(document).ready(function () {

    $("form").submit(function (e) {
        e.preventDefault();

        var url = "";

        if ($(this).attr("id") === "addContactForm") {
            url = "/addContact";
        } else if ($(this).attr("id") === "editContactForm") {
            url = "/editContact";
        }

        $(".showErr").hide();

        $(".formError").each(function () {
            $(this).toggleClass('formError', false);
        });

        var formData = new FormData(this);

        $.ajax({
            url: url,
            type: 'POST',
            data: formData,
            success: function () {
                window.location = '/business/contact';
            },
            error: function (jqXHR) {
                var data = $.parseJSON(jqXHR.responseText);
                var err = data.errors;

                $.each(err, function (key, value) {
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

    $(".editContactBtn").click(function() {
        var id = $(this).attr("data-id");
        var name = $(this).attr("data-name");
        var phone = $(this).attr("data-phone");
        var email = $(this).attr("data-email");
        var address = $(this).attr("data-address");

        $("#contactID").val(id);
        $("#edit_name").val(name);
        $("#edit_phone").val(phone);
        $("#edit_email").val(email);
        $("#edit_address").val(address);
    });

    $("#deleteContactBtn").click(function(){
        var id = $(this).attr("data-id");
        $("#removeContact").attr("href", "/removeContact/"+id);
    });
});