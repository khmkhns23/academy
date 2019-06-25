<?php
date_default_timezone_set("Asia/Bangkok");

function updatepicuser($id,$pathimg){
	$sql = "UPDATE `tbfamiry` SET img = '$pathimg' WHERE id = $id";
	$results = $GLOBALS['conn']->query($sql);
	if($results){
		$rowcount = 1;
	}else{
		$rowcount = 0;
	}
	return $rowcount;
}


function dashboard2(){
	
	$sql = "SELECT * FROM tbfamiry LIMIT 0,25";
	
	$stmt = $GLOBALS['conn']->prepare($sql);
	$stmt->execute();
	$arr 	= array();
	$i = 0;
	while($result = $stmt->fetch( PDO::FETCH_ASSOC ))
	{
	$arr[$i] = array(
				'id' => $result['id'],
				'tags' => $result['tags'],
				'name' => $result['name'],
				'img' => $result['img']
			);
			$i++;
		}
   return $arr;
}


function dashboard(){

if ($GLOBALS['conn']->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tbfamiry";
$results = $GLOBALS['conn']->query($sql);
$arr 	= array();
$i =0;
    // output data of each row
    while($result = $results->fetch_assoc()) {
        $arr[$i] = array(
				'id' => $result['id'],
				'tags' => $result['tags'],
				'pid' => $result['pid'],
				'name' => $result['name'],
				'title' => $result['title'],
				'img' => $result['img']
			);
		$i++;
    }
 return $arr;
$GLOBALS['conn']->close();  
}
?>