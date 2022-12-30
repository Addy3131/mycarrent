<?php
include_once('header.php');
?>
<div class="col-12 mt-5 text-center">
                <div class="bg-light rounded h-100 p-4">
                    <h6 class="mb-4 center">Manage Location Table</h6>
                    <div class="table-responsive ">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">Area-ID</th>
                                    <th scope="col">City-ID</th>
                                    <th scope="col">Area Name</th>
                                    <th scope="col">City-Name</th>
                                    <th scope="col">Edit</th>
                                    <th scope="col">Delete</th>
                                    
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                                if(!empty($location_arr))
                                {
                                    foreach($location_arr as $data)
                                    {
                                
                                ?>
                                <tr>
                                    
                                    <td><?php echo $data->area_id?></td>
                                    <td><?php echo $data->city_id?></td>
                                    <td><?php echo $data->area_name?></td>
                                    <td><?php echo $data->city_name?></td>
                                    <td><a href="#" class="btn btn-primary">Edit</a></td>
                                    <td><a href="#" class="btn btn-danger">Delete</a></td>
                                    
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