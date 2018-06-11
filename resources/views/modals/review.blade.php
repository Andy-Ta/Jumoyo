<div class="modal fade" id="review" role="dialog" >
    <div class="modal-dialog">
        <form method="post" action="#" id="reviewForm">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Review</h4>
                </div>
                <div id="reviewDiv" class="modal-body modelbodypad">
                    <input type="hidden" name="serviceId" id="serviceId" class="form-control">
                    <label>Description</label>
                    <div class="form-group"><textarea class="form-control" name="review" id="review"></textarea></div>
                    <label>Rating</label>
                    <div class="form-group">
                        <fieldset class="rating-modal" name="rating">
                            <input type="radio" id="star5" name="rating" value="5" /><label class = "full" for="star5" title="Awesome - 5 stars"></label>
                            <input type="radio" id="star4half" name="rating" value="4.5" /><label class="half" for="star4half" title="Pretty good - 4.5 stars"></label>
                            <input type="radio" id="star4" name="rating" value="4" /><label class = "full" for="star4" title="Pretty good - 4 stars"></label>
                            <input type="radio" id="star3half" name="rating" value="3.5" /><label class="half" for="star3half" title="Meh - 3.5 stars"></label>
                            <input type="radio" id="star3" name="rating" value="3" /><label class = "full" for="star3" title="Meh - 3 stars"></label>
                            <input type="radio" id="star2half" name="rating" value="2.5" /><label class="half" for="star2half" title="Kinda bad - 2.5 stars"></label>
                            <input type="radio" id="star2" name="rating" value="2" /><label class = "full" for="star2" title="Kinda bad - 2 stars"></label>
                            <input type="radio" id="star1half" name="rating" value="1.5" /><label class="half" for="star1half" title="Meh - 1.5 stars"></label>
                            <input type="radio" id="star1" name="rating" value="1" /><label class = "full" for="star1" title="Sucks big time - 1 star"></label>
                            <input type="radio" id="starhalf" name="rating" value="0.5" /><label class="half" for="starhalf" title="Sucks big time - 0.5 stars"></label>
                        </fieldset>
                    </div>
                </div>
                <div class="modal-footer">
                    <input id="reviewSubmit" style="width: auto;" type="submit" class="btn btn-primary" value="ADD">
                    <button type="button" style="width: auto;" class="btn btn-primary" data-dismiss="modal">Close</button>
                </div>
            </div>
        </form>
    </div>
</div>