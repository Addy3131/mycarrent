<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Add employee</h4>
                
                            </div>

        </div>
      <form method="post" enctype="multipart/form-data">
             <div class="row">
                 <div class="col-md-12 col-sm-12 col-xs-12">
               <div class="panel panel-primary">
                        <div class="panel-heading">
                           Add Category
                        </div>
                        <div class="panel-body">
						
							 <div class="form-group">
								<label>Employee Name</label>
								<input class="form-control" type="text" name="name" />
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
								<label>Employee Email</label>
								<input class="form-control" type="email"  name="email"/>
								<p class="help-block">Help text here.</p>
							</div>
							<div class="form-group">
								<label>Employee password</label>
								<input class="form-control" type="password"  name="pass"/>
								<p class="help-block">Help text here.</p>
							</div>
							<hr />
						
							 <div class="form-group">
								
								<input type="submit" class="btn btn-primary" type="text" name="submit" value="submit"/>
								
							</div>
						</div>
					</div>
			   </div>

        </div>
      </form>
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?> 