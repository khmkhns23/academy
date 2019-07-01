<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<!-- The Modal -->
<div class="modal" id="myModalvideo">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">UPLOAD You Video</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      	<div class="form-group">
			<input type="hidden" id="hiddeid" value="0">
			  <form method="post" action="" enctype="multipart/form-data" id="myformvideo">
					<div class='preview' style="padding: 5px">
						<!--<img src="" id="imgvd" width="100" height="100">-->
						<video width="400" controls id="imgvd">
						  <source src="" type="video/mp4" >
						  <source src="" type="video/ogg">
						  Your browser does not support HTML5 video.
						</video>
					</div>
					<div >
						<input type="file" id="filevd" name="filevd" class="form-control" /><br>
						<input type="button" class="btn btn-success" value="อัพโหลด" id="but_uploadvd">
					</div>
			  </form>
		  </div> 
	  </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>

    </div>
  </div>
</div>
	
	
	
<script type="text/javascript">
	
      $(document).ready(function(){

		$("#but_uploadvd").click(function(){

			var fd = new FormData();
			var files = $('#filevd')[0].files[0];
			var filesize = files.size;
			fd.append('filevd',files);
			var idss = $("#hiddeid").val();
			var integer = parseInt((filesize/1024), 10);
			var Url = encodeURI("administrator/uploadsvideo2.php?idss="+idss);

			$.ajax({
				url: Url,
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				//async:true,
				
				beforeSend: function(){
						showanimation(1);
						if(integer > 20480){
							//showdialog("ขนาดไฟล์เกินกำหนด(กำหนดไว้ที่ 20 M)");
							alert("ขนาดไฟล์เกินกำหนด(กำหนดไว้ที่ 20 M)");
							console.log(integer);
							sessionStorage.setItem("reloading", "true");
							sessionStorage.setItem("urlreload",'orgchart.php');
							document.location.reload();
							return false;
						}
				},
				success: function(response){
					if(response != 0){
					//	console.log(response);
						showanimation(2);
						/*
						showdialog("อัพโหลดข้อมูลเรียบร้อย");
						$('#dialog').modal('show');
						$('#dialog').on('shown.bs.modal', function(){
								$(this).find('button').focus();
						});
						$('#dialog').on('hidden.bs.modal', function () {
								sessionStorage.setItem("reloading", "true");
								sessionStorage.setItem("urlreload",'orgchart.php');
								document.location.reload();
						});	*/
						$("#imgvd").css("display","block");
						$("#imgvd").attr("src",response); 
						$(".preview imgvd").show(); // Display image element
						//console.log(response);
					}else if(response == 0){
						showdialog("file not uploaded");
					}else{
						showdialog("file not uploaded");
						//alert('file not uploaded');
					}
				},
			});
		});
	});
	
  </script>
	</body>
</html>
