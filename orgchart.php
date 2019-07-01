<?php
session_start();
header("Cache-Control: no-cache, must-revalidate"); header("Pragma: no-cache"); 
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	
<link href="https://fonts.googleapis.com/css?family=Gochi+Hand" rel="stylesheet">
	<style>
	
	#tree {
		width: 100%;
		height: 100%;
		
	}
	</style>

<script>
$(document).ready(function() {
	//dashboard1();
var variable = "<?php $sess = (isset($_SESSION['sesstypeuser'])?$_SESSION['sesstypeuser']:""); echo($sess);?>" ;

	var variablejs = parseInt(variable);
	switch(variablejs){
		case 1 :
			dashboard1();
		break;
		case 2 :
			dashboard2();
		break;
		case 3 :
			dashboard3();
		break;	
		default :
			dashboard3();
	}
		
});
</script>

</head>

<body>
	<div id="tree"></div>
	<?php
		include "administrator/uploads.php";
		include "administrator/profiles.php";
		include "administrator/changpwds.php";
		include "administrator/detail.php";
		include "administrator/marrys.php";
		include "administrator/babys.php";
		include "administrator/uploadsvideo.php";
	?>
</body>
</html>