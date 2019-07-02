<?php
	include"../include/connect.php";
	include"../include/functions.php";

	$getid = isset($_GET['id'])?$_GET['id']:"";

	$return = gettags($getid);

echo($return);

?>