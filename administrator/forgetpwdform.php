<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>ลืมรหัสผ่าน</title>
	<style>
		.model{
			width: 450px;
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
      
		   <form id="formchangepwd" method="post" action="" >
			    <input type="hidden" id="hiddeid" value="0">

			<div class="form-group">
			  	<label for="pwd">กรอกอีเมล์ที่ได้ลงทะเบียนไว้ :</label>
    			<input type="password" class="form-control" id="forgetemail" name="forgetemail">
			</div>
			<div class="form-group">
			  <input type="button" class="btn btn-primary" id="forgetpwd" name="forgetpwd" value="ลืมรหัสผ่าน">
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
      
  </script>
</body>
</html>