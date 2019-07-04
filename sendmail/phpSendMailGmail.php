<html>
<head>
<title>ThaiCreate.Com Tutorial</title>
</head>
<body>
<?php
	//$url = 'http://'.($_SERVER['SERVER_NAME']==='localhost')?'localhost/academy':$_SERER['SERVER_NAME']; 

	
	require_once('class.phpmailer.php');
	$mail = new PHPMailer();
	$mail->CharSet = "utf-8";
	$mail->IsHTML(true);
	$mail->IsSMTP();
	$mail->SMTPAuth = true; // enable SMTP authentication
	$mail->SMTPSecure = "ssl"; // sets the prefix to the servier
	$mail->Host = "smtp.gmail.com"; // sets GMAIL as the SMTP server
	$mail->Port = 465; // set the SMTP port for the GMAIL server
	$mail->Username = "khmkhns@gmail.com"; // GMAIL username
	$mail->Password = "Nmax@240"; // GMAIL password
	$mail->From = "khmkhns@gmail.com"; // "name@yourdomain.com";
	//$mail->AddReplyTo = "support@thaicreate.com"; // Reply
	$mail->FromName = "เว็บไซต์สมาคมตระกูลแซ่";  // set from Name
	$msg = "ยืนยันการลงทะเบียน <b>ท่านได้ทำการลงทะเบียนใช้งานเว็บไซต์ ชมรมตระกูลแซ่ <br>เพื่อให้การลงทะเบียนสมบูรณ์คุณจะต้องยืนยันการลงทะเบียน ด้วยลิงค์นี้</b><a href='http://academyyut.herokuapp.com'";
	$mail->Subject = "ยืนยันการลงทะเบียน"; 
	$mail->Body = "ยืนยันการลงทะเบียน <b>ท่านได้ทำการลงทะเบียนใช้งานเว็บไซต์ ชมรมตระกูลแซ่ <br>เพื่อให้การลงทะเบียนสมบูรณ์คุณจะต้องยืนยันการลงทะเบียน ด้วยลิงค์นี้</b><a href='http://academyyut.herokuapp.com'";

	$mail->AddAddress("khm_s@hotmail.com", "MR.Yuttthasart"); // to Address

	
	$mail->set('X-Priority', '1'); //Priority 1 = High, 3 = Normal, 5 = low

	$mail->Send(); 
?>
</body>
</html>