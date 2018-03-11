<div class="modal fade" id="paymentModal" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header bgcolor">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Payment</h4>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <form action="/charge" method="post" id="payment-form">
                        <div class="form-row">
                            <label for="card-element">
                                Credit or debit card
                            </label>
                            <div id="card-element">
                                <!-- A Stripe Element will be inserted here. -->
                            </div>

                            <!-- Used to display form errors. -->
                            <div id="card-errors" role="alert"></div>
                        </div>

                        <button style="width: auto;" class="btn btn-primary">Submit Payment</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>