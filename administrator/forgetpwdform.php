<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ลืมรหัสผ่าน</title>
	<style>
		.model{
			width: 400px;
		}
	</style>
</head>

<body>

<!-- The Modal -->
<div class="modal fade" id="forgerpwdModal" role="dialog">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ลืมรหัสผ่าน</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
		   <form id="formresetpwd" method="post" action="administrator/process.php?typeprocess=resetpass" >
			    <input type="hidden" id="hiddeid" value="0">

			<div class="form-group">
			  	<label for="pwd">กรอกอีเมล์ที่ได้ลงทะเบียนไว้ :</label>
    			<input type="text" class="form-control" id="forgetemail" name="forgetemail">
			</div>
			<div class="form-group">
			  <input type="button" class="btn btn-primary" id="forgetpwd" name="forgetpwd" value="ลืมรหัสผ่าน" onClick="sendresetpass()">
			</div>
		  </form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
	<div id="showcontentmodal2"></div>
</div>
	
<script type="text/javascript">
      function sendresetpass(){		  
		  	var Url = $("#formresetpwd").attr("action");
			var datas = "Email="+$("#forgetemail").val();
		  	//console.log(datas);
			$.ajax({
					url: Url,
					type: "POST",
					data: datas,
					beforeSend: function(){
						showanimation(1);
					},
					success: function(response){
						console.log(response);
						showanimation(2);
						if(response == 1){
							showdialog2("ดำเนินการเรียร้อย<br>กรุณาตรวสอบข้อความในอีเมลของท่านเพื่อทำการตั้งรหัสใหม่ผ่านเอง");
						$('#dialog').modal('show');
						$('#dialog').on('shown.bs.modal', function(){
							$(this).find('button').focus();
						});
						$('#dialog').on('hidden.bs.modal', function () {
							$('#forgerpwdModal').modal('hide');
							//sessionStorage.setItem("reloading", "true");
							//sessionStorage.setItem("urlreload",'orgchart.php');
							document.location.reload();
						});	
						}else{
							showdialog2("ไม่สามารถดำเนินการได้");
							$('#dialog').modal('show');
							$('#dialog').on('shown.bs.modal', function(){
								$(this).find('button').focus();
							});
						}
						
					},
				});
	  }
	
	
	
	
</script>
</body>
</html>