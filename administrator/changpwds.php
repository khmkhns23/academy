<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
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

			<div class="form-group">
			  	<label for="pwd">รหัสผ่านเก่า :</label>
    			<input type="password" class="form-control" id="oldpwd" name="oldpwd">
			</div>
			<div class="form-group">
			  	<label for="pwd">รหัสผ่านใหม่ :</label>
    			<input type="password" class="form-control" id="newpwd" name="newpwd">
			</div>
			<div class="form-group">
			  	<label for="pwd">ยืนยันรหัสผ่านใหม่ :</label>
    			<input type="password" class="form-control" id="cfnewpwd" name="cfnewpwd">
			</div>
			<div class="form-group">
			  <input type="button" class="btn btn-primary" id="chngpwd" name="chngpwd" value="Submit">
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
      $(document).ready(function(){

		$("#chngpwd").click(function(){
			//	console.log('click btn chngpwd');
			var oldpwd = $("#oldpwd").val();
			var newpwd = $("#newpwd").val();
			var cfnewpwd = $("#cfnewpwd").val();
			
			var data = "oldpwd="+oldpwd+"&newpwd="+newpwd+"&cfnewpwd="+cfnewpwd;
			console.log(data);
			//var fd = new FormData();
			//var idss = $("#hiddeid").val();

			$.ajax({
				url: 'administrator/process.php?typeprocess=changpwd',
				type: "POST",
				data: data,
				contentType: false,
				processData: false,
				success: function(response){
					console.log(response);
					/*if(response != 0){
						$("#img").attr("src",response); 
						$(".preview img").show(); // Display image element
						//console.log(response);
					}else{
						alert('file not uploaded');
					}*/
				},
			});
		});
	});
  </script>
</body>
</html>