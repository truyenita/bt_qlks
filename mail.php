<?php
$mail_boundary = md5(uniqid(time()));
$mail_headers = "MIME-Version: 1.0\r\n";
$mail_headers .= "From: webmaster@example.com\r\nReply-To: webmaster@example.com\r\n";
$mail_headers .= "Content-type: multipart/mixed;boundary=\"$mail_boundary \"";
$mail_headers .= "\r\n\r\n";
$mail_headers .= "This is a multi-part message in MIME format.";

$mail_headers .= "\r\n\r\n";
$userfile = "stttt.sql";
$fp = fopen($userfile, "r");
$file = fread($fp, filesize($userfile));

$file = chunk_split(base64_encode($file));

$mail_body = "--$mail_boundary\n";
$mail_body .= "Content-type: text/plain; charset=euc-kr\r\n";
$mail_body .= "Content-transfer-encoding: 8bit\r\n\r\n";
$mail_body .= " Here goes the project file.\r\n";
$mail_body .= "--$mail_boundary\r\n";
$filename = basename($userfile);

$mail_body .= "Content-type: application/msword; name=$filename\r\n";
$mail_body .= "Content-transfer-encoding:base64\r\n\r\n";
$mail_body .= $file. "\r\n\r\n";

$mail_body .= " --$mail_boundary--";
$mail_to="trankimkha@gmail.com";
$mail_subject="test";
mail($mail_to, $mail_subject, $mail_body, $mail_headers);
?>