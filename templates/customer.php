<!-- Modal -->
<div class="modal fade" id="form_customer" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Customers</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="customer_form" onsubmit="return false">
                    <div class="mb-3">
                        <label class="form-label">Customer Name</label>
                        <input type="text" class="form-control" name="customer_name" id="customer_name" aria-describedby="emailHelp">
                        <small id="cat_error"></small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Customer Number</label>
                        <input type="tel" class="form-control" name="customer_no" id="customer_no" aria-describedby="emailHelp">
                        <small id="cat_error"></small>
                    </div>
                    <div class="form-floating">
                        <textarea name="address" id="address" class="form-control" placeholder="Address" id="floatingTextarea2" style="height: 100px"></textarea>
                        <label for="floatingTextarea2">Address</label>
                    </div>
                    <address></address>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>