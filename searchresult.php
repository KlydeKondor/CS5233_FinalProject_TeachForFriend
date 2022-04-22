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

      <h1 class="my-4">teach for friend</h1>
 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="home.php">Home</a>
   </li>
   <li class="breadcrumb-item active">your search result for <?php echo $_POST['search'];?></li>
 </ol>
<div class='row'>
 <?php
 $search = $_POST['search'];
 $sql = "select * from appuser,tutorial where appuser.UserName like '%$search%' or appuser.FirstName like '%$search%' or appuser.LastName like '%$search%' or tutorial.Title like '%$search%' LIMIT  1";
 $result = mysqli_query($conn,$sql);
 if(!$result){
  echo "query not successfully executed".mysqli_error($conn);
}else{

if(mysqli_num_rows($result) > 0 ){
  while ($row = mysqli_fetch_assoc($result)) {
 if (str_contains($row['UserName'],$search) || str_contains($row['FirstName'],$search) || str_contains($row['LastName'],$search))
 {
  echo "<div class='col-lg-4 col-sm-6 portfolio-item'>
  <div class='card h-100'>
    <a href='viewusertutorial.php?topicid=".$row['ID']."'>";
    echo "<div  class='img-responsivonsive'>
<img src='images/teamicon.png'>
    </div>"."</a>".
"       <div class='card-body'>
      <h4 class='card-title'>
      <a href='viewusertutorial.php?topicid=".$row['ID']."'>".$row['FirstName'].$row['LastName']."</a>
      </h4>
      
    </div>
  </div>
</div>";
 }
 else
 {
  echo "<div class='col-lg-4 col-sm-6 portfolio-item'>
  <div class='card h-100'>
  <a href='viewtutorial.php?topicid=".$row['ID']."'>";
  echo "<div style='pointer-events:none;' class='embed-responsive embed-responsive-16by9'>
    <iframe class='embed-responsive-item' src='{$row['Link']}' allowfullscreen></iframe>
    </div>"."</a>".
    "<div class='card-body'>
      <h4 class='card-title'>
        <a href='viewtutorial.php?topicid=".$row['ID']."'>".$row['Title']."</a>
      </h4>
    <p class='card-text'>".$row['Description']."</p>
  </div>
</div>
</div>";
}
 }
    
  
}else{
       echo "<div class='alert alert-danger'><strong>SORRY!</strong>no results matching your search.
        probably you need to try for an alternative search.<br><strong>sorry!!</strong>sorry for the inconvenience.</div>";
}

}
?>
 </div>


    <!-- Footer -->
  <?php include "footer.php" ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  </body>

</html>
