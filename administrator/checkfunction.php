<?php
	include"../include/connect.php";
	include"../include/functions.php";

	$getid = $_GET['id'];

	$return = getidfather($getid);

print_r($return);

?>