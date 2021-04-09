<?php
session_start();
require './class/at-class.php';

if($_GET)
{

    $editid = $_GET['feedback_id'];
 
 if(!isset($_GET['feedback_id']) || empty($_GET['feedback_id']))
 {
     header("location:display-feedback_master.php");
 }

$selectq = mysqli_query($connection, "select  * from feedback_master where feedback_id='{$editid}'") or die(mysqli_error($connection));
$selectrow = mysqli_fetch_array($selectq);
print_r($selectrow);

 $msg = "";
 
if($_POST)
{   
    $feedback_id = $_POST['feedback_id'];
    $worker_id = $_POST['worker_id'];
    $user_id  = $_POST['user_id'];
    $feedback_details = $_POST['feedback_details'];
    $feedback_date = $_POST['feedback_date'];
    
    
    $query = mysqli_query($connection, "update feedback_master set worker_id='{$worker_id}',user_id='{$user_id}',feedback_details='{$feedback_details}',feedback_date='{$feedback_date}' where feedback_id='{$feedback_id}'") or die(mysqli_error($connection));
    header("location:display-feedback_master.php");

    
    if($query)
    {
        echo "<script>alert('Record Updated');window.location='display-feedback_master.php'</script>"; 
    }
}
}
 else {
    header("Location: display-feedback_master.php");
    exit;
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Feedback | Edit</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  
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
            <h1>Feedback Form</h1>
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
                <h3 class="card-title">Edit Feedback details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form name="update" role="form" action="" method="post" id="myform">
                <input type="hidden" name="feedback_id" value="<?php if($_GET){ echo $selectrow['feedback_id'];} ?>">
                  <div class="form-group">
                    <label for="exampleInputFeedbackDetails1">Feedback Details</label>
                    <input type="textarea" class="form-control" id="exampleInputFeedbackDetails1" name="feedback_details" value="<?php if($_GET){ echo $selectrow['feedback_details'];}?>" placeholder="Enter Feedback Details" required>
                  </div>
                  <div class="form-group">
                      <label for="exampleInputFeedbackDate1">Feedback Date</label> 
                    <input type="date" class="form-control" id="exampleInputFeedbackDate1" name="feedback_date" value="<?php if($_GET){ echo $selectrow['feedback_date'];}?>" placeholder="Enter Feedback Date" required>
                  </div>                <!-- /.card-body -->

                <div class="card-footer">
                    <input type="submit" value="Update" class="btn btn-primary">
                    <input type ="reset" value="Reset Form" class="btn btn-danger">
                  <button type="button" onclick="window.location='display-feedback_master.php';" class="btn btn-info">View</button> 
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
    <strong>Copyright &copy; 2020-2021 <a href="#">SHERBIMET CORPORATION</a>.</strong> All rights reserved.
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
