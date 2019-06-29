<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เนื้อหาหน้าเพจ</title>
	<style>
		
		.media-left{
			padding: 15px;
		}
		.row{
			font-size: 14px;
			padding: 2px;
		}
		.modal-content{
			width: 700px;
		}
	</style>
</head>

<body>

<!-- The Modal -->
<div class="modal" id="Modalcontent">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">แก้ไขเนื้อหาเพจ : <label id="txttitle"></label></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
		  <form action="administrator/process.php?typeprocess=updatecontent" class="form-horizontal" id="formeditprofile">
			<div class="container">
		   <input type="hidden" id="hidenid" name="hidenid">
		  <!-- Left-aligned media object -->
		 <!-- <div class="media">-->
		  <div>
			<div class="row">
				<div class="col-lg-4">Pic 1</div>
				<div class="col-lg-4">Pic 2</div>
				<div class="col-lg-4">Pic 3</div>  
			</div>
		  <div class="row">
			<div class="col-lg-4">
			  <img src="img/img_avatar1.png" class="media-object" style="width:120px" id="imgsct1">
			</div>
			<div class="col-lg-4">
			  <img src="img/img_avatar1.png" class="media-object" style="width:120px" id="imgsct2">
			</div>
			<div class="col-lg-4">
			  <img src="img/img_avatar1.png" class="media-object" style="width:120px" id="imgsct3">
			</div>
		  </div>
		 </div>
		  <hr>
		  <!-- Right-aligned media object -->
		  <div class="media">
			<div class="media-body">
			  <div class="row">
				<div class="col-lg-2"><label>หัวข้อเนื้อหา :</label></div>
				<div class="col-lg-10"><input class="form-control" type="text" id="titlecontent" name="titlecontent"></div>
			  </div>
			  <div class="row">
				<div class="col-lg-2"><label>อธิบายหัวข้อ :</label></div>
				<div class="col-lg-10"><input class="form-control" type="text" id="subtitle" name="subtitle"></div>
			  </div>	
			  <div class="row">
				<div class="col-lg-2"><label>รายละเอียด :</label></div>
				<div class="col-lg-10">
				<textarea  rows="8" name="detailcontent" id="detailcontent" class="form-control"></textarea>
				</div>
			  </div>
			</div>
			
		  </div>
		</div>
			  
			<div class="mt-3">
			  <input type="button" class="btn btn-primary" value="แก้ไขข้อมูล" onClick="validatecontent()">
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