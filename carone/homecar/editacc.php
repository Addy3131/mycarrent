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
              <h1>Account</h1>
              
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
            <strong class="text-black">Account</strong>
          </div>
        </div>
      </div>
    </div>

    <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h2 class="h3 mb-5 text-black">Update Details</h2>
          </div>
          <div class="col-md-12">
    
            <form action="" method="post" enctype="multipart/form-data">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black"> Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo $fetch->cus_name?>" name="cus_name">
                  </div>
                  <div class="col-md-6">
                    <label for="Mobile" class="text-black">Mobile <span class="text-danger">*</span></label>
                    <input type="number" class="form-control" value="<?php echo $fetch->cphone?>"  name="cphone">
                  </div>
                </div>
				<div class="form-group row">
                  <div class="col-md-12">
                    <label for="Email" class="text-black">Email <span class="text-danger">*</span></label>
                    <input type="email" class="form-control" value="<?php echo $fetch->cemail?>"  name="cemail">
                  </div>
                 
                </div>
				<div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Gender <span class="text-danger">*</span></label>
					<?php
					$gen=$fetch->cgen;
					if($gen=="Male")
					{
					?>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="cgen" value="Male"  checked>Male
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="c-gen" value="Female">Female
					  <label class="form-check-label" for="radio1"></label>
					</div>
                   <?php
					}
					else
					{	
				   ?>
				   <div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="cgen" value="Male"  >Male
					  <label class="form-check-label" for="radio1"></label>
					</div>
					<div class="form-check">
					  <input type="radio" class="form-check-input" id="radio1" name="cgen" value="Female" checked>Female
					  <label class="form-check-label" for="radio1"></label>
					</div>
				  
				  <?php
					}
				  ?>
				  </div>
                  
				  <div class="col-md-6">
					<label for="password" class="text-black">Upload profile <span class="text-danger">*</span></label>
					<input type="file" class="form-control" id="c_lname" name="file">
					<img src="images/upload/customer/<?php echo $fetch->file?>" alt="Image placeholder" width="50px" class="mb-4">
				  </div>
					
                </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-warning btn-lg btn-block" value="Save Profile">
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
   