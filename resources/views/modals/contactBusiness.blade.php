<div class="modal fade" id="contactBusiness" role="dialog">
    <div class="modal-dialog book-model">
        <div class="modal-content">
            <div class="modal-header" style="background: #08306C;">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Contact Business</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div id="dispError" class="formIssue"></div>
                    <div class="col-md-12">
                        The business will reply to your account's email :
                    </div>
                    <div class="col-md-6">
                        {{ session()->get('email') }}
                    </div>
                    <div class="col-md-12">
                        <div class="email-composer">
                            <div contenteditable="true" id="emailText" placeholder="Type your message" class="email-composer-text"></div>
                        </div>
                    </div>
                    <div class="col-md-12">
                    </div>
                </div>

            </div>
            <div class="modal-footer">
                <button type="button" style="width: auto;" id="sendEmailBtn" class="btn btn-primary pickup" data-id="{{ $service->service_id }}">Send Email</button>
            </div>
        </div>
    </div>
</div>

<script>
    (function () {
        $('#sendEmailBtn').on('click', function (e) {
            e.preventDefault();
            textDiv = $('#emailText');
            
            if (textDiv.text().length ==0) {
                return;
            }
            var text = textDiv[0].innerText.trim();

            $.ajax({
                type: "POST",
                url: '/email',
                data: JSON.stringify({
                    "service" : this.dataset.id,
                    "message" : text
                }),
                contentType: "application/json; charset=utf-8",
                cache: false,
                success: function (response) {
                    alert("The business has been contacted.");
                    location.reload();
                },
                error: function (response) {
                    alert("There was an error while trying to send the email.");
                }
            });
        });
    })();
    
</script>