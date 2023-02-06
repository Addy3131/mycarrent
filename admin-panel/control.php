<?php

include_once('model.php'); // step 1

class control extends model   // step 2
{
	function __construct()
	{
		session_start();
		model::__construct(); // step 3
		
		$url=$_SERVER['PATH_INFO'];
		
		switch($url)
		{
			case '/admin':
			if(isset($_REQUEST['submit']))
			{
				$email=$_REQUEST['email'];
				$pass=$_REQUEST['pass'];
				$enc_pass=md5($pass);
				
				$where=array("email"=>$email,"pass"=>$enc_pass);
				$run=$this->select_where('admin',$where);
				
				$chk=$run->num_rows; // check rows wise condition => ans givbe in true or false
				if($chk==1)
				{
					$fetch=$run->fetch_object(); // if only for single data
					
					$_SESSION['email']=$fetch->email;
					$_SESSION['admin_id']=$fetch->admin_id;
					$_SESSION['name']=$fetch->name;
					echo "<script>
					alert('Login Success');
					window.location='dashboard';
					</script>";
				}
				else
				{
					echo "<script>
					alert('Login failed');
					window.location='/admin';
					</script>";
				}	
			}
			include_once('index.php');
			break;
			
			
			case '/adminlogout':
			unset($_SESSION['email']);
			unset($_SESSION['admin_id']);
			unset($_SESSION['name ']);
			echo "<script>
				alert('Logout Success');
				window.location='admin';
				</script>";
			break;
			
			case '/dashboard':
			include_once('dashboard.php');
			break;
			
			case '/add_category':
				if(isset($_REQUEST['submit']))
				 {
                    $cat_name = $_REQUEST['cat_name'];
					$file=$_FILES['cat_img']['name'];
                    $path='images/cat/'.$file;
                    $tmp_file= $_FILES['cat_img']['tmp_name'];
                    move_uploaded_file($tmp_file,$path);
                   
                    
                    $data = array("cat_name"=>$cat_name,"cat_img"=>$file);

                    $ins=$this->insert('categories',$data);
                    if($ins){
						echo "<script>
						alert('Category Added');
						window.location='add_category';
						</script>";
                    } else {
                        echo "Failed";
                    }
                }

		
			include_once('add_category.php');
			break;
			
			case '/manage_category':
			$category_arr=$this->select('categories');
			include_once('manage_category.php');
			break;
			
			case '/add_employee':
				if(isset($_REQUEST['submit']))
				 {
                    $name = $_REQUEST['name'];
					$email = $_REQUEST['email'];
					$pass = $_REQUEST['pass'];
                    $enc_pass = md5($pass);
					
                   
                    
                    $data = array("name"=>$name,"email"=>$email,"pass"=>$enc_pass);

                    $ins=$this->insert('employee',$data);
                    if($ins){
						echo "<script>
						alert('Employee Added');
						window.location='add_category';
						</script>";
                    } else {
                        echo "Failed";
                    }
                }
			include_once('add_employee.php');
			break;
			
			case '/manage_employee':
			$category_arr=$this->select('employee');
			include_once('manage_employee.php');
			break;
			
			case '/manage_user':
			$customer_arr=$this->select('user');
			include_once('manage_user.php');
			break;
			
			case '/delete':
			if(isset($_REQUEST['deluidbtn']))
			{
				$cus_id=$_REQUEST['deluidbtn'];
				$where=array("cus_id"=>$cus_id);
				
				// img del
				$res=$this->select_where('user',$where);
				$fetch=$res->fetch_object();
				$old_file=$fetch->file;
				
				$run=$this->delete('user',$where);
				if($run)
				{
					unlink('../homecar/images/upload/customer/'.$old_file);	
					echo "<script>
						alert('Delete Success');
						window.location='manage_user';
						</script>";
				}
			}
			
			if(isset($_REQUEST['delcatbtn']))
			{
				$cat_id=$_REQUEST['delcatbtn'];
				$where=array("cat_id"=>$cat_id);
				
				// img del
				$res=$this->select_where('categories',$where);
				$fetch=$res->fetch_object();
				$old_file=$fetch->cat_img;
				
				$run=$this->delete('categories',$where);
				if($run)
				{
					unlink('images/cat/'.$old_file);	
					
				}
			}
			if(isset($_REQUEST['delempbtn']))
			{
				$emp_id=$_REQUEST['delempbtn'];
				$where=array("emp_id"=>$emp_id);
				
				// img del
				$res=$this->select_where('employee',$where);
				$fetch=$res->fetch_object();
				
				
				$run=$this->delete('employee',$where);
				if($run)
				{
					echo "<script>
						alert('Delete Success');
						window.location='manage_feedback';
						</script>";
					
				}
			}
			if(isset($_REQUEST['delfdidbtn']))
			{
				$fd_id=$_REQUEST['delfdidbtn'];
				$where=array("fd_id"=>$fd_id);
				$run=$this->delete('feedback',$where);
				if($run)
				{
					echo "<script>
						alert('Delete Success');
						window.location='manage_feedback';
						</script>";
				}
			}
			break;
			
			case '/editcat':
                  
				if(isset($_REQUEST['btneditcat']))
				{
					$cat_id=$_REQUEST['btneditcat'];
					$where=array("cat_id"=>$cat_id);
					$run=$this->select_where('categories',$where);
					$fetch=$run->fetch_object();
					
					
					if(isset($_REQUEST['submit']))
					{
						$cat_name=$_REQUEST['cat_name'];
						if($_FILES['cat_img']['size']>0)
						{
							$file=$_FILES['cat_img']['name'];
							$path='images/cat/'.$file;
							$tmp_file=$_FILES['cat_img']['tmp_name'];
							move_uploaded_file($tmp_file,$path);
							
							$data=array("cat_name"=>$cat_name,"cat_img"=>$file);
							
							$old_file=$fetch->file;
							
							$res=$this->update('categories',$data,$where);	
							if($res)
							{
								unlink('images/cat/'.$old_file);
								echo "<script>
								alert('Update Success');
								window.location='manage_category';
								</script>";
							}
							
						}
						else
						{
							$data=array("cat_name"=>$cat_name);
						
							$res=$this->update('categories',$data,$where);	
							if($res)
							{
								echo "<script>
								alert('Update Success');
								window.location='manage_category ';
								</script>";
							}		
						}
					}					
				}
				include_once('editcat.php');
				break;

				case '/editemp':
                  
					if(isset($_REQUEST['btneditemp']))
					{
						$emp_id=$_REQUEST['btneditemp'];
						$where=array("emp_id"=>$emp_id);
						$run=$this->select_where('employee',$where);
						$fetch=$run->fetch_object();
						
						
						if(isset($_REQUEST['submit']))
						{
							$name=$_REQUEST['name'];
							$email=$_REQUEST['email'];
							$data=array("name"=>$name,"email"=>$email);
							
							$res=$this->update('employee',$data,$where);	
							if($res)
							{
									echo "<script>
									alert('Update Success');
									window.location='manage_employee ';
									</script>";
							}		
							
						}					
					}
					include_once('editemp.php');
					break;
			case '/status':
			if(isset($_REQUEST['statusuidbtn']))
			{
				$cus_id=$_REQUEST['statusuidbtn'];
				$where=array("cus_id"=>$cus_id);
	
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
							window.location='manage_user';
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
							window.location='manage_user';
							</script>";
							
					}
				}
			}
			
			break;
			
			
			case '/manage_feedback':
				$feedback_arr=$this->select('feedback');
			include_once('manage_feedback.php');
			break;

			case '/searchData':
				if(isset($_REQUEST['btn']))
				{
					$search=$_REQUEST['btn'];
					$customer_arr=$this->search('user','city','user.city=city.city_id','user.cus_name',$search);
					?>
					<caption>Reg Form</caption>
    	
					<tr>
					<td>Profile</td>
					<td>Id</td>
					<td>UserName</td>
					<td>Gender</td>
					<td>City</td>
					</tr>
					<?php
					if(!empty($customer_arr))
					{		
						foreach($customer_arr as $f)
						{		
						?>
						<tr>
						<td><?php echo $f->file?></td>
						<td><?php echo $f->cus_id?></td>
						<td><?php echo $f->cus_name?></td>
						<td><?php echo $f->cgen?></td>
						<td><?php echo $f->city_name?></td>
						</tr>
						<?php
						 }
					}

				}
				
			break;
			default:
			include_once('pnf.php');
			break;
			
		}
		
		
	}
}
$obj=new control;


?>