<!-- Modal -->
<div class="modal fade" id="form_category" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form id="category_form" onsubmit="return false">
                    <div class="mb-3">
                        <label class="form-label">Category Name</label>
                        <input type="text" class="form-control" name="category_name" id="category_name" aria-describedby="emailHelp">
                        <small id="cat_error"></small>
                    </div>
                    <div class="mb-3">
                        <label class="form-label">Parent Category</label>
                        <select class="form-control" id="parent_cat" name="parent_cat">


                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>