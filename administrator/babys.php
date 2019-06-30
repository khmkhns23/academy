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
			font-size: 16px;
			padding: 2px 10px 2px 10px;
		}
	</style>
</head>

<body>

<!-- The Modal -->
<div class="modal" id="myModal6">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">เพิ่มข้อมูลบุตร</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
		  <form action="administrator/process.php?typeprocess=addbaby" method="post" id="addbaby">
			<div class="row">
							<input type="hidden" id="hiddenbaby" name="hiddenbaby">
							<div class="col-lg-4"><label>ชื่อไทย :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="thfirstnamebaby" name="thfirstnamebaby"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>นามสกุลไทย :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="thlastnamebaby" name="thlastnamebaby"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>นามสกุลเดิมไทย :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="tholdlastnamebaby" name="tholdlastnamebaby"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ชื่อภาษาอังกฤษ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="enfirstnamebaby" name="enfirstnamebaby"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>นามสกุลอังกฤษ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="enlastnamebaby" name="enlastnamebaby"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ชื่อเล่น :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="nicnamebaby" name="nicnamebaby"></div>
							</div>
			  
			<div class="mt-3">
			  <input type="button" class="btn btn-primary" value="บันทึกข้อมูล" onClick="validatebaby()">
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
	function validatebaby(){
		var Url = $("#addbaby").attr("action");
		var datas = $("#addbaby").serializeArray();
		//console.log(datas);
		$.ajax({
				url: Url,
				type: "POST",
				data: datas,
				success: function(response){
					//console.log(response);
					showdialog(response);
					$('#dialog').modal('show');
					$('#dialog').on('shown.bs.modal', function(){
						$(this).find('button').focus();
					});
					$('#dialog').on('hidden.bs.modal', function () {
						$('#myModal6').modal('hide');
						sessionStorage.setItem("reloading", "true");
						sessionStorage.setItem("urlreload",'orgchart.php');
						document.location.reload();
					});
				},
			});
	}
</script>
</body>
</html>