<?php
	include"../include/connect.php";
	include"../include/functions.php";

	$gettypeprocess = (isset($_GET['typeprocess'])?$_GET['typeprocess']:'');

	switch($gettypeprocess){
			
		case "resetpass" :
			$return = resetpass($_POST);
			echo($return);
			break;
			
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
		case "delpoint"	:
			$return = delpoint($_POST['id']);
			echo($return);
			break;
		case "addwife" :
			$return = addwifedata($_POST);
			//echo $return;
			print_r($return);
			break;
		case "updatecontent" :
			$return = updatecontent($_POST);
			echo($return);
			break;
		case "updatemanager" :
			$return = updatemg($_POST);
			echo($return);
			break;
		case "addmanager" :
			$return = addmanager($_POST);
			echo($return);
			break;
		case "addbaby" :
			$return = addbabydata($_POST);
			echo($return);
			break;
		case "register" :
			$return = registeruser($_POST);
			echo($return);
			break;
		case "newpwd" :
			$return = newpwds($_POST);
			echo($return);
			break;
			
		
			
	}


?>