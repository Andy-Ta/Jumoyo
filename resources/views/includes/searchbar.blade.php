<div class="bg-no-overlayreview">
    <div class="container">
        <div class="row text-center">
            <form action="/search">
                <div class="col-md-3"></div>
                <div class="col-md-3">
                    <div class="form-group">
                        <div class="icon-addon addon-sm icon-addon-brd">
                            <input type="text" placeholder="Search" class="form-control searchaddon" id="name" name="name">
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
                        <input type="submit" value="Search" class="search-btn" />
                    </div>
                </div>
                <div class="col-md-3"></div>
            </form>
        </div>
        <div class="page-details">
            <i class="fa fa-home" aria-hidden="true"></i>
            <span> Jumoyo </span>/
            <span> <?php echo e($page); ?> </span>
        </div>
    </div>
</div>