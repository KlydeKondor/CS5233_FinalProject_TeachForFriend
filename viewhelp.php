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


 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">Home</a>
   </li>
   <li class="breadcrumb-item active">viewhelp</li>
 </ol>

 <?php
 if(isset($_GET['topicid'])){
 $topicid= $_GET['topicid'];
}
 $sql = "SELECT * FROM topics where topicid='$topicid'";
 $result = mysqli_query($conn,$sql);

?>


<?php
if(mysqli_num_rows($result) > 0){

while ($row = mysqli_fetch_assoc($result)) {

   echo "


       <!-- Preview Image -->
       <div  class='embed-responsive embed-responsive-16by9'>
       <iframe width='auto' height='auto' src='{$row['topicurl']}'
allowfullscreen></iframe>


       </div>";
       if($row['userid']==$email){
           echo "    <a href='edittutorial.php?topicid=".$row['topicid']."'> <button class='btn btn-primary'>Edit Tutorial</button> </a>";
       }
       echo "

       <hr>
       <!-- Date/Time -->
       <p>Posted on  ".$row['date']."</p>

       <hr>

       <!-- Post Content -->
       <div class='card-body'>
            <h4 class='card-title text-primary'>
              <a>".$row['topicname']."</a>
            </h4>
            <p class='card-title text-primary'>Description:<br></p>
            <p class='card-text'>".$row['description']."</p>

       <hr>


   ";
 }
}
?>
</div>


 <!-- /.row -->



    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
