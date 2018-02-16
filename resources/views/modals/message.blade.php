
<div class="modal fade" id="message" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Message</h4>
            </div>
            <div id="messageDiv" class="modal-body modelbodypad">
                {{ $message or "No message available." }}
            </div>
            <div class="modal-footer">
                <button type="button" style="width: auto;" class="btn btn-primary" data-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>