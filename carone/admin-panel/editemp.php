<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Employee</h4>
                
            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Employee
                        </div>
                        <form action="" method="post" enctype="multipart/form-data">
    
              <div class="p-3 p-lg-5 border">
                <div class="form-group row">
                  <div class="col-md-6">
                    <label for="name" class="text-black">Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" value="<?php echo $fetch->name?>" name="name">
                  </div>
                  
                 
                </div>
				<div class="form-group row">
				  <div class="col-md-6">
					<label for="password" class="text-black">Email <span class="text-danger">*</span></label>
					<input type="email" class="form-control" id="c_lname" name="email" value="<?php echo $fetch->email?>">
					
				  </div>
					
                </div>
              
                <div class="form-group row">
                  <div class="col-lg-12">
                    <input type="submit" name="submit" class="btn btn-primary btn-lg btn-block" value="Save Profile">
                  </div>
				  
                </div>
              </div>
            </form>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
            
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>    