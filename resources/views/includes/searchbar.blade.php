<div class="container-fluid bg-no-overlayreview" style="margin-left: 5%; margin-right: 5%;">
    <div class="container">
        <div class="row text-center">
            <form action="/search">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="icon-addon addon-sm icon-addon-brd">
                            <input type="text" placeholder="What service are you looking for?" class="form-control searchaddon" id="name" name="name">
                            <label for="name" class="glyphicon glyphicon-search" rel="tooltip" title="name" style="color: white;"></label>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="icon-addon addon-sm icon-addon-brd">
                            <input type="text" placeholder="City" class="form-control searchaddon" id="city" name="city">
                            <label for="city" class="glyphicon" rel="tooltip" title="city"></label>
                            <i class="fa fa-location-arrow" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="input-group">
                        <input type="submit" class="btn btn-default" />
                    </div>
                </div>
                <div class="col-md-3"></div>
            </form>
        </div>
        <div class="page-details">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span> Jumoyo </span>/
            <span> {{ $page }} </span>
        </div>
    </div>
</div>