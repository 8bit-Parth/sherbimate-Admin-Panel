<?php
$connection = mysqli_connect("localhost","root","","sherbimet");
$query = mysqli_query($connection,"insert into worker_master(worker_id,worker_name,service_id,worker_photo,worker_gender,worker_email,worker_mobile,worker_documents,worker_details,worker_expertise) values('W1','ABC','S1','image.jpg','male','abc123@gmail.com','0123456789','documents of worker','details','workers expertise')") or die("Error". mysqli_error($connection));
?>
