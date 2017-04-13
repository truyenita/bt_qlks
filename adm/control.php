<?php
	include("../functionnew.php");
	include("../dbconnect.php");
	require('../php-captcha.inc.php');
	//echo("Hello!");
	$userid=mysql_real_escape_string($_REQUEST['ijud7']) ;
	$pass=mysql_real_escape_string($_REQUEST['dieju8']) ;
	$str1="select * from user where userid='".$userid."' and pass='".md5($pass)."'";
	$result=mysql_query($str1) or
		die(mysql_error());
	if (($row=mysql_fetch_array($result)) and (PhpCaptcha::Validate($_POST['user_code_ita'])))
	{
		//Khoi tao session
		//Redirect
		session_start();
		$_SESSION['user'] = $userid;
		$_SESSION['username'] = $row['username'];
		//$_SESSION['role'] = $row['role'];
		$_SESSION['pass'] =md5($pass);
		//TrackingAll($userid,'');
		header('Location:admin/admin.php');
	}
	else
	{
		//TrackingAll($userid,$pass);
		header('Location:login.php?id=1');	
	}
	mysql_free_result($result);
?>