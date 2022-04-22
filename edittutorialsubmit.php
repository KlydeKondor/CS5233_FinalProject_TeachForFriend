<?php
include "dbcon.php";
$topicid=$_POST['topicid'];
$userid = $_POST['userid'];
$topicname = $_POST['topicname'];
$topicurl = $_POST['Link'];
$description = $_POST['description'];
$materialurl = $_POST['Link'];

$result = mysqli_query($conn,"update tutorial set Title='$topicname',
Link='$topicurl' ,description = '$description' where ID='$topicid'");
if($result){
  echo "success";
  header('Location:viewtutorial.php?topicid='.$topicid);
}else{
  echo "not successful";
  echo mysqli_error($conn);
}

?>
