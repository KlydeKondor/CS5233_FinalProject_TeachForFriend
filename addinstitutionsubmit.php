<?php
include "dbcon.php";
$Name =$_POST['Name'];
$Phone =$_POST['Phone'];



$result = mysqli_query($conn,"INSERT INTO institution (Name,Phone)
values('$Name','$Phone')");
if($result){
echo "successful";
header('Location:addtutorial.php');
}else{
  echo "not success";
  echo mysqli_error($conn);

}
?>
