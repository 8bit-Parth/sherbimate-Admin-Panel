<?php
$connection = mysqli_connect("localhost","root","","sherbimet");
$query = mysqli_query($connection,"insert into service_master(service_id,service_name,service_photo_path) values('S1','servicename','image.jpg')") or die("Error". mysqli_error($connection));
?>