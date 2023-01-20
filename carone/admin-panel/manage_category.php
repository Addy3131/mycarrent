<?php
include_once('header.php');
?>
    <div class="content-wrapper">
         <div class="container">
        <div class="row pad-botm">
            <div class="col-md-12">
                <h4 class="header-line">Manage Category</h4>
                
            </div>

        </div>
            <div class="row">
                <div class="col-md-12">
                    <!-- Advanced Tables -->
                    <div class="panel panel-default">
                        <div class="panel-heading">
                             Manage Category
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>

											
                                            <th>Image</th>
                                            <th>Name</th>
                                            <th>Edit</th>
                                            <th>Delete</th>
                                        </tr>
                                    </thead>
                                    <tbody>
									
									<?php
									if(!empty($category_arr))
									{
										foreach($category_arr as $data)
										{
									?>
                                        <tr >
											<td><img src="images/cat/<?php echo $data->cat_img?>" width="70px" height="50px"></td>
                                            <td><?php echo $data->cat_name?></td>
                                            <td><a href="editcat?btneditcat=<?php echo $data->cat_id?>" class="btn btn-primary">Edit</a></td>
											<td><a href="delete?delcatbtn=<?php echo $data->cat_id?>" class="btn btn-danger">Delete</a></td>
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