<?php
	include"include/connect.php";
	include"include/functions.php";
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
    <link rel="stylesheet" href="style.css">
	<style>
		  .modal-header,  .close {
			background-color: #5cb85c;
			color:white !important;
			text-align: center;
			font-size: 30px;
		  }
		  .modal-footer {
			background-color: #f9f9f9;
		  }
  </style>
	<script src="js/jquery/jquery-2.2.4.min.js"></script>
	<script>
	$(document).ready(function(){
	  $("#myBtn").click(function(){
		$("#myModal").modal(); 
	  });
		
		//changpage2(content,'orgchart.php',this)
		var reloading = sessionStorage.getItem("reloading");
		var urlreload = sessionStorage.getItem("urlreload");
		var objsessa = sessionStorage.getItem("objsess1");
		//var resarray1 = isArray(dataPoints);
		
			
		
		//console.log(resarray.length);
		//console.log(resarray1);
		//dashboard2(resarray);
		if (reloading) {
			var resarray = [];
			//function call_me(params) {
			  for (i=0; i< objsessa.length; i++) {
				console.log(objsessa[i]);
			  }
			//}
			//dashboard2(objsessa);
			
			//changpage(content,'orgchart2.php',this)
			//setTimeout(function(){ changpage2(objsess); }, 1000);
			sessionStorage.removeItem("reloading");
			sessionStorage.removeItem("urlreload");
			sessionStorage.removeItem("reloading");
					$(".hero-area").css("display","none");
					$(".call-to-action-area").css("display","none");
					$(".top-features-area").css("display","none");
					$(".breadcumb-area").css("display","block");
					//$(".breadcumb-area").css("display","none");
			//changpage2(content,urlreload,'ผังครอบครัว');
				/*$.ajax({
				url: "orgchart.php",
				type: "POST",
				success: function(result)
				{
					//console.log(result);
					$(content).html(result);
					$("h2").text("ผังครอบครัว");

					
				}
			});*/
			//console.log(urlreload);
			//sessionStorage.removeItem("urlreload");
					
		}
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
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header" style="padding:35px 50px;">
			<h4><i class="fa fa-lock"></i> Login</h4>
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          
        </div>
        <div class="modal-body" style="padding:40px 50px;">
          <form role="form">
            <div class="form-group">
              <label for="usrname"><span class="glyphicon glyphicon-user"></span> Username</label>
              <input type="text" class="form-control" id="usrname" placeholder="Enter email">
            </div>
            <div class="form-group">
              <label for="psw"><span class="glyphicon glyphicon-eye-open"></span> Password</label>
              <input type="text" class="form-control" id="psw" placeholder="Enter password">
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="" checked>Remember me</label>
            </div>
              <button type="submit" class="btn btn-success btn-block"><span class="glyphicon glyphicon-off"></span> Login</button>
          </form>
        </div>
        <div class="modal-footer">
          <button type="submit" class="btn btn-danger btn-default pull-left" data-dismiss="modal"><span class="glyphicon glyphicon-remove"></span> Cancel</button>
          <p>Not a member? <a href="#">Sign Up</a></p>
          <p>Forgot <a href="#">Password?</a></p>
        </div>
      </div>
      
    </div>
  </div>
	
	<div id="tree"></div>
	<div id="tree2"></div>
    <!-- ##### Footer Area Start ##### -->
   <?php include"include/footer.php"; ?>
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
	<script src="https://balkangraph.com/js/latest/OrgChart.js"></script>
	
</body>

</html>