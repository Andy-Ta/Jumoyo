$(document).ready(function () {
    display(data);

    $('.sorter').click(function(){
        var type = $(this).attr('id');
        var sortedData = data;
        var order = false;

        $('.sorter').find('a').find('span').html('');

        if($(this).find('a').attr('order') === 'v') {
            $(this).find('a').find('span').html('↑');
            $(this).find('a').attr('order', '^');
            order = false;
        }
        else {
            $(this).find('a').find('span').html('↓');
            $(this).find('a').attr('order', 'v');
            order = true;
        }

        sortedData = insertionSort(sortedData, type, order);

        $('.sorter').removeClass('active');
        $("#"+type).addClass('active');

        display(sortedData);
    });
});

function display(data) {
    if(data.length === 0) {
        $('#serviceContainer').append('<div style="text-align: center; margin-top:5%;">No services were found.</div>');
        return;
    }

    $('#serviceContainer').empty();
    var template = [];

    // Sometimes I hate Asynchronous Callbacks
    for(var i = 0; i < data.length; i++) {
        template.push($('<div class="col-md-12 row filterbar tab1 template">'));
    }

    $.each(data, function(key, value){
        template[key].load('templates/service.html', function() {
            $(template[key]).find('.personname').text(value.business_name);
            $(template[key]).find('.personname').attr('href', '/service/' + value.service_id);
            $(template[key]).find('.imglink').attr('href', '/service/' + value.service_id);
            $(template[key]).find('.bookbtn').attr('data', value.service_id);
            $(template[key]).find('.addresslist').text(value.category + " | " + value.address + ", " + value.city + ", " + value.state);
            $(template[key]).find('.phone').text(value.mobile);
            $(template[key]).find('.email').text(value.email);
            $(template[key]).find('.des p').text(value.description);
            var stars = parseFloat(value.stars);
            if(!stars)
                $(template[key]).find('.stars').html('' +
                    '<i class="fa fa-star-o" aria-hidden="true"></i>' +
                    '<i class="fa fa-star-o" aria-hidden="true"></i>' +
                    '<i class="fa fa-star-o" aria-hidden="true"></i>' +
                    '<i class="fa fa-star-o" aria-hidden="true"></i>' +
                    '<i class="fa fa-star-o" aria-hidden="true"></i>');
            else {
                for(var i = 0; i < stars; i++)
                    $(template[key]).find('.stars').append('<i class="fa fa-star" aria-hidden="true"></i>');
                if(stars % 1 !== 0)
                    $(template[key]).find('.stars').append('<i class="fa fa-star-half" aria-hidden="true"></i>');
            }
            $(template[key]).find('.stars').append('<span>(' + value.reviews + ')</span>');

            if(!value.image_url)
                value.image_url = '/img/services/default.png';
            $(template[key]).find('.image-url').attr("src", value.image_url);

            var price = value.price;
            var priceHourly = value.price_hourly;

            if(price !== 0 || price !== null)
                price = ' | ' + price + '$';
            else
                price = '';

            if(priceHourly !== 0 || priceHourly !== null)
                priceHourly = ' | ' + priceHourly + '$/hour';
            else
                priceHourly = '';

            $(template[key]).find('.service').text(value.services_name + ' ' + price + ' ' + priceHourly);

            setTimeout(function(){$('#serviceContainer').append(template[key]);}, 300);
        });
    });
}

function insertionSort(unsortedList, type, order) {
    for(var x = 0; x < unsortedList.length; x++) {
        unsortedList[x][type] = parseInt(unsortedList[x][type]);
        if(isNaN(unsortedList[x][type]))
            unsortedList[x][type] = 0;
    }

    var len = unsortedList.length;
    for (var i = 1; i < len; i++) {
        var tmp = unsortedList[i]; //Copy of the current element.
        var test = false;
        if(order)
            test = unsortedList[i - 1][type] < tmp[type];
        else
            test = unsortedList[i - 1][type] > tmp[type];
        /*Check through the sorted part and compare with the number in tmp. If large, shift the number*/
        for (var j = i - 1; j >= 0 && (test); j--) {
            test = unsortedList[j][type] < tmp[type];
            //Shift the number
            unsortedList[j + 1] = unsortedList[j];
        }
        //Insert the copied number at the correct position
        //in sorted part.
        unsortedList[j + 1] = tmp;
    }

    return unsortedList;
}