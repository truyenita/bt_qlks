<? ob_start(); ?>
<?php 
include("dbconnect.php");
if(isset($_POST["addvideo"]))
{
	/*$adr = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://';
    $adr .= isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : getenv('HTTP_HOST');
	$tmp_date=time();
	
	  if ($_FILES["video"]["error"] > 0)
		{
		echo "Return Code: " . $_FILES["video"]["error"] . "<br />";
		}
	  else
		{
		//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		//echo "Type: " . $_FILES["file"]["type"] . "<br />";
		//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
		
		if (file_exists("userfiles/video/".$tmp_date . $_FILES["video"]["name"]))
		  {
		  echo $_FILES["video"]["name"] . " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES["video"]["tmp_name"],
		  "userfiles/video/".$tmp_date . $_FILES["video"]["name"]);
		  //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		  }
		}*/
	$imagelink=mysql_real_escape_string($_REQUEST['imagelink']);
	$link=mysql_real_escape_string($_REQUEST["link"]);
	$trang_thai=$_POST["trang_thai"]=="on"?1:0;
	$hot=$_POST["hot"]=="on"?1:0;
	$sql_insert_ha = "insert into video(`link`,`ghi_chu`,`trang_thai`,`imagelink`,`hot`) values('".$link."','".$_POST["ghi_chu"]."','".$trang_thai."','".$imagelink."','".$hot."')";
	
	//$sql_insert_ha = "insert into video(`link`,`ghi_chu`,`trang_thai`,`imagelink`) values('".$adr.dirname($_SERVER['PHP_SELF'])."/userfiles/video/".$tmp_date.$_FILES["video"]["name"]."','".$_POST["ghi_chu"]."','".$trang_thai."','".$imagelink."')";
	if(mysql_query($sql_insert_ha))
	{
		header("Location: videolist.php");
	}
	else
	{
		echo(mysql_error());
	}
}

//c?p nh?t video
if(isset($_POST["editvideo"]))
{
	/*$adr = ( isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off') ? 'https://' : 'http://';
    $adr .= isset($_SERVER['HTTP_HOST']) ? $_SERVER['HTTP_HOST'] : getenv('HTTP_HOST');
	$tmp_date=time();
	
	  if ($_FILES["video"]["error"] > 0)
		{
		echo "Return Code: " . $_FILES["video"]["error"] . "<br />";
		}
	  else
		{
		//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		//echo "Type: " . $_FILES["file"]["type"] . "<br />";
		//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
		
		if (file_exists("userfiles/video/".$tmp_date . $_FILES["video"]["name"]))
		  {
		  echo $_FILES["video"]["name"] . " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES["video"]["tmp_name"],
		  "userfiles/video/".$tmp_date . $_FILES["video"]["name"]);
		  //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		  }
		}
	 */
	 $link=mysql_real_escape_string($_REQUEST["link"]);
	$imagelink=mysql_real_escape_string($_REQUEST['imagelink']);
	$trang_thai=$_POST["trang_thai"]=="on"?1:0;
		$hot=$_POST["hot"]=="on"?1:0;

	$sql_update_ha = "update video set `link`='".$link."',`ghi_chu`='".$_POST["ghi_chu"]."', `trang_thai`='".$trang_thai."',`imagelink`='".$imagelink."',`hot`='".$hot."'";
	
	
	/*if($_FILES["video"]["name"]!="")
	{
		$sql_update_ha = $sql_update_ha.",`link`='".$adr.dirname($_SERVER['PHP_SELF'])."/userfiles/video/".$tmp_date.$_FILES["video"]["name"]."'";
		echo("co file");		
	}*/
	$sql_update_ha =$sql_update_ha." where `id`='".$_REQUEST["editid"]."'";
	
	if(mysql_query($sql_update_ha))
	{
		header("Location: videolist.php");
	}
	else
	{
		echo(mysql_error());
	}
}

//xóa video
if(isset($_REQUEST["delid"]))
{
	if(mysql_query("delete from video where `id`='".$_REQUEST["delid"]."'"))
	{
		header("Location: videolist.php");
	}
	else
	{
		echo(mysql_error());
	}
	
}
?>
<? ob_flush(); ?>
