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
<!-- logout code-->
<?php
	//require_once "config.php";
  include('config.php');
	//session_unset($_SESSION['access_token']);
  $accesstoken=$_SESSION['access_token'];
	$gClient->revokeToken($accesstoken);
	session_destroy();
	//header('Location: signin.php');
  header('Location: index.php');
	exit();
?>

  <body>

    <!-- Navigation -->
    <?php include "navigation.php" ?>
<!-- this is the corosoul -->


    <!-- Page Content -->
    <div class="container">

      <h1 class="my-4">you signed out  < username ></h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="index.php">Home</a>
   </li>
   <li class="breadcrumb-item active">signout</li>
 </ol>









    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
