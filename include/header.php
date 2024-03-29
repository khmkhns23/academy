<header class="header-area">

        <!-- Top Header Area -->
        <div class="top-header">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="header-content h-100 d-flex align-items-center justify-content-between">
                            <div class="academy-logo">
                                <!--<a href="index.html"><img src="img/core-img/logo.png" alt=""></a>--><h3>สมาคมตระกูลแซ่</h3>
                            </div>
                            <div class="login-content">
								<?php
									if(isset($_SESSION['sessid'])){
										echo"<h6>ยินดีต้อนรับ ". $_SESSION['sessuser'] ." / <a href=\"#\" onclick=\"logoutprocess();\" >ออกจากระบบ</a></h6>";
									}else{
										echo"<h6><a href=\"#\" onClick=\"registerform();\" >ลงทะเบียนผู้ดูแลผังครอบครัว </a> / <a href=\"#\" id=\"myBtn\">เข้าสู่ระบบผู้ดูแลผังครอบครัว</a></h6>";
									}
								
								?>
								
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Navbar Area -->
        <div class="academy-main-menu">
            <div class="classy-nav-container breakpoint-off">
                <div class="container">
                    <!-- Menu -->
                    <nav class="classy-navbar justify-content-between" id="academyNav">

                        <!-- Navbar Toggler -->
                        <div class="classy-navbar-toggler">
                            <span class="navbarToggler"><span></span><span></span><span></span></span>
                        </div>

                        <!-- Menu -->
                        <div class="classy-menu">

                            <!-- close btn -->
                            <div class="classycloseIcon">
                                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
                            </div>

                            <!-- Nav Start -->
                            <div class="classynav">
                                <ul>
                                    <li><a href="index.php">หน้าแรก</a></li>
                                   
                                    <li><a href="#" onClick="changpage(content,'orgchart.php',this)">ผังครอบครัว</a></li>
                                    <li><a href="#" onClick="changpage(content,'showcontent.php?idc=1',this)">ประวัติตระกูลแซ่</a></li>
                                    <li><a href="#" onClick="changpage(content,'showcontent.php?idc=2',this)">ประเพณีวัฒนธรรม</a></li>
                                    <li><a href="#" onClick="changpage(content,'showcontent.php?idc=3',this)">เหตุการณ์สำคัญ</a></li>
									<li><a href="#" onClick="changpage(content,'showcontent.php?idc=4',this)">กติกาข้อพิพาก</a></li>
									<li><a href="#" onClick="changpage(content,'managergens.php',this)">คณะผู้บริหาร</a></li>
									<?php if(isset($_SESSION['sessid'])) {  ?>
                                    <li><a href="#">รายงาน</a>
										<ul class="dropdown">
											<li><a href="#" onClick="showreport(1)">ทั้งหมด</a></li>
											
											<li><a href="#" onClick="showreport(5)">แยกตามรุ่น</a></li>                                           
											<li><a href="#" onClick="showreport(3)">แยกตามเพศ</a></li>
											<li><a href="#" onClick="showreport(4)">แยกตามจังหวัด</a></li>
											<li><a href="#" onClick="showreport(2)">แยกตามนามสกุล</a></li>
                                            
											
                                        </ul>
									</li>
                                    <?php } ?>
                                    
                                </ul>
                            </div>
                            <!-- Nav End -->
                        </div>

                        <!-- Calling Info -->
                        <div class="calling-info">
                            <div class="call-center">
                                <a href="tel:+654563325568889"></a>
                            </div>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </header>