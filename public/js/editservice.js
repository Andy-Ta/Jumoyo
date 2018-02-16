$(function() {
    $("#servicesEdit").click(function (e) {
        e.preventDefault();
        $(".showErr").hide();

        $(".formError").each(function () {
            $(this).toggleClass('formError', false);
        });

        var request = $.post('/business/myservices/edit/do', $('#serviceEditForm').serialize());

        request.done(function () {
            window.location = "/business/myservices";
        });

        request.fail(function (jqXHR) {
            var data = $.parseJSON(jqXHR.responseText);
            if (data.errors !== undefined) {
                var err = data.errors;

                $.each(err, function (key, value) {
                    var errMsg = '<div class=\"col-md-12 showErr\" style="text-align: center;">' + value + '</div>';

                    $("#displayErrors").append(errMsg);
                    $("#" + key).toggleClass('formError', true);
                });
            }
            else {
                var errMsg = '<div class=\"col-md-12 showErr\" style="text-align: center;">' + data.message + '</div>';
                $("#displayErrors").append(errMsg);
            }
        });
    });
});
/*
    $('#businessHoursButton').click(function(e) {
        e.preventDefault();

        var errors = false;
        var problematicDays = [];
        var goodDays = [];

        $('#businessHoursForm').find('input').each(function() {
            var day = $(this).attr("name");
            var businessHour = {
                day: day
            };

            if($(this).is(':checked')) {
                var time = $("#" + day + "StartTime").find(":selected").text().split(':');
                businessHour.startTime = parseTime(time);
                time = $("#" + day + "EndTime").find(":selected").text().split(':');
                businessHour.endTime = parseTime(time);
                if(businessHour.startTime >= businessHour.endTime) {
                    errors = true;
                }
            }

            if(errors) {
                $(problematicDays.push(day.charAt(0).toUpperCase() + day.slice(1)));
            }
            else {
                if(businessHour.startTime !== undefined && businessHour.endTime !== undefined)
                    goodDays.push(businessHour);
            }

            errors = false;
        });

        if(problematicDays.length !== 0) {
            var badDays = "";
            for(var i = 0; i < problematicDays.length; i++) {
                badDays = badDays + problematicDays[i];
                if(i+1 !== problematicDays.length)
                    badDays = badDays + ", "
            }
            $("#timeError").text("There is an invalid time for: " + badDays);
        }
        else {
            $('#servicesTime').modal('hide');
            $("#timeError").text("");
            $("#hoursInput").val(JSON.stringify(goodDays));
            displayTime(goodDays);
        }
    });
});

function displayTime(times) {

    $('.businessweek').text(times[0].day.charAt(0).toUpperCase() + times[0].day.slice(1));
    $('.businessweekleft').text(msToTime(times[0].startTime) + ' - ' + msToTime(times[0].endTime));

    var div = $('.businessc').parent();
    for(var i = 1; i < times.length; i++) {
        div.append('<div class="col-md-12 businessc">' +
            '           <div class="col-md-6 text-left businessweek">' +
            times[i].day.charAt(0).toUpperCase() + times[i].day.slice(1) +
            '           </div>' +
            '           <div class="col-md-6 text-right businessweekleft">' +
            msToTime(times[i].startTime) + ' - ' + msToTime(times[i].endTime) +
            '           </div>' +
            '       </div>')
    }
}

function parseTime(time) {
    var hour = parseInt(time[0]);
    if(hour === 12 && time[1].charAt(2) === 'a')
        hour = 0;
    else if(hour !== 12 && time[1].charAt(2) === 'p')
        hour = hour + 12;
    var minute = 0;
    if(time[1].charAt(0) === '3')
        minute = 30;
    return (new Date(1970, 1, 1, hour, minute, 0, 0)).getTime();
}

function msToTime(s) {
    var date = new Date(s);
    var hours = date.getHours();
    var minutes = date.getMinutes();
    var ampm = "am";

    if(hours === 0)
        hours = 12;
    else if(hours > 12) {
        if(hours !== 12)
            hours = hours - 12;
        ampm = "pm";
    }

    if(minutes === 0)
        minutes = "00";

    return hours + ":" + minutes + ampm;
}
*/