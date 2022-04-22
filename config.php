<?php
	
	require_once "google-api/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("588399667263-23nef17q7eoa6rib31hlgcqj54hd8jsu.apps.googleusercontent.com");
	$gClient->setClientSecret("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");
	$gClient->setApplicationName("teach for friend");
	$gClient->setRedirectUri("http://localhost/teachforfriend/access.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");
      session_start();
?>
