<?php
session_start();
require './class/at-class.php';

if($_POST)
{   //$worker_id  = $_POST['worker_id '];
    $worker_name = $_POST['worker_name'];
    $service_id  = $_POST['service'];
    $worker_photo  = $_POST['worker_photo'];
    $worker_gender  = $_POST['worker_gender'];
    $worker_email = $_POST['worker_email'];
    $worker_mobile  = $_POST['worker_mobile'];
    $worker_documents = $_POST['worker_documents'];
    $worker_details = $_POST['worker_details'];
    $worker_expertise = $_POST['worker_expertise'];
                        
    $temp = null;                 
    $arr = array();             
    $arr = $_POST['service'];                 
    for($i=0;$i<$arr.sizeof();$i++)
    {
        if($i==0)
        {
            $temp = $temp.$arr[$i];
        }
        else 
        {
            $temp = $temp.",".$arr[$i];
        }
    }
    
    settype(&temp,"string");
   
    $q = mysqli_query($connection, "insert into worker_master (worker_name,worker_photo,worker_gender,worker_email,worker_mobile,worker_documents,worker_details,worker_expertise,service_id)values('{$worker_name}','{$worker_photo}','{$worker_gender}','{$worker_email}','{$worker_mobile}','{$worker_documents}','{$worker_details}','{$worker_expertise}','{$temp}')") or die(mysqli_error($connection));
    
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
  <title>Worker | Add</title>

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
            <h1>Worker Form</h1>
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
                <h3 class="card-title">Worker details</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="post">
                <div class="card-body">
                 
                  <div class="form-group">
                    <label for="exampleInputWorkerName1">Worker Name</label>
                    <input type="text" class="form-control" id="exampleInputWorkerName1" name="worker_name" placeholder="Enter Worker Name" required>
                  </div>
             
                  
                  <div class="form-group">
                    <label for="exampleInputServiceID1">Service ID</label>
                    <!--
                    <select name="service[]" class="form-control" multiple>
                        <?php
                        /*
                            $q = mysqli_query($connection, "select * from service_master") or die(mysqli_error($connection));
                            while($data = mysqli_fetch_array($q))
                            {
                                echo "<option value='{$data['service_id']}'>{$data['service_name']}</option>";
                            }                            
                        */
                         ?>
                         */
                    </select>
                    -->
                    <?php
                        
                        $q = mysqli_query($connection, "select * from service_master") or die(mysqli_error($connection));
                            while($data = mysqli_fetch_array($q))
                            {
                                echo "<br> <input type=checkbox name=service[] value='{$data['service_id']}'> {$data['service_name']}";
                            }
                    
                    ?>
                    
                    
                    
                    
                    
                    
                    
                    
                  
                  </div>
                  
                    <div class="form-group">
                    <label for="exampleInputWorkerPhoto1">Worker Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="worker_photo" required>
                        <label class="custom-file-label" for="exampleInputServicePhotoPath1">Choose file</label>
                      </div>
                    </div>
                    <div class="form-group">
                    <label for="exampleInputWorkerGender1">Worker Gender</label>
                     <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio1" Value="Male" name="worker_gender" required>
                          <label for="customRadio1" class="custom-control-label">Male</label>
                     </div>
                     <div class="custom-control custom-radio">
                          <input class="custom-control-input" type="radio" id="customRadio2" Value="Female" name="worker_gender" required>
                          <label for="customRadio2" class="custom-control-label">Female</label>
                     </div>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputWorkerEmail1">Worker Email</label>
                    <input type="email" class="form-control" id="exampleInputWorkerEmail1" name="worker_email" placeholder="Enter Worker Email" required>
                  </div> 
                  <div class="form-group">
                    <label for="exampleInputWorkerMobile1">Worker Mobile</label>
                    <input type="number" class="form-control" id="exampleInputWorkerMobile1" name="worker_mobile" placeholder="Enter Worker Mobile" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputWorkerDocuments1">Worker Documents</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="exampleInputFile" name="worker_documents" required>
                        <a href="add-worker_master.php"></a>
                        <label class="custom-file-label" for="exampleInputFile">Choose file</label>
                      </div>
                    </div>
                  <div class="form-group">
                    <label for="exampleInputWorkerDetails1">Worker Details</label>
                    <input type="text" class="form-control" id="exampleInputWorkerDetails1" name="worker_details" placeholder="Enter Worker Details" required>
                  </div>
                  <div class="form-group">
                    <label for="exampleInputWorkerExpertise1">Worker Expertise</label>
                    <input type="text" class="form-control" id="exampleInputWorkerExpertise1" name="worker_expertise" placeholder="Enter Worker Expertise">
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






