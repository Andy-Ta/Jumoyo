<div class="modal fade" id="view-post" role="dialog">
    <div class="modal-dialog modalwidth">
        <!-- Modal content-->
        <div class="modal-content modalwidth">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Viewing a post</h4>
            </div>

            <div class="widget bg-white overflow-hidden post">
                <span class="widget-title" id="postTitle"></span>
                <p id="serviceName"></p>
                <p id="postText">
                </p>

                <div class="post-icons">
                    <a href="javascript:void(0)" data-post-id="0" data-type="like" data-likes="0">
                        <i class="fa fa-thumbs-o-up"></i>
                    </a>
                </div>

                <div class="comment-composer">
                    <div contenteditable="true" placeholder="Write your comment here" class="comment-composer-text"></div>
                    <div class="comment-composer-options">
                        <button class="btn postPostComment" data-post-id="0"> Post Comment </button>
                    </div>
                </div>
                <div class="comments">
                </div>
            </div>
        </div>
    </div>
</div>