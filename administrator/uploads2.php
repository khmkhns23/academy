<?php
	include"../include/connect.php";
	include"../include/functions.php";

				$filename = $_FILES['file']['name'];
				$idss = $_GET['idss'];
			//	$location = "../upload/".$filename;
			//	$location2 = "administrator/upload/".$filename;

				$imageFileType = pathinfo($filename,PATHINFO_EXTENSION);
				$filename2 = time()."_".$idss;
				$location3 = "../img/$filename2.$imageFileType";
				$location31 = "img/$filename2.$imageFileType";
				$uploadOk = 1;
					
				$valid_extensions = array("jpg","jpeg","png");
				if( !in_array(strtolower($imageFileType),$valid_extensions) ) {
				   $uploadOk = 0;
				}

				if($uploadOk == 0){
				   echo 0;
				}else{
				   if(move_uploaded_file($_FILES['file']['tmp_name'],$location3)){
					  echo $location31;
					  $result = updatepicuser($idss,$location31);
					  // echo $result;
				   }else{
					  echo 0;
				   }
				}
				
?>