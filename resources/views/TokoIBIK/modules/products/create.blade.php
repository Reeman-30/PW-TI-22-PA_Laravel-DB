<div class="card">
    <div class="card-header fw-bold ">
        Form Products
    </div>
    <div class="card-body">
        <form action="">
            <div class="mb-3">
                <label for="productName" class="form-label">Name</label>
                <input type="text" class="form-control" id="productName">
            </div>
            <div class="mb-3">
                <label for="desc" class="form-label">Description</label>
                <textarea class="form-control" id="desc" rows="3"></textarea>
            </div>
            <label for="price" class="form-label">Price</label>
            <div class="input-group mb-3">
                <span class="input-group-text" id="basic-addon1">Rp</span>
                <input type="text" class="form-control" id="price">
            </div>
            <div class="">
                <label for="desc" class="form-label">Active</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="active" id="activeTrue" value="Yes">
                <label class="form-check-label" for="activeTrue">Yes</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="active" id="activeFalse" value="No">
                <label class="form-check-label" for="activeFalse">No</label>
            </div>

            <div class="mt-3 mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
                <button type="reset" class="btn btn-danger">Reset</button>
            </div>
        </form>
    </div>
</div>
