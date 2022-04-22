<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

  <?php include "title.php"?>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
<!-- this is the sample comment -->
    <!-- Custom styles for this template -->
    <link href="css/modern-business.css" rel="stylesheet">

  </head>


  <body>

    <!-- Navigation -->
    <?php include "profilenavigation.php" ?>
<!-- this is the corosoul -->


    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4"> <?php echo $_SESSION['givenName'].$_SESSION['familyName'] ?></h1>
<?php
$userid = $_GET['UserName'];
$result = mysqli_query($conn,"select * from appuser where UserName='$email'");
$row = mysqli_fetch_assoc($result);


?>
 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">Home</a>
   </li>
   <li class="breadcrumb-item active">profile</li>
 </ol>
 <div class="row">
   <div class="col-lg-4">

     <img class="img-fluid rounded-circle"  height="auto" src="images/teamicon.png"><br>
    <p> <span class="text-primary alert alert-success" role='alert'><?php echo $row['FirstName']." ".$row['LastName']?></span></p>
<!-- view categories-->
<!-- Categories Widget -->


   </div>
   <div class="col-lg-8 ">
    <div class="card">
    <div class="card-header">YOUR DETAILS:</div>
<div class="card-body">
  <a href="editprofile.php" class="link-primary"><button  style="align:right;" class="btn btn-success">Edit Profile</button></a>
      <form>

     <b>mail id:</b><input type="text" class="form-control" value="<?php echo $userid?>" readonly><br>

     <b>firstname:</b>
     <input type="text" class="form-control" value="<?php echo $row['FirstName']?>" placeholder="you have to update your firstname" readonly><br>
     <b>Last Name:</b>
     <input type="text" class="form-control" value="<?php echo $row['LastName']?>" placeholder="you have to update your lastname" readonly><br>

<b>mobile number:</b>
<input type="text" class="form-control" value="<?php echo $row['MobileNumber']?>" placeholder="you need to enter your number" readonly></br>
</div>
    </div>

   </div>



 </div>

    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
