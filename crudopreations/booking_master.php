<?php
$connection = mysqli_connect("localhost","root","","sherbimet");
$query = mysqli_query($connection,"insert into payment_master(payment_id,booking_id,payment_amount,payout_details,payment_method,payment_date,payment_status) values('B1','W1','P1','11/03/2021','2000','pending')") or die("Error". mysqli_error($connection));
?>