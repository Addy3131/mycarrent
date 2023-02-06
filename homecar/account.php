<?php
include_once('header.php');
?>
<h1 class="page-title text-center">Preview Your  Account </h1>

<div data-elementor-type="wp-post" data-elementor-id="9" class="elementor elementor-9 elementor-bc-flex-widget">
                <div class="elementor-inner">
        <div class="elementor-section-wrap">
                            <section class="elementor-section elementor-top-section elementor-element elementor-element-3925e5e0 my-account elementor-section-boxed elementor-section-height-default elementor-section-height-default" data-id="3925e5e0" data-element_type="section">
                <div class="elementor-container elementor-column-gap-default">
                    <div class="elementor-row">
            <div class="elementor-column elementor-col-100 elementor-top-column elementor-element elementor-element-7545c3aa" data-id="7545c3aa" data-element_type="column">
    <div class="elementor-column-wrap elementor-element-populated">
                    <div class="elementor-widget-wrap">
                <div class="elementor-element elementor-element-55d9685d elementor-widget elementor-widget-shortcode" data-id="55d9685d" data-element_type="widget" data-widget_type="shortcode.default">
        <div class="elementor-widget-container">
            <div class="elementor-shortcode"><div class="woocommerce"><div class="woocommerce-notices-wrapper"></div>

            <div class="price_table  table-responsive "  >

            <h4 class="page-title text-center">Account Details </h4>

<table class="table table-striped table-bordered table-hover">
    <thead>
    <tr>
											<th>Profile</th>
                                           
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Password</th>
                                            <th>Gender</th>
											<th>city</th>
											<th>phone</th>
                                            <th>Edit</th>

											
											
    </tr>
    </thead>
    <tbody>
        <tr class="odd">
            <td class="bold" data-title="Duration (Days)"><img src="images/upload/customer/<?php echo $fetch->file?>" alt="Image placeholder"  style="width:50px; height:50px; "></td>
            <td class="bold" data-title="Duration (Days)"><?php echo  $fetch->cus_name?></td>
            <td class="bold" data-title="Duration (Days)"><?php echo $fetch->cemail?></td>
            <td class="bold" data-title="Duration (Days)"><?php echo $fetch->cpass?></td>
            <td class="bold" data-title="Duration (Days)"><?php echo $fetch->cgen?></td>
            <td class="bold" data-title="Duration (Days)"><?php echo  $fetch->city_name?></td>
            <td class="bold" data-title="Duration (Days)"><?php  echo $fetch->cphone?></td>

            <td><a href="edituser?btnedit=<?php echo $fetch->cus_id?>" class="btn btn-primary">Edit</a></td>
            
            
        </tr>
        
    </tbody>
</table>
</div>


    









</div></div></section>

        <?php
        include_once('footer.php');
        ?>
        