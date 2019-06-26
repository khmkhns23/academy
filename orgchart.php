<?php
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
		dashboard1();
});
</script>

</head>

<body>
	<div id="tree"></div>
	<?php
		include "administrator/uploads.php";
		include "administrator/profiles.php";
		include "administrator/changpwds.php";
		include "administrator/marrys.php";
		include "administrator/babys.php";
	?>
</body>
</html>