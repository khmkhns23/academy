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
<div class="modal" id="myModal5">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">เพิ่มข้อมูลภรรยา</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
		  <form action="administrator/process.php?typeprocess=addwife" method="post" id="addwife">
			<div class="row">
							<input type="hidden" id="hiddenwife" name="hiddenwife">
							<div class="col-lg-4"><label>ชื่อไทย :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="thfirstnamew" name="thfirstnamew"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>นามสกุลไทย :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="thlastnamew" name="thlastnamew"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>นามสกุลเดิมไทย :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="tholdlastnamew" name="tholdlastnamew"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ชื่อภาษาอังกฤษ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="enfirstnamew" name="enfirstnamew"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>นามสกุลอังกฤษ :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="enlastnamew" name="enlastnamew"></div>
							</div>
							<div class="row">
								<div class="col-lg-4"><label>ชื่อเล่น :</label></div>
								<div class="col-lg-8"><input class="form-control" type="text" id="nicnamew" name="nicnamew"></div>
							</div>
			  
			<div class="mt-3">
			  <input type="button" class="btn btn-primary" value="บันทึกข้อมูล" onClick="validatewife()">
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
	function validatewife(){
		var Url = $("#addwife").attr("action");
		var datas = $("#addwife").serializeArray();

		$.ajax({
				url: Url,
				type: "POST",
				data: datas,
				beforeSend: function(){
					showanimation(1);
				},
				success: function(response){
					//console.log(response);
					showanimation(2);
					showdialog(response);
					$('#dialog').modal('show');
					$('#dialog').on('shown.bs.modal', function(){
						$(this).find('button').focus();
					});
					$('#dialog').on('hidden.bs.modal', function () {
						$('#myModal5').modal('hide');
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