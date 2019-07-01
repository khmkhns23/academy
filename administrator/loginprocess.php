<?php
	include"../include/connect.php";
	include"../include/functions.php";

	$user = (isset($_POST['usr'])?$_POST['usr']:"");
	$pwd = (isset($_POST['pwd'])?$_POST['pwd']:"");

	$showstatus = checklogin($user,$pwd);
	
	echo($showstatus);

?>