<?php

include_once('model.php');

class control extends model
{
    function __construct()
    {
        model::__construct();

        $url = $_SERVER['PATH_INFO'];

        switch ($url) 
        {
            case '/login':
                include_once('index.php');
                break;

            case '/signup':
                include_once('signup.php');
                break;

            case '/dashboard':
                include_once('dashboard.php');
                break;

            case '/manage-booking':
                include_once('manage_booking.php');
                break;

            case '/manage-category':
                include_once('Manage_category.php');
                break;
            
            case '/manage-complain':
                include_once('manage_complain.php');
                break;

            case '/Manage-employee':
                include_once('Manage_employee.php');
                break;

            case '/manage-location':
                $location_arr=$this->select_join2('city','area','city.city_id=area.city_id');
                include_once('manage_location.php');
                break;

            case '/manage-user':
                $customer_arr=$this->select('customer');
                include_once('manage_user.php');
                break;

            case '/add-category':
                include_once('add_Category.php');
                break;

            case '/add-employee':
                include_once('add_Employee.php');
                break;

            case '/add-location':
                include_once('add_location.php');
                break;

            default:
            include_once('404.php');
            break;
        }
    }
}

$a = new control;
?>