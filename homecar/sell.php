<?php
if(empty($_SESSION['cus_id']))
{
	echo "<script>
	window.location='index';
	</script>";
}
include_once('header.php');
?>
	<div class="site-blocks-cover inner-page" style="background-image: url('images/hero_1.jpg');">
      <div class="container">
        <div class="row">
          <div class="col-lg-7 mx-auto align-self-center">
            <div class=" text-center">
              <h1>Rent</h1>
              
            </div>
          </div>
        </div>
      </div>
    </div>
	
    <div class="bg-light py-3">
      <div class="container">
        <div class="row">
          <div class="col-md-12 mb-0">
            <a href="index">Home</a> <span class="mx-2 mb-0">/</span>
            <strong class="text-black">Rent</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Rent your car</h2>
          </div>
          <div class="col-md-12">
    
            <form action="" method="post" enctype="multipart/form-data">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black"> Car Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="" name="car_title">
                  </div>
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black">Seats <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" value=""  name="driver_type">
                  </div>
                </div>
				        <div class="form-group row">
                    <div class="col-md-6">
                      <label for="Email" class="text-black">Car number<span class="text-danger">*</span></label>
                      <input type="tel" class="form-control" value=""  name="car_number">
                    </div>
                    <div class="col-md-6">
                      <label for="Email" class="text-black">Model Year<span class="text-danger">*</span></label>
                      <input type="tel" class="form-control" value=""  name="model_year">
                    </div>
                    <div class="col-md-12">
                      <label for="Email" class="text-black">license_no<span class="text-danger">*</span></label>
                      <input type="tel" class="form-control" value=""  name="license_no">
                    </div>
                 
                </div>
				
                <div class="form-group row">
				          <div class="col-md-6">
					          <label for="rc_book" class="text-black">Rc book <span class="text-danger">*</span></label>
					          <input type="file" class="form-control"  name="rc_book">
		              </div>
                  <div class="col-md-6">
					          <label for="password" class="text-black">Car img <span class="text-danger">*</span></label>
					          <input type="file" class="form-control"  name="car_img">
					        </div>
                </div>
                <div class="form-group row">
				          <div class="col-md-6">
					          <label for="rc_book" class="text-black">Price <span class="text-danger">*</span></label>
					          <input type="text" class="form-control"  name="price">
		              </div>
                  <div class="col-md-6">
					          <label for="Fuel_Type" class="text-black">Fuel Type <span class="text-danger">*</span></label>
					          <input type="text" class="form-control"  name="fuel_type">
					        </div>
                </div>
                <div class="form-group row">
                  <div class="col-md-12 mt-3">
                    <label for="City" class="text-black">City <span class="text-danger">*</span></label>
                    <select name="city_id">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <?php
                                    foreach ($city as $d) {
                                    ?>
                                        <option value="<?php echo $d->city_id ?>">
                                            <?php echo $d->city_name ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                  </div>
					
          </div>
                <div class="form-group row">
                  <div class="col-md-12 mt-3">
                    <label for="Area" class="text-black">Area <span class="text-danger">*</span></label>
                    <select name="area_id">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <?php
                                    foreach ($area as $d) {
                                    ?>
                                        <option value="<?php echo $d->area_id ?>">
                                            <?php echo $d->area_name ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                  </div>
					
          </div>
          <div class="form-group row">
                  <div class="col-md-12 mt-3">
                    <label for="Category" class="text-black">Category <span class="text-danger">*</span></label>
                    <select name="cat_id">
                                    <option disabled="disabled" selected="selected">Choose option</option>
                                    <?php
                                    foreach ($cat as $d) {
                                    ?>
                                        <option value="<?php echo $d->cat_id ?>">
                                            <?php echo $d->cat_name ?>
                                        </option>
                                    <?php
                                    }
                                    ?>
                                </select>
                  </div>
					
          </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="RENT" >
                  </div>
				  
                </div>
              </div>
            </form>
          </div>
          
        </div>
      </div>
    </div>



    
<?php
include_once('footer.php');
?>