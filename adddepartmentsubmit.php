<?php
include "dbcon.php";

$userid = $_POST['UserName'];
$departmentname =$_POST['Name'];
$description=$_POST['Description'];
echo "this is the subject name:".$departmentname;


$result = mysqli_query($conn, "insert into department (Name,Description)
values('$departmentname','$description')");
if($result){
echo "successful";
header('Location:addtutorial.php');
}else{
  echo "not success";
  echo mysqli_error($conn);

}
?>