<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เนื้อหาคณะกรรมการรุ่น</title>
	<style>
		
		.media-left{
			padding: 15px;
		}
		.row{
			font-size: 14px;
			padding: 2px;
		}
		/*.modal-content{
			width: 600px;
		}*/
	</style>
</head>

<body>

<!-- The Modal -->
<div class="modal" id="Modalmanager">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">แก้ไขเนื้อหาคณะกรรมการ : <label id="txttitle"></label></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
	<form action="administrator/process.php?typeprocess=updatemanager" class="form-horizontal" id="formeditmanager">
		<div class="container">
		   <input type="hidden" id="hidenidmg" name="hidenidmg">
		  <!-- Left-aligned media object -->
		 <!-- <div class="media">-->
		  <div>
			<div class="row">
				<div class="col-lg-4">รูปภาพ</div>
				  
			</div>
		  <div class="row">
			<div class="col-lg-4">
			  <img src="img/img_avatar1.png" class="media-object" style="width:120px" id="imgsmg">
			</div>
			
		  </div>
		 </div>
		  <hr>
		  <!-- Right-aligned media object -->
		  <div class="media">
			<div class="media-body">
			  <div class="row">
				<div class="col-lg-3"><label>หัวข้อเนื้อหา :</label></div>
				<div class="col-lg-9"><input class="form-control" type="text" id="titlemg" name="titlemg"></div>
			  </div>
			  <div class="row">
				<div class="col-lg-3"><label>รายละเอียด :</label></div>
				<div class="col-lg-9">
				<textarea  rows="4" name="detailmg" id="detailmg" class="form-control"></textarea>
				</div>
			  </div>
			<div class="row">
			  <div class="col-lg-3"><label>รุ่น :</label></div>
				<div class="col-lg-9"><input class="form-control" type="text" id="numsgen" name="numsgen"></div>
			</div>
			
		  </div>
		</div>
				
			<div class="mt-3">
			  <input type="button" class="btn btn-primary" value="แก้ไขข้อมูล" onClick="validatemanager()">
			</div>
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
	function validatemanager(){
	var Url = $("#formeditmanager").attr("action");
	var datamg = $("#formeditmanager").serialize();
		//console.log(datamg);
		$.ajax({
			url: Url,
			type: "POST",
			data: datamg,
			success: function(result)
			{
				//console.log(result);
				showdialog("แก้ไขข้อมูลเรียบร้อย");
				$('#dialog').modal('show');
				$('#dialog').on('shown.bs.modal', function(){
						$(this).find('button').focus();
				});
				$('#dialog').on('hidden.bs.modal', function () {
						$('#Modalmanager').modal('hide');
						changpage2(content,'administrator/managegensadmin.php','Admin จัดการ คณก.รุ่น');
				});	
			}
		});
	//console.log(data);
}
</script>
</body>
</html>