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
			font-size: 16px;
			padding: 2px;
		}
		.modal-content{
			width: 670px;
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
      
		  <form action="administrator/process.php?typeprocess=updatecontent" class="form-horizontal" id="formeditcontent">
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
		 <div class="row">
				  <div class="col-lg-4">
					  
			  <form method="post" action="" enctype="multipart/form-data" id="myformpic1">
					<!--<div class='preview' style="padding: 5px">
						<img src="" id="img1" width="100" height="100">
					</div>-->
					<div >
						<input type="file" id="file1" name="file1" class="form-control"/><br>
						<input type="button" class="btn btn-success" value="อัพโหลดรูปที่ 1" id="but_upload1">
					</div>
			  </form>
				  		
				  </div>
				  <div class="col-lg-4">
			 <form method="post" action="" enctype="multipart/form-data" id="myformpic2">
					<!--<div class='preview' style="padding: 5px">
						<img src="" id="img2" width="100" height="100">
					</div>-->
					<div >
						<input type="file" id="file2" name="file2" class="form-control"/><br>
						<input type="button" class="btn btn-success" value="อัพโหลดรูปที่ 2" id="but_upload2">
					</div>
			  </form>	  		
				  </div>
				  <div class="col-lg-4">
		     <form method="post" action="" enctype="multipart/form-data" id="myformpic3">
					<!--<div class='preview' style="padding: 5px">
						<img src="" id="img3" width="100" height="100">
					</div>-->
					<div >
						<input type="file" id="file3" name="file3" class="form-control"/><br>
						<input type="button" class="btn btn-success" value="อัพโหลดรูปที่ 3" id="but_upload3">
					</div>
			  </form>		  		
				  </div>
			  </div> 	  
		 </div>
		  <hr>
		  <!-- Right-aligned media object -->
		  <div class="media">
			<div class="media-body">
			  <div class="row">
				<div class="col-lg-3"><label>หัวข้อเนื้อหา :</label></div>
				<div class="col-lg-9"><input class="form-control" type="text" id="titlecontent" name="titlecontent"></div>
			  </div>
			  <div class="row">
				<div class="col-lg-3"><label>อธิบายหัวข้อ :</label></div>
				<div class="col-lg-9"><input class="form-control" type="text" id="subtitle" name="subtitle"></div>
			  </div>	
			  <div class="row">
				<div class="col-lg-3"><label>รายละเอียด :</label></div>
				<div class="col-lg-9">
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
	function validatecontent(){
	var Url = $("#formeditcontent").attr("action");
	var datas = $("#formeditcontent").serialize();
		//console.log(datas);
		$.ajax({
			url: Url,
			type: "POST",
			data: datas,
			beforeSend: function(){
				showanimation(1);
			},
			success: function(result)
			{
				//console.log(result);
				showanimation(2);
				showdialog("แก้ไขข้อมูลเรียบร้อย");
				$('#dialog').modal('show');
				$('#dialog').on('shown.bs.modal', function(){
						$(this).find('button').focus();
				});
				$('#dialog').on('hidden.bs.modal', function () {
						$('#Modalcontent').modal('hide');
					changpage2(content,'administrator/managecontent.php','Admin จัดการเนื้อหาภายใน');
				});	
			}
		});
	//console.log(data);
}
</script>
	<script type="text/javascript">
      $(document).ready(function(){

		$("#but_upload1").click(function(){

			var fd = new FormData();
			var files = $('#file1')[0].files[0];
			fd.append('file1',files);
			var idss = $("#hidenid").val();

			$.ajax({
				url: 'administrator/uploadscontent.php?idss='+idss+'&pic=1',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					if(response != 0){
						$("#imgsct1").attr("src",response); 
						$(".preview img").show(); // Display image element
						//console.log(response);
					}else{
						alert('file not uploaded');
					}
				},
			});
		});
		  
		  $("#but_upload2").click(function(){

			var fd = new FormData();
			var files = $('#file2')[0].files[0];
			fd.append('file2',files);
			var idss = $("#hidenid").val();

			$.ajax({
				url: 'administrator/uploadscontent.php?idss='+idss+'&pic=2',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					if(response != 0){
						$("#imgsct2").attr("src",response); 
						//$(".preview img").show(); // Display image element
						//console.log(response);
					}else{
						alert('file not uploaded');
					}
				},
			});
		});
		  
		  $("#but_upload3").click(function(){

			var fd = new FormData();
			var files = $('#file3')[0].files[0];
			fd.append('file3',files);
			var idss = $("#hidenid").val();

			$.ajax({
				url: 'administrator/uploadscontent.php?idss='+idss+'&pic=3',
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					if(response != 0){
						$("#imgsct3").attr("src",response); 
						//$(".preview img").show(); // Display image element
						//console.log(response);
					}else{
						alert('file not uploaded');
					}
				},
			});
		});
	});
  </script>
</body>
</html>