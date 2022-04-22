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

      <h1 class="my-4">Teach for Friend</h1>
 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">Home</a>
   </li>
   <li class="breadcrumb-item active">View Tutorial</li>
 </ol>

 <?php

 //echo $_GET['ID'];
 if(isset($_GET['topicid'])){
    $id= $_GET['topicid'];
 }
 $sql = "SELECT * FROM tutorial where ID='$id'";
 $result = mysqli_query($conn,$sql);
echo " <div class='row'>";

 $userSql = "SELECT * FROM usertutorial where UserID='" .$_SESSION['id'] ."' AND TutorialID='" .$id ."'";
 $userRes = mysqli_query($conn,$userSql);
 $userRate = "?";
 if (mysqli_num_rows($userRes) > 0) {
   $userRate = mysqli_fetch_assoc($userRes)['Rating'];
 } 
?>

<div class='col-md-4'>


</div>

<?php
if(mysqli_num_rows($result) > 0){
  $tab16 = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
  $tab8 = "&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp";
  $tab4 = "&nbsp&nbsp&nbsp&nbsp";
  while ($row = mysqli_fetch_assoc($result)) {
    
    $overallRating = "Teach for Friend Rating: " .$row['Rating'] ."/5";
    $individualRating = $tab16 .$tab16 .$tab8 .$tab4 ."Your Rating: "; // .$userRate ."/5";

    echo "
      <!-- Post Content Column -->
      <div class='col-md-8'>

        <!-- Preview Image -->
        <div  class='embed-responsive embed-responsive-16by9'>
        <iframe width='auto' height='auto' src='{$row['Link']}'  allowfullscreen></iframe>

        </div>";

        if($row['ID']==$_GET['topicid']){
            if ($row['TutorID'] == $_SESSION['id']) {
              echo "<a href='edittutorial.php?topicid=".$row['ID']."'> <button class='btn btn-primary'>Edit Tutorial</button></a>";
              echo "<a href='deletetutorial.php?topicid=".$row['ID']."'> <button class='btn btn-danger'>Delete Tutorial</button></a>";
              echo "<form method='POST'>"
              .$overallRating
              .$individualRating ."<input type='number' min='1' max='5' maxlength='1' size='1' name='uRating' autocomplete='off' value='"
              .$userRate ."'> <input type='submit' value='Update'></form>";
              //echo "<input id='uRating' type='text' name='name' maxlength ='1' size='1' value=" .$userRate .">/5";
              //echo "<button class='btn btn-primary' onclick='echo " .$ratingSql ."'>Update Rating</button></a>";
            }else {
              echo $tab16 .$tab16 .$overallRating. "<br>";
              echo "<form method='POST'>" .$tab16 .$tab16 .$tab4 .$individualRating
              ."<input type='number' min='1' max='5' maxlength='1' size='1' name='uRating' autocomplete='off' value='" .$userRate ."'>
              <input type='submit' value='Update'></form>";
              //echo "<input id='uRating' name='uRating' type='text' maxlength ='1' size='1' value=" .$userRate .">/5";
              //echo "<button class='btn btn-primary' onclick='echo " .$ratingSql ."'>Update Rating</button></a>";
            }
            
        }
        echo "

        <hr>
        <!-- Date/Time -->
        <p>Posted on  ".$row['Date']."</p>

        <hr>

        <!-- Post Content -->
        <div class='card-body'>
              <h4 class='card-title text-primary'>
                <a>".$row['Title']."</a>
              </h4>
              <p class='card-title text-primary'>Description:<br></p>
              <pre class='card-text'>".$row['Description']."</pre>
              <p class='card-title text-primary'>For Material:</p>
                <p class='card-text'>For Material:<a href='{$row['Link']}' target='_self'><span class='text-success'>Click Here..</span></a></p>
            </div>
        <hr>


    ";
  }
} 

// Check if user has rated this video yet
if ($userRate == "?") {
  // Not rated; insert a new row in UserTutorial
  $ratingSql = "INSERT INTO `usertutorial` (`UserID`, `TutorialID`, `Likes`, `Rating`)"
    ."VALUES ('" .$_SESSION['id'] ."', '" .$id ."', NULL, '4')";

  // Perform the insert
  mysqli_query($conn, $ratingSql);
  
  // Ensure that the tutorial is in usertutorial
  $checkPopulated = "SELECT * FROM usertutorial WHERE TutorialID=" .$id;
  $result = mysqli_query($conn, $checkPopulated);

  // If tutorial exists, get the average rating among users
  if ($result) {
    $getAverage = "SELECT AVG(Rating) AS AvRating FROM usertutorial WHERE TutorialID=" .$id;
    $result = mysqli_query($conn, $getAverage);
    $resValue = mysqli_fetch_assoc($result)['AvRating'];
  }else {
    $resValue = 0;
  }

  // Update the overall rating
  if ($result) {
    $ratingTotal = "UPDATE tutorial SET Rating=$resValue WHERE ID = $id";
    echo $resValue;
    echo $ratingTotal;
    $result = mysqli_query($conn, $ratingTotal);
  }else {
    echo "Didn't work";
  }
  
}else if (isset($_POST['uRating'])) {
  // Row exists; update
  echo "Update";
  $ratingSql = "UPDATE usertutorial SET Rating=" .$_POST['uRating'] ." WHERE UserID=" .$_SESSION['id'] ." AND TutorialID=" .$id;
  
  // Perform the update
  mysqli_query($conn, $ratingSql);

  // Ensure that the tutorial is in usertutorial
  $checkPopulated = "SELECT * FROM usertutorial WHERE TutorialID=" .$id;
  $result = mysqli_query($conn, $checkPopulated);

  // If tutorial exists, get the average rating among users
  if ($result) {
    $getAverage = "SELECT AVG(Rating) AS AvRating FROM usertutorial WHERE TutorialID=" .$id;
    $result = mysqli_query($conn, $getAverage);
    $resValue = mysqli_fetch_assoc($result)['AvRating'];
  }else {
    $resValue = 0;
  }

  // Update the overall rating
  if ($result) {
    $ratingTotal = "UPDATE tutorial SET Rating=$resValue WHERE ID = $id";
    $result = mysqli_query($conn, $ratingTotal);
    echo $resValue;
    echo $ratingTotal;
  }else {
    echo "Didn't work";
  }
}

?>
</div>


 <!-- /.row -->

 </div>














    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
