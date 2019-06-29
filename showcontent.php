<?php
	include "include/connect.php";
	include "include/functions.php";
	$idshow = (isset($_GET['idc'])?$_GET['idc']:1);
	$datashow = datacontent($idshow);
	//print_r($datashow);
?>
<style>
	#img1,#img2,#img3{
		padding: 10px;
	}
</style>
<div class="container">
  <h2></h2>
  <p><?php echo $datashow['subtitle'];?></p><br>
  
  <div class="media">
    <div class="media-left media-middle">
      <img src="<?php echo $datashow['img1']; ?>" class="media-object" style="width:380px" id="img1">
    </div>

    <div class="media-body">
      <h4 class="media-heading">รายละเอียด</h4>
      <p><?php echo $datashow['content'];?></p>
    </div>
  </div>
  <hr>
  	<div class="media">
	<div class="media-left media-middle">
      <img src="<?php echo $datashow['img1']; ?>" class="media-object" style="width:280px" id="img1">
    </div>
	  
   
      <div class="media-left media-middle">
      <img src="<?php echo $datashow['img2']; ?>" class="media-object" style="width:280px" id="img2">
    </div>
    
	  
	<div class="media-left media-middle">
      <img src="<?php echo $datashow['img3']; ?>" class="media-object" style="width:280px" id="img3">
    </div>
  </div>
</div>