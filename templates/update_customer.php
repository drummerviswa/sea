<!-- Modal -->
<div class="modal fade" id="update_customer_form" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Customer Update Form</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="update_customer_form" onsubmit="return false">
                    <div class="form-control">
                        <div class="form-group container">
                            <label>Customer Name</label>
                            <input type="text" class="form-control" name="customer_name" id="customer_name" placeholder="Enter Customer Name" required>
                        </div>
                        <br>
                        <div class="form-group container">
                            <label>Customer Number</label>
                            <input type="text" class="form-control" id="customer_no" name="customer_no" placeholder="Enter Number" required />
                        </div>
                        <br>
                        <div class="form-floating container">
                            <label for="floatingTextarea2">Address</label>
                            <textarea name="address" id="address floatingTextarea2" class="form-control" placeholder="Address" style="height: 100px"></textarea>
                        </div>
                        <br><br>
                        <button type="submit" class="form-control btn btn-primary">Submit</button>
                    </div>
                </form>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                </div>
            </div>
        </div>
    </div>