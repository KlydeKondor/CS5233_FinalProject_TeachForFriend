<?php
  require_once "config.php";
  include  "dbcon.php";

  if (isset($_SESSION['access_token']))
    $gClient->setAccessToken($_SESSION['access_token']);
  else if (isset($_GET['code'])) {
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
  } else {
    header('Location: login.php');
    exit();
  }

  $oAuth = new Google_Service_Oauth2($gClient);
  $userData = $oAuth->userinfo_v2_me->get();

  $_SESSION['id'] = $userData['id'];
  $_SESSION['email'] = $userData['email'];
  $_SESSION['gender'] = $userData['gender'];
  $_SESSION['picture'] = $userData['picture'];
  $_SESSION['familyName'] = $userData['familyName'];
  $_SESSION['givenName'] = $userData['givenName'];
  $_SESSION['age'] = $userData['age'];
  $_SESSION['MobileNumber']=$userData['number'];

  $id=$_SESSION['id'];
  $givenName=$_SESSION['givenName'];
  $familyName=$_SESSION['familyName'];
  $email=$_SESSION['email'];
  $gender=$_SESSION['gender'];
  $picture=$_SESSION['picture'];
  $age=$_SESSION['age'];
  $number=$_SESSION['MobileNumber'];

  $rset =mysqli_query($conn,"select * from appuser where GmailAddress='$email'");

  //$row= mysqli_fetch_array($rset);

  $user=$rset->fetch_array()['GmailAddress'] ?? '';

  //echo $user;

  if($user==$email){
    $IdRset = mysqli_query($conn,"select ID from appuser where GmailAddress='$email'");
    $DbUserID = $IdRset->fetch_array()['ID'] ?? NULL;
    $_SESSION['id'] = $DbUserID;

  }else{

    $image = base64_encode($picture);

    $r = mysqli_query($conn,"INSERT INTO appuser(UserName,FirstName,LastName,GmailAddress,picture,Age,IsAdministrator) 
    
  
values('$email','$givenName','$familyName','$email','$picture','$age','No')");

  }



 header('Location: profile.php');
  exit();
?>
