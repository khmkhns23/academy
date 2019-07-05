<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		.modal-content{
			width: auto;
		}
	</style>
</head>

<body>

<!-- The Modal -->
<div class="modal" id="myModal3">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">เปลี่ยนรหัสผ่าน</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
		   <form id="formchangepwd" method="post" action="" >
			    <input type="hidden" id="hiddeid" value="0">

			<!--<div class="form-group">
			  	<label for="pwd">รหัสผ่านเก่า :</label>
    			<input type="password" class="form-control" id="oldpwd" name="oldpwd">
			</div>-->
			<div class="form-group">
			  	<label for="pwd">รหัสผ่านใหม่ :</label>
    			<input type="password" class="form-control" id="newpwd" name="newpwd">
			</div>
			<div class="form-group">
			  	<label for="pwd">ยืนยันรหัสผ่านใหม่ :</label>
    			<input type="password" class="form-control" id="cfnewpwd" name="cfnewpwd">
			</div>
			<div class="form-group">
			  <input type="button" class="btn btn-primary" id="chngpasswd" name="chngpasswd" value="เปลี่ยนรหัสผ่าน" onClick="changpasswd();" >
			</div>
		  </form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
	
<script type="text/javascript">
 
		function changpasswd(){
			//	console.log('click btn chngpwd');
			//var oldpwd = $("#oldpwd").val();
			var newpwd = $("#newpwd").val();
			var cfnewpwd = $("#cfnewpwd").val();
	
			var idss = $("#hiddeid").val();
			//var data2 = $("#formchangepwd input").serialize();
			var	data2 = "newpwd="+newpwd+"&cfnewpwd="+cfnewpwd+"&idnode="+idss;
				//console.log(data2);
			$.ajax({
				url: 'administrator/process.php?typeprocess=changpwd',
				type: "POST",
				data: data2,
				success: function(response){
					//console.log(response);
					showdialog(response);
					$('#dialog').modal('show');
					$('#dialog').on('shown.bs.modal', function(){
						$(this).find('button').focus();
					});
					$('#dialog').on('hidden.bs.modal', function () {
						$('#myModal3').modal('hide');
					});
				},
			});
		}
  </script>
</body>
</html>