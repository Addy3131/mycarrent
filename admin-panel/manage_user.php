<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage User</h4>
                
            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage User
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
											<th>Profile</th>
                                            <th>id</th>
                                            <th>Name</th>
                                            <th>Username</th>
                                            <th>Password</th>
                                            <th>Gender</th>
											<th>Languages</th>
											<th>Edit</th>
											<th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
									if(!empty($customer_arr))
									{
										foreach($customer_arr as $data)
										{
									?>
                                        <tr >
											<td><img src="../homecar/images/upload/customer/<?php echo $data->file?>" width="50px" height="50px"></td>
                                            <td><?php echo $data->cus_id?></td>
											<td><?php echo $data->cus_name?></td>
											<td><?php echo $data->cemail?></td>
											<td><?php echo $data->cpass?></td>
											<td><?php echo $data->cgen?></td>
											<td><?php echo $data->city?></td>
                                            <td><a href="status?statusuidbtn=<?php echo $data->cus_id?>" class="btn btn-primary"><?php echo $data->status?></a></td>
											<td><a href="delete?deluidbtn=<?php echo $data->cus_id?>" class="btn btn-danger">Delete</a></td>
                                        </tr>
                                    <?php
										}
									}
									?>    
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div>
                    <!--End Advanced Tables -->
                </div>
            </div>
            
            
    </div>
    </div>
 <?php
 include_once('footer.php');
 ?>    