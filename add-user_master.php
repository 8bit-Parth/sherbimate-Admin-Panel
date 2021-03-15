<?php
session_start();
require './class/at-class.php';

if($_POST)
{   //$user_id = $_POST['user_id'];
    $user_name = $_POST['user_name'];
    $user_gender = $_POST['user_gender'];
    $user_email  = $_POST['user_email'];
    $user_mobile  = $_POST['user_mobile'];
    $user_address = $_POST['user_address'];
    
    $q = mysqli_query($connection, "insert into user_master (user_name,user_gender,user_email,user_mobile,user_address)values('{$user_name}','{$user_gender}','{$user_email}','{$user_mobile}','{$user_address}')") or die(mysqli_error($connection));
    
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
  <title>User | Add</title>

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
            <h1>User Form</h1>
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
                <h3 class="card-title">User details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post" id="myform">
                <div class="card-body">
                  <!--<div class="form-group">
                    <label for="exampleInputUserID1">User ID</label>
                    <input type="number" class="form-control" id="exampleInputUserID1" name="user_id" placeholder="Enter User ID">
                  </div>-->
                  <div class="form-group">
                    <label for="exampleInputUserName1">User Name</label>
                    <input type="text" class="form-control" id="exampleInputUserName1" name="user_name" placeholder="Enter User Name" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUserGender1">User Gender</label>
                     <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" Value="Male" name="user_gender" required>
                          <label for="customRadio1" class="custom-control-label">Male</label>
                     </div>
                     <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" Value="Female" name="user_gender" required>
                          <label for="customRadio2" class="custom-control-label">Female</label>
                     </div>
                     
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUserEmail1">User Email</label>
                    <input type="email" class="form-control" id="exampleInputUserEmail1" name="user_email" placeholder="Enter User Email" required>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputUserMobile1">User Mobile</label>
                    <input type="number" class="form-control" id="exampleInputUserMobile1" name="user_mobile" placeholder="Enter User Mobile" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputUserAddress1">User Address</label>
                    <input type="text" class="form-control" id="exampleInputUserAddress1" name="user_address" placeholder="Enter User Address" required>
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

<!-- Hide Arrows From Input Number -->
  <style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
      -webkit-appearance: none;
      margin: 0;
    }

    /* Firefox */
    input[type=number] {
      -moz-appearance: textfield;
    }
  </style>
</body>
</html>





