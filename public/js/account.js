$(function(){
    $("*[data-moment-format]").each(function (id, item) {
        var d;
        var h;
        if ($(item).is('[data-moment-date]')) {
            d = parseInt($(item).attr('data-moment-date'));
        } else if ($(item).is('[data-moment-hour]')) {
            h = parseInt($(item).attr('data-moment-hour'));
        }
        $(item).text(transformBookingTime(d,h,$(item).attr('data-moment-format')));
    });


    $("#editAccInfoBtn").click(function(e) {

        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var request = $.post('/editAccInfo', $('#editAccInfoForm').serialize());

        request.done(function() {
            alert("Changes were successful.");
            window.location = 'account#d';
        });

        request.fail(function(jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.errors;

            if(err == null){

                var errMsg = '<div class=\"col-md-12 showErr\">' + "Nothing has been changed." + '</div>';

                $("#displayAccInfoErrors").append(errMsg);
            }

            $.each(err, function(key, value) {
                var errMsg = '<div class=\"col-md-12 showErr\">' + value + '</div>';

                $("#displayAccInfoErrors").append(errMsg);
                $("#" + key).toggleClass('formError', true);
            });
        });

    });

    $("#changePswBtn").click(function(e) {

        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        var request = $.post('/changePassword', $('#changePswForm').serialize());

        request.done(function() {
            alert("Success");
            //window.location.replace('/');
            $('#changePswModal').modal('hide');
        });

        request.fail(function(jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            var err = data.errors;

            if(err == null){

                var errMsg = '<div class=\"col-md-12 showErr\">' + "Invalid current password." + '</div>';

                $("#errors").append(errMsg);
            }

            $.each(err, function(key, value) {
                var errMsg = '<div class=\"col-md-12 showErr\">' + value + '</div>';

                $("#errors").append(errMsg);
                $("#" + key).toggleClass('formError', true);
            });
        });

    });

    $("form#changeAccImgForm").submit(function(e) {

        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function() {
            $(this).toggleClass('formError', false);
        });

        //var files = e.target.files;

        var data = new FormData(this);
        //$.each(files, function(key, value)
        //{
        //    data.append(key, value);
        //});

        $.ajax({
            url: "/changeAccImg",
            type: 'POST',
            data: data,
            dataType: 'json',
            processData: false,
            contentType: false,
            cache: false,

            success: function () {
                window.location = '/account#d';
            },
            error: function (jqXHR) {
                var data = jqXHR.responseText;
                var err = data.errors;

                if(data == "Success."){
                    $("#changeAccImgModal").modal('hide');
                    window.location.reload();
                    //window.location.replace('/account#d');
                    //window.location = '/account#d';
                }

                $.each(err, function (key, value) {
                    var errMsg = '<div class=\"col-md-12 showErr\">' + value + '</div>';

                    $("#changeImgError").append(errMsg);
                    $("#" + key).toggleClass('formError', true);
                });
            },
        });

    });
    $(function() {
        $(".details").click(function() {
            var id = $(this).attr("data-bookingId");
            var name = $(this).attr("data-businessName");
            var address = $(this).attr("data-address");
            var phone = $(this).attr("data-phone");
            var confirmation = $(this).attr("data-confirmation");
            var serviceName = $(this).attr("data-serviceName");
            var start = $(this).attr("data-start");
            var end = $(this).attr("data-end");
            var date = $(this).attr("data-date");
            var image = $(this).attr("data-image");
            if(!image)
                image = 'img/services/default.png';

            phone = phone.replace(/(\d{1})(\d{3})(\d{3})(\d{4})/, "$1($2)-$3-$4");

            if(confirmation != 0) {
                confirmation = "Confirmed";
            }
            else {
                confirmation = "Unconfirmed";
            }

            $("#bookingId").text("Booking ID: " + id);
            $("#businessName").text(name);
            $("#addresslist").text(address);
            $("#phoneNumber").text("Phone Number: " + phone);
            $("#confButton").text(confirmation);
            $("#bookingDay").text("Date: " + transformBookingTime(parseInt(date),null,"YYYY-MM-DD"));
            $("#serviceName").text(serviceName);
            $("#time").text(transformBookingTime(null, parseInt(start),"H:mm") + " - " + transformBookingTime(null, parseInt(end), "H:mm"));
            $(".imgresponsive2").attr("src", image);
        });
    });
});

// If date is optional, set it to undefined or null
// If hour is optional, set it to undefined or null
// If both are null, it will return the current date and time
// Values in int
function transformBookingTime(date, hour, format) {
    datemoment = date? moment(date) : moment();
    hourtime = hour? moment(hour) : moment();
    datemoment.hours(hourtime.hours());
    datemoment.minutes(hourtime.minutes());
    datemoment.local();
    return datemoment.format(format);
}