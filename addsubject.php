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
   <li class="breadcrumb-item active">Add Subject</li>
 </ol>


 <form class="col-md-10" action="addsubjectsubmit.php" method="POST">
   <div class="form-item">
     <label for="UserName">Email address</label>
     <input type="email" class="form-control" id="UserName" name="UserName" value="<?php echo $_SESSION['email'];?>" readonly>
   </div>
 <!-- this is to be connected to the database-->
  <div class="form-item">
   <br>
   <label for="chapter">Select an Institution</label>
   <select class='form-control' id="chapter" name="chapterid">
   <option value=''>Existing Institutions...</option>
   <?php

    $sql = "SELECT * FROM institution";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<option value='" . $row['Phone'] ."'>" . $row['Name'] ."</option>";
      }
    }
    echo "</select>";
   ?>

    <div class="form-control ">
      <a class="button-primary" href="addinstitution.php" >Add New Institution</a>
    </div>
  </div>

 <div class="form-item" >
   <br>
   <label for="subject">Select the Department</label>
   <select class='form-control' id="department" name="ID">
   <option value=''>Existing Departments...</option>
   <?php
    //$id=$_SESSION['id'];
    $sql = "SELECT * FROM department";
    $result = mysqli_query($conn, $sql);
    if(mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<option value='" . $row['ID'] ."'>" . $row['Name'] ."</option>";
      }
    }
    echo "</select>";
    ?>
    <div class="form-control">
      <a class="button-primary" href="adddepartment.php" >Add New Department</a>
    </div>
</div>

 <div class="form-item">
   <br>
   <label for="subject">Enter the Subject</label>
 <input class="form-control" type="text" placeholder="Enter the New Subject's Name" name="subjectname">
 </div>
   <br>
   <button type="submit" class="btn btn-success">Submit</button>
 </form>


 </div>





    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
