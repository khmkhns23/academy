<?php
	include"../include/connect.php";
	include"../include/functions.php";

	$getid = 252;

	$return = getfamilynameandid($getid);

print_r($return);

?>