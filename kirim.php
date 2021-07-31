<?php 

include "index.html";

	$nama=$_POST['nama'];
	$subject=$_POST['subject'];
	$tujuan=$_POST['tujuan'];
	$pesan=$_POST['pesan'];

	$mail = new PHPMailer;
	$mail->IsSMTP();
	$mail->SMTPSecure = 'ssl';
	$mail->Host = "smtp.gmail.com";
	$mail->SMTPDebug = 1;

 ?>