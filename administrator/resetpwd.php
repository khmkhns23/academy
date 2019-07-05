<?php
	include"../include/connect.php";
	include"../include/functions.php";

	$sessionid = (isset($_GET['sid'])?$_GET['sid']:"");
	$email = (isset($_GET['email'])?$_GET['email']:"");

	$return = checkuserbysessid($email,$sessionid);

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>เปลี่ยนรหัสผ่านใหม่</title>
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
  <div class="modal fade" id="myModalerror" role="dialog">
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

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">เปลี่ยนรหัสผ่านใหม่</h4>
        </div>
        <div class="modal-body">
          <form id="formnewpwd" method="post" action="process.php?typeprocess=newpwd" >
			 
			<div class="form-group">
			  	<label for="pwd">รหัสผ่าน:</label>
    			<input type="password" class="form-control" id="newpwdss" name="newpwdss">
			</div>
			<div class="form-group">
			  	<label for="pwd">ยืนยันรหัสผ่าน:</label>
    			<input type="password" class="form-control" id="connewpwd" name="connewpwd">
			</div>
			   <input type="hidden" id="hidemail" name="hidemail" value="<?php echo($email);?>">
			<div class="form-group">
			  <input type="button" class="btn btn-primary" id="newpwds" name="newpwds" value="ดำเนินการตั้งรหัสผ่านใหม่" onClick="sendnewpass()">
			</div>
		  </form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
	<div id="showcontentmodal2"></div>
</div>
<div id="se-pre-con"></div>
</body>
</html>

<script>
	$(document).ready(function(){
	 var checks = <?php echo($return);?>;
	 if(checks > 0){
		 $("#myModal").modal("show");
	 }else{
		 $("#myModalerror").modal("show");
	 }
		
	});

	function showanimation(ID){
		switch(ID){
			case 1 :
				document.getElementById('se-pre-con').style.display = 'block';
			break;
			case 2 :
				document.getElementById('se-pre-con').style.display = 'none';			
			break;
		}
	}
	
	
	function sendnewpass(){
		 var url = $("#formnewpwd").attr("action");
		 var newpwds = $("#newpwdss").val();
		 var connewpwd = $("#connewpwd").val();
		 var email = $("#hidemail").val();
		 var datas = "newpwd="+newpwds+"&connewpwd="+connewpwd+"&email="+email;	
		//console.log(datas);
			$.ajax({
				url:url,
				type:"POST",
				data:datas,
				beforeSend: function(){
					showanimation(1);
				},
				success: function(result)
				{
					//console.log(result);
					showanimation(2);
					showdialog2("ดำเนินการเปลี่ยนรหัสผ่านเรียบร้อย");
					$('#dialog').modal('show');
					$("#myModal").modal('hide');
					$('#dialog').on('shown.bs.modal', function(){
							$(this).find('button').focus();
					});
					$('#dialog').on('hidden.bs.modal', function () {
							var url = "../";
							$(location).attr('href',url);
					});	
				}
			});
	}
	function showdialog2(rx){
	var txt ='<div class="modal fade" id="dialog" role="dialog">';
    	txt +='<div class="modal-dialog"><div class="modal-content">';
        txt +='<div class="modal-header"><h4 class="modal-title">ข้อความแสดงการทำงาน</h4><button type="button" class="close" data-dismiss="modal">&times;</button></div>';
        txt +='<div class="modal-body"><h3>'+ rx +'</h3></div>';
        txt +='<div class="modal-footer"><button type="button" class="btn btn-success" data-dismiss="modal"><i class="glyphicon glyphicon-remove"></i> Close</button></div>';
      	txt +='</div></div></div>';
		$("#showcontentmodal2").html(txt);
		//location.reload();
}
</script>