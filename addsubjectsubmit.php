<?php
include "dbcon.php";

$userid = $_POST['UserName'];
$Name =$_POST['subjectname'];

// Changing relation to many-many
 //$result = mysqli_query($conn, "insert into materialsubject (Name,DepartmentID)
//values('$Name','$departmentID')");

$result = mysqli_query($conn, "insert into materialsubject (Name)
values('$Name')");

if($result){
  // Get the SubjectID that was just inserted via Autoincrement
  $autoIncID = mysqli_insert_id($conn);
  
  // Insert the keys into departmentsubject
  //$result = mysqli_query($conn, "insert into departmentsubject (DepartmentID, SubjectID)
  //values('$departmentID', '$autoIncID')");

  echo "successful";
header('Location:addtutorial.php');
}else{
  echo "not success";
  echo mysqli_error($conn);

}
?>
