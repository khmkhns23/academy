<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "bigfamiry";

try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	//$tags="";
	//$i="";
		for($i=1;$i<11;$i++){
			for($j=1;$j<6;$j++){
				$tags = "f$j";
				$sql = "INSERT INTO `tbfamiry` (`tags`,`pid`, `name`,`title`,`img`) VALUES ('$tags', '$i','NameTest','Title', 'img/ken.jpg')";
				$conn->exec($sql);
				echo "$sql.<br>";
			}
		}
    
    
    }
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
    }

$conn = null;
?>