<?php
$connection = mysqli_connect("localhost","root","","sherbimet");
$query = mysqli_query($connection,"insert into worker_payout(worker_payout_id,worker_payout_amount,worker_id,worker_payout_date) values('WP1','20000','W1','11/07/2021')") or die("Error". mysqli_error($connection));
?>