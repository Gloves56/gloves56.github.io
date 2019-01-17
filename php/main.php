<?php


	$result="";
	if(isset($_POST['submit'])){
		require 'phpmailer/PHPMailerAutoload.php';
		$mail->Host='smtp.gmail.com';
		$mail->Port=587;
		$mail->SMTPAuth=true;
		$mail->SMTPSecure='tls';
		$mail->Username='gioves560@gmail.com';
		$mail->Password='undertaker34';
		
		$mail->setFrom($_POST['email']);
		$mail->addAddress('gioves@gmail.com');
		$mail->addReplyTo($_POST['email']);
		
		$mail->isHTML(true);
		$mail->Subject='Form Submission: '.$_POST['need'];
		$mail->Body='<h1 align=center>Name :'.$_POST['name'].'<br>Email: '.$_POST['email'].'<br>Message: '.$_POST['message'].'</h1>';
		
		if(!mail->send()){
			$result="Please Try Again.";
		}else{
			$result="Thanks you for contacting you us. We'll get back to you soon.";
		}
	}
?>