$(".mychk").each(function () {
    $(this).removeAttr("checked");
});

$(".selector").flatpickr({
    inline: true,
    disable: ["2017-09-07", "2017-09-15", "2017-09-25", new Date(2017, 8, 10)]
});

$(document).ready(function () {

    $('#confirmbooking').on('click', function(e) {
        if ($(this).hasClass("disabled")) return;
        $.ajax({
            url: "/business/booking/" + $(this).attr('data-booking-id'),
            type: "PATCH",
            async: false,
            error: function(jqXHR) {
                e.preventDefault();
            }
        });
        $('#calendar').fullCalendar('refetchEvents');
    })
    $('#deletebooking').on('click', function(e) {
        if ($(this).hasClass("disabled")) return;
        $.ajax({
            url: "/business/booking/" + $(this).attr('data-booking-id'),
            type: "DELETE",
            async: false,
            error: function(jqXHR) {
                e.preventDefault();
            }
        });
        $('#calendar').fullCalendar('refetchEvents');
    })

    var d = new Date();

    var month = d.getMonth() + 1;
    var day = d.getDate();

    var output = d.getFullYear() + '/' +
        (month < 10 ? '0' : '') + month + '/' +
        (day < 10 ? '0' : '') + day;
    $('#calendar').fullCalendar({
        header: {
            left: 'prev,next today',
            center: 'title',
            right: 'agendaWeek,agendaDay'
        },
        //right: 'month,agendaWeek,agendaDay,listMonth'
        defaultView: 'agendaDay',
        defaultDate: output,
        navLinks: true, // can click day/week names to navigate views
        //businessHours: true, // display business hours
        editable: true,
        timezone: 'local',
        eventClick: function (calEvent, jsEvent, view) {
            $('#fullcalpopup').modal('show');
            $("#title").html(calEvent.title);
            $("#sname").html(calEvent.servicename);
            $("#stime").html(calEvent.start._i);
            $("#etime").html(calEvent.end._i);
            $("#notes").html(calEvent.notes);
            $("#statustext").html(calEvent.statusText);
            if (calEvent.status) {
                $("#confirmbooking").addClass("disabled");
            } else {
                $("#confirmbooking").removeClass("disabled");
            }
            $("#confirmbooking").attr('data-booking-id', calEvent.bookingid)
            $("#deletebooking").attr('data-booking-id', calEvent.bookingid)
        },
        events: function(start, end, timezone, callback) {
            $.ajax({
                url: '/business/bookings/feed',
                contentType: 'application/json',
                dataType: 'json',
                data: {
                    start: start.unix(),
                    end: end.unix()
                },
                success: function(doc) {
                    var events = [];
                    $(doc).each(function() {
                        date = new Date($(this).attr('date'));
                        startTime = new Date(($(this).attr('start')-2678400000)); 
                        endTime = new Date(($(this).attr('end')-2678400000));
                        current = (new Date()).getTimezoneOffset() * 60 * 1000;
                        events.push({
                            title: $(this).attr('first_name') + " " + $(this).attr('last_name'),
                            start: (new Date(date.getTime()+startTime.getTime()-current)).toLocaleString(), // will be parsed
                            end: (new Date(date.getTime()+endTime.getTime()-current)).toLocaleString(), // will be parsed
                            servicename: $(this).attr('service_name'),
                            editable: false,
                            status: !!+$(this).attr('confirmed'),
                            statusText: (!!+$(this).attr('confirmed') ? "Confirmed" : "Not confirmed"),
                            notes: ($(this).attr('notes') ? $(this).attr('notes') : "-"),
                            color: (!!+$(this).attr('confirmed') ? "green" : "blue"),
                            bookingid: $(this).attr('id')
                        });
                    });
                    callback(events);
                }
            });
        }
    });
});

$(document).ready(function () {

    $('.flatpickr-input').prop('type', 'hidden');
    $(".flatpickr-input").change(function () {
        var dateselect = $('.flatpickr-input').val();
        $('#calendar').fullCalendar('gotoDate', dateselect + 'T06:00:00');
    });
    $('#example-getting-started').multiselect();
});

$(document).ready(function () {
    var date_input = $('input[name="date"]'); //our date input has the name "date"
    var container = $('.bootstrap-iso form').length > 0 ? $('.bootstrap-iso form').parent() : "body";
    var options = {
        format: 'mm/dd/yyyy',
        container: container,
        inline: true,
        todayHighlight: true,
        autoclose: true,
    };
    date_input.datepicker(options);
});

$('.clockpicker').clockpicker();