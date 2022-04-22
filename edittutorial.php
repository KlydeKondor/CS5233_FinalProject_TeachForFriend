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

      <h1 class="my-4">Welcome to Teach for Friend, <?php echo $_SESSION['givenName'] ."&nbsp" .$_SESSION['familyName'] ."!" ?></h1>

 <ol class="breadcrumb">
   <li class="breadcrumb-item">
     <a href="index.php">Home</a>
   </li>
   <li class="breadcrumb-item active">Edit Tutorial</li>
 </ol>
 <div class="row">
   <h1>Edit Tutorial</h1>
</div>
<div class="row">
<?php
$topicid = $_GET['topicid'];

$query="select * from tutorial where ID = $topicid";
$result = mysqli_query($conn,$query);
$r=mysqli_fetch_assoc($result);
$materialurl = $r['Link'];
$description = $r['Description'];
$topicurl = $r['Link'];
$topicname=$r['Title'];
?>
 <form class="col-md-10" action="edittutorialsubmit.php" method="post">
   <div class="form-item">
     <label for="userid">Email address</label>
     <input type="email" class="form-control" id="userid" name="userid" value="<?php echo $_SESSION['email'];?>" readonly>
     <input type="hidden" value="<?php echo $topicid;?>" name="topicid">
   </div>
<!-- this is to be connected to the databas-->
<div class="form-item" >
   <label for="subject">Select a Subject</label>
<select class='form-control' id="subject" name="subjectid">
  <option value=''>Existing Subjects...</option>
<?php
$email = $_SESSION['email'];
$sql = "SELECT * FROM materialsubject,tutorial  where materialsubject.ID=tutorial.subjectID  and tutorial.ID='$topicid'";
$result = mysqli_query($conn,$sql);
if(mysqli_num_rows($result) > 0){

while ($row = mysqli_fetch_assoc($result)) {
    echo "<option value='" . $row['ID'] ."'>" . $row['Name'] ."</option>";
}
}
echo "</select>";
?>
<div class="form-control">
<a class="button-primary" href="editaddsubject.php?topicid='<?php echo $topicid?>'" >Add New Subject</a>
</div>
</div>

</div>

   <div class="form-control">
     <label for="tname">Topic Name:</label>
     <input type="text" class="form-control" id="tname"  name="topicname"  value="<?php echo $topicname;?>" placeholder="Enter the Topic Name" required>
   </div>

   <div class="form-control">
     <label for="turl">Topic embed url:</label>
     <textarea row="5" class="form-control" id="turl"  name="Link"  placeholder="Paste the Video Embed URL"><?php echo $topicurl;?></textarea>
   </div>
   <div class="form-item">
     <label for="description">Description:</label>
     <textarea row="5" class="form-control" id="description"  name="description"  placeholder="Enter the Tutorial Description" ><?php echo $description;?></textarea>
   </div>
   <div class="form-item">
     <label for="murl">Material Embed URL:</label>
     <textarea row="5" class="form-control" id="turl"  name="Link"  placeholder="Paste the Material URL"><?php echo $materialurl;?></textarea>
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
