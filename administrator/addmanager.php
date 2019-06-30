<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>เพิ่มเนื้อหาคณะกรรมการรุ่น</title>
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
<div class="modal" id="Modaladdmanager">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">เพิ่มเนื้อหาคณะกรรมการ</label></h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
	<form action="administrator/process.php?typeprocess=addmanager" class="form-horizontal" id="formaddmanager">
		<div class="container">
		   
		  <div>
			<div class="row">
				<div class="col-lg-4">รูปภาพ</div>
				  
			</div>
		  <div class="row">
			<form method="post" action="" enctype="multipart/form-data" id="myform">
					<div class='preview' style="padding: 5px">
						<img src="" id="img" width="100" height="100">
					</div>
					<div >
						<input type="file" id="file" name="file" class="form-control"/><br>
						<input type="button" class="btn btn-success" value="อัพโหลด" id="but_upload">
					</div>
			  </form>
		  </div>
		 </div>
		  <hr>
		  <!-- Right-aligned media object -->
		  <div class="media">
			<div class="media-body">
			  <div class="row">
				<div class="col-lg-3"><label>ชื่อ-สกุล :</label></div>
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
				<input type="hidden" id="hiddenfilename" name="hiddenfilename">
		  </div>
		</div>
				
			<div class="mt-3">
	<input type="button" class="btn btn-primary" value="เพิ่มข้อมูล" onClick="validateaddmanager()">
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
	function validateaddmanager(){
	var Url = $("#formaddmanager").attr("action");
	var datamg = $("#formaddmanager").serialize();
		//console.log(datamg);
		$.ajax({
			url: Url,
			type: "POST",
			data: datamg,
			beforeSend: function(){
				showanimation(1);
			},
			success: function(result)
			{
				//console.log(result);
				showanimation(2);
				showdialog(result);
				$('#dialog').modal('show');
				$('#dialog').on('shown.bs.modal', function(){
						$(this).find('button').focus();
				});
				$('#dialog').on('hidden.bs.modal', function () {
						$('#Modaladdmanager').modal('hide');
			changpage2(content,'administrator/managegensadmin.php','Admin จัดการ คณก.รุ่น');
				});
			}	
		});
	//console.log(data);
}
	
</script>
	<script type="text/javascript">
      $(document).ready(function(){

		$("#but_upload").click(function(){

			var fd = new FormData();
			var files = $('#file')[0].files[0];
			fd.append('file',files);

			$.ajax({
				url: 'administrator/uploadsmanager.php',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					if(response != 0){
						$("#img").attr("src",response); 
						$(".preview img").show(); // Display image element
						$("#hiddenfilename").val(response);
						//console.log(response);
					}else{
						alert('file not uploaded');
					}
				}
			});
		});
	  });
	</script>						
</body>
</html>