<?php

include_once('../admin-panel/model.php');

class control extends model
{
    function __construct()
    {
        session_start();
        model::__construct();

        $url = $_SERVER['PATH_INFO'];

        switch ($url) {
            case '/login':
                if (isset($_REQUEST['submit'])) {
                    $cemail = $_REQUEST['cemail'];
                    $cpass = $_REQUEST['cpass'];
                    $enc_pass = md5($cpass);

                    $where = array("cemail" => $cemail, "cpass" => $enc_pass);
                    $run = $this->select_where('user', $where);

                    $chk = $run->num_rows;
                    if ($chk == 1) {
                        $fetch = $run->fetch_object();

                        $_SESSION['cus_id'] = $fetch->cus_id;
                        $_SESSION['cus_name'] = $fetch->cus_name;
                        $_SESSION['cemail'] = $fetch->cemail;
                        $_SESSION['city'] = $fetch->city;
                       
                        echo "<script>
                        alert('Login Success');
                        window.location='index';
                        </script>";
                    } else {
                        echo "<script>
                            alert('Login Failed');
                            </script>";
                    }
                }
                include_once('login.php');
                break;

            case '/signup':
                if (isset($_REQUEST['submit'])) {
                    $cus_name = $_REQUEST['cus_name'];
                    $cemail = $_REQUEST['cemail'];
                    $cpass = $_REQUEST['cpass'];
                    $enc_pass = md5($cpass);
                    $cphone = $_REQUEST['cphone'];
                    $cgen = $_REQUEST['cgen'];
                    $file=$_FILES['file']['name'];#
                    $path='images/upload/customer/'.$file;
                    $tmp_file=$_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_file,$path);
                    $city=$_REQUEST['city'];

                    date_default_timezone_set("asia/calcutta");
                    $created_dt = date("Y-m-d H:i:s");
                    $updated_dt = date("Y-m-d H:i:s");

                    $data = array("cus_name" => $cus_name, "cemail" => $cemail, "cpass" => $enc_pass, "cphone" => $cphone, "cgen" => $cgen, "file" => $file,"city"=>$city, "created_dt" => $created_dt, "updated_dt" => $updated_dt);

                    $ins = $this->insert('user', $data);
                    if ($ins) {
                        echo "<script>
                        alert('Register Success');
                        window.location='login';
                        </script>";
                    } else {
                        echo "Not success";
                    }
                }

                $city = $this->select('city');
                include_once('signup.php');
                break;

            case '/contact-us':
                include_once('contact.php');
                break;
            case '/cart':
                include_once('cart.php');
                break;

            case '/about':
                include_once('aboutus.php');
                break;

            case '/account':
                
			$where=array("user.cus_id"=>$_SESSION['cus_id']);
			$run=$this->select_where_join('user','city','user.city=city.city_id',$where);
			$fetch=$run->fetch_object();

                include_once('account.php');
                break;

                case '/edituser':
                  
                    if(isset($_REQUEST['btnedit']))
                    {
                        $cus_id=$_REQUEST['btnedit'];
                        $where=array("cus_id"=>$cus_id);
                        $run=$this->select_where('user',$where);
                        $fetch=$run->fetch_object();
                        
                        
                        if(isset($_REQUEST['submit']))
                        {
                            $name=$_REQUEST['cus_name'];
                            $mobile=$_REQUEST['cphone'];
                            $unm=$_REQUEST['cemail'];
                            $gen=$_REQUEST['cgen'];
                           
                           
                            if($_FILES['file']['size']>0)
                            {
                                $file=$_FILES['file']['name'];
                                $path='images/upload/customer/'.$file;
                                $tmp_file=$_FILES['file']['tmp_name'];
                                move_uploaded_file($tmp_file,$path);
                                
                                $data=array("cus_name"=>$name,"cphone"=>$mobile,"cemail"=>$unm,"cgen"=>$gen
                            ,"cus_id"=>$cus_id,"file"=>$file);
                                
                                $old_file=$fetch->file;
                                
                                $res=$this->update('user',$data,$where);	
                                if($res)
                                {
                                    unlink('images/upload/customer/'.$old_file);
                                    echo "<script>
                                    alert('Update Success');
                                    window.location='account';
                                    </script>";
                                }
                                
                            }
                            else
                            {
                                $data=array("cus_name"=>$name,"cphone"=>$mobile,"cemail"=>$unm,"cgen"=>$gen
                                ,"cus_id"=>$cus_id);
                            
                                $res=$this->update('user',$data,$where);	
                                if($res)
                                {
                                    echo "<script>
                                    alert('Update Success');
                                    window.location='account ';
                                    </script>";
                                }
                                
                            }
        
                        }					
                        
                        
                    }
                    include_once('editacc.php');
                    break;

                    case '/sell':
                        if(isset($_REQUEST['submit']))
                        {
                            $cus_id=$_SESSION['cus_id'];
                            $city=$_REQUEST['city_id'];
                            $area=$_REQUEST['area_id'];
                            $cat=$_REQUEST['cat_id'];
                            $car_title = $_REQUEST['car_title'];
                            $driver_type = $_REQUEST['driver_type'];
                            $car_number = $_REQUEST['car_number'];
                            $rc_book=$_FILES['rc_book']['name'];
                            $path='images/upload/ad/rc/'.$rc_book;
                            $tmp_file=$_FILES['rc_book']['tmp_name'];
                            move_uploaded_file($tmp_file,$path);
                            $license_no=$_REQUEST['license_no']; 
                            $car_img=$_FILES['car_img']['name'];
                            $path='images/upload/ad/car/'.$car_img;
                            $tmp_file=$_FILES['car_img']['tmp_name'];
                            move_uploaded_file($tmp_file,$path);
                            $model_year=$_REQUEST['model_year'];
                            $price = $_REQUEST['price'];
                            $fuel_type = $_REQUEST['fuel_type'];
                            
                            date_default_timezone_set("asia/calcutta");
                            $created_dt = date("Y-m-d H:i:s");
                            $updated_dt = date("Y-m-d H:i:s");
                           
                            
                            
                            
                            
        
                            $data = array("cus_id"=>$cus_id,"city_id"=>$city,"car_title" => $car_title, "driver_type" => $driver_type, "car_number" => $car_number,
                                        "rc_book" => $rc_book, "car_img" => $car_img,"rc_book" => $rc_book,"fuel_type" => $fuel_type,
                                        "price"=>$price,"area_id"=>$area,"cat_id"=>$cat,"license_no"=>$license_no,"model_year"=>$model_year,"created_dt"=>$created_dt,"updated_dt"=>$updated_dt);
        
                            $ins=$this->insert('advertisement',$data);
                            if ($ins) {
                                 
                            } else {
                                echo "Not success";
                            }
                        
                        
                        
                        } 
                        
                        $city=$this->select('city');
                        $area=$this->select('area');
                        $cat=$this->select('categories');
                        include_once('sell.php');
                        break;
                   


            case '/index':
                $category_arr=$this->select('categories');
                $rent_arr=$this->select('advertisement');
                include_once('index.php');
                break;

            case '/service':
                include_once('service.php');
                break;
            
            case '/ad':
                $where=array("advertisement.cus_id"=>$_SESSION['cus_id']);
			$run=$this->select_where_join('advertisement','user','advertisement.cus_id=user.cus_id',$where);
            
			$fetch=$run->fetch_object();
                include_once('ad.php');
                break;

                
                
                case '/feedback':
                    if(isset($_REQUEST['submit']))
                    {
                    $cus_id = $_SESSION['cus_id'];
                    $cemail = $_SESSION['cemail'];
                    $subject = $_REQUEST['subject'];
                    $message = $_REQUEST['message'];
                    $data = array("cus_id"=>$cus_id,"cemail"=>$cemail,"subject"=>$subject,"message"=>$message);
                    $ins=$this->insert('feedback',$data);
                    if($ins)
                    {
                        
                    }
                    else
                    {
                        echo "Not successful";
                    }
                    }
                    include_once('feedback.php');
                    break;

            case '/logout':
                unset($_SESSION['cus_id']);
                unset($_SESSION['cus_name']);
                unset($_SESSION['cemail']);
                echo "<script>
                        alert('Logout Success');
                        window.location='index';
                        </script>";
                break;
        }
    }
}

$a = new control;
