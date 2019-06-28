<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
	<style>
		
		.media-left{
			padding: 15px;
		}
		.row{
			font-size: 14px;
			padding: 2px;
		}
	</style>
</head>

<body>

<!-- The Modal -->
<div class="modal" id="myModal2">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">แก้ไขข้อมูลส่วนตัว</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
		  <form action="/action_page.php" class="form-horizontal">
			<div class="row">				
				<div class="container">
					  <!-- Left-aligned media object -->
					  <div class="media">
						<div class="media-left">
						  <img src="" id="imgs" class="media-object" style="width:60px">
						</div>
						<div class="media-body">
							
							<div class="row">
								<div class="col-lg-4"><label>ชื่อไทย :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="thfirstname" name="thfirstname"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>นามสกุลไทย :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="thlastname" name="thlastname"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>นามสกุลเดิมไทย :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="tholdlastname" name="tholdlastname"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ชื่อภาษาอังกฤษ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>นามสกุลอังกฤษ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ชื่อเล่น :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>เพศ :</label></div>
								<div class="col-lg-8"><select class="form-control" name="sex">
									<option value="M">ชาย</option><option value="F">หญิง</option></select></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>วันเดือนปีเกิด :</label></div>
								<div class="col-lg-8"><input class="form-control" type="date"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>สถานที่เกิด :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>สัญชาติ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ที่อยู่ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>จังหวัด :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ประเทศ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>โทรศัพท์ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>อีเมล :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ไลน์ไอดี :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ไอดีอื่นๆ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ไอดีอื่นๆ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>วันที่เสียชีวิต :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>แนะนำตัว :</label></div>
								<div class="col-lg-8">
								<textarea  rows="3" name="introduce" id="introduce" class="form-control"></textarea>
								</div>
								
							</div>
							<div class="row">
								<div class="col-lg-4"><label>รหัสสามี :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text"></div>
							</div>
							
						</div>
					  </div>
					  
		    </div>

	</div>
			<div class="mt-3">
			  <button type="submit" class="btn btn-primary">แก้ไขข้อมูล</button>
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
	
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>
</html>