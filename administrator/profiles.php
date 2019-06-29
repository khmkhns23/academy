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
      
		  <form action="administrator/process.php?typeprocess=update" class="form-horizontal" id="formeditprofile">
			<div class="row">				
				<div class="container">
					  <!-- Left-aligned media object -->
					  <div class="media">
						<div class="media-left">
						  <img src="" id="imgs" class="media-object" style="width:60px">
						</div>
						<div class="media-body">
							<input type="hidden" name="hidenid" id="hidenid">
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
								<div class="col-lg-8"><input class="form-control" type="text" id="enfirstname" name="enfirstname"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>นามสกุลอังกฤษ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="enlastname" name="enlastname"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ชื่อเล่น :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="nicname" name="nicname"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>บิดา :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="idfather" name="idfather"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>มารดา :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="idmother" name="idmother"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>รหัสสามี :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="idhusband" name="idhusband"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>รหัสการสมรส :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="tags" name="tags"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>เพศ :</label></div>
								<div class="col-lg-8"><select class="form-control" name="sex" id="sex">
									<option value="M">ชาย</option><option value="F">หญิง</option></select></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>วันเดือนปีเกิด :</label></div>
								<div class="col-lg-8"><input class="form-control" type="date" id="birthday" name="birthday"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>สถานที่เกิด :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="placeofbirth" name="placeofbirth"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>สัญชาติ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="nationality" name="nationality" ></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ที่อยู่ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="address" name="address"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>จังหวัด :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="province" name="province"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ประเทศ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="country" name="country"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>โทรศัพท์ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="telephone" name="telephone"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>อีเมล :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="email" name="email"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ไลน์ไอดี :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="lineid" name="lineid"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ไอดีอื่นๆ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="otherid1" name="otherid1"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ไอดีอื่นๆ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="ortherid2" name="ortherid2"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>วันที่เสียชีวิต :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="deathday" name="deathday"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>แนะนำตัว :</label></div>
								<div class="col-lg-8">
								<textarea  rows="3" name="introduce" id="introduce" class="form-control"></textarea>
								</div>
								
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ลำดับรุ่น :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="numsgen" name="numsgen">
								</div>	
							</div>
							
							
						</div>
					  </div>
					  
		    </div>

	</div>
			<div class="mt-3">
			  <input type="button" class="btn btn-primary" value="แก้ไขข้อมูล" onClick="validate()">
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
	function validate(){
	var Url = $("#formeditprofile").attr("action");
	var datas = $("#formeditprofile").serialize();
		//console.log(datas);
		$.ajax({
			url: Url,
			type: "POST",
			data: datas,
			success: function(result)
			{
				//console.log(result);
				showdialog("แก้ไขข้อมูลเรียบร้อย");
				$('#dialog').modal('show');
				$('#dialog').on('shown.bs.modal', function(){
						$(this).find('button').focus();
				});
				$('#dialog').on('hidden.bs.modal', function () {
						$('#myModal2').modal('hide');
				});	
			}
		});
	//console.log(data);
}
</script>
</body>
</html>