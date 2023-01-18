<?php

include_once('model.php');

class control extends model
{
    function __construct()
    {
        session_start();
        model::__construct();

        $url = $_SERVER['PATH_INFO'];

        switch ($url) 
        {
            case '/admin':
                if (isset($_REQUEST['submit'])) 
                {
                    $email = $_REQUEST['email'];
                    $pass = $_REQUEST['pass'];
                    $enc_pass = md5($pass);

                    $where = array("email" => $email, "pass" => $enc_pass);
                    $run = $this->select_where('admin', $where);

                    $chk = $run->num_rows;
                    if ($chk == 1) 
                    {
                        $fetch = $run->fetch_object();

                        $_SESSION['admin_id'] = $fetch->admin_id;
                        $_SESSION['email'] = $fetch->email;
                        $_SESSION['name'] = $fetch->name;
                        
                        echo "<script>
                        alert('Login Success');
                        window.location='dashboard';
                        </script>";
                    } else 
                    {
                        echo "<script>
                            alert('Login Failed');
                            </script>";
                    }
                }
                include_once('index.php');
                break;

            case '/dashboard':
                include_once('dashboard.php');
                break;

            case '/status':
                    if(isset($_REQUEST['statuscidbtn']))
                    {
                        $cid=$_REQUEST['statuscidbtn'];
                        $where=array("cus_id"=>$cid);
            
                        $run=$this->select_where('user',$where);
                        $fetch=$run->fetch_object();
                        $status=$fetch->status;
                        if($status=="block")
                        {
                            $data=array("status"=>"unblock");
                            $res=$this->update('user',$data,$where);
                            if($res)
                            {
                                echo "<script>
                                    alert('Unblock Success');
                                    window.location='manage-user';
                                    </script>";
                            }
                        }
                        else
                        {
                            $data=array("status"=>"block");
                            $res=$this->update('user',$data,$where);
                            if($res)
                            {
                                unset($_SESSION['cus_name']);
                                unset($_SESSION['cus_id']);
                                unset($_SESSION['cemail']);
                                
                                echo "<script>
                                    alert('Block Success');
                                    window.location='manage-user';
                                    </script>";
                            }
                        }
                    }
                    
                    break;
            
            case '/delete':
                if(isset($_REQUEST['delcidbtn']))
                {
                    $cid=$_REQUEST['delcidbtn'];
                    $where=array('cus_id'=>$cid);

                    $res=$this->select_where('user',$where);
                    $fetch=$res->fetch_object();
                    $old_file=$fetch->file;

                    $run=$this->delete('user',$where);
                    if($run)
                    {
                        unlink('../homecar/images/upload/customer/'.$old_file);
                        echo "<script>
                        alert('delete success');
                        window.loction='manage-user';
                        </script>";
                    }

                }
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
                $customer_arr=$this->select('user');
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

            case '/logout':
                unset($_SESSION['admin_id']);
                unset($_SESSION['email']);
                unset($_SESSION['name']);
                echo "<script>
                        alert('Logout Success');
                        window.location='admin';
                        </script>";
                
                break;   
            
            default:
            include_once('404.php');
            break;
        }
    }
}

$a = new control;
