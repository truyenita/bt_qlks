<?php
	include("../../dbconnect.php");
	$name=$_REQUEST['name'];
	$address=$_REQUEST['address'];
	$phone=$_REQUEST['phone'];
	$email=$_REQUEST['email'];
	$title=$_REQUEST['title'];
	$content=$_REQUEST['content'];
	if ($name!="")
	{
		$str1="insert into contact(Name,Address,Phone,Email,Title,Content) values('".$name."','".$address."','".$phone."','".$email."','".$title."','".$content."')";
		$result=mysql_query($str1) or die(mysql_error());
		mysql_free_result($result);
		header('Location:..\message.php?id=1');
	}
	else
	{
		header('Location:..\index.php');
	}
?>