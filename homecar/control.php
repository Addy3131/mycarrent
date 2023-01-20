<?php

include_once('../admin/model.php');

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
                    $run = $this->select_where('customer', $where);

                    $chk = $run->num_rows;
                    if ($chk == 1) {
                        $fetch = $run->fetch_object();

                        $_SESSION['cus_id'] = $fetch->cus_id;
                        $_SESSION['cus_name'] = $fetch->cus_name;
                        $_SESSION['cemail'] = $fetch->cemail;
                        $_SESSION['cgen'] = $fetch->cgen;
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
                    $file=$_FILES['file']['name'];
                    $path='images/upload/customer/'.$file;
                    $tmp_file=$_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_file,$path);
                    $city=$_REQUEST['city'];

                    date_default_timezone_set("asia/calcutta");
                    $created_dt = date("Y-m-d H:i:s");
                    $updated_dt = date("Y-m-d H:i:s");

                    $data = array("cus_name" => $cus_name, "cemail" => $cemail, "cpass" => $enc_pass, "cphone" => $cphone, "cgen" => $cgen, "file" => $file,"city"=>$city);

                    $ins = $this->insert('customer', $data);
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
                include_once('account.php');
                break;

            case '/index':
                include_once('index.php');
                break;

            case '/service':
                include_once('service.php');
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
