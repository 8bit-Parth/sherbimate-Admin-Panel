<?php
session_start();
require './class/at-class.php';

if($_POST)
{   //$payment_id  = $_POST['payment_id '];
    //$booking_id  = $_POST['booking_id '];
    $payment_amount = $_POST['payment_amount'];
    $payout_details = $_POST['payout_details'];
    $payment_method = $_POST['payment_method'];
    $payment_date = $_POST['payment_date'];
    $payment_status = $_POST['payment_status'];
    
    
    
    $q = mysqli_query($connection, "insert into payment_master (payment_amount,payout_details,payment_method,payment_date,payment_status)values('{$payment_amount}','{$payout_details}','{$payment_method}','{$payment_date}','{$payment_status}')") or die(mysqli_error($connection));
    
    if($q)
    {
        echo "<script>alert('Record Added')</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>AdminLTE 3 | General Form Elements</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition sidebar-mini">
<div class="wrapper">
  <!-- Navbar -->
  <?php
    include './themepart/navbar.php';
    include './themepart/sidebar.php';
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Payment Form</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">General Form</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-6">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Payment details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                  <div class="form-group">
                    <label for="exampleInputPaymentAmount1">Payment Amount</label>
                    <input type="number" class="form-control" id="exampleInputPaymentAmount1" name="payment_amount" placeholder="Enter Payment Amount">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPayoutDetails1">Payout Details</label>
                    <input type="textarea" class="form-control" id="exampleInputPayoutDetails1" name="payout_details" placeholder="Enter Payout Details">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPaymentMethod1">Payment Method</label>
                    <input type="text" class="form-control" id="exampleInputPaymentMethod1" name="payment_method" placeholder="Enter Payment Method">
                  </div>
                  <div class="form-group">
                    <label for="exampleInputPaymentDate1">Payment Date</label>
                    <input type="date" class="form-control" id="exampleInputPaymentDate1" name="payment_date" placeholder="Enter Payment Date">
                  </div>  
                  <div class="form-group">
                    <label for="exampleInputPaymentStatus1">Payment Status</label>
                    <input type="text" class="form-control" id="exampleInputPaymentStatus" name="payment_status" placeholder="Enter Payment Status">
                  </div>
                 
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->

            <!-- general form elements -->
         
            <!-- /.card -->

            <!-- Input addon -->
           
            <!-- /.card -->
            <!-- Horizontal Form -->
            
            <!-- /.card -->

          </div>
          <!--/.col (left) -->
          <!-- right column -->
        
          <!--/.col (right) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <div class="float-right d-none d-sm-block">
      <b>Version</b> 3.1.0-rc
    </div>
    <strong>Copyright &copy; 2014-2020 <a href="https://adminlte.io">AdminLTE.io</a>.</strong> All rights reserved.
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- bs-custom-file-input -->
<script src="plugins/bs-custom-file-input/bs-custom-file-input.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- Page specific script -->
<script>
$(function () {
  bsCustomFileInput.init();
});
</script>
<script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.3/dist/jquery.validate.js"></script>
<script>
    $(document).ready(function(){
        $("#myform").validate();
    });
</script>
<style>
    .error{
        color:red;
    }
</style>
</body>
</html>
