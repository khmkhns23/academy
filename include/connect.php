<?php
session_start();
date_default_timezone_set("Asia/Bangkok");

	ini_set('display_errors', 1);
	error_reporting(~0);

   $serverName = "us-cdbr-iron-east-02.cleardb.net";
   $userName = "be2392ff6fd328";
   $userPassword = "0ab1fea6";
   $dbName = "heroku_52e6e3d3c064b9f";
  
   $conn = new mysqli($serverName, $userName, $userPassword, $dbName);
   mysqli_set_charset($conn,"utf8");
	if($conn->connect_error)
	{
		echo "Database Connect Failed.";
	}

	//$conn = null;
?>
