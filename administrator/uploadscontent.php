<?php
	include"../include/connect.php";
	include"../include/functions.php";

		$idss = $_GET['idss'];
		$fieldimg = $_GET['pic'];
		switch($fieldimg){
			case 1 :
				$filename = $_FILES['file1']['name'];
				$tmpfileupload = $_FILES['file1']['tmp_name'];
			break;
			case 2 :
				$filename = $_FILES['file2']['name'];
				$tmpfileupload = $_FILES['file2']['tmp_name'];
			break;	
			case 3 :
				$filename = $_FILES['file3']['name'];
				$tmpfileupload = $_FILES['file3']['tmp_name'];
			break;	
		}
				
				
				 
			//	$location = "../upload/".$filename;
			//	$location2 = "administrator/upload/".$filename;

				$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
				$filename2 = time()."_".$idss;
				$location3 = "../img/content/$filename2.$imageFileType";
				$location31 = "img/content/$filename2.$imageFileType";
				$uploadOk = 1;
					
				$valid_extensions = array("jpg","jpeg","png");
				if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
				   $uploadOk = 0;
				}

				if($uploadOk == 0){
				   echo 0;
				}else{
				   if(move_uploaded_file($tmpfileupload,$location3)){
					  echo $location31;
					  $result = updatepiccontent($idss,$fieldimg,$location31);
					  // echo $result;
				   }else{
					  echo 0;
				   }
				}
				
?>