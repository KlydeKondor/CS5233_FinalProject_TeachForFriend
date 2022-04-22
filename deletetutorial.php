<?php

include "dbcon.php";
$id= $_GET['topicid'];
$fkSql = "Delete  FROM usertutorial where TutorialID='$id'"; 
$result = mysqli_query($conn, $fkSql);

$sql = "Delete  FROM tutorial where ID='$id'";
$result = mysqli_query($conn,$sql);
if(!$result){
  echo mysqli_error($conn);
}else {
  header('Location:mytutorials.php');
}


?>
