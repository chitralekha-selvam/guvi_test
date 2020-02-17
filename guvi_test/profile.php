
<?php
include "db.php";
if(!isset($_SESSION['id'])):
  header("location: login.php");
endif;

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ajax Signup</title>
    <link rel="stylesheet" href="https://bootswatch.com/4/materia/bootstrap.min.css">
</head>
<body>
  <div class="container">
  <div class="row">
   <div class="col-md-12">
   <div class="jumbotron">
  <h1 class="display-3">Hello, <?php echo $_SESSION['name']; ?></h1>
  <h1 class="display-3"><p>You are about to finish,just fill the details</p></h1>
  <div class="container">
  <div class="row">
  <div class="col-md-5 mx-auto mt-5">
  <div class="card">
  <div class="card-header">
   <div class="form-group">
  <input type="number" id="age" class="form-control age" placeholder="Age">
  <div class="invalid-feedback" style="font-size:16px;">Age is required</div>
  </div>

  <div class="form-group">
  <input type="varchar" id="contactnumber" class="form-control contactnumber" placeholder="ContactNumber">
  </div>

  <div class="form-group">
  <input type="date" id="dob" class="datepicker" placeholder="DOB" />
  </div>
  
 <a class="btn btn-primary btn-lg" href="last_info.php" role="button">Upload</a>
   <br>
   <br>
   <br>
  <p class="lead">
    <a class="btn btn-primary btn-lg" href="logout.php" role="button">Logout</a>
  </p>
</div>
   </div>
  </div>
  <!-- Close row -->
  </div>
  <!-- Close container -->
</div>
</div>
</div>
</div>
</div>
   <script src="jquery.min.js"></script> 
   <script src="app.js"></script>
</body>
</html>