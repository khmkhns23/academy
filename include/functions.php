<?php
date_default_timezone_set("Asia/Bangkok");

function updatepicuser($id,$pathimg){
	$sql = "UPDATE `tableuserfamily` SET img = '$pathimg' WHERE ID = $id";
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


function dashboard($id){

if ($GLOBALS['conn']->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tableuserfamily where ID = $id";
$results = $GLOBALS['conn']->query($sql);
$arr 	= array();
$i =0;
    // output data of each row
    	$result = $results->fetch_assoc();// {
	//  while($result = $results->fetch_array()) {
		foreach($result as $key => $value)
			{
				array_push($arr,[$key => $value]);
				//$arr[$key] = $key;
			}
       
		$i++;
    //}
	
 return $arr;
$GLOBALS['conn']->close();  
}

function dashboards(){

if ($GLOBALS['conn']->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT * FROM tableuserfamily";
$results = $GLOBALS['conn']->query($sql);
$arr 	= array();
$i =0;
    // output data of each row
    while($result = $results->fetch_assoc()) {
        $arr[$i] = array(
				'id' => $result['ID'],
				'tags' => $result['tags'],
				'pid' => $result['IDfather'],
				'name' => $result['THFirstName'],
				'title' => $result['THLastName'],
				'img' => $result['img']
			);
		$i++;
    }
 return $arr;
$GLOBALS['conn']->close();  
}
function changpwd($argpwd,$argnew1,$argnew2,$idnode){
	$return = "$argpwd,$argnew1,$argnew2,$idnode";
	return $return;
}

function updateprofile($postrec){
	$arr 	= array();
	$i=0;
	$msg = "";
	foreach ($postrec as $param_name => $param_val) {
				//$msg.= "Param: $param_name; Value: $param_val<br />\n";
			$arr[$i] = ($param_val == null)?"-":$param_val;
		$i++;
			}
	
	$sql = "UPDATE tableuserfamily SET THFirstName = '$arr[1]',THLastName='$arr[2]',THOldLastName='$arr[3]',";
	$sql .="ENFirstName='$arr[4]',ENLastName='$arr[5]',NicName='$arr[6]',IDfather='$arr[7]',IDmother='$arr[8]',IDhusBand='$arr[9]',";
	$sql .="tags='$arr[10]',Sex='$arr[11]',Birthday='$arr[12]',PlaceOfBirth='$arr[13]',Nationality='$arr[14]',Address='$arr[15]',";
	$sql .="Province='$arr[16]',Country='$arr[17]',Telephone='$arr[18]',Email='$arr[19]',LineID='$arr[20]',OtherID1='$arr[21]',";
	$sql .="OrtherID2='$arr[22]',DeathDay='$arr[23]',Introduce='$arr[24]',NumsGEN='$arr[25]'";
	$sql .=" WHERE ID = '$arr[0]'";
	
	$results = $GLOBALS['conn']->query($sql);
	if($results){
		$rowcount = 1;
	}else{
		$rowcount = 0;
	}
	return $rowcount;
}


















?>