<?php
session_start();

$con = mysqli_connect('localhost', 'root','','sherbimet');
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

//$db = mysqli_select_db($con, 'sherbimet');
echo isset($POST['submit']);
if(isset($_POST['submit'])){
	$email = $_POST['admin_email'];
	$password = $_POST['admin_password'];
        
	$sql = " select * from  admin_master where admin_email='$email' and admin_password='$password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['email'] = $email;
                        $_SESSION['password'] = $password;
			header('Location:home.php');
                        exit;
		}else{
			echo "login failed";
//			header('Location:home.php');
		}

}


?>

