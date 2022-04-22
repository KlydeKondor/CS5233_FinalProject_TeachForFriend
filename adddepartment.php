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
   <li class="breadcrumb-item active">Add Department</li>
 </ol>


 <form class="col-md-10" action="adddepartmentsubmit.php" method="POST">
   <div class="form-item">
     <label for="UserName">Email address</label>
     <input type="email" class="form-control" id="UserName" name="UserName" value="<?php echo $_SESSION['email'];?>" readonly>
   </div>
 <!-- this is to be connected to the database-->

 <div class="form-item" >
   <label for="institution">select an Institution</label>
<select class='form-control' id="institution" name="ID">
  <option value=''>select an Institution</option>
<?php
//$id=$_SESSION['id'];
$sql = "SELECT * FROM institution";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){

while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['ID'] ."'>" . $row['Name'] ."</option>";
}
}
echo "</select>";
?>
 <div class="form-item">
   <label for="department">enter the Department</label>
 <input class="form-control" type="text" placeholder="enter the Department" name="Name">
 </div>
 <div class="form-item">
   <label for="department">enter the Description</label>
 <input class="form-control" type="text" placeholder="enter the Department" name="Description">
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
