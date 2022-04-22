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

      <h1 class="my-4"> <?php echo $_SESSION['givenName'].$_SESSION['familyName'] ?> <img class="img-fluid rounded-circle" width="30" height="30" src="<?php echo $_SESSION['picture']; ?>"></h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">Home</a>
   </li>
   <li class="breadcrumb-item active">help</li>
 </ol>
 <div class="row">

   <div class="container">
     <div class="card-header"><h2 class="text-primary">How can we help you?</h2></div>
     <div class="card-body">
   <div class="row">
   <form>
  First name: <input type="text"><br><br>
  Last name: <input type="text" name="lastname" ><br><br>
  Email : <input type="text" name="mail" ><br><br>
  Subject: <input type="text" name="lastname" ><br><br>
  Message: <textarea> </textarea><br><br>
  <input type="submit" class="btn btn-success" value="Submit">
</form>  
</div>





   </div>
 </div>

 </div >



 </div>




    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
