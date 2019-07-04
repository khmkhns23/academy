<?php
	include"include/connect.php";
	include"include/functions.php";
	
$timenow = date("Y-m-d H:i:s",time());

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>สมาคมตระกูลแซ่</title>

    <!-- Favicon -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Core Stylesheet -->
<!--	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
-->    
	
	<link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="css/newcss.css">
	<script src="js/jquery/jquery-2.2.4.min.js"></script>
	<script>
	$(document).ready(function(){
	  $("#myBtn").click(function(){
		$("#myModallogin").modal(); 
		  		  
	  });
	  $("#aforgetpwd").click(function(){
		 // console.log('ok');
		  $('#myModallogin').modal('hide');
		  $('#myModallogin').on('hidden.bs.modal', function (e) {
			  	$("#forgerpwdModal").modal(); 	
		  });
						 
	 });
		var reloading = sessionStorage.getItem("reloading");
		var urlreload = sessionStorage.getItem("urlreload");
		
			
      if(reloading){
          $(".hero-area").css("display","none");
					$(".call-to-action-area").css("display","none");
					$(".top-features-area").css("display","none");
					$(".breadcumb-area").css("display","block");
          //$(".breadcumb-area").css("display","none");
				  showanimation(1);
				  setTimeout(function(){ changpage2(content,urlreload,'ผังครอบครัว'); },3000);
      		}
	
      		sessionStorage.removeItem("reloading");
			sessionStorage.removeItem("urlreload");
		
		
		$("#forgetpwd").click(function(){
			//	console.log('click btn chngpwd');
			var oldpwd = $("#oldpwd").val();
			var newpwd = $("#newpwd").val();
			var cfnewpwd = $("#cfnewpwd").val();
	
			var idss = $("#hiddeid").val();
			var data2 = $("#formchangepwd input").serialize();
				data2 += "&idnode="+idss;
				//console.log(data2);
			$.ajax({
				url: 'administrator/process.php?typeprocess=changpwd',
				type: "POST",
				data: data2,
				success: function(response){
					//console.log(response);
					showdialog(response);
					$('#dialog').modal('show');
					$('#dialog').on('shown.bs.modal', function(){
						$(this).find('button').focus();
					});
					$('#dialog').on('hidden.bs.modal', function () {
						$('#myModal3').modal('hide');
					});
					},
				});
		});		
});

	</script>
</head>

<body>
    <!-- ##### Preloader ##### -->
    <div id="preloader">
        <i class="circle-preloader"></i>
    </div>

    <!-- ##### Header Area Start ##### -->
    <?php include"include/header.php";?>
    <!-- ##### Header Area End ##### -->

    <!-- ##### Hero Area Start ##### -->
    <?php include"include/hero.php";?>
    <!-- ##### Hero Area End ##### -->
	<!-- ##### Breadcumb Area Start ##### -->
    <div class="breadcumb-area bg-img" style="background-image: url(img/bg-img/breadcumb.jpg);display: none">
        <div class="bradcumbContent">
            <h2>About Us2</h2>
        </div>
    </div>
    <!-- ##### Breadcumb Area End ##### -->
    <!-- ##### Top Feature Area Start ##### -->
    <div class="top-features-area wow fadeInUp" data-wow-delay="300ms">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="features-content">
                        <div class="row no-gutters">
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-agenda-1"></i>
                                    <h5>Online Courses</h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-assistance"></i>
                                    <h5>Amazing Teachers</h5>
                                </div>
                            </div>
                            <!-- Single Top Features -->
                            <div class="col-12 col-md-4">
                                <div class="single-top-features d-flex align-items-center justify-content-center">
                                    <i class="icon-telephone-3"></i>
                                    <h5>Great Support</h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ##### Top Feature Area End ##### -->

    <!-- ##### Course Area Start ##### -->
    <div class="academy-courses-area section-padding-100-0">
        <div class="container" id="content">
            
        </div>
    </div>
    <!-- ##### Course Area End ##### -->

    <!-- ##### Testimonials Area Start ##### -->
   
    <!-- ##### Testimonials Area End ##### -->

    <!-- ##### Top Popular Courses Area Start ##### -->
    
    <!-- ##### Top Popular Courses Area End ##### -->

    <!-- ##### Partner Area Start ##### -->
    
    <!-- ##### Partner Area End ##### -->

  	
	
  <!-- Modal -->
  <div class="modal fade" id="myModallogin" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
			<h4><i class="fa fa-lock"></i> Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form" action="administrator/loginprocess.php" method="post" id="formlogin">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user" value=""></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="password" class="form-control" id="psw" placeholder="Enter password">
            </div>
            
              <input type="button" class="btn btn-success btn-block" value="Login" onClick="validatelogin()">
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>ไม่ได้เป็นสมาชิก ? <a href="#" onClick="registerform();">ลงทะเบียน</a></p>
          <p>ลืม <a href="#" id="aforgetpwd">รหัสผ่าน?</a></p>
        </div>
      </div>
      
    </div>
  </div>
	
	<div id="tree"></div>
	<div id="se-pre-con"></div>
	<div id="showcontentmodal"></div>
    <!-- ##### Footer Area Start ##### -->
   <?php include"include/footer.php"; ?>
	<?php include"administrator/forgetpwdform.php"; 
		  include "administrator/register.php";
	?>
    <!-- ##### Footer Area Start ##### -->

    <!-- ##### All Javascript Script ##### -->
    <!-- jQuery-2.2.4 js -->
    
    <!-- Popper js -->
    <script src="js/bootstrap/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <!-- All Plugins js -->
    <script src="js/plugins/plugins.js"></script>
    <!-- Active js -->
    <script src="js/active.js"></script>
	<script src="include/newscript.js"></script>
	<script src="include/newscript2.js"></script>
	<script src="include/newscript3.js"></script>
	<script src="https://balkangraph.com/js/latest/OrgChart.js"></script>
	<script>
		function strip_html_tags(str)
			{
			   if ((str===null) || (str==='')){
				   return false;
			   }else{
				    str = str.toString();
			  		return str.replace(/<[^>]*>/g, ''); 
			   }
			}
		function validatelogin(){
			//
			//var dataln = $("#formlogin").serialize();
			var usernames = $("#usrname").val();
			var passwsords = $("#psw").val();
			//console.log(usernames+passwsords)
			 username = strip_html_tags(usernames);
			 password = strip_html_tags(passwsords);
			
			checklogin(username,password);
			
		}
		function checklogin(usr,pwd){
			var url = $("#formlogin").attr("action");
			var datamg = "usr="+usr+"&pwd="+pwd;
			$.ajax({
			url: url,
			type: "POST",
			data: datamg,
			beforeSend: function(){
				showanimation(1);
			},
			success: function(result)
			{
				//console.log(result);
				showanimation(2);
				if(result == 1){
					
					showdialog("ยินดีต้อนรับเข้าสู่ระบบ");
						$('#dialog').modal('show');
						$('#dialog').on('shown.bs.modal', function(){
								$(this).find('button').focus();
						});
						$('#dialog').on('hidden.bs.modal', function () {
								$('#myModallogin').modal('hide');
								document.location.reload();
						});
				}else{
					showdialog("รหัสผ่านไม่ถูกต้อง");
						$('#dialog').modal('show');
						$('#dialog').on('shown.bs.modal', function(){
								$(this).find('button').focus();
						});
				}
				
			}	
		});
		}
		function logoutprocess(){
			$.ajax({
			url: "administrator/logout.php",
			type: "POST",
			beforeSend: function(){
				showanimation(1);
			},
			success: function(result)
			{
				//console.log(result);
				sessionStorage.removeItem("sessid");
				showanimation(2);
					showdialog("ออกจากระบบเรียบร้อยแล้ว");
						$('#dialog').modal('show');
						$('#dialog').on('shown.bs.modal', function(){
								$(this).find('button').focus();
						});
					document.location.reload();
			}	
		});
		}
/*		
function forgetpasswordform(){
	 
	$("#myModallogin").modal('hide');
	$('#myModallogin').on('hidden.bs.modal', function (e) {
		console.log('after hide');
			$("#forgerpwdModal").modal('show');
	});	
}*/
	</script>
</body>
</html>