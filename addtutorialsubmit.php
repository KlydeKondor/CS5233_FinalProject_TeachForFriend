<?php
include "dbcon.php";

$TutorID=$_POST['ID'];
$SubjectID = $_POST['subjectid'];
$Title =  $_POST['Title'];
$Phone = $_POST['Phone'];
$Rating = $_POST['Rating'];
$Link = $_POST['Link'];
$description = $_POST['description'];
$materialurl = $_POST['materialurl'];

if (str_contains($Link, "watch?v=")) {
  $Fix = array("watch?v=" => "embed/");
  $Link = strtr($Link, $Fix);
}

$result = mysqli_query($conn, "insert into tutorial (Title,Phone,Description,Date,Rating,Link,TutorID,SubjectID)

values('$Title','$Phone','$description',Sysdate(),'$Rating','$Link','$TutorID','$SubjectID')");

if($result){
echo "successful";
header('Location:profile.php');
}else{
  echo "not success";
  echo mysqli_error($conn);
}

?>
