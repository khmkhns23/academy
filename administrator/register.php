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
	
	<style>	
		.error{
			display: none;
			margin-left: 10px;
		}		
		
		.error_show{
			color: red;
			margin-left: 10px;
		}
		
		input.invalid, textarea.invalid{
			border: 2px solid red;
		}
		
		input.valid, textarea.valid{
			border: 2px solid green;
		}
	</style>
	
<script>
		$(document).ready(function() {
				$('#familynames').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});				
				$('#thfirstnames').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				$('#thlastnames').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});

				$('#enfirstnames').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				$('#enlastnames').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				$('#nicnames').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				
				$('#emailadd').on('input', function() {
					var input=$(this);
					var re = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;
					var is_email=re.test(input.val());
					if(is_email){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				$('#pwd').on('input', function() {
					var input=$(this);
					var is_name=input.val();
					if(is_name){input.removeClass("invalid").addClass("valid");}
					else{input.removeClass("valid").addClass("invalid");}
				});
				
				
				
			
		
			<!-- After Form Submitted Validation-->
			$("#contact_submit").click(function(event){
				var form_data=$("#register").serializeArray();
				
				var error_free=true;
				for (var input in form_data){
					var element=$("#"+form_data[input]['name']);
					//console.log(element);
					var valid=element.hasClass("valid");
					var error_element=$("span", element.parent());
					if (!valid){
						error_element.removeClass("error").addClass("error_show"); 
						error_free=false;  
				   }else{
					    error_element.removeClass("error_show").addClass("error");
				   }
				}
				if (!error_free){
					//showdialoginform("ตรวจสอบความถูกต้องของข้อมูล");
					$('#myModalinform').modal('show');
					
					event.preventDefault(); 
					
				}
				else{
					var Url = $("#register").attr("action");		
					var datas = $("#register").serializeArray();
					//	console.log(datas);
						$.ajax({
								url: Url,
								type: "POST",
								data: datas,
								beforeSend: function(){
									//showanimation(1);
								},
								success: function(response){
									console.log(response);
									/*if(response==1){
										//showdialog("ได้ทำการลงทะเบียนเรียบร้อย");
										showanimation(2);
										$('#myModalinform').modal('show');
										$('#titlebody').html('ได้ทำการลงทะเบียนเรียบร้อย')
										$('#myModalinform').on('shown.bs.modal', function(){
											$(this).find('button').focus();
										});
										$('#myModalinform').on('hidden.bs.modal', function () {
											$('#myModalregister').modal('hide');
											//document.location.reload();
											$('#myModallogin').modal('show');
										});	
									}*/
									
								},
							});
						}
					});



				});
	</script>
	
</head>

<body>

<!-- The Modal -->
<div class="modal" id="myModalregister">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">ลงทะเบียนผู้ดูแลผังครอบครัว</h4>
        <button type="button" class="close" data-dismiss="modal">&times;</button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
      
		  <form action="administrator/process.php?typeprocess=register" method="post" id="register">
							<div class="row">
			  				<div class="col-lg-5"><label>ชื่อครอบครัว * :</label></div>
								<div class="col-lg-7"><input class="form-control" type="text" id="familynames" name="familynames"></div>
								
							</div>
			  				<div class="row">
							<div class="col-lg-5"><label>ชื่อไทย * :</label></div>
								<div class="col-lg-7"><input class="form-control" type="text" id="thfirstnames" name="thfirstnames"></div>
								
							</div>
							<div class="row">
								<div class="col-lg-5"><label>นามสกุลไทย * :</label></div>
								<div class="col-lg-7"><input class="form-control" type="text" id="thlastnames" name="thlastnames"></div>
								
							</div>
							
							<div class="row">
								<div class="col-lg-5"><label>ชื่อภาษาอังกฤษ * :</label></div>
								<div class="col-lg-7"><input class="form-control" type="text" id="enfirstnames" name="enfirstnames"></div>
								
							</div>
							<div class="row">
								<div class="col-lg-5"><label>นามสกุลอังกฤษ * :</label></div>
								<div class="col-lg-7"><input class="form-control" type="text" id="enlastnames" name="enlastnames"></div>
								
							</div>
							<div class="row">
								<div class="col-lg-5"><label>ชื่อเล่น * :</label></div>
								<div class="col-lg-7"><input class="form-control" type="text" id="nicnames" name="nicnames"></div>
								
							</div>
			  				<div class="row">
								<div class="col-lg-5"><label>Email * :</label></div>
								<div class="col-lg-7"><input class="form-control" type="text" id="emailadd" name="emailadd"></div>
								
							</div>
			  				<div class="row">
								<div class="col-lg-5"><label>รหัสผ่าน * :</label></div>
								<div class="col-lg-7"><input class="form-control" type="password" id="pwd" name="pwd"></div>
								
							</div>
			  
			<div class="mt-3">
			  <!--<input type="button" class="btn btn-primary" value="ลงทะเบียน" onClick="validateregister()" id="contact_submit">-->
				<input type="button" class="btn btn-primary" value="ลงทะเบียน" id="contact_submit">
			</div>
		  </form>
		
			 <!-- Modal -->
		  <div class="modal fade" id="myModalinform" role="dialog">
			<div class="modal-dialog modal-sm">
			  <div class="modal-content" style="width: 300px">
				<div class="modal-header">
					<h4 class="modal-title">แจ้งเตือน</h4>
				  <button type="button" class="close" onClick="closethismodal();">&times;</button>			
				</div>
				<div class="modal-body">
				  <h6 id="titlebody">กรุณาตรวจสอบข้อมูลที่กรอก<br>ข้อมูลอาจไม่ครบทุกช่อง</h6>
				</div>
				<div class="modal-footer">
				  <button type="button" class="btn btn-danger" onClick="closethismodal();">Close</button>
				</div>
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
	function closethismodal(){
		$("#myModalinform").modal("hide");
	}
</script>
</body>
</html>