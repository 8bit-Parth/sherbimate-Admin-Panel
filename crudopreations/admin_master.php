<?php


$connection = mysqli_connect("localhost","root","","sherbimet");
$query = mysqli_query($connection,"insert into admin_master(Admin_id,Admin_name,Admin_email,Admin_password) values('A1','ABC','abc123@gmail.com','abc123')") or die("Error". mysqli_error($connection));
//$query = mysqli_query($connection,"insert into admin_master(Admin_id,Admin_name,Admin_email,Admin_password) values('A2','XYZ','xyz456@gmail.com','xyz456')") or die("Error". mysqli_error($connection));



?>