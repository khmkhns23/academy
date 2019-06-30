<?php
	include "include/connect.php";
	include "include/functions.php";
	//$idshow = (isset($_GET['idc'])?$_GET['idc']:1);
	$numsloop = datagensnum();
	
?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<style>
	body {
	  font-family: 'Prompt', sans-serif;	
	  /*font-family: "Montserrat", sans-serif;*/
	  font-size: 20px; }
	
</style>

</head>
<body>
	
	<!--class="panel panel-default" เซ็ทให้ default ขยายแสดงก่อน-->
	<div class="container">
	  <h2>Accordion Example</h2>
	  <p><strong>Note:</strong> The <strong>data-parent</strong> attribute makes sure that all collapsible elements under the specified parent will be closed when one of the collapsible item is shown.</p>
	  <div class="panel-group" id="accordion">
<?php
		
			//$i=1;
		  for($i=1;$i<=$numsloop;$i++){
		  	//$defoultpanel = (($i == 1)?"panel panel-default":"panel panel-info");
		  
	echo"<div class=\"panel panel-default\"><div class=\"panel-heading\"><h4 class=\"panel-title\">";

			$collec = "#collapse$i";
			$collapse = "collapse$i";
			  echo"<a data-toggle=\"collapse\" data-parent=\"#accordion\" href=\"$collec\">คณะกรรมการบริหารรุ่นที่ $i</a>";
	echo"</h4></div>";
	echo"<div id=\"$collapse\" class=\"panel-collapse collapse\"><div class=\"panel-body\">";
			
			  $dataofgens =   getdatabygens($i);
			  		//print_r(count($dataofgens[0]));
			  //	echo("<br>");
			  for($j=0;$j<count($dataofgens[0]);$j++){
				  
				//  print_r($dataofgens[0][$j]['title']);
				 $titless  = $dataofgens[0][$j]['title'];
				 $detail = $dataofgens[0][$j]['detail'] ;
				  $imgs = $dataofgens[0][$j]['img'] ;
				  echo"<div class=\"media\">
					  <div class=\"media-left\">
						<img src=\"$imgs\" class=\"media-object\" style=\"width:60px\">
					  </div>
					  <div class=\"media-body\">
						<h4 class=\"media-heading\">$titless</h4>
						<p>$detail</p>
					  </div>
					</div>";
				 //  echo("<hr>");
			  }
			  

	echo"</div>
	  </div>
	</div>";
		
		  }
		 ?>		
	  </div> 
	</div>
</body>
</html>
<script>
	$(document).ready(function(){
		//$("#imgsct1").attr("src",myObj.img1);
		
	});
</script>
