<?php
include "include/connect.php";
include "include/functions.php";
//$arr = dashboard();
$arr = dashboard($_GET['id']);
//print_r($arr['ID']);
/*
$array = array();

foreach($arr AS $key => $values){
		$lists1 = $values['id'];
		$lists2 = $values['tags'];
		$lists3 = $values['pid'];
		$lists4 = $values['name'];
		$lists5 = $values['title'];
		$lists6 = $values['img'];
	
		$arr2 = array($lists1,["$lists2"],$lists3,$lists4,$lists5,$lists6);
		$arr3 = array($lists1,$lists2,$lists3,$lists4,$lists5,$lists6);
		$array2 = (empty($lists2)?$arr3:$arr2);
		array_push($array,$array2);
}*/

$out = array_values($arr);
echo json_encode($out);

?>
