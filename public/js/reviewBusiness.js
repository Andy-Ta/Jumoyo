$(function() {
    $(".pickService").click(function () {
        var id = $(this).attr("data-id");

        $.ajax
        ({
            type: "POST",
            url: '/business/review_rating',
            contentType: 'application/json',
            data: JSON.stringify({ "id": id }),
            success: function(response) {
                var data = JSON.parse(response);
                $(".tab-content").empty();

                for(i=0; i<data.length;i++) {

                    var stars = '';
                    var image = '';

                    for(j=1; j<=parseFloat(data[i].stars);j++){
                        var stars = stars + '<i class=\"fa fa-star\" aria-hidden=\"true\"></i>';
                    }

                    if(parseFloat(data[i].stars) % 1 != 0) {
                        var stars = stars + '<i class=\"fa fa-star-half\" aria-hidden=\"true\"></i>';
                    }

                    if(data[i].image !== null){
                        image = data[i].image;
                    }else{
                        image = '/img/review-icon.png';
                    }

                    var review = '<div class=\"tab-pane active fade in\" id=\"'+ data[i].service_id +'\">' +
                        '<div class=\"box boxcontent\"><div class=\"box-content\"><div class=\"col-sm-1 text-center removepad\">' +
                        '<img src=\"/' + image + '\" class=\"img-rounded\"></div><div class=\"col-sm-10 respanel\">' +
                        '<div class=\"review-block-title\"><b class=\"fontstyle\">' + data[i].first_name + '</b></div>' +
                        '<span class=\"stars\">' + stars + '</span>' +
                        '<div class=\"review-block-description\">' + data[i].text + '</div>' +
                        '<div class=\"review-block-description review-block-description-clr fontstyle\">' + data[i].date_time + '</div>' +
                        '</div></div><div class="clearfix"></div></div></div>';

                    $(".tab-content").append(review);
                }
                return response;
            }
        });
    });

    $("*[data-moment-format]").each(function (id, item) {
        var d;
        if ($(item).is('[data-comment-time]')) {
            d = $(item).attr('data-comment-time');
        }
        momentdate = moment.utc(d);
        momentdate.local();
        $(item).text(momentdate.format($(item).attr('data-moment-format')));
    });

    $(".selectbox").change(function() {
        if (this.selectedIndex!==0) {
            $(".service").hide();

            var imageId = $(this).find(":selected").data("id");
            console.log(imageId);
            $(".service[data-id="+imageId+"]").show();
        }
        else {
            $(".service").show();
        }
    });
});
