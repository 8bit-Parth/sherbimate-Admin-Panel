<?php
$connection = mysqli_connect("localhost","root","","sherbimet");
$query = mysqli_query($connection,"insert into user_master(user_id,user_name,user_gender,user_email,user_mobile,user_address) values('U1','ABC','male','abc123@gmail.com','useraddress')") or die("Error". mysqli_error($connection));
?>