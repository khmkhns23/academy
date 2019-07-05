<?php
date_default_timezone_set("Asia/Bangkok");
define("urlweb","http://academyyut.herokuapp.com");
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

function delpoint($postget){
	$sql = "DELETE FROM tableuserfamily WHERE ID ='$postget'";
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
function changpwd($argnew1,$argnew2,$idnode){
	//$sql = "SELECT ID FROM tableuserfamily WHERE ID = $idnode AND PwdUser = '".md5($argpwd)."'";
	//$result = $GLOBALS['conn']->query($sql);
	//if($result->num_rows <> 0){
		$msg = "";
		$pwd1 = filter_var($argnew1, FILTER_SANITIZE_STRING);
		$pwd2 = filter_var($argnew2, FILTER_SANITIZE_STRING);
		if($pwd1 !== $pwd2){
			$msg .= "รหัสผ่านใหม่ไม่เหมือนกัน<br>";
		}else{
			$pwdgen = md5($pwd1);
			$sqlchang = "UPDATE tableuserfamily SET PwdUser = '$pwdgen' WHERE ID = $idnode";
			$resultchang = $GLOBALS['conn']->query($sqlchang);
			if($resultchang){
				$msg .= "เปลี่ยนรหัสผ่านเรียบร้อย";
			}else{
				$msg .="เกิดข้อผิดพลาดในการเปลี่ยนรหัสผ่าน";
			}
		}
	/*}else{
		$msg = "คุณใส่รหัสเดิมไม่ถูกต้อง";
	}*/
	//return $sql;
	return $msg;
}

function updateprofile($postrec){
	$arr 	= array();
	$i=0;
	$msg = "";
	foreach ($postrec as $param_name => $param_val) {
				//$msg.= "Param: $param_name; Value: $param_val<br />\n";
			$arr[$i] = ($param_val == null)?"":$param_val;
		$i++;
			}
	$tags = gettags($arr[9]);
	$sql = "UPDATE tableuserfamily SET THFirstName = '$arr[1]',THLastName='$arr[2]',THOldLastName='$arr[3]',";
	$sql .="ENFirstName='$arr[4]',ENLastName='$arr[5]',NicName='$arr[6]',IDfather='$arr[7]',IDmother='$arr[8]',IDhusBand='$arr[9]',";
	$sql .="tags='$tags',Sex='$arr[11]',Birthday='$arr[12]',PlaceOfBirth='$arr[13]',Nationality='$arr[14]',Address='$arr[15]',";
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
function updatemg($postmg){
	$arr 	= array();
	$i=0;
	$msg = "";
	foreach ($postmg as $param_name => $param_val) {
				//$msg.= "Param: $param_name; Value: $param_val<br />\n";
			$arr[$i] = ($param_val == null)?"-":$param_val;
		$i++;
		}
	
	$sql = "UPDATE tablemanagerofgens SET title = '$arr[1]',detail='$arr[2]',numsgen='$arr[3]',";
	$sql .= "update_at= NOW()";
	$sql .=" WHERE ID = '$arr[0]'";
	
	$results = $GLOBALS['conn']->query($sql);
	if($results){
		$rowcount = 1;
	}else{
		$rowcount = 0;
	}
	return $rowcount;
	
	
}
function updatecontent($postct){
	$arr 	= array();
	$i=0;
	$msg = "";
	foreach ($postct as $param_name => $param_val) {
			$arr[$i] = ($param_val == null)?"-":$param_val;
		$i++;
		}
	$sqlupdatect = "UPDATE tablecontent SET title = '$arr[1]',subtitle = '$arr[2]',content = '$arr[3]',update_time = NOW() WHERE ID = '$arr[0]'";
	$results = $GLOBALS['conn']->query($sqlupdatect);
	if($results){
		$rowcount = 1;
	}else{
		$rowcount = 0;
	}
	return $rowcount;
	
}
function addbabydata($getdata){
	$i=0;
	foreach ($getdata as $param_name => $param_val) {
			$para[$i] = filter_var($param_val, FILTER_SANITIZE_STRING);
		$i++;
	}
	$idfather = getidfather($para[0]);
	//$damother = getidmother();
	$datafather = getfamilynameandid($para[0]);
	$md5pwd = md5(1234);
	$sqlinsertbaby = "INSERT INTO tableuserfamily (FamilyName,FamilyID,THFirstName,THLastName,THOldLastName,ENFirstName,ENLastName,NicName,IDfather,img,PwdUser) VALUES ('$datafather[0]','$datafather[1]','$para[1]','$para[2]','$para[3]','$para[4]','$para[5]','$para[6]','$idfather','img/upload/avatar.png','$md5pwd')";
	$resultbaby = $GLOBALS['conn']->query($sqlinsertbaby);
		if($resultbaby){
			$return = "เพิ่มข้อมูลเรียบร้อย";
		}else{
			$return = "ไม่สามารถเพิ่มข้อมูลได้";
		}
	return $return;
	//return $sqlinsertbaby;
}
function getidfather($id){
	$sql = "SELECT IDhusBand AS idh FROM tableuserfamily WHERE ID = $id";
	$results = $GLOBALS['conn']->query($sql);
	$data =  $results->fetch_assoc();
	if($data['idh'] == null or $data['idh'] == 0){
		$IDhusband = $id;
	}else{
		$IDhusband = $data['idh'];
	}
	return $IDhusband;
}
function addwifedata($getaddwife){
	$arr 	= array();
	$i=0;
	$msg = "";
	foreach ($getaddwife as $param_name => $param_val) {
				$para[$i] = filter_var($param_val, FILTER_SANITIZE_STRING);
		$i++;
	}
	$datafather = getfamilynameandid($para[0]);
	$tags = gettags($para[0]);
	$md5pwd = md5(1234);
	$sqlinsertwife = "INSERT INTO tableuserfamily (FamilyName,FamilyID,THFirstName,THLastName,THOldLastName,ENFirstName,ENLastName,NicName,IDhusBand,tags,Sex,img,PwdUser) VALUES ('$datafather[0]','$datafather[1]','$para[1]','$para[2]','$para[3]','$para[4]','$para[5]','$para[6]','$para[0]','$tags','F','img/upload/avatar.png','$md5pwd')";
	$resultmarry = $GLOBALS['conn']->query($sqlinsertwife);
		if($resultmarry){
			$return = "เพิ่มข้อมูลภรรยาเรียบร้อย";
		}else{
			$return = "ไม่สามารถเพิ่มข้อมูลภรรยาได้";
		}
	return $return;
	//return $sqlinsertwife;
}
function addmanager($gatdatamg){
	$i =0;
	foreach($gatdatamg as $param_name => $param_val ){
		$para[$i] = filter_var($param_val, FILTER_SANITIZE_STRING);
		$i++;
	}
	$sql = "INSERT INTO tablemanagerofgens (title,detail,img,numsgen,creat_at) VALUES ('$para[0]','$para[1]','$para[3]','$para[2]',NOW())";
	$result = $GLOBALS['conn']->query($sql);
		if($result)	{
			$return = "เพิ่มข้อมูลเรียบร้อย";
		}else{
			$return = "ไม่สามารถเพิ่มข้อมูลได้";
		}
	return $return;
}
function gettags($idhusband){
	$sql = "SELECT tags FROM tableuserfamily WHERE ID = '$idhusband' ";
	$resulthus = $GLOBALS['conn']->query($sql);
	//$resulthuss = $resulthus->num_rows; 
	$rep = "";
	$resultttt = $resulthus->fetch_array();
	if(empty($resultttt[0])){
		$sql = "SELECT MAX(tags) FROM tableuserfamily";
		$results = $GLOBALS['conn']->query($sql);
		$result = $results->fetch_array();
		$rep = intval(str_replace("f","",$result[0]));
		$tags = "f".($rep+1);
		$sqlupdatehus = "UPDATE tableuserfamily SET tags = '$tags' WHERE ID = '$idhusband'";
		$resulthus = $GLOBALS['conn']->query($sqlupdatehus);
	}else{
		$tags = $resultttt[0];
	}
	return $tags;
	//return($resultttt[0]);
}
function listcontent(){
	$sql = "SELECT * FROM tablecontent";
	$result = $GLOBALS['conn']->query($sql);
	$arr = [];
	$i = 0;
	while($data = $result->fetch_assoc() ){
		$arr[$i] = array(
				'id' => $data['ID'],
				'img1' => $data['img1'],
				'img2' => $data['img2'],
				'img3' => $data['img3'],
				'title' => $data['title'],
				'subtitle' => $data['subtitle'],
				'content' => $data['content'],
				'creat_time' => $data['creat_time'],
				'update_time' => $data['update_time'],
				'creat_by' => $data['creat_by']
			);
		$i++;
	}
	return $arr;
}
function datacontent($idcontent){
	$sql = "SELECT * FROM tablecontent WHERE ID='$idcontent'";
	$result = $GLOBALS['conn']->query($sql);
	$data = $result->fetch_assoc();
	
	$arr = array('id'=>$data['ID'],'img1'=>$data['img1'],'img2'=>$data['img2'],'img3'=>$data['img3'],'title'=>$data['title'],'subtitle'=>$data['subtitle'],'content'=>$data['content'],'creat_time'=>$data['creat_time'],'update_time'=>$data['update_time'],'creat_by'=>$data['creat_by']);
	
	return $arr;
	
}
function listmanagergens(){
	$sql = "SELECT * FROM tablemanagerofgens";
	$result = $GLOBALS['conn']->query($sql);
	$arr = [];
	$i = 0;
	while($data = $result->fetch_assoc() ){
		$arr[$i] = array(
				'id' => $data['ID'],
				'title' => $data['title'],
				'detail' => $data['detail'],
				'img' => $data['img'],
				'numsgen' => $data['numsgen'],
				'creat_time' => $data['creat_at'],
				'update_time' => $data['update_at'],
				'creat_by' => $data['creat_by']
			);
		$i++;
	}
	return $arr;
}
function datamanager($idmanager){
	$sql = "SELECT * FROM tablemanagerofgens WHERE ID='$idmanager'";
	$result = $GLOBALS['conn']->query($sql);
	$data = $result->fetch_assoc();
	
	$arr = array('id'=>$data['ID'],'img'=>$data['img'],'title'=>$data['title'],'detail'=>$data['detail'],'numsgen'=>$data['numsgen'],'creat_time'=>$data['creat_at'],'update_time'=>$data['update_at'],'creat_by'=>$data['creat_by']);
	
	return $arr;
	
}
function datagensnum(){
	$sqlcountgent = "SELECT MAX(numsgen) AS maxgen FROM tablemanagerofgens";
	$result = $GLOBALS['conn']->query($sqlcountgent);
	$countgens = $result->fetch_assoc();
	$returns = $countgens['maxgen'];
	
	return $returns;
	
}
function getdatabygens($idgens){

		$sqlgetdata = "SELECT * FROM tablemanagerofgens WHERE numsgen = '$idgens'";
		$result = $GLOBALS['conn']->query($sqlgetdata);
		$i = 0;
		while($data = $result->fetch_assoc() ){
			$arr[$i][] = array(
					'id' => $data['ID'],
					'title' => $data['title'],
					'detail' => $data['detail'],
					'img' => $data['img'],
					'numsgen' => $data['numsgen']
				);
		}
	return $arr;
}
function updatepiccontent($id,$field,$pathimg){
	$imgss = "img".$field;
	
	$sql = "UPDATE `tablecontent` SET $imgss = '$pathimg' WHERE ID = $id";
	$results = $GLOBALS['conn']->query($sql);
	if($results){
		$rowcount = 1;
	}else{
		$rowcount = 0;
	}
	return $rowcount;
}

function checklogin($usr,$pwd){
	$pwdencode = md5($pwd);
	$sql = "SELECT ID,THFirstName,THLastName,Telephone,Email,LineID,Typeuser FROM tableuserfamily WHERE Email = '$usr' AND PwdUser = '$pwdencode'";
	$results = $GLOBALS['conn']->query($sql);
	$data = $results->fetch_assoc();
	if($results->num_rows > 0){
		$rowcount = 1;
			$_SESSION['sessuser'] = $data['Email'];
			$_SESSION['sessid'] = $data['ID'];
			$_SESSION['sessfirstname'] = $data['THFirstName'];
			$_SESSION['sesslastname'] = $data['THLastName'];
			$_SESSION['sesstelephone'] = $data['Telephone'];
			$_SESSION['sesslineid'] = $data['LineID'];
			$_SESSION['sesstypeuser'] = $data['Typeuser'];
	}else{
		$rowcount = 0;
	}
	//return $sql;
	return $rowcount;
}
function getreport(){
	$sql = "SELECT * FROM tableuserfamily";
	$results = $GLOBALS['conn']->query($sql);
	$arr = [];
	$i = 0;
	while($data = $results->fetch_assoc() ){
		$arr[$i] = array(
				'id' => $data['ID'],
				'thfirstname' => $data['THFirstName'],
				'thlastname' => $data['THLastName'],
				'province' => $data['Province'],
				'nicname' => $data['NicName'],
				'telephone' => $data['Telephone'],
				'numsgen' => $data['NumsGEN']
			);
		$i++;
	}
	return $arr;	
	
}
function getreportorderby($orderby){
	$sql = "SELECT * FROM tableuserfamily ORDER BY $orderby";
	$results = $GLOBALS['conn']->query($sql);
	$arr = [];
	$i = 0;
	while($data = $results->fetch_assoc() ){
		$arr[$i] = array(
				'id' => $data['ID'],
				'thfirstname' => $data['THFirstName'],
				'thlastname' => $data['THLastName'],
				'province' => $data['Province'],
				'nicname' => $data['NicName'],
				'telephone' => $data['Telephone'],
				'numsgen' => $data['NumsGEN']
			);
		$i++;
	}
	return $arr;	
	
}
function getreportbysex($sex){
	$sql = "SELECT * FROM tableuserfamily WHERE sex LIKE '$sex'";
	$results = $GLOBALS['conn']->query($sql);
	$arr = [];
	$i = 0;
	$count = $results->num_rows;
	while($data = $results->fetch_assoc() ){
		//$j = $i+1;
		$arr[$i] = array(
				'id' => $data['ID'],
				'thfirstname' => $data['THFirstName'],
				'thlastname' => $data['THLastName'],
				'province' => $data['Province'],
				'telephone' => $data['Telephone'],
				'sum' => $count
			);
		$i++;
	}
	return $arr;
}
function registeruser($getdata){
	$i=0;
	foreach ($getdata as $param_name => $param_val) {
			$para[$i] = filter_var($param_val, FILTER_SANITIZE_STRING);
		$i++;
	}
	$famalyidmax = getfamilyIDmax();
	$pwdencode = md5($para[6]);
	
	$sqlregister = "INSERT INTO tableuserfamily (FamilyName,THFirstName,THLastName,ENFirstName,ENLastName,NicName,Email,PwdUser,Typeuser,FamilyID,SID,Active) VALUES ('$para[0]','$para[1]','$para[2]','$para[3]','$para[4]','$para[5]','$para[6]','$pwdencode','2','$famalyidmax','".session_id()."','No')";
	$resultuser = $GLOBALS['conn']->query($sqlregister);
	$Uid = $GLOBALS['conn']->insert_id;
	
		if($resultuser){
			$url = urlweb; 

			require_once('class.phpmailer.php');
			$mail = new PHPMailer();
			$mail->CharSet = "utf-8";
			$mail->IsHTML(true);
			$mail->IsSMTP();
			$mail->SMTPAuth = true; // enable SMTP authentication
			$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
			$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
			$mail->Port = 465; // set the SMTP port for the GMAIL server
			$mail->Username = "khmkhns@gmail.com"; // GMAIL username
			$mail->Password = "Nmax@240"; // GMAIL password
			$mail->From = "khmkhns@gmail.com"; // "name@yourdomain.com";
			
			$mail->FromName = "เว็บไซต์สมาคมตระกูลแซ่";  // set from Name
			$mail->Subject = "ยืนยันบัญชีการใช้งาน"; 
			
			
			$strMessage = "ยินดีต้อนรับ : ".$para[1]."<br>";
			$strMessage .= "=================================<br>";
			$strMessage .= "ยืนยันบัญชีการใช้งาน คลิกที่นี่.<br>";
			$strMessage .= "$url/administrator/activate.php?sid=".session_id()."&uid=".$Uid."<br>";
			$strMessage .= "=================================<br>";
			$strMessage .= "เว็บไซต์ ชมรมตระกูลแซ่";
			
			$mail->Body = "$strMessage";
			$mail->AddAddress($para[6], "Administrator"); // to Address
			$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low
			$mail->Send(); 
			$return = 1;
		}else{
			$return = 0;
		}
	return $return;
	//return $sqlregister;
	
	
	
}
function resetpass(){
	$i = 0;
	$para = $_POST['Email'];
	$sql = "SELECT Email FROM tableuserfamily WHERE Email LIKE '$para'";
	$results = $GLOBALS['conn']->query($sql);
	$data = $results->fetch_assoc();
	$count = $results->num_rows;
		if($count>0){
			$sqlupdate = "UPDATE tableuserfamily SET SID ='".session_id()."' WHERE Email = '$para'";
			$resultupdate = $GLOBALS['conn']->query($sqlupdate); 
			if($resultupdate){
				$url = urlweb; 

				require_once('class.phpmailer.php');
				$mail = new PHPMailer();
				$mail->CharSet = "utf-8";
				$mail->IsHTML(true);
				$mail->IsSMTP();
				$mail->SMTPAuth = true; // enable SMTP authentication
				$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
				$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
				$mail->Port = 465; // set the SMTP port for the GMAIL server
				$mail->Username = "khmkhns@gmail.com"; // GMAIL username
				$mail->Password = "Nmax@240"; // GMAIL password
				$mail->From = "khmkhns@gmail.com"; // "name@yourdomain.com";

				$mail->FromName = "เว็บไซต์สมาคมตระกูลแซ่";  // set from Name
				$mail->Subject = "รีเซ็ทรหัสผ่าน"; 


				$strMessage = "สวัสดีคุณ : ".$para."<br>";
				$strMessage .= "=================================<br>";
				$strMessage .= "เราได้ทำการรีเซ็ทรหัสผ่านแล้วกรุณาตั้งรหัสผ่านด้วยตัวเอง คลิกที่นี่.<br>";
				$strMessage .= "<a href='$url/administrator/resetpwd.php?sid=".session_id()."&email=".$para."'>ตั้งรหัสผ่านใหม่</a><br>";
				$strMessage .= "=================================<br>";
				$strMessage .= "เว็บไซต์ ชมรมตระกูลแซ่";

				$mail->Body = "$strMessage";
				$mail->AddAddress($para, "Administrator"); // to Address
				$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low
				$mail->Send(); 
				
				$return = 1;
			}else{
				$return = 0;
			}
		}else{
			$return = 0;
		}
	return $return;
	//return $sqlupdate;
}
function checkuserbysessid($em,$sid){
		$sql = "SELECT SID,Email FROM tableuserfamily WHERE Email='$em' AND SID='$sid'";
		$results = $GLOBALS['conn']->query($sql);
		
		$count = $results->num_rows;
	return $count;
}
function newpwds($getdata){
	$i=0;
	foreach ($getdata as $param_name => $param_val) {
			$para[$i] = filter_var($param_val, FILTER_SANITIZE_STRING);
		$i++;
	}
	if($para[0] === $para[1]){  //check password math
		$sqlnewpass = "UPDATE tableuserfamily SET PwdUser ='". md5($para[0])."',Active = 'YES' WHERE Email = '$para[2]'";
		$results = $GLOBALS['conn']->query($sqlnewpass);
		if($results){
			$return = 1;
		}else{
			$return = 0;
		}	
	}else{
		$return = 0;
	}
	return $return;
	//return $sqlnewpass;
}
function activate($uid,$sesid){
	$sql = "SELECT SID,ID FROM tableuserfamily WHERE  ID='$uid' AND SID='$sesid'";
	$results = $GLOBALS['conn']->query($sql);		
	$count = $results->num_rows;
	if($count>0){
		$sqlactivate = "UPDATE tableuserfamily SET Active ='YES' WHERE ID ='$uid'";
		$results = $GLOBALS['conn']->query($sqlactivate);
		if($results){
			$return = 1;
		}else{
			$return = 0;
		}
	}else{
			$return = 0;
	}
	return $return;
	//return $sql;
}

function getfamilynameandid($idfather){
	$sql = "SELECT FamilyName,FamilyID FROM tableuserfamily WHERE ID = $idfather ";
	$results = $GLOBALS['conn']->query($sql);
	$data = $results->fetch_assoc();
	$arr = array($data['FamilyName'],$data['FamilyID']);
	return $arr;
}
function getfamilyIDmax(){
	$sql = "SELECT MAX(FamilyID) AS maxid FROM tableuserfamily";
	$results = $GLOBALS['conn']->query($sql);
	$data = $results->fetch_assoc();
	$return = $data['maxid']+1;
	return $return;
}
function logoutprocess(){
	session_destroy();
}













?>