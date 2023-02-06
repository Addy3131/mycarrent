<?php
include_once('header.php');
?>

<div class="container rounded bg-white mt-5 ">
        <div class="row">
            <div class="col-md-3 border-right right ">
                <div class="d-flex flex-column align-items-center text-center p-3 py-5"><img class="rounded-circle mt-5" src="images/upload/ad/car/<?php echo $fetch->car_img?>" width="200px" src="pp.jpg"><span class="font-weight-bold"><?php echo $fetch->car_title?></span>
                    <span class="text-black-50"></span><span> </span></div>
            </div>
            <div class="col ">
                <div class="p-3 py-5">
                    <div class="d-flex justify-content-between align-items-center ">
                        <h4 class="text-right">Profile Settings</h4>
                    </div>
                    <div class="row mt-2">
                        <div class="col-md-6"><label class="labels"></label>Name<input type="text" class="form-control" placeholder="first name" value="<?php echo $fetch->cus_name ?>"></div>
                        <div class="col-md-6"><label class="labels"></label>Car Title<input type="text" class="form-control" placeholder="first name" value="<?php echo $fetch->car_title ?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-12"><label class="labels">Phone Number</label><input type="text" class="form-control" placeholder="enter phone number" value="<?php echo $fetch->cphone ?>"></div>
                        <div class="col-md-12"><label class="labels">Model_no </label><input type="text" class="form-control" placeholder="enter address " value="<?php echo $fetch->model_year ?>"></div>
                        <div class="col-md-12"><label class="labels">Price</label><input type="text" class="form-control" placeholder="enter email id" value="<?php echo $fetch->price ?>"></div>
                        <div class="col-md-12"><label class="labels">fuel Type</label><input type="text" class="form-control" placeholder="education" value="<?php echo $fetch->fuel_type ?>"></div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-6"><label class="labels">License</label><input type="text" class="form-control" placeholder="country" value="<?php echo $fetch->license_no ?>"></div>
                        
                    </div>
                    <div class="mt-5 text-center"><button class="btn btn-warning " type="button">SAVE CHANGES</button></div>
                </div>
            </div>

        </div>
    </div>
    </div>
    </div>
<?php
include_once('footer.php');
?>
        