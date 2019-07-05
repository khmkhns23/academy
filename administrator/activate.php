<?php
	include"../include/connect.php";
	include"../include/functions.php";

	$sessionid = (isset($_GET['sid'])?$_GET['sid']:"");
	$uid = (isset($_GET['uid'])?$_GET['uid']:"");

	$return = activate($uid,$sessionid);
	//	echo($return);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>ยืนยันตัวตนเข้าใช้งาน</title>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="../css/newcss.css">
</head>
<body>

<div class="container">
	<!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">พบข้อผิดพลาด</h4>
        </div>
        <div class="modal-body">
          <p>ไม่พบอีเมล์ของคุณในระบบ</p>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>  

  
<div id="showcontentmodal2"></div>
<div id="se-pre-con"></div>
</body>
</html>

<script>
	$(document).ready(function(){
	 var checks = <?php echo($return);?>;
	 if(checks == 0){
		 $("#myModal").modal("show");
		 $('#myModal').on('shown.bs.modal', function(){
				$(this).find('button').focus();
		 });
	 }else{
		 $("#myModal").modal("show");
		 $('#myModal').on('shown.bs.modal', function(){
				$(this).find('button').focus();
		 });
		 $(".modal-title").html("การยืนยันตัวตน");
		 $(".modal-body p").html("การยืนยันตัวตนสำเร็จเรียบร้อย");
		 $('#myModal').on('hidden.bs.modal', function () {
				var url = "../";
					$(location).attr('href',url);
		 });	
	 }
});
</script>