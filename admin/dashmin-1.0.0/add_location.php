<!-- Form Start -->
<?php
include_once('header.php')
?>

<div class="col-sm-12 col-xl-12 mt-4">
    <div class="bg-light rounded h-100 p-4">
        <center>
            <h6 class="mb-4">Add_Location</h6>

            <form>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">ID</label>
                    <div class="col-sm-10">
                        <input type="tel" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Name</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3">
                    </div>
                </div>
                <div class="row mb-3">
                    <label for="inputEmail3" class="col-sm-2 col-form-label">Pincode</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="inputEmail3">
                    </div>
                </div>



                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        <center>
    </div>
</div>

<div>
<!-- Form End -->
<?php
include_once('footer.php')
?>