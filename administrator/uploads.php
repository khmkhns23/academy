<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<!-- The Modal -->
<div class="modal" id="myModal1">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">Modal Heading</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      	<div class="form-group">
			<input type="hidden" id="hiddeid" value="0">
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

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">ปิด</button>
      </div>

    </div>
  </div>
</div>
	
<!--<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>-->
	
<script type="text/javascript">
      $(document).ready(function(){

		$("#but_upload").click(function(){

			var fd = new FormData();
			var files = $('#file')[0].files[0];
			fd.append('file',files);
			var idss = $("#hiddeid").val();

			$.ajax({
				url: 'administrator/uploads2.php?idss='+idss,
				type: 'post',
				data: fd,
				contentType: false,
				processData: false,
				success: function(response){
					if(response != 0){
						$("#img").attr("src",response); 
						$(".preview img").show(); // Display image element
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