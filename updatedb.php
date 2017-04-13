<?php
	session_start(); 
	include("dbconnect.php");
	include("functionnew.php");
	if (strlen($_SESSION['user'])<1)
		header('Location:portal/login.php?id=2');
	$action=intval(mysql_real_escape_string($_REQUEST['action'] ));
	switch ($action)
	{
		//Bat tat cac module
		case 1:
			$vermenu=intval(mysql_real_escape_string($_REQUEST['vermenu']));
			$round=intval(mysql_real_escape_string($_REQUEST['round']));
			$counteron=intval(mysql_real_escape_string($_REQUEST['counteron']));
			$newlawdoc=intval(mysql_real_escape_string($_REQUEST['newlawdoc']));
			$topnews=intval(mysql_real_escape_string($_REQUEST['topnews']));
			$document=intval(mysql_real_escape_string($_REQUEST['document']));
			$calendar=intval(mysql_real_escape_string($_REQUEST['calendar']));
			$banner=intval(mysql_real_escape_string($_REQUEST['banner']));
			$update=intval(mysql_real_escape_string($_REQUEST['update']));
			$imagelist=intval(mysql_real_escape_string($_REQUEST['imagelist']));
			$rss=intval(mysql_real_escape_string($_REQUEST['rss']));
			$newsfromurl=intval(mysql_real_escape_string($_REQUEST['newsfromurl']));
			$search=intval(mysql_real_escape_string($_REQUEST['search']));
			$login=intval(mysql_real_escape_string($_REQUEST['login']));
			$chat=intval(mysql_real_escape_string($_REQUEST['chat']));
			$color=intval(mysql_real_escape_string($_REQUEST['color']));
			//truyen
			$video=intval(mysql_real_escape_string($_REQUEST['video']));
			
			$str1="update options set value1=".$vermenu." where name='vermenu'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$round." where name='round'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$counteron." where name='counteron'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$newlawdoc." where name='newlawdoc'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$topnews." where name='topnews'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$document." where name='document'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$calendar." where name='calendar'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$banner." where name='banner'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$update." where name='update'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$imagelist." where name='imagelist'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$rss." where name='rss'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$newsfromurl." where name='newsfromurl'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$search." where name='search'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$login." where name='login'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$chat." where name='chat'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set value1=".$color." where name='colorselection'";
			$result=mysql_query($str1) or die(mysql_error());
			$weblist=intval(mysql_real_escape_string($_REQUEST['weblist']));
			setPara('weblist','value1',$weblist);
			//truyen
			$str1="update options set value1=".$video." where name='video'";
			$result=mysql_query($str1) or die(mysql_error());
						
			//mysql_free_result($result);
			//Chuyen ve trang thong bao
			header('Location:portal/admin/admin.php');
			break;

		//Quy dinh vi tri hien thi module
		case 2:
			$counteron=intval(mysql_real_escape_string($_REQUEST['counteron']));
			$newlawdoc=intval(mysql_real_escape_string($_REQUEST['newlawdoc']));
			$topnews=intval(mysql_real_escape_string($_REQUEST['topnews']));
			$document=intval(mysql_real_escape_string($_REQUEST['document']));
			$calendar=intval(mysql_real_escape_string($_REQUEST['calendar']));
			$imagelist=intval(mysql_real_escape_string($_REQUEST['imagelist']));
			$newsfromurl=intval(mysql_real_escape_string($_REQUEST['newsfromurl']));
			$search=intval(mysql_real_escape_string($_REQUEST['search']));
			$login=intval(mysql_real_escape_string($_REQUEST['login']));
			$chat=intval(mysql_real_escape_string($_REQUEST['chat']));
			//truyen
			$video=intval(mysql_real_escape_string($_REQUEST['video']));
			
			$str1="update options set moduleorder=".$counteron." where name='counteron'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set moduleorder=".$newlawdoc." where name='newlawdoc'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set moduleorder=".$topnews." where name='topnews'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set moduleorder=".$document." where name='document'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set moduleorder=".$calendar." where name='calendar'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set moduleorder=".$imagelist." where name='imagelist'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set moduleorder=".$newsfromurl." where name='newsfromurl'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set moduleorder=".$search." where name='search'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set moduleorder=".$login." where name='login'";
			$result=mysql_query($str1) or die(mysql_error());
			$str1="update options set moduleorder=".$chat." where name='chat'";
			$result=mysql_query($str1) or die(mysql_error());
			//truyen
			$str1="update options set moduleorder=".$video." where name='video'";
			$result=mysql_query($str1) or die(mysql_error());
						
			//mysql_free_result($result);
			//Chuyen ve trang thong bao
			header('Location:portal/admin/admin.php');
			break;			
			
		//Bat tat che do thong bao cap nhat	
		//case 2:
			//$onoff=intval(mysql_real_escape_string($_REQUEST['onoff'])) ;
			//$str1="update options set value1=".$onoff." where name='update'";
			//echo($str1);
			//$result=mysql_query($str1) or die(mysql_error());
			//mysql_free_result($result);
			//Chuyen ve trang thong bao
			//header('Location:portal/admin/admin.php');
			//break;
		//Doi mat khau		
		case 3:
			$oldpass=md5(mysql_real_escape_string($_REQUEST['oldpass'])) ;
			$newpass1=mysql_real_escape_string($_REQUEST['newpass1']) ;
			$newpass2=mysql_real_escape_string($_REQUEST['newpass2']) ;
			if ($oldpass!=$_SESSION['pass'])
				header('Location: message.php?id=2');
			else
			{
				if ($newpass1!=$newpass2)
					header('Location: message.php?id=3');
				else
				{		
					$str1="update user set pass='".md5($newpass1)."' where userid='".$_SESSION['user']."'";
					//echo($str1);
					$result=mysql_query($str1) or die(mysql_error());
					//mysql_free_result($result);
					//Chuyen ve trang thong bao
					header('Location: message.php?id=4');
				}	
			}	
			break;
		///////////////////////////////////////////Cap nhat chan trang trai	
		case 4:
			$leftfooter=mysql_real_escape_string($_REQUEST['leftfooter']) ;
			$str1="update options set value3='".$leftfooter."' where name='leftfooter'";
			//echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			mysql_free_result($result);
			//Chuyen ve trang thong bao
			header('Location:portal/admin/admin.php');
			break;	
			
			
		/////////////////////////////////////Cap nhat chan trang phai
		case 5:
			$rightfooter=mysql_real_escape_string($_REQUEST['rightfooter']) ;
			$str1="update options set value3='".$rightfooter."' where name='rightfooter'";
			//echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			//mysql_free_result($result);
			//Chuyen ve trang thong bao
			header('Location:portal/admin/admin.php');
			break;	
			
		/////////////////////////////////////Cap nhat tieu diem
		case 6:
			$topnews=mysql_real_escape_string($_REQUEST['topnews']) ;
			$str1="update options set value3='".$topnews."' where name='topnews'";
			//echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			//mysql_free_result($result);
			//Chuyen ve trang thong bao
			header('Location:portal/admin/admin.php');
			break;
		////////////////////////////// Logout				
		case 7:
			session_destroy();
			header('Location:index.php');
			break;	
		///////////////////////////Bat tat lich
		case 8:
			$onoff=intval(mysql_real_escape_string($_REQUEST['onoff'])) ;
			$str1="update options set value1=".$onoff." where name='calendar'";
			//echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			//mysql_free_result($result);
			//Chuyen ve trang admin
			header('Location:portal/admin/admin.php');
			break;	
		///////////////////////////Quy dinh mau chu dao
		case 9:
			$template=intval(mysql_real_escape_string($_REQUEST['template'])) ;
			$str1="update options set value1=".$template." where name='template'";
			//echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			//mysql_free_result($result);
			//Chuyen ve trang admin
			header('Location:portal/admin/admin.php');
			break;		
		///////////////////////////Bat tat lich
		case 10:
			$onoff=intval(mysql_real_escape_string($_REQUEST['onoff'])) ;
			$str1="update options set value1=".$onoff." where name='counteron'";
			//echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			//mysql_free_result($result);
			//Chuyen ve trang admin
			header('Location:portal/admin/admin.php');
			break;	
		///////////////////////////Duyet lich cong tac
		case 11:
			$start=mysql_real_escape_string($_REQUEST['start']) ;
			$end=mysql_real_escape_string($_REQUEST['end']) ;
			$str1="update timetable set approval=1 where date>='".$start."' and date<='".$end."'";
			//echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			//mysql_free_result($result);
			//Chuyen ve trang admin
			header('Location:portal/admin/admin.php');
			break;	
			
		///////////////////////////// Cap nhat cac tham so
		case 12:
			$leftfooter=trim(mysql_real_escape_string($_REQUEST['leftfooter'])) ;
			setPara('leftfooter','value3',$leftfooter);
			$rightfooter=trim(mysql_real_escape_string($_REQUEST['rightfooter'])) ;
			setPara('rightfooter','value3',$rightfooter);
			$keyword=trim(mysql_real_escape_string($_REQUEST['keyword'])) ;
			setPara('keyword','value3',$keyword);
			$title=mysql_real_escape_string($_REQUEST['title']) ;
			setPara('title','value2',$title);
			$newlawdoc=mysql_real_escape_string($_REQUEST['newlawdoc']) ;
			setPara('newlawdoc','value2',$newlawdoc);
			$document=mysql_real_escape_string($_REQUEST['document']) ;
			setPara('document','value2',$document);
			$imagelist=mysql_real_escape_string($_REQUEST['imagelist']) ;
			setPara('imagelist','value2',$imagelist);
			$calendar=mysql_real_escape_string($_REQUEST['calendar']) ;
			setPara('calendar','value2',$calendar);
			$search=mysql_real_escape_string($_REQUEST['search']) ;
			setPara('search','value2',$search);
			$counteron=mysql_real_escape_string($_REQUEST['counteron']) ;
			setPara('counteron','value2',$counteron);
			$topnews=mysql_real_escape_string($_REQUEST['topnews']) ;
			setPara('topnews','value2',$topnews);
			$recordsperpage=mysql_real_escape_string($_REQUEST['recordsperpage']) ;
			setPara('recordsperpage','value1',$recordsperpage);
			$weblist=mysql_real_escape_string($_REQUEST['weblist']) ;
			setPara('weblist','value2',$weblist);
			$newsfromurlURL=mysql_real_escape_string($_REQUEST['newsfromurlURL']) ;
			setPara('newsfromurl','value3',$newsfromurlURL);
			$login=mysql_real_escape_string($_REQUEST['login']) ;
			setPara('login','value2',$login);	
			$chat=mysql_real_escape_string($_REQUEST['chat']) ;
			setPara('chat','value2',$chat);
			$marqueetext=mysql_real_escape_string($_REQUEST['marqueetext']) ;
			setPara('marqueetext','value2',$marqueetext);
			$top5newsstyle=intval(mysql_real_escape_string($_REQUEST['top5newsstyle']));	
			setPara('top5newsstyle','value1',$top5newsstyle);	
			$headerfooter=intval(mysql_real_escape_string($_REQUEST['headerfooter']));	
			setPara('headerfooter','value1',$headerfooter);
			$google=mysql_real_escape_string($_REQUEST['google']);	
			setPara('google','value3',$google);
			//truyen
			$video=mysql_real_escape_string($_REQUEST['video']) ;
			setPara('video','value2',$video);
			
						
			$logoimage=mysql_real_escape_string($_REQUEST['logoimage']) ;
			setPara('logo','value3',$logoimage);	
			$bannerimage=mysql_real_escape_string($_REQUEST['bannerimage']) ;
			setPara('banner','value3',$bannerimage);				
			header('Location:portal/admin/admin.php');
			
			break;			
		///////////////////////////Duyet tin
		case 13:
			$newsid=intval(mysql_real_escape_string($_REQUEST['id'])) ;
			$str1="update news set approval=1 where newsid=".$newsid;
			//echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			//mysql_free_result($result);
			//Chuyen ve trang admin
			header('Location:newsadmin.php');
			break;	
		///////////////////////////An tin
		case 14:
			$newsid=intval(mysql_real_escape_string($_REQUEST['id'])) ;
			$str1="update news set approval=0 where newsid=".$newsid;
			//echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			//mysql_free_result($result);
			//Chuyen ve trang admin
			header('Location:newsadmin.php');
			break;			
		/////////////// Luu thong tin chon mau cua user vao session
		case 15:
			$color=intval(mysql_real_escape_string($_REQUEST['color'])) ;
			//$url=mysql_real_escape_string($_REQUEST['url']) ;
			$_SESSION['color'] = $color;
			$s=$_SERVER['HTTP_REFERER'];
			header('Location:'.$s);
			
			break;
			//da nop tien le phi làm hội viên
		case 16:
			$newsid=intval(mysql_real_escape_string($_REQUEST['id'])) ;
			$str1="update register set status=1 where id=".$newsid;
			$result=mysql_query($str1) or die(mysql_error());
			header('Location:registeradmin.php');
			break;					
		}
?>