<?php
$connection = mysqli_connect("localhost","root","","sherbimet");
$query = mysqli_query($connection,"insert into payment_master(payment_id,booking_id,payment_details,payment_method,payment_date,payment_status) values('P1','B1','2000','Net Banking','11/05/2021','done')") or die("Error". mysqli_error($connection));
?>