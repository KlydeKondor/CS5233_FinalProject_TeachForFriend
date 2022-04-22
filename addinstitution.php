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

      <h1 class="my-4"></h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">Home</a>
   </li>
   <li class="breadcrumb-item active">Add Institution</li>
 </ol>


 <form class="col-md-10" action="addinstitutionsubmit.php"  method="POST">
   <div class="form-item">
     <label for="UserName">Email address</label>
     <input type="email" name="UserName" class="form-control" id="UserName" value="<?php echo $_SESSION['email'];?>" readonly>
   </div>

 <div class="form-item">
   <label for="institution">enter the institution</label>
 <input class="form-control" type="text" placeholder="Enter the institution" name="Name">
 <label for="institution">enter the phone</label>
 <input class="form-control" type="tel"  id="Phone"  pattern="[0-9]{3}-[0-9]{3}-[0-9]{4}"  required placeholder="Enter the Phone" name="Phone">

 
 </div>




   <button type="submit" class="btn btn-success">Submit</button>
 </form>







    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
