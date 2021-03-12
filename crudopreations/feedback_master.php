<?php
$connection = mysqli_connect("localhost","root","","sherbimet");
$query = mysqli_query($connection,"insert into feedback_master(feedback_id,worker_id,user_id,feedback_details,feedback_date) values('F1','W1','U1','details','11/04/2021')") or die("Error". mysqli_error($connection));
?>