<?php
$connection = mysqli_connect("localhost","root","","sherbimet");
$query = mysqli_query($connection,"insert into package_master(package_id,package_name,package_details,package_price,package_duration) values('P1','packagename','details','2000','90 days')") or die("Error". mysqli_error($connection));
?>