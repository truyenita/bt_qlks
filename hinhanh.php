<? ob_start(); ?>
<?php 
include("dbconnect.php");
if(isset($_POST["addha"]))
{
	/*$tmp_date=time();
	if ((($_FILES["duongdananh"]["type"] == "image/gif")
	|| ($_FILES["duongdananh"]["type"] == "image/jpeg")
	|| ($_FILES["duongdananh"]["type"] == "image/pjpeg")
	|| ($_FILES["duongdananh"]["type"] == "image/png"))
	&& ($_FILES["duongdananh"]["size"] < 80000))
	  {
	  if ($_FILES["duongdananh"]["error"] > 0)
		{
		echo "Return Code: " . $_FILES["duongdananh"]["error"] . "<br />";
		}
	  else
		{
		//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		//echo "Type: " . $_FILES["file"]["type"] . "<br />";
		//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
		
		if (file_exists("/userfiles/album/".$tmp_date . $_FILES["duongdananh"]["name"]))
		  {
		  echo $_FILES["duongdananh"]["name"] . " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES["duongdananh"]["tmp_name"],"/userfiles/album/".$tmp_date . $_FILES["duongdananh"]["name"]);
		  //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		  }
		}
	  }
	else
	  {
	  echo "Invalid file";
	  }*/
	  
	$trangthai=$_POST["trangthai"]=="on"?1:0;
	$duongdananh=mysql_real_escape_string($_REQUEST['duongdananh']);
	$sql_insert_ha = "insert into album2(`idalbum1`,`ghichu`,`duongdananh`,`trangthai`) values('".$_POST["idalbum1"]."','".$_POST["ghichu"]."','".$duongdananh."','".$trangthai."')";
	
	if(mysql_query($sql_insert_ha))
	{
		header("Location: hinhanhlist.php");
	}
	else
	{
		echo(mysql_error());
	}
}

//c?p nh?t hình ?nh
if(isset($_POST["editha"]))
{
	/*$tmp_date=time();
	if ((($_FILES["duongdananh"]["type"] == "image/gif")
	|| ($_FILES["duongdananh"]["type"] == "image/jpeg")
	|| ($_FILES["duongdananh"]["type"] == "image/pjpeg")
	|| ($_FILES["duongdananh"]["type"] == "image/png"))
	&& ($_FILES["duongdananh"]["size"] < 80000))
	  {
	  if ($_FILES["duongdananh"]["error"] > 0)
		{
		echo "Return Code: " . $_FILES["duongdananh"]["error"] . "<br />";
		}
	  else
		{
		//echo "Upload: " . $_FILES["file"]["name"] . "<br />";
		//echo "Type: " . $_FILES["file"]["type"] . "<br />";
		//echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
		//echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";
		
		if (file_exists("/userfiles/album/".$tmp_date . $_FILES["duongdananh"]["name"]))
		  {
		  echo $_FILES["duongdananh"]["name"] . " already exists. ";
		  }
		else
		  {
		  move_uploaded_file($_FILES["duongdananh"]["tmp_name"],
		  "/userfiles/album/".$tmp_date . $_FILES["duongdananh"]["name"]);
		  //echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
		  }
		}
	  }
	else
	  {
	  echo "Invalid file";
	  }*/
	$trang_thai=$_POST["trangthai"]=="on"?1:0;
	$duongdananh=mysql_real_escape_string($_REQUEST['duongdananh']);
	$sql_update_ha = "update album2 set `idalbum1`='".$_POST["idalbum1"]."',`ghichu`='".$_POST["ghichu"]."',`duongdananh`='".$duongdananh."', `trangthai`='".$trang_thai."'";
	
	
	/*if($_FILES["duongdananh"]["name"]!="")
	{
		$sql_update_ha = $sql_update_ha.",`duongdananh`='/userfiles/album/".$tmp_date.$_FILES["duongdananh"]["name"]."'";
		echo("co file");		
	}*/
	$sql_update_ha =$sql_update_ha." where `id`='".$_REQUEST["editid"]."'";
	if(mysql_query($sql_update_ha))
	{
		header("Location: hinhanhlist.php");
	}
	else
	{
		echo(mysql_error());
	}
}

//xóa hình ?nh
if(isset($_REQUEST["delid"]))
{
	if(mysql_query("delete from album2 where `id`='".$_REQUEST["delid"]."'"))
	{
		header("Location: hinhanhlist.php");
	}
	else
	{
		echo(mysql_error());
	}
	
}
//danh sach hinh anh o trang giao dien
/*if(isset($_REQUEST["idalbum1"]))
{
	if(mysql_query("select * from album2 where trangthai=1 and `id`='".$_REQUEST["idalbum1"]."'"))
	{
		header("Location: picture.php");
	}
	else
	{
		echo(mysql_error());
	}
	
}*/
?>
<? ob_flush(); ?>