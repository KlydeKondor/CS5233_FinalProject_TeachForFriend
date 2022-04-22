<?php
include "dbcon.php";
$userid = $_POST['userid'];
$givenName = $_POST['givenName'];
$familyName = $_POST['familyName'];
$number = $_POST['number'];
$eduqual = $_POST['eduqual'];
$query ="update appuser set FirstName='$givenName',LastName='$familyName',number='$number',eduqual='$eduqual'
where userid='$userid'";

$result = mysqli_query($conn,$query);
if($result){
  echo "success";
header('Location:profile.php');
}else{
  echo "not successful";
}

?>
