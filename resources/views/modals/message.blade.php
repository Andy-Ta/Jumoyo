
<div class="modal fade" id="message" role="dialog" >
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Message</h4>
            </div>
            <div id="messageDiv" class="modal-body modelbodypad">
                {{ $message or "No message available." }}
            </div>
            <div class="modal-footer">
                <a href="/" type="button" style="width: auto;" class="btn btn-primary">Home Page</a>
            </div>
        </div>
    </div>
</div>