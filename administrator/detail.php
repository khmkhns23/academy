<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>

<!-- The Modal -->
<div class="modal" id="myModal4">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">รายละเอียด</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">

		<div class="container">
		  
		  <!-- Left-aligned media object -->
		  <div class="media">
			<div class="media-left">
			  <img src="img/img_avatar1.png" class="media-object" style="width:120px" id="imgsp">
			</div>
			<div class="media-body">
			  <h4 class="media-heading" id="thfullname"></h4>
			  	<div id="idss"></div>
				<div id="tholdlastnames"></div>
				<div id="enfullname"></div>
				<div id="nicnamep"></div>
				<div id="idfatherp"></div>
				<div id="idmotherp"></div>
				<div id="idhusbandp"></div>
				<div id="tagsp"></div>
				<div id="sexp"></div>
				<div id="birthdayp"></div>
				<div id="placeofbirthp"></div>
				<div id="nationalityp"></div>
				
			</div>
		  </div>
		  <hr>
		  <!-- Right-aligned media object -->
		  <div class="media">
			<div class="media-body">
			  <div id="addressp"></div>
			  <div id="provincep"></div>
			  <div id="countryp"></div>
			  <div id="telephonep"></div>
			  <div id="emailp"></div>
				<div id="lineidp"></div>
				<div id="otherid1p"></div>
				<div id="ortherid2p"></div>
				<div id="deathdayp"></div>
				<div id="introducep"></div>
				<div id="numsgenp"></div>
			</div>
			<div class="media-right">
			  <img  class="media-object" style="width:120px" id="imgsp2">
			</div>
		  </div>
		</div>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
      </div>

    </div>
  </div>
</div>
	
<script>
// Add the following code if you want the name of the file appear on select
$(".custom-file-input").on("change", function() {
  var fileName = $(this).val().split("\\").pop();
  $(this).siblings(".custom-file-label").addClass("selected").html(fileName);
});
</script>
</body>
</html>