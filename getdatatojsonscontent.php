<?php
include "include/connect.php";
include "include/functions.php";
//$arr = dashboard();
$arr = datacontent($_GET['id']);

//$out = array_values($arr);
//echo json_encode($out);
echo json_encode($arr);
?>
