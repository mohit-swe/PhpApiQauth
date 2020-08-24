<?php
	session_start();
	require_once "API/vendor/autoload.php";
	$gClient = new Google_Client();
	$gClient->setClientId("17748484-22rnbfkeopvjo3r8so2jicpkhvdbsooc.apps.googleusercontent.com");
	$gClient->setClientSecret("6k1gL48494l6O3K69cXoazvE");
	$gClient->setApplicationName("mohitclouds");
	$gClient->setRedirectUri("http://localhost/gfetchapp/g-callback.php");
	$gClient->addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email");	
	$con = new mysqli('localhost', 'root','' ,'googlelogin');
    if ($con->connect_error) {
    die("Connection failed: " . $con->connect_error);
}	
?>