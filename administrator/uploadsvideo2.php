<?php
	include"../include/connect.php";
	include"../include/functions.php";

				$filename = $_FILES['filevd']['name'];
				$filesize = $_FILES['filevd']['size'];

				$idss = $_GET['idss'];
			//	$location = "../upload/".$filename;
			//	$location2 = "administrator/upload/".$filename;

				$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
				$filename2 = time()."_".$idss;
				$location3 = "../img/video/$filename2.$imageFileType";
				$location31 = "img/video/$filename2.$imageFileType";
				$uploadOk = 1;
					//$valid_extensions = array("jpg","jpeg","png");
				$valid_extensions = array("mp4","3gp");
				if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
				   $uploadOk = 0;
				}
				//if($filesize > 20971520){
				/*if($filesize > 209715){
				   $uploadOk = 0;
				}*/
				if($uploadOk == 0){
				   echo 0;
				}else{
				   if(move_uploaded_file($_FILES['filevd']['tmp_name'],$location3)){
					   echo $location31;
					  //echo 1;
				   }else{
					  echo 0;
				   }
				}
				
?>