<?php
	include("dbconnect.php");
	require('php-captcha.inc.php');
	//Them 01 cau hoi trong muc hoi dap
	$arrayChar = array("\"","\'","\\","=",")","(","'",";","#","--","...","<",">","`");
	$name=str_replace($arrayChar,"",htmlspecialchars(mysql_real_escape_string(stripslashes(strip_tags($_REQUEST['name'])))));
	$email=str_replace($arrayChar,"",htmlspecialchars(mysql_real_escape_string(stripslashes(strip_tags($_REQUEST['email'])))));
	$address=str_replace($arrayChar,"",htmlspecialchars(mysql_real_escape_string(stripslashes(strip_tags($_REQUEST['address'])))));
	$phone=str_replace($arrayChar,"",htmlspecialchars(mysql_real_escape_string(stripslashes(strip_tags($_REQUEST['phone'])))));
	$company=str_replace($arrayChar,"",htmlspecialchars(mysql_real_escape_string(stripslashes(strip_tags($_REQUEST['company'])))));
	$status=0;
	$date=date("Y-m-d");
	
	
	if (PhpCaptcha::Validate($_POST['user_code_ita'])&& $name != "" && $address!= "") 
	{
		$str1="insert into register(name,phone,email,address,company,date,status) ";
		$str1=$str1." values ('".$name."','".$phone."','".$email."','".$address."','".$company."','".$date."','".$status."')";
		$result=mysql_query($str1) or die(mysql_error());
		header('Location:index.php');
	} else {
		//echo 'Invalid code entered';
		header('Location:register.php');
	}
	
	
?>		