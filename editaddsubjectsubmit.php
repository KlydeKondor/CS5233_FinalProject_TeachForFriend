
<?php
include "dbcon.php";
$chaptername =$_POST['subjectname'];
$userid = $_POST['userid'];
$subjectname =$_POST['subjectname'];
$topicid=$_GET['topicid'];


$result = mysqli_query($conn, "insert into subjects (userid,subjectname)
values('$userid','$subjectname')");
if($result){
echo "successful";
header("Location:edittutorial.php?topicid='$topicid'");
}else{
  echo "not success";
  echo mysqli_error($conn);

}
?>
