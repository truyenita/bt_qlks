<?php
	include("dbconnect.php");
	require('php-captcha.inc.php');
	//Them 01 cau hoi trong muc hoi dap
	$questioner=mysql_real_escape_string($_REQUEST['questioner']);
	$email=mysql_real_escape_string($_REQUEST['email']);
	$address=mysql_real_escape_string($_REQUEST['address']);
	$phone=mysql_real_escape_string($_REQUEST['phone']);
	$title=mysql_real_escape_string($_REQUEST['title']);
	$question=mysql_real_escape_string($_REQUEST['question']);
	$date=date("Y-m-d");
	
	
	if (PhpCaptcha::Validate($_POST['user_code_ita'])) 
	{
		$str1="insert into faq(questioner,date,email,address,phone,title,question) ";
		$str1=$str1." values ('".$questioner."','".$date."','".$email."','".$address."','".$phone."','".$title."','".$question."')";
		$result=mysql_query($str1) or die(mysql_error());
		header('Location:index.php');
	} else {
		//echo 'Invalid code entered';
		header('Location:contact.php');
	}
	
	
?>		