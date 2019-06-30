

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
						<img src="" id="img" width="100" height="100">
					</div>
					<div >
						<input type="file" id="filevd" name="filevd" class="form-control" accept=video/* /><br>
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
			fd.append('filevd',files);
			var idss = $("#hiddeid").val();

			$.ajax({
				url: 'administrator/uploadsvideo2.php?idss='+idss,
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				async:true,
				
				/*beforeSend: function(){
						showanimation(1);
				},*/
				success: function(response){
					if(response != 0){
						console.log(response);
						showanimation(2);
						showdialog("อัพโหลดข้อมูลเรียบร้อย");
						$('#dialog').modal('show');
						$('#dialog').on('shown.bs.modal', function(){
								$(this).find('button').focus();
						});
						/*$('#dialog').on('hidden.bs.modal', function () {
								sessionStorage.setItem("reloading", "true");
								sessionStorage.setItem("urlreload",'orgchart.php');
								document.location.reload();
						});	*/
					}else{
						showdialog("file not uploaded");
						//alert('file not uploaded');
					}
				},
			});
		});
	});
  </script>
