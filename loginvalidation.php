<?php
session_start();

require './class/at-class.php';

//$con = mysqli_connect('localhost', 'root','','sherbimet');
//if($connection){
//	echo "connection successful";
//}else{
//	echo "no connection";
//}

if(isset($_SESSION['logged_in']) && $_SESSION == 1)
{
    header('Location:home.php');
}
else if(isset($_SESSION['logged_in']) || $_SESSION == 0)
{

echo isset($POST['submit']);
if(isset($_POST['submit'])){
	$email = $_POST['admin_email'];
	$password = $_POST['admin_password'];
        
        
	$sql = "select * from  admin_master where admin_email='$email' and admin_password='$password' ";
	$query = mysqli_query($connection,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1)
                {
                    echo "login successful"."</br>";
                    $_SESSION['email'] = $email;
                    $_SESSION['password'] = $password;
                    $_SESSION['logged_in'] = 1;
                    header('Location:home.php');
                    exit;
		}
                else
                {
			header('Location:login.php');
                        exit;
		}
}
}
else
{
    header('Location:login.php');
    exit;
    
//    echo $_SESSION['email'];
}


?>

