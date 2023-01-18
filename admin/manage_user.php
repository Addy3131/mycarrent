<?php
include_once('header.php');
?>

<div class="col-12 mt-5 text-center">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Manage User Table</h6>
                    <div class="table-responsive table-bordered">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">pp</th>
                                    <th scope="col">Cus_id</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">Gender</th>
                                    <th scope="col">City</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                if(!empty($customer_arr))
                                {
                                    foreach($customer_arr as $data)
                                    {
                                
                                ?>
                                <tr>
                                    <td><img src="../homecar/images/upload/customer/<?php echo $data->file?>" width="50px" height="50px"></td>
                                    <td><?php echo $data->cus_id?></td>
                                    <td><?php echo $data->cus_name?></td>
                                    <td><?php echo $data->cemail?></td>
                                    <td><?php echo $data->cphone?></td>
                                    <td><?php echo $data->cgen?></td>
                                    <td><?php echo $data->city?></td>
                                    <td><a href="status?statuscidbtn=" class="btn btn-primary"><?php echo $data->status?></a></td>
									<td><a href="delete?delcidbtn=" class="btn btn-danger">Delete</a></td>
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
        </div>
    </div>
    <!-- Table End -->
    <?php
include_once('footer.php')
?>