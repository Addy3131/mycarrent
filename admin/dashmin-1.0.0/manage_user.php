<?php
include_once('header.php');
?>
?
<div class="col-12 mt-5 text-center">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4">Manage User Table</h6>
                    <div class="table-responsive table-bordered">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th scope="col">Cus_id</th>
                                    <th scope="col">Full Name</th>
                                    <th scope="col">Email</th>
                                    <th scope="col">pass</th>
                                    <th scope="col">phone</th>
                                    <th scope="col">Address</th>
                                    <th scope="col">Aadhar-Card</th>
                                    <th scope="col">Driving-No</th>
                                    <th scope="col">Pincode</th>
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
                                    
                                    <td><?php echo $data->cus_id?></td>
                                    <td><?php echo $data->full_name?></td>
                                    <td><?php echo $data->email?></td>
                                    <td><?php echo $data->pass?></td>
                                    <td><?php echo $data->Phone?></td>
                                    <td><?php echo $data->address?></td>
                                    <td><?php echo $data->Aadhar_card?></td>
                                    <td><?php echo $data->driving_No?></td>
                                    <td><?php echo $data->pincode?></td>
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