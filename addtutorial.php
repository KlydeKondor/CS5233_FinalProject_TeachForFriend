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

      <h1 class="my-4">Welcome to Teach for Friend, <?php echo $_SESSION['givenName'] ."&nbsp" .$_SESSION['familyName'] ."!"?></h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="index.php">Home</a>
   </li>
   <li class="breadcrumb-item active">Add Tutorial</li>
 </ol>
 <div class="row">
   <h1>Add Tutorial</h1>
</div>
<div class="row">

 <form class="col-md-10" action="addtutorialsubmit.php" method="post">
   <div class="form-item">
     <label for="UserName">Email Address</label>
     <select class='form-control' id="User" name="ID">
  <option value=''>Select a User</option>
<?php
$sql = "SELECT * FROM appuser WHERE ID =".$_SESSION['id'];
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){

  while ($row = mysqli_fetch_assoc($result)) {
      echo "<option value='" . $row['ID'] ."'>" . $row['UserName'] ."</option>";
  }
}
echo "</select>";
?>
   </div>
<!-- this is to be connected to the database-->
<div class="form-item">
   <br>
   <label for="institution">Select an Institution</label>
   <select class='form-control' id="institution" name="institutionid">
   <option value=''>Existing Institutions...</option>
   <?php

    $sql = "SELECT * FROM institution";
    $result = mysqli_query($conn,$sql);

    if(mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<option value='" . $row['ID'] ."'>" . $row['Name'] ."</option>";
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
   <label for="department">Select the Department</label>
   <select class='form-control' id="department" name="departmentid">
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


<div class="form-item" >
   <br>
   <label for="subject">Select a Subject</label>
  <select class='form-control' id="subject" name="subjectid">
    <option value=''>Existing Subjects...</option>
  <?php
    //$id=$_SESSION['id'];
    $sql = "SELECT * FROM materialsubject";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0){
      while ($row = mysqli_fetch_assoc($result)) {
          echo "<option value='" . $row['ID'] ."'>" . $row['Name'] ."</option>";
      }
    }
    echo "</select>";
  ?>
  <div class="form-control">
  <a class="button-primary" href="addsubject.php" >Add New Subject</a>
  </div>
</div>



   <div class="form-control">
     <label for="Title">Title:</label>
     <input type="text" class="form-control" id="Title"  name="Title" placeholder="Enter the Title" required>
   </div>

   <div class="form-control">
     <label for="Phone">Mobile Number:</label>
     <input type="text" class="form-control" id="Phone"  name="Phone" placeholder="Enter the Mobile Number" required>
   </div>

   <div class="form-control">
     <label for="Link">Topic Embed URL:</label>
     <textarea row="5" class="form-control" id="Link"  name="Link"  placeholder="Paste the Video Embed URL"></textarea>
   </div>
   <div class="form-control">
     <label for="description">Description:</label>
     <textarea row="5" class="form-control" id="description"  name="description"  placeholder="Enter the Tutorial Description"></textarea>
   </div>
   <div class="form-control">
     <label for="Rating">Give Rating:</label>
     <input type="number" min=1 max=5 class="form-control" id="Rating"  name="Rating" placeholder="Enter the Rating for This Tutorial" required>
   </div>
   <div class="form-control">
     <label for="materialurl">Material Embed URL:</label>
     <textarea row="5" class="form-control" id="materialurl"  name="materialurl"  placeholder="Paste the Material URL"></textarea>
   </div>

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
