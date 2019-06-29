<?php
	include"../include/connect.php";
	include"../include/functions.php";

	$gettypeprocess = (isset($_GET['typeprocess'])?$_GET['typeprocess']:'');

	switch($gettypeprocess){
			
		case "changpwd" :
			
			$return = changpwd($_POST['oldpwd'],$_POST['newpwd'],$_POST['cfnewpwd'],$_POST['idnode']);
			echo $return;
			break;
			
		case "update" :
			/*foreach ($_POST as $param_name => $param_val) {
				echo "Param: $param_name; Value: $param_val<br />\n";
			}*/
			$return = updateprofile($_POST);
			echo $return;
			break;
			
	}


?>