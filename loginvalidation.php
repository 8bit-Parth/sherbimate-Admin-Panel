<?php
session_start();

$con = mysqli_connect('localhost', 'root');
if($con){
	echo "conenction successful";
}else{
	echo "no connection";
}

$db = mysqli_select_db($con, 'sherbimet');

if(isset($_POST['submit'])){
	$email = $_POST['admin_email'];
	$password = $_POST['admin_password'];

	$sql = " select * from  admin_master where email='$admin_email' and password='$admin_password' ";
	$query = mysqli_query($con,$sql);

	$row = mysqli_num_rows($query);
		if($row == 1){
			echo "login successful";
			$_SESSION['email'] = $admin_email;
			header('location:home.php');
		}else{
			echo "login failed";
			header('location:home.php');
		}

}


?>

