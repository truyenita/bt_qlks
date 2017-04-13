<?php 
function pathtockfinder() 
{
	//Tra ve duong dan den thu muc ckfinder tu HOME_DIR
	//return "/hoainhon/ckfinder/";
	return "/ckfinder/";
}
//////////// Hien thi 5 tin noi bat nhat o trang chu - Mau 3
function ShowTop5News3()
{
	echo("<div id='boxCTop' style=\"border:1px solid #22496c;\">"); 
                   
					$str2="select * from news where approval=1 and topnews=1 order by date desc,newsid desc limit 0,4";
					$result1=mysql_query($str2) or die(mysql_error());
					//$row=mysql_fetch_array($result);
					$sttnew=1;
					
					while ($row1=mysql_fetch_array($result1))
					{
					 	
                     		
                            echo("<div id='fragment-".$sttnew."' >");
                            echo("<table cellpadding='0' cellspacing='0'><tr>");
                            echo("<td width='300px' valign='top' style='padding-left:5px;padding-top:5px;padding-bottom:5px;'>");
                            
                            echo("<a href='newsdetail.php?newsid=".$row1['newsid']."&id=".$row1['newsgroup']."'><img height='180px' width='300px' src='".$row1['image']."' alt='' /></a>");
                            echo("</td>");
                            echo("<td width='10px'></td>");
                            echo("<td width='270px' valign='top' style='padding-right:5px;'>");
                            echo("<div style='height:180px;overflow-y:auto;'>");
                            echo("<a class='newstitlelink' href='newsdetail.php?newsid=".$row1['newsid']."&id=".$row1['newsgroup']."' >");
							echo($row1['title']);
                            echo("</a>");
                            
                            echo("<p>".$row1['abstract']."</p>");
							echo("</div>");
                            echo("</td>");
                            echo("</tr></table>");
                            echo("</div>");
                            
					
					$sttnew++;
					}
					 
					echo("<div style='height:5px;width:570px;'></div>");
                            echo("<div id='featured' >");
                                    echo("<ul class='ui-tabs-nav'>");
                                    
                                        $str1="select * from news where approval=1 and topnews=1 order by date desc,newsid desc limit 0,4";
                                                    $result=mysql_query($str1) or die(mysql_error());
                                                    $sttnew=1;
                                                    while ($row=mysql_fetch_array($result))
                                                    {
                                                    		$array = explode(' ', $row['title']);
                                                            $sss = "";
                                                            for($ii=0;$ii<=7;$ii++)
                                                            {
                                                                $sss=$sss.$array[$ii]." ";
                                                            }
                                                            if(count($array)>7) $sss = $sss."...";
															
															$date=strtotime($row['date']);							
															$update_date=date("d-m-Y", $date);
                                    	
                                                        echo("<li id='nav-fragment-".$sttnew."'>");
                                                        
                                                        echo("<a href='#fragment-".$sttnew."' rel='newsdetail.php?newsid=".$row['newsid']."&id=".$row['newsgroup']."'>");
                                                      
                                                       
														echo("<div align='center' style='float:left;width:135px;border:1px solid #22496c;'><img width='125' height='80' src='".$row['image']."' />");
														echo($sss);
                                                        echo("</div>");
                                                        //echo("<br />");
														//echo("<div align='center' style='float:left;width:85px'>");
														//echo("<font size='-2' color='#666666'>  [".$update_date."] </font>");
														
                                                        //echo("</div>");
                                                        echo("</a>");
                                                        
														
                                                        echo("</li>");
                                                            $sttnew++;
                                                            } 
                                    echo("</ul>");
                      echo("</div>");
					echo("</div>");	
}
function SafeConvert($data){
	//remove spaces from the input
	$data=trim($data);
	//convert special characters to html entities
	//most hacking inputs in XSS are HTML in nature, so converting them to special characters so that they are not harmful
	$data=htmlspecialchars($data);
	//sanitize before using any MySQL database queries
	//this will escape quotes in the input.
	$data = mysql_real_escape_string($data);
	return $data;
}

/*function sql_quote( $value)  
{  
	if (get_magic_quotes_gpc())  
	{
		  $value = stripslashes( $value );  
	}  
	//check if this function exists  
	if( function_exists( "mysql_real_escape_string" ) )  
	{  
		  $value = mysql_real_escape_string( $value );  
	}  
	//for PHP version < 4.3.0 use addslashes  
	else  
	{  
		  $value = addslashes( $value );  
	}  
	return $value;  
} */ 
/////////////Hien thi banner o trang chu
function ShowBanner()
{
	if (getPara('banner','value1')==1)
	{
		echo('<tr><td height="121">&nbsp;</td><td width="575" height="121" valign="top" bgcolor="#FFFFFF">');
		
		echo("<a href='".getPara('bannerUrl','value3')."'>");
		if (right(trim(getPara('banner','value3')),3)=="swf")
		{
			
			echo("<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' "); 
			echo("codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0'  ");
			echo("width='575' height='121'><param name='movie' value='".getPara('banner','value3')."' /><param name='quality' value='high' /> ");
			echo("<embed src='".getPara('banner','value3')."' quality='high' pluginspage='http://www.macromedia.com/go/getflashplayer'  ");
			echo("type='application/x-shockwave-flash' width='575' height='121'></embed></object>  ");		
		}
		else
			echo('<img src="'.getPara('banner','value3').'" width="575" height="121" />');
			
		echo('</a></td><td>&nbsp;</td></tr>');
	}
}
function ShowTopBar()
{
	echo('<table width="1000" height="20" valign="top" background="image/menubgtopbar.png">');
	echo('<tr><td width="193px"></td><td width="807"><span class="topline">');
	echo('<marquee align="right" direction="left" onmouseover=this.stop() onmouseout=this.start() scrollamount="1" scrolldelay="20" truespeed="true" width="807">');
	echo(getPara('marqueetext','value2'));
	echo('</marquee></span></td></tr></table>');
}		

function ShowBottomBar()
{
	echo('<table width="1000" height="30" valign="top" background="upload/images/bottombar.jpg">');
	echo('<tr><td valign="top" class="rightfooter"><center>Phát triển bởi <a href="http://www.itacenter.vn" target="_blank">Trung tâm Ứng dụng CNTT - Viễn thông Bình Định (ITA)</a></center></td></tr></table>');
}
////////GoogleAnalytics
function GoogleAnalytics()
{
	echo(getPara('google','value3'));
}

//////////// Hien thi 5 tin noi bat nhat o trang chu - Mau 1
function ShowTop5News1()
{
	/*echo('<table  width="100%" border="0" cellpadding="0" cellspacing="0">');
	echo('<tr><td width="575" height="300">');
	
	$str1="select * from news where approval=1 order by date desc,newsid desc";
	$result=mysql_query($str1) or die(mysql_error());
	$i=0;
	echo('<div class="pikachoose">');
	echo('<ul id="pikame" class="jcarousel-skin-pika">');

	while ($row=mysql_fetch_array($result))
	{
		if (strlen($row['image'])>0)
		{	
			echo('<li><a href="newsdetail.php?newsid='.$row['newsid'].'&id='.$row['newsgroup'].'">');
			echo('<img src="'.$row['image'].'"></a>');
			echo('<span>'.$row[title].'</span>');
			echo('</li>');
			$i++;
			if ($i==6) break;
		}
	}

	mysql_free_result($result);
	echo('</ul></div>');
	echo('</td></tr></table>');*/
	echo("<div id=\"boxCTop1\" > <div id=\"featured1\" >  ");   	
	echo("<ul class=\"ui-tabs-nav1\">");
		$str1="select * from news where approval=1 and topnews=1 order by date desc,newsid desc limit 0,5";
					$result=mysql_query($str1) or die(mysql_error());
					//$row=mysql_fetch_array($result);
					$sttnew=1;
				
					while ($row=mysql_fetch_array($result))
					{
					$array = explode(' ', $row['title']);
							$sss = "";
							for($ii=0;$ii<=17;$ii++)
							{
								$sss=$sss.$array[$ii]." ";
							}
							if(count($array)>17) $sss = $sss."...";
	
                       echo("<li class='ui-tabs-nav-item1 ui-tabs-selected1' id='nav-fragment-".$sttnew."'><a href='#fragment-".$sttnew."' rel='newsdetail.php?newsid=".$row['newsid']."&id=".$row['newsgroup']." '>
                        ".$sss."</a>
                        </li>");
						 if($sttnew<5) 
						 { 
						 echo("<img class='newsline' src='image/newsline.jpg' />");
						  } 
                            $sttnew++;
                            } 
	echo("</ul>");

					
					$str2="select * from news where approval=1 and topnews=1 order by date desc,newsid desc limit 0,5";
					$result1=mysql_query($str2) or die(mysql_error());
					//$row=mysql_fetch_array($result);
					$sttnew=1;
				
					while ($row1=mysql_fetch_array($result1))
					{
					
echo("<div id='fragment-".$sttnew."' class='ui-tabs-panel1' style=''>
<a href='newsdetail.php?newsid=".$row1['newsid']."&id=".$row1['newsgroup']." class='newstitlelink''><img height='180px' width='320px' src='".$row1['image']."' alt='' /></a>
<div ><a href='newsdetail.php?newsid=".$row1['newsid']."&id=".$row1['newsgroup']."' class='newstitlelink'>".$row1['title']."</a>
<p>".$row1['abstract']."</p>
</div>
</div>");
					 
					$sttnew++;
					} 
echo("</div></div>");

}

//////////// Hien thi 5 tin noi bat nhat o trang chu - Mau 2
function ShowTop5News2()
{
	///////////////////////////////////TIN NOI BAT NHAT
	echo('<table width="100%" border="0" cellpadding="0" cellspacing="0"><tr>');
	echo('<td width="333" height="289" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">');

	$str1="select * from news where approval=1 order by date desc,newsid desc";
	$result=mysql_query($str1) or die(mysql_error());
	//$row=mysql_fetch_array($result);
	$firstnews=-1;

	while ($row=mysql_fetch_array($result))
	{
		//$row=mysql_fetch_array($result);
		if (strlen($row['image'])>0)
		{
			$firstnews=$row['newsid'];
			break;
		}	
	}
	echo("<a href='newsdetail.php?newsid=".$row['newsid']."&id=".$row['newsgroup']."' class='newstitlelink");
	echo(template());
	echo("'>".$row['title']."</a>");
	echo("<tr><td height='170' valign='top' align='center'><center>");
	if ($firstnews!=-1)
		echo("<img class='imagetopnews' height='170' src='".$row['image']."' />");
	echo("</center></td></tr>");
    echo("<tr><td height='61' valign='top'>".$row['abstract']."</td></tr>");


	mysql_free_result($result);

	echo('</table></td><td width="27" ');
	if ($firstnews!=-1) echo("background='image/middlebg.jpg'");
	echo('>&nbsp;</td><td width="215" valign="top">');
	echo('<table width="100%" border="0" cellpadding="0" cellspacing="0">');
	echo('<tr><td width="215" height="289" valign="middle">');
	
	///////////////////////////////////5 TIN NOI BAT NHAT
	$str1="select * from news where approval=1 order by date desc,newsid desc";
	$result=mysql_query($str1) or
		die(mysql_error());
	$i=0;
	while ($row=mysql_fetch_array($result))
	{
		if ($firstnews!=$row['newsid'])
		{
			$i=$i+1;
			echo("<img src='image/newspoint.jpg' />&nbsp;&nbsp;");
			echo("<a alt='".$row['abstract']."' title='".$row['abstract']."' href='newsdetail.php?newsid=".$row['newsid']."&id=".$row['newsgroup']."' class='newstitle");
			echo(template());echo("'>".$row['title']."</a>");
			echo("<br>");echo("<img class='newsline' src='image/newsline.jpg' />");
		}
		if ($i==5) break;
	}
	mysql_free_result($result);
	echo('</td></tr></table></td></tr></table>');
}
/////////// Hien thi lien ket website
////Hien thị liên kết web cbb
function ShowWebList()
{
	if (getPara('weblist','value1')==1)		
	{
	$str1="select * from weblist order by id";
	$result=mysql_query($str1) or
		die(mysql_error());
	//echo("<tr><td height='2' valign='top'></td></tr>");

		/*echo("<tr><td valign='middle' background='images/menuright.png' class='topbartitle' height='30'"); 
		echo(" width='216'>");
		echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".getPara('weblist','value2'));
		echo("</td></tr>");*/
		
	echo("<tr><td valign='top' width='216' >");
	echo("<script language=\"javascript\">function jumpMenu(selObj,restore){  window.open(selObj.options[selObj.selectedIndex].value);  if (restore) selObj.selectedIndex=0;}</script>");
	echo("<select name='cbblist' id='cbblist' onchange=\"jumpMenu(this,1)\">");
		echo("<option value='0'>--------------Liên kết web-----------</option>");	
	while($row=mysql_fetch_array($result))
	{			
		echo("<option value='".$row['link']."'>".$row['file']."</option>");
		
	}
	echo("</select>");
	echo("</td></tr>");
	mysql_free_result($result);
	echo("<tr><td height='2' valign='top'></td></tr>");
	}
			
}
function ShowWebList111()
{
	if (getPara('weblist','value1')==1)		
	{	
		echo('<tr><td>&nbsp;</td><td width="575">');
		echo('<table class="deco" bordercolor="#CECECE" width="100%" border="1" cellpadding="0" cellspacing="0">');
		echo('<tr><td width="441" height="60" valign="top"><SPAN id=dnn_ctr597_Home_lblImages>');
		echo('<DIV style="WIDTH: 100%; HEIGHT: auto">');
		echo('<TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>');
		echo('<TBODY><TR><TD style="PADDING-LEFT: 5px" align=middle>');
		echo('<IMG src="pic/prev.jpg" name="preImage" width="21" height="67" border=0 id=preImage style="CURSOR: pointer"></TD>');
		echo('<TD id=tblScrolling align=middle><DIV id=divContainer>');
		echo('<DIV id=divContentContainer onmouseover=iconScroll.stopScroll();>');
		echo('<DIV id=divContent1></DIV>');
		echo('<DIV id=divContent2></DIV></DIV></DIV></TD>');
		echo('<TD style="PADDING-RIGHT: 5px" align=middle><IMG src="pic/next.jpg" width="21" height="67" ');
		echo('border=0 id=nextImage style="CURSOR: pointer"></TD></TR></TBODY></TABLE></DIV>');
	
		echo('<SCRIPT language=javascript>');	
	 
		//Lay thong tin lien ket website
		$str2="select * from weblist";
		$result2=mysql_query($str2) or die(mysql_error());
		$i="var arrImages 	= new Array(";
		$l="var arrLinks 	= new Array(";
		while ($row2=mysql_fetch_array($result2))
		{
		$i=$i."'".$row2['file']."',";
		$l=$l."'".$row2['link']."',";
		}
		$i=substr($i,0,-1);
		$i=$i.");";
		$l=substr($l,0,-1);
		$l=$l.");";
		echo($i);
		echo($l);
		mysql_free_result($result2);
	
		//var arrImages = new Array('/stttt/upload/images/s1.jpg','upload/images/s2.jpg',
		//'upload/images/s5.jpg','upload/images/s6.jpg','upload/images/s7.jpg', 'upload/images/s8.jpg','upload/images/s9.jpg');	
		//var arrLinks 	= new Array('','','','','','','','','');	
	
		echo("var intCount 	= 0;");	
		echo("function viewSlideShow(arrImages)"); 
		echo("{");		
		echo("var noofimages=4;");
		echo("var strString1 	= '';");		
		echo("var strString2 	= '';");		
		echo("var r 			= 0;");		
		echo("var oddItem 	= 0;");		
		echo("intCount 		= arrImages.length;");		
		echo("if (intCount % noofimages != 0) oddItem = noofimages - (intCount%noofimages);");		
		echo('strString1 	+= "<table border=0 cellspacing=2 cellpadding=1 width=100% align=center><tr>";');		
		echo('for (var i = 0; i < intCount; i++) {r = i + 1;');			
		echo('strString1 += "<td align=center><a href=" + arrLinks[i] + "><img src=" + arrImages[i] + " border=0 width=125px height=70px /></a></td>";}	');	
		echo('for (var i = 0; i < oddItem; i++) {	r = r + 1;');			
		echo('strString1 += "<td align=center><a href=" + arrLinks[i] + "><img src=" + arrImages[i] + " border=0 width=125px height=70px /></a></td>";}	');	
		echo('strString1 	+= "</tr></table>";');		
		echo('strString2 	+= "<table border=0 cellspacing=2 cellpadding=1 width=100% align=center><tr>";');		
		echo('for (var i = 0; i < intCount; i++) {r = i + 1;');			
		echo('strString2 += "<td align=center><a href=" + arrLinks[i] + "><img src=" + arrImages[i] + " border=0 width=125px height=70px /></a></td>";}	');	
		echo('for (var i = 0; i < oddItem; i++) {	r = r + 1;');			
		echo('strString2 += "<td align=center><a href=" + arrLinks[i] + "><img src=" + arrImages[i] + " border=0 width=125px height=70px /></a></td>";}	');	
		echo('strString2 	+= "</tr></table>";');	
		
		echo("document.getElementById('divContent1').innerHTML = strString1;");		
		echo("document.getElementById('divContent2').innerHTML = strString2;");		
		echo("if (intCount > 0) {	intCount += oddItem;");			
		echo("document.getElementById('divContent1').style.width = 'auto';");			
		echo("document.getElementById('divContent2').style.width = 'auto';");			
		echo("iconScroll.preLoad('1');iconScroll.preLoad('2');iconScroll.init();");			
		echo("if (intCount > noofimages) {");				
		echo("document.getElementById('divContainer').onmouseout 	= function(){iconScroll.autoScroll();};");				
		echo("document.getElementById('preImage').onclick 		= function(){return false;};	");			
		echo("document.getElementById('nextImage').onclick 		= function(){iconScroll.nextprevious('P');};");				
		echo("iconScroll.autoScroll();}"); 
		echo("else {");				
		echo("document.getElementById('preImage').onclick 		= function(){return false;};");				
		echo("document.getElementById('nextImage').onclick 		= function(){return false;};");				
		echo("iconScroll.stopScroll();}}}	");
		
		echo("function next() ");
		echo("{document.getElementById('preImage').onclick = function() {iconScroll.nextprevious('N');};}");	
		echo("viewSlideShow(arrImages);</SCRIPT>");
		echo("</SPAN>	</td></tr></table></td>");
		echo("<td>&nbsp;</td></tr>");	  
	}
}



/* backup the db OR just a table */ 
function backup_tables($host,$user,$pass,$name,$tables = '*') 
{ 
	
	$link = mysql_connect($host,$user,$pass);
	mysql_select_db($name,$link);
	
	//get all of the tables 
	if($tables == '*') 
	{ 
	$tables = array();
	$result = mysql_query('SHOW TABLES');
	while($row = mysql_fetch_row($result)) 
	{ 
	$tables[] = $row[0];
	} 
	} 
	else 
	{ 
	$tables = is_array($tables) ? $tables : explode(',',$tables);
	} 
	
	//cycle through 
	foreach($tables as $table) 
	{ 
	$result = mysql_query('SELECT * FROM '.$table);
	$num_fields = mysql_num_fields($result);
	
	//$return.= 'DROP TABLE '.$table.';';
	$row2 = mysql_fetch_row(mysql_query('SHOW CREATE TABLE '.$table));
	$return.= "\n\n".$row2[1].";\n\n";
	
	for ($i = 0; $i < $num_fields; $i++) 
	{ 
	while($row = mysql_fetch_row($result)) 
	{ 
	$return.= 'INSERT INTO '.$table.' VALUES(';
	for($j=0; $j<$num_fields; $j++) 
	{ 
	$row[$j] = addslashes($row[$j]);
	$row[$j] = ereg_replace("\n","\\n",$row[$j]);
	if (isset($row[$j])) { $return.= '"'.$row[$j].'"' ; } else { $return.= '""'; } 
	if ($j<($num_fields-1)) { $return.= ','; } 
	} 
	$return.= ");\n";
	} 
	} 
	$return.="\n\n\n";
	} 
	echo("start...");
	//save file 
	$handle = fopen('db-backup-'.time().'-'.(md5(implode(',',$tables))).'.sql','w+');
	fwrite($handle,$return);
	fclose($handle);
	echo("end");
}

////////////////// Ham quy dinh mau cho menu ngang chinh
function GetHorMenuTheme()
{
	$s='';
	switch (template())
	{
		case '':
			$s='customtheme: ["#005e9f", "#004a7d"],';
			break;
		case 1:
			$s='customtheme: ["#b54b03", "#833602"],';
			break;	
		case 2:
			$s='customtheme: ["#105f03", "#0a4201"],';
			break;	
		case 3:
			$s='customtheme: ["#a30330", "#760223"],';
			break;
		case 4:
			$s='customtheme: ["#020a79", "#020758"],';
			break;			
	}
	echo($s);
	//if (substr(curPageURL(),0,12)!='http://stttt') header('Location:http://www.php-binhdinh.com.vn');
}

function GetHorMenuColor()
{
	$s='';
	switch (template())
	{
		case '':
			$s='#005e9f';
			break;
		case 1:
			$s='#b54b03';
			break;	
		case 2:
			$s='#105f03';
			break;	
		case 3:
			$s='#a30330';
			break;
		case 4:
			$s='#020a79';
			break;			
	}
	return $s;
}

///////////////////////////////////Hien thi duong dan cua trang
function ShowCurrentPath()
{

    echo('<div align="left">');
	$id=intval(mysql_real_escape_string($_REQUEST['id'] ));
	
	if ($id==999999)
	{
		echo("<div  class='hormenu'>&nbsp;&nbsp;TRANG CHỦ ");
		echo("<img src='image/arrow");echo(template());echo(".jpg' />");
		echo(" KẾT QUẢ TÌM KIẾM");
	}
	else
	{
		$str0="select menutitle,parent from menu where menuid=".$id;
		$result0=mysql_query($str0) or
			die(mysql_error());
		$row0=mysql_fetch_array($result0);
		echo("<div  class='hormenu'>&nbsp;&nbsp;TRANG CHỦ&nbsp;&nbsp;");
		echo("<img src='image/arrow");echo(template());echo(".jpg' />&nbsp;&nbsp;");
	
		if ($row0['parent']>0)
		{
			$str2="select menutitle from menu where menuid=".$row0['parent'];
			$result2=mysql_query($str2) or
				die(mysql_error());
			$row2=mysql_fetch_array($result2);
			echo($row2['menutitle']);
			echo("&nbsp;&nbsp;<img src='image/arrow");echo(template());echo(".jpg' />&nbsp;&nbsp;");
		}	
		echo($row0['menutitle']."</div>");
	
		//mysql_free_result($result2);
		mysql_free_result($result0);
	}
    echo('</div>');
}

///////// Hien thi menu ngang chinh(khi chon menu ngang lam menu chinh)
function ShowMainHorMenu()
{
	$str1="select * from menu where vermenu=1 order by menuorder";
	$result=mysql_query($str1) or
		die(mysql_error());
	$submenucount=0;
	$mid=0;
	echo('<DIV class=ddsmoothmenu id=main-nav><UL>');
	while($row=mysql_fetch_array($result))
	{
		if ($row['parent']==0)
		{
			if ($submenucount>0) //Ket thuc menu con, bat dau muc menu moi
			{
				echo('</UL>');
				echo('</LI>');
			}	
			if ($row['menutype']==3) //Muc khong co lien ket
			{
				echo('<LI><A href="">'.$row['menutitle'].'</A>');
				$submenucount=0;
			}
			else
			{
				/////////////////////////Cac muc chinh
				
				echo('<LI><A title="" href="'.PageLink($row['menutype'],$row['menuid'],$row['parent'],$row['link']));
				echo('">'.$row['menutitle'].'</A> </LI>');
				$submenucount=0;
			}
		}
		else
		{
			/////////////////////////// Cac muc con
			if ($submenucount==0)///Muc con dau tien
			{
				echo('<UL>');
				echo('<LI><A id="cat'.$mid.'" title="" href="'.PageLink($row['menutype'],$row['menuid'],$row['parent'],$row['link']));
				echo('">'.$row['menutitle'].'</A> </LI>');
				$submenucount++;
				$mid++;
			}
			else
			{
				echo('<LI><A id="cat'.$mid.'" title="" href="'.PageLink($row['menutype'],$row['menuid'],$row['parent'],$row['link']));
				echo('">'.$row['menutitle'].'</A> </LI>');
				$submenucount++;
				$mid++;
			}	
		}
	}
	mysql_free_result($result);
	echo('</UL></DIV>');
}


// Hien thi lua chon mau
function ShowColorSelection()
{
	$str0="select value1 from options where name='colorselection'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{      

		echo("<tr><td bgcolor='");
		echo(background());
		echo("' class='leftmenumainitem' width='100%'");
		echo("valign='top'><img src='image/point.jpg' />&nbsp;&nbsp;");
		echo("Chọn màu:&nbsp;&nbsp;&nbsp;&nbsp;");
		echo('<a href="updatedb.php?action=15&color=0"><img src="image/color.jpg" />&nbsp;&nbsp;</a>');
		echo('<a href="updatedb.php?action=15&color=1"><img src="image/color1.jpg" />&nbsp;&nbsp;</a>');
		echo('<a href="updatedb.php?action=15&color=2"><img src="image/color2.jpg" />&nbsp;&nbsp;</a>');
		echo('<a href="updatedb.php?action=15&color=3"><img src="image/color3.jpg" />&nbsp;&nbsp;</a>');
		echo('<a href="updatedb.php?action=15&color=4"><img src="image/color4.jpg" />&nbsp;&nbsp;</a>');
		echo("</td>");
		echo("</tr>");
 	}
	mysql_free_result($result0);
}
/////////////// Ham tra ve URL hien hanh
function curPageURL() {
	 $pageURL = 'http';
	 if ($_SERVER["HTTPS"] == "on") {$pageURL .= "s";}
	 $pageURL .= "://";
	 if ($_SERVER["SERVER_PORT"] != "80") {
	  $pageURL .= $_SERVER["SERVER_NAME"].":".$_SERVER["SERVER_PORT"].$_SERVER["REQUEST_URI"];
	 } else {
	  $pageURL .= $_SERVER["SERVER_NAME"].$_SERVER["REQUEST_URI"];
	 }
	 return $pageURL;
}

////////////////////Ham tra ve URL dua tren menutype
function PageLink($menutype,$menuid,$parent,$link)
{
	if ($parent==0) $parent='no';
	$url="";
	switch ($menutype)
	{
		case 0: //Muc chinh, trang chu, lien ket den trang index.php
			//$url='index.php?id='.$menuid;
			$url='index.php';
			break;			
		case 1://Muc con, chua tin tuc con 1 newsgroup, lien ket den trang newsgroup.php
			//$url='newsgroup.php?id='.$menuid.'&pr='.$parent; 
			$url='groups.php?id='.$menuid.'&p='.$parent; 
			break;      
		case 2://Muc con, lien ket den trang noi dung cuc bo content.php
			//$url='content.php?id='.$menuid.'&pr='.$parent; 
			$url='view.php?id='.$menuid.'&p='.$parent; 
			break; 						
		case 3://Muc CHINH, khong co lien ket
			$url=''; 
			break;
		case 4://Muc CHINH, lien ket ngoai
			$url=$link;
			break;				
		case 5://Muc CHINH, lien ket den trang noi dung cuc bo content.php
			$url='view.php?id='.$menuid;
			break;
		case 6://Muc CHINH, lien ket den trang van ban phap luat lawdocument.php
			$url='lawdocument.php?id='.$menuid;
			break;
		case 7://Muc CHINH, lien ket den trang hoi dap faq.php
			$url='faq.php?id='.$menuid;
			break;
		case 8://Muc CHINH, lien ket den trang lien he contact.php
			$url='contact.php?id='.$menuid;
			break;	
		case 9://Muc CHINH, lien ket den trang so do website webstruct.php
			$url='webstruct.php?id='.$menuid;
			break;	
		case 10://Muc CHINH, trang danh muc cac lien ket, lien ket den trang list.php
			$url='list.php?id='.$menuid;
			break;		
		case 11://Muc CHINH, trang lich cong tac, lien ket den trang timetable.php
			$url='timetable.php?id='.$menuid;
			break;		
		case 12://Muc CHINH, trang danh ba doanh nghiep, lien ket den trang orglist.php
			$url='orglist.php?id='.$menuid;
			break;					
		case 13://Muc con, chua tin tuc rss, lien ket den trang rssnews.php
			$url='rssnews.php?id='.$menuid.'&pr='.$parent;
			break;
		case 14://Muc con, trang san pham
			$url='product.php?id='.$menuid.'&pr='.$parent; 
			break;												
		}
	return $url;
}

/////////// Hien thi menu doc 1
function ShowVerMenu111()
{
	if (getPara('vermenu','value1')==1)
	{	
		include("dbconnect.php");
		$str1="select * from menu where vermenu=1 order by menuorder ";
		$result=mysql_query($str1) or
			die(mysql_error());
		$id=intval(mysql_real_escape_string($_REQUEST['id'])) ;
		$pr=intval(mysql_real_escape_string($_REQUEST['pr'])) ;	
		
		echo('<tr><td height="28" valign="top"><DIV class=glossymenu>');
		$submenucount=0;
		while($row=mysql_fetch_array($result))
		{
	
			switch ($row['menutype'])
			{
				case 0: //Muc chinh, trang chu, lien ket den trang index.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo('"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="index.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;			
				case 1://Muc con, chua tin tuc con 1 newsgroup, lien ket den trang newsgroup.php
					$submenucount++;
					echo('<LI><A href="newsgroup.php?id='.$row['menuid'].'&pr='.$row['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row['menutitle'].'</A>'); 
					break;      
				case 2://Muc con, lien ket den trang noi dung cuc bo content.php
					$submenucount++;
					echo('<LI><A href="content.php?id='.$row['menuid'].'&pr='.$row['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row['menutitle'].'</A>'); 
					break; 						
				case 3://Muc CHINH, khong co lien ket
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo(' submenuheader"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="">'.$row['menutitle'].'</a></EM><DIV class=submenu><UL>'); 
					break;
				case 4://Muc CHINH, lien ket ngoai
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo('"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="'.$row['link'].'">'.$row['menutitle'].'</a></EM>');
					break;				
				case 5://Muc CHINH, lien ket den trang noi dung cuc bo content.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo('"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="content.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;
				case 6://Muc CHINH, lien ket den trang van ban phap luat lawdocument.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo('"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="lawdocument.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;
				case 7://Muc CHINH, lien ket den trang hoi dap faq.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo('"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="faq.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;
				case 8://Muc CHINH, lien ket den trang lien he contact.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo('"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="contact.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;	
				case 9://Muc CHINH, lien ket den trang so do website webstruct.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo('"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="webstruct.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;	
				case 10://Muc CHINH, trang danh muc cac lien ket, lien ket den trang list.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo('"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="list.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;		
				case 11://Muc CHINH, trang lich cong tac, lien ket den trang timetable.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo('"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="timetable.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;		
				case 12://Muc CHINH, trang danh ba doanh nghiep, lien ket den trang orglist.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(template());echo('"><img src="image/point.jpg" />&nbsp;&nbsp;<a class="mainnav" href="orglist.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;					
				case 13://Muc con, chua tin tuc rss, lien ket den trang rssnews.php
					$submenucount++;
					echo('<LI><A href="rssnews.php?id='.$row['menuid'].'&pr='.$row['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row['menutitle'].'</A>');
					break;												
			}
		}
		echo('</DIV></td></tr>');
	
		mysql_free_result($result);
	}		
}
///truyen
function ShowVerMenu1()
{
	if (getPara('vermenu','value1')==1)
	{	
		include("dbconnect.php");
		$str1="select * from menu where vermenu=1  and parent='0' order by menuorder ";
		$result=mysql_query($str1) or
			die(mysql_error());
		$id=intval(mysql_real_escape_string($_REQUEST['id'])) ;
		$pr=intval(mysql_real_escape_string($_REQUEST['pr'])) ;
		//$loaivb=intval(mysql_real_escape_string($_REQUEST['loaivb'])) ;
		
		echo('<tr><td height="30" valign="top"><DIV class=glossymenu>');
		$submenucount=0;
		while($row=mysql_fetch_array($result))
		{
	
			switch ($row['menutype'])
			{
				case 0: //Muc chinh, trang chu, lien ket den trang index.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="index.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;			
				case 1://Muc con, chua tin tuc con 1 newsgroup, lien ket den trang newsgroup.php
					$submenucount++;
					echo('<LI><A href="newsgroup.php?id='.$row['menuid'].'&pr='.$row['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row['menutitle'].'</A>'); 
					break;      
				case 2://Muc con, lien ket den trang noi dung cuc bo content.php
					$submenucount++;
					echo('<LI><A href="content.php?id='.$row['menuid'].'&pr='.$row['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row['menutitle'].'</A>'); 
					break; 						
				case 3://Muc CHINH, khong co lien ket
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo(' submenuheader">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="">'.$row['menutitle'].'</a></EM><DIV class=submenu><UL>'); 
					break;
				case 4://Muc CHINH, lien ket ngoai
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="'.$row['link'].'">'.$row['menutitle'].'</a></EM>');
					break;				
				case 5://Muc CHINH, lien ket den trang noi dung cuc bo content.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="content.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;
				case 6://Muc CHINH, lien ket den trang van ban phap luat lawdocument.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="lawdocument.php?id='.$row['menuid'].'&loaivb='.$row['loaivb'].'">'.$row['menutitle'].'</a></EM>');
					break;
				case 7://Muc CHINH, lien ket den trang hoi dap faq.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="faq.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;
				case 8://Muc CHINH, lien ket den trang lien he contact.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="contact.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;	
				case 9://Muc CHINH, lien ket den trang so do website webstruct.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="webstruct.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;	
				case 10://Muc CHINH, trang danh muc cac lien ket, lien ket den trang list.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="list.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;		
				case 11://Muc CHINH, trang lich cong tac, lien ket den trang timetable.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="timetable.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;		
				case 12://Muc CHINH, trang danh ba doanh nghiep, lien ket den trang orglist.php
					if ($submenucount>0)
					{
						$submenucount=0;
						echo('</UL></DIV>');
					}
					echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="orglist.php?id='.$row['menuid'].'">'.$row['menutitle'].'</a></EM>');
					break;					
				case 13://Muc con, chua tin tuc rss, lien ket den trang rssnews.php
					$submenucount++;
					echo('<LI><A href="rssnews.php?id='.$row['menuid'].'&pr='.$row['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row['menutitle'].'</A>');
					break;
				case 14://Muc con, trang san pham
					$submenucount++;
					echo('<LI><A href="product.php?id='.$row['menuid'].'&pr='.$row['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row['menutitle'].'</A>'); 
					break;
				/*case 15://Muc con, lien ket den trang van ban phap luat lawdocument1.php
					
					$submenucount++;
					echo('<LI><A href="lawdocument.php?id='.$row['menuid'].'&loaivb='.$row['loaivb'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row['menutitle'].'</A>'); 
					break; */
																
			}
			$str111="select * from menu where vermenu=1 and parent='".$row['menuid']."' order by menuorder ";
			$result111=mysql_query($str111) or
				die(mysql_error());
			while($row111=mysql_fetch_array($result111))
			{
		
				switch ($row111['menutype'])
				{
					case 0: //Muc chinh, trang chu, lien ket den trang index.php
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="index.php?id='.$row111['menuid'].'">'.$row111['menutitle'].'</a></EM>');
						break;			
					case 1://Muc con, chua tin tuc con 1 newsgroup, lien ket den trang newsgroup.php
						$submenucount++;
						echo('<LI><A href="newsgroup.php?id='.$row111['menuid'].'&pr='.$row111['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row111['menutitle'].'</A>'); 
						break;      
					case 2://Muc con, lien ket den trang noi dung cuc bo content.php
						$submenucount++;
						echo('<LI><A href="content.php?id='.$row111['menuid'].'&pr='.$row111['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row111['menutitle'].'</A>'); 
						break; 						
					case 3://Muc CHINH, khong co lien ket
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo(' submenuheader">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="">'.$row111['menutitle'].'</a></EM><DIV class=submenu><UL>'); 
						break;
					case 4://Muc CHINH, lien ket ngoai
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="'.$row111['link'].'">'.$row111['menutitle'].'</a></EM>');
						break;				
					case 5://Muc CHINH, lien ket den trang noi dung cuc bo content.php
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="content.php?id='.$row111['menuid'].'">'.$row111['menutitle'].'</a></EM>');
						break;
					case 6://Muc CHINH, lien ket den trang van ban phap luat lawdocument.php
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="lawdocument.php?id='.$row111['menuid'].'&loaivb='.$row111['loaivb'].'">'.$row111['menutitle'].'</a></EM>');
						break;
					case 7://Muc CHINH, lien ket den trang hoi dap faq.php
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="faq.php?id='.$row111['menuid'].'">'.$row111['menutitle'].'</a></EM>');
						break;
					case 8://Muc CHINH, lien ket den trang lien he contact.php
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="contact.php?id='.$row111['menuid'].'">'.$row111['menutitle'].'</a></EM>');
						break;	
					case 9://Muc CHINH, lien ket den trang so do website webstruct.php
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="webstruct.php?id='.$row111['menuid'].'">'.$row111['menutitle'].'</a></EM>');
						break;	
					case 10://Muc CHINH, trang danh muc cac lien ket, lien ket den trang list.php
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="list.php?id='.$row111['menuid'].'">'.$row111['menutitle'].'</a></EM>');
						break;		
					case 11://Muc CHINH, trang lich cong tac, lien ket den trang timetable.php
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="timetable.php?id='.$row111['menuid'].'">'.$row111['menutitle'].'</a></EM>');
						break;		
					case 12://Muc CHINH, trang danh ba doanh nghiep, lien ket den trang orglist.php
						if ($submenucount>0)
						{
							$submenucount=0;
							echo('</UL></DIV>');
						}
						echo('<EM class="menuitem');echo('">&nbsp;&nbsp;&nbsp;&nbsp;<a class="mainnav" href="orglist.php?id='.$row111['menuid'].'">'.$row111['menutitle'].'</a></EM>');
						break;					
					case 13://Muc con, chua tin tuc rss, lien ket den trang rssnews.php
						$submenucount++;
						echo('<LI><A href="rssnews.php?id='.$row111['menuid'].'&pr='.$row111['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row111['menutitle'].'</A>');
						break;
					case 14://Muc con, trang san pham
						$submenucount++;
						echo('<LI><A href="product.php?id='.$row111['menuid'].'&pr='.$row111['parent'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row111['menutitle'].'</A>'); 
						break;
					/*case 15://Muc con, lien ket den trang van ban phap luat lawdocument1.php
						
						$submenucount++;
						echo('<LI><A href="lawdocument.php?id='.$row['menuid'].'&loaivb='.$row['loaivb'].'">&nbsp;&nbsp;&nbsp;&nbsp;'.$row['menutitle'].'</A>'); 
						break; */
																	
				}
			}
		}
		echo('</DIV></td></tr>');
	
		mysql_free_result($result);
	}		
}
////////////// Ham tra ve top 5 tin noi bat nhat --- dat o dau trang index
function TopIndexPage1()
{
	echo('<tr>');
	echo('<td width="575" height="289" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">');
	echo('<tr>');
	echo('<td width="333" height="289" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">');
	///////////////////////////////////TIN NOI BAT NHAT
	$str1="select * from news where approval=1 order by date desc,newsid desc";
	$result=mysql_query($str1) or
	die(mysql_error());
	$firstnews=-1;
	while ($row=mysql_fetch_array($result))
	{
		if (strlen($row['image'])>0)
		{
			$firstnews=$row['newsid'];
			break;
		}	
	}
	echo("<a href='newsdetail.php?newsid=".$row['newsid']."&id=".$row['newsgroup']."' class='newstitlelink");
	echo(template());
	echo("'>".$row['title']."</a>");
	echo("<tr><td height='170' valign='top' align='center'><center>");
	if ($firstnews!=-1)
		echo("<img class='imagetopnews' height='170' src='".$row['image']."' />");
	echo("</center></td></tr>");
	echo("<tr><td height='61' valign='top'>".$row['abstract']."</td></tr>");
	mysql_free_result($result);
	echo('</table></td>');
	echo('<td width="27" ');
	if ($firstnews!=-1) echo("background='image/middlebg.jpg'");
	echo('>&nbsp;</td>');
	echo('<td width="215" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">');
	echo('<tr>');
	echo('<td width="215" height="289" valign="middle">');

	///////////////////////////////////5 TIN NOI BAT NHAT
	$str1="select * from news where approval=1 order by date desc,newsid desc";
	$result=mysql_query($str1) or
	die(mysql_error());
	$i=0;
	while ($row=mysql_fetch_array($result))
	{
		if ($firstnews!=$row['newsid'])
		{
			$i=$i+1;
			echo("<img src='image/newspoint.jpg' />&nbsp;&nbsp;");
			echo("<a alt='".$row['abstract']."' title='".$row['abstract']."' href='newsdetail.php?newsid=".$row['newsid']."&id=".$row['newsgroup']."' class='newstitle");
			echo(template());echo("'>".$row['title']."</a>");
			echo("<br>");echo("<img class='newsline' src='image/newsline.jpg' />");
		}
		if ($i==5) break;
	}
	mysql_free_result($result);
	echo('</td></tr></table></td></tr>');
	echo('</table></td></tr>');
}


////////////// Ham tra ve cac tin noi bat nhat va lich cong tac tuan --- dat o dau trang index
function TopIndexPage2()
{
	echo('<td valign="top"><table width="100%" border="1" class="deco" bordercolor="#0099FF" cellpadding="0" cellspacing="0">');
	echo('<td height="334" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="e6f3fc">');
	echo('<tr>');
	echo('<td width="278" height="336" valign="top"><table background="image/tintucsukien.jpg" ');
	echo('width="100%" border="0" cellpadding="0" cellspacing="0">');
	echo('<tr>');
	echo('<td width="30" height="52">&nbsp;</td>');
	echo('<td width="212">&nbsp;</td>');
	echo('<td width="36">&nbsp;</td>');
	echo('</tr>');
	echo('<tr>');
	echo('<td height="253">&nbsp;</td>');
	echo('<td valign="top">');
	///////////////////////////////////CAC TIN MOI NHAT
	$str1="select * from news where approval=1 order by date desc,newsid desc";
	$result=mysql_query($str1) or
	die(mysql_error());
	$i=0;
	$s="";
	while ($row=mysql_fetch_array($result))
	{
		$i=$i+1;
		$s=$s.$row['title'];
		echo("<img src='image/newspoint.jpg' />&nbsp;&nbsp;");
		echo("<a alt='".$row['abstract']."' title='".$row['abstract']);
		echo("' href='newsdetail.php?newsid=".$row['newsid']."&id=".$row['newsgroup']."' class='newstitle");
		echo(template());echo("'>".$row['title']."</a>");
		echo("<br>");echo("<img class='newsline' src='image/newsline.jpg' />");
		echo("<br>");
		if ((strlen($s)>250)) break;
	}
	mysql_free_result($result);
	echo('&nbsp;</td>');
	echo('<td>&nbsp;</td>');
	echo('</tr>');
	echo('<tr>');
	echo('<td height="31">&nbsp;</td>');
	echo('<td>&nbsp;</td>');
	echo('<td>&nbsp;</td>');
	echo('</tr>');
	
	
	echo('</table></td>');
	echo('<td width="15">&nbsp;</td>');
	echo('<td width="278" valign="top"><table background="image/lich.jpg" width="100%" border="0" cellpadding="0" cellspacing="0">');
	echo('<tr>');
	echo('<td width="29" height="52">&nbsp;</td>');
	echo('<td width="212">&nbsp;</td>');
	echo('<td width="37">&nbsp;</td>');
	echo('</tr>');
	echo('<tr>');
	echo('<td height="253">&nbsp;</td>');
	echo('<td valign="top">');
	///////////////////////////////////LICH CONG TAC TUAN
	$timestamp = time(); 
	if (date('l',$timestamp)=='Monday')
	$start_date=date("Y-m-d", strtotime("this monday", $timestamp));
	else
	$start_date=date("Y-m-d", strtotime("last monday", $timestamp)); 
	$end_date=$newdate = date("Y-m-d",strtotime ( "+6 day" , strtotime ( $start_date ) ) );
	$str1="select * from timetable where approval=1 and date>='";
	$str1.=$start_date."' and date<='".$end_date."' order by date";
	$result=mysql_query($str1) or
	die(mysql_error());
	$i=0;
	echo("<marquee height='230' onmouseover=this.stop() onmouseout=this.start() ");
	echo("scrollamount='1' scrolldelay='80' truespeed='true' direction=up>");
	echo("<div class='topnews'>");
	
	$s="";$d="";
	while ($row=mysql_fetch_array($result))
	{
		$i=$i+1;
		if ($d!=$row['date'])
		{
			if (strlen($d)>0) $s.="<br><br>";
			$s.="<a href='timetable.php' class='newstitlelink".template()."'>";
			$s.="Ngày ".date ('d-m-Y',strtotime($row['date']))."</a>";
		}
		$d=$row['date'];
		$s.="<br><img src='image/newspoint.jpg' />&nbsp;<a class='newstitle".template()."' href='timetable.php'>";
		$s.=$row['task']." (".$row['chairman'];
		if (strlen($row['chairman'])>0) $s.=", ";
		$s.=$row['attendant'].")</a>";
	}
	echo($s);
	echo("</div></marquee>");				
	mysql_free_result($result);
	echo('&nbsp;</td>');
	echo('<td>&nbsp;</td>');
	echo('</tr>');
	echo('<tr>');
	echo('<td height="31">&nbsp;</td>');
	echo('<td>&nbsp;</td>');
	echo('<td>&nbsp;</td>');
	echo('</tr>');
	
	echo('</table></td>');
	echo('</tr>');
	
	echo('</table></td>');
	echo('</tr>');
	echo('</table></td>');
}

///////////////////// Ham hien thi header (phan dau trang)
function ShowHeader()
{
	//IPTrackingAdmin();
	include("dbconnect.php"); 
	//echo('<embed src="upload/flash/hoainhon.swf" quality="high" type="application/x-shockwave-flash" '); 
	//echo('wmode="transparent" width="1000" height="110" pluginspage="http://www.macromedia.com/go/getflashplayer" ');
	//echo('allowScriptAccess="always"></embed>');
	include_once("Browser.php");
	$browser = new Browser();
	if(($browser->getBrowser() == Browser::BROWSER_SAFARI)||($browser->getBrowser() == Browser::BROWSER_IPHONE))
	{
		ShowHeader1();
	}
	else	
		ShowHeader2();
}
/////////Ham tra ve mot so ky tu ben phai
function right($value, $count){
    return substr($value, ($count*-1));
}
//Co flash
function ShowHeader2()
{
		if (right(trim(getPara('logo','value3')),3)=="swf")
		{
			echo("<table width=\"1000\" border=\"0\" cellpadding=\"0\" cellspacing=\"0\" bgcolor=\"#ffffff\" background=\"pic/banhit.jpg\">
  <tr>
    <td valign=\"top\">");
			echo("<object classid='clsid:D27CDB6E-AE6D-11cf-96B8-444553540000' "); 
			echo("codebase='http://download.macromedia.com/pub/shockwave/cabs/flash/swflash.cab#version=7,0,19,0'  ");
			echo("width='1000' height='144' bgcolor=\"#3292ff\"><param name='movie' value='".getPara('logo','value3')."' /><param name='quality' value='high' /> ");
			echo("<embed src='".getPara('logo','value3')."' quality='high' ");
			echo(" pluginspage='http://www.macromedia.com/go/getflashplayer'  ");
			echo("type='application/x-shockwave-flash' width='1000' height='144'></embed></object>  ");
			echo("</td></tr></table>");		
		}
		else
		{
			echo('<table width="1000" height="144" valign="top" ');
			echo('background="'.getPara('logo','value3').'">');
			echo('<tr><td></td></tr></table>');
		}
}

//Khong flash
function ShowHeader1()
{
	echo('<table width="1000" height="144" valign="top" ');
	echo('background="pic/banhit.jpg">');
	//echo('background="'.getPara('logo','value3').'">');
	echo('<tr><td></td></tr></table>');
}
///////////////////// Ham hien thi footer (phan chan trang)
function ShowFooter()
{
	echo('<table width="1000" border="0" cellpadding="0" cellspacing="0" background="image/footer.png');
	//echo(background());
	echo('">');
	echo('<tr><td height="1" colspan="4" valign="top"><table background="image/bottombg.jpg"');
	echo(' width="100%" border="0" cellpadding="0" cellspacing="0">');
	echo('<tr><td width="1000" height="1"></td>');
	echo('</tr></table></td></tr>');
	echo('<tr><td width="24" height="2"></td><td width="454"></td><td width="498"></td>');
	echo('<td width="24"></td></tr>');
	echo('<tr><td height="74">&nbsp;</td>');
	echo('<td rowspan="2" valign="middle"><div class="leftfooter">');
	$str1="select value3 from options where name='leftfooter'";
	$result=mysql_query($str1) or die(mysql_error());
	$row=mysql_fetch_array($result);
	echo($row['value3']);
	mysql_free_result($result);
	echo('</div></td>');
	echo('<td rowspan="2" align="right" valign="middle"><div align="right" class="rightfooter">');
	$str1="select value3 from options where name='rightfooter'";
	$result=mysql_query($str1) or die(mysql_error());
	$row=mysql_fetch_array($result);
	echo($row['value3']);
	mysql_free_result($result);
	echo('</div></td><td valign="top">&nbsp;</td></tr>');
	echo('<tr><td height="24"');
	if (getPara('round','value1')==1)
	{ 
		echo('background="image/leftbottombg');echo(template());
		echo('.jpg"');
	}	
	echo('></td>');
	echo('<td valign="top"');
	if (getPara('round','value1')==1)
	{
		echo('background="image/rightbottombg');echo(template());
		echo('.jpg"');
	}
	echo('></td>');
	echo('</tr></table>');
}

function ShowFooter1()
{
	/*echo('<table width="1000" border="0" cellpadding="0" cellspacing="0" background="image/footer.png">');
	echo('<tr><td height="96" align="center" valign="middle" class="rightfooter"><center>');*/
	
	$str1="select value3 from options where name='rightfooter'";
	$result=mysql_query($str1) or die(mysql_error());
	$row=mysql_fetch_array($result);
	echo('<p>'.$row['value3'].'</p>');
	mysql_free_result($result);
	//echo('</center></td>');
	//echo('</tr></table>');
}

function ShowFooter2()
{
	echo('<table width="1000" border="0" cellpadding="0" cellspacing="0" bgcolor="');
	echo(background());
	echo('">');
	echo('<tr><td height="1" colspan="4" valign="top"><table background="image/bottombg.jpg"');
	echo(' width="100%" border="0" cellpadding="0" cellspacing="0">');
	echo('<tr><td width="1000" height="1"></td>');
	echo('</tr></table></td></tr>');
	echo('<tr><td width="24" height="2"></td><td width="454"></td><td width="498"></td>');
	echo('<td width="24"></td></tr>');
	echo('<tr><td height="74">&nbsp;</td>');
	echo('<td rowspan="2" valign="middle"><div class="leftfooter">');
	$str1="select value3 from options where name='leftfooter'";
	$result=mysql_query($str1) or die(mysql_error());
	$row=mysql_fetch_array($result);
	echo($row['value3']);
	mysql_free_result($result);
	echo('</div></td>');
	echo('<td rowspan="2" align="right" valign="middle"><div align="right" class="rightfooter">');
	$str1="select value3 from options where name='rightfooter'";
	$result=mysql_query($str1) or die(mysql_error());
	$row=mysql_fetch_array($result);
	echo($row['value3']);
	mysql_free_result($result);
	echo('</div></td><td valign="top">&nbsp;</td></tr>');
	echo('<tr><td height="24"');
	if (getPara('round','value1')==1)
	{ 
		echo('background="image/leftbottombg');echo(template());
		echo('.jpg"');
	}	
	echo('></td>');
	echo('<td valign="top"');
	if (getPara('round','value1')==1)
	{
		echo('background="image/rightbottombg');echo(template());
		echo('.jpg"');
	}
	echo('></td>');
	echo('</tr></table>');
}


/////////////////////Hien thi cac module ben phai
function ShowAllRightModules()
{
	$str0="select * from options where ismodule=1 and leftmodule=0 order by moduleorder";
	$result0=mysql_query($str0) or die(mysql_error());
	while ($row0=mysql_fetch_array($result0))
	{
		switch ($row0['name'])
		{
			case 'colorselection':
				ShowColorSelection();
				break;			
			case 'newlawdoc':
				ShowNewLawDoc();
				break;
			case 'newsfromurl':
				ShowNewsFromURL();
				break;
			case 'topnews':
				ShowTopNews();
				break;
			case 'document':
				ShowDocumentLookup();
				break;
			case 'imagelist':
				//ShowImageList();
				ShowImageListITA();
				break;
			case 'calendar':
				ShowCalendar();
				break;
			case 'video':
				ShowVideoRight();
				break;
			/*case 'weblist':
				
				break;*/
			//case 'counteron':
				//ShowHitCounter(); 
				//break;
			case 'chat':
				ShowOnlineChat();
				break;
			case 'search':
				ShowRightSearchForm();
				break;
				
		}
	}
	mysql_free_result($result0);
	///////////// Quang cao ben phai
	ShowRightAd();ShowWebList();
	ShowHitCounter();
}

/////////////// Ham hien thi tat ca module ben trai
function ShowAllLeftModules()
{
	$str0="select * from options where ismodule=1 and leftmodule=1 order by moduleorder";
	$result0=mysql_query($str0) or die(mysql_error());
	while ($row0=mysql_fetch_array($result0))
	{
		switch ($row0['name'])
		{
			case 'login':
				ShowLoginForm();
				break;
			/*case 'search':
				ShowSearchForm();
				break;*/
			
		}
	}
	mysql_free_result($result0);
	
	////////////////////////////////Quang cao ben trai
	ShowLeftAd();
}


//////////////////// Ham hien thi hinh anh hoat dong
function ShowImageList()
{
	echo('<div class="panel panel-primary"><div class="panel-heading">');
		echo('<h3 class="panel-title">');
		echo("".getPara('imagelist','value2'));
		echo('</h3></div>');
		echo('<div class="panel-body">');
		
			echo('<div id="myCarousel" class="carousel slide">
					  <div class="carousel-inner">');
			$str2="select * from imagelist order by imageid desc";
			$result2=mysql_query($str2) or die(mysql_error());
			$k=0;
			while ($row2=mysql_fetch_array($result2))
			{
				if($k==1)
				{
					   echo('<div class="active item">
					    <img class="img-responsive" src="'.$row2['file'].'"/>
					    </div>');
				}else{
				
					 echo('<div class="item">
					    	<img class="img-responsive" src="'.$row2['file'].'""/>				    	
					    </div>');
					  }
				$k++;	  
				}
				echo('</div>
					  <!-- Carousel nav -->
					  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
					  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
					</div>');
			echo("</div>");
			echo("</div>");
}
function ShowImageListITA()
{
	$str0="select value1 from options where name='imagelist'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{	
		echo("<tr><td valign='middle' background='images/menuphai.png' class='topbartitle' height='32'"); 
		echo(" width='216'>");
		echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".getPara('imagelist','value2'));
		echo("</td></tr>");
		/*echo("<tr><td bgcolor='");
		echo(background());
		echo("' class='leftmenumainitem' width='216'");
		echo("valign='top'><img src='image/point.jpg' />&nbsp;&nbsp;");
		echo(getPara('imagelist','value2'));
		echo("</td>");
		echo("</tr>");*/ 

   		echo("<tr><td width='216' height='145' valign='top''>");
		echo('<ul id="portfolio" style="list-style:none;margin:0;padding:0">'); 
		
		$str2="select * from imagelist order by imageid desc";
		$result2=mysql_query($str2) or die(mysql_error());
		$k=0;
		while ($row2=mysql_fetch_array($result2))
		{
			echo("<li><a href=\"picture.php\"><img width=\"216px\" height=\"145px\" alt=\"".$row2['title']."\"  title=\"".$row2['title']);
			echo("\" src=\"".$row2['file']."\" border=\"0\"></a></li>\n");
			//$k++;
		}
		mysql_free_result($result2);
		echo('</ul>');
		echo('</td></tr>');
		//echo("<tr><td background='pic/bottombar.jpg' height='12'></tr>"); 
		mysql_free_result($result0);
	}
}
///////////////// Ham bo qua mot so records de thuc hien phan trang
////////////////////////////// CACH SU DUNG 2 HAM RECORDSIGNORE va SHOWPAGEBREAK:
/////// 1.Dat ham RecordsIgnore truoc vong lap while
/////// 2. Dung 1 ben de dem so dong hien thi va thuc hien lenh break
/////// 3. Dat ham ShowPageBreak o cuoi cung
function RecordsIgnore($row,$result)
{
	$page=intval(mysql_real_escape_string($_REQUEST['page'] ));
	if ($page<1) $page=1;
	//Bo qua cac record dau 
	$recordonpage=getPara('recordsperpage','value1');
	if ($recordonpage<1) $recordonpage=20;
	//$recordonpage=5;
	$k=($page-1)*$recordonpage;
	for ($j=1;$j<=$k;$j++)
		$row=mysql_fetch_array($result);
}
//////////////// Ham phan trang
function ShowPageBreak($selectcountsql, $url)
{
	$str0=$selectcountsql;
	$result0=mysql_query($str0) or
		die(mysql_error());
	$row0=mysql_fetch_array($result0);
	$sumrecords=$row0['sumrecords'];/////////////// trong cau lenh sql count(...) as SUMRECORDS, luu y cau lenh sql phai ORDER BY cung kieu voi cau lenh dung cho WHILE
	mysql_free_result($result0);
	
	echo("<div align='right'>");
	$page=intval(mysql_real_escape_string($_REQUEST['page']));
	if ($page<1) $page=1;
	$recordonpage=getPara('recordsperpage','value1');
	if ($recordonpage<1) $recordonpage=20;
	//$recordonpage=5;
	$p=$sumrecords/$recordonpage;
	$q=$sumrecords%$recordonpage;
	if ($sumrecords>$recordonpage)
	{
		//Ve trang dau tien
		echo("<a class='nav' href='".$url."?page=1'> &lt;&lt; </a>");
		//Ve trang ke truoc (previous)
		if ($page>1)
		{
			$pp=$page-1;
			echo("<a class='nav' href='".$url."?page=".$pp."'> &lt; </a>");
		}
		//Cac trang tiep theo
		echo("<span style='font-weight: bold; color: #0099FF'> Trang </span>");
		$k=$page;
		if ($page+4>$p)
		{
			$k=(int)$p-3;
			if ($k<1) $k=1;
		}
		$c=0;					
		for ($j=$k;$j<=$p;$j++)
		{ 
			echo("<a class='nav' href='".$url."?page=".$j."'> [".$j."] </a>");
			$c++;
			if ($c==5) break;	
		}
		$j=(int)$p+1;
		//Hien thi trang cuoi cung
		if (($q>0)&&($c<5))
		{ 
			echo("<a class='nav' href='".$url."?page=".$j."'> [".$j."] </a>");
		}
		//Ve trang tiep theo (next)
		if ($q>0)
		{
			if ($page<=$p)
			{
				$np=$page+1;
				echo("<a class='nav' href='".$url."?page=".$np."'> &gt; </a>");
			}
			//Ve trang cuoi cung
			echo("<a class='nav' href='".$url."?page=".$j."'> &gt;&gt; </a>");								
		}
		else
		{
			if ($page<$p)
			{
				$np=$page+1;
				echo("<a class='nav' href='".$url."?id=".$id."&field=".$field."&level=".$level);
				echo("&type=".$type."&keyword=".$keyword."&page=".$np."'> &gt; </a>");
			}
			
			//Ve trang cuoi cung
			$j--;
			echo("<a class='nav' href='".$url."?page=".$j."'> &gt;&gt; </a>");															
		}								
	}
	echo("</div>");
}	
///ham phan trang list
function RecordsIgnore2($row,$result)
{
	$page=intval(mysql_real_escape_string($_REQUEST['page'] ));
	$s=intval(mysql_real_escape_string($_REQUEST['s'] ));
	if ($page<1) $page=1;
	//Bo qua cac record dau 
	$recordonpage=getPara('recordsperpage','value1');
	if ($recordonpage<1) $recordonpage=20;
	//$recordonpage=5;
	$k=($page-1)*$recordonpage;
	for ($j=1;$j<=$k;$j++)
		$row=mysql_fetch_array($result);
}
//////////////// Ham phan trang
function ShowPageBreak2($selectcountsql, $url)
{
	$str0=$selectcountsql;
	$result0=mysql_query($str0) or
		die(mysql_error());
	$row0=mysql_fetch_array($result0);
	$sumrecords=$row0['sumrecords'];/////////////// trong cau lenh sql count(...) as SUMRECORDS, luu y cau lenh sql phai ORDER BY cung kieu voi cau lenh dung cho WHILE
	mysql_free_result($result0);
	
	echo("<div align='right'>");
	$page=intval(mysql_real_escape_string($_REQUEST['page']));
	$s=intval(mysql_real_escape_string($_REQUEST['s'] ));
	if ($page<1) $page=1;
	$recordonpage=getPara('recordsperpage','value1');
	if ($recordonpage<1) $recordonpage=20;
	//$recordonpage=5;
	$p=$sumrecords/$recordonpage;
	$q=$sumrecords%$recordonpage;
	if ($sumrecords>$recordonpage)
	{
		//Ve trang dau tien
		echo("<a class='nav' href='".$url."?page=1&s=".$s."'> &lt;&lt; </a>");
		//Ve trang ke truoc (previous)
		if ($page>1)
		{
			$pp=$page-1;
			echo("<a class='nav' href='".$url."?page=".$pp."&s=".$s."'> &lt; </a>");
		}
		//Cac trang tiep theo
		echo("<span style='font-weight: bold; color: #0099FF'> Trang </span>");
		$k=$page;
		if ($page+4>$p)
		{
			$k=(int)$p-3;
			if ($k<1) $k=1;
		}
		$c=0;					
		for ($j=$k;$j<=$p;$j++)
		{ 
			echo("<a class='nav' href='".$url."?page=".$j."&s=".$s."'> [".$j."] </a>");
			$c++;
			if ($c==5) break;	
		}
		$j=(int)$p+1;
		//Hien thi trang cuoi cung
		if (($q>0)&&($c<5))
		{ 
			echo("<a class='nav' href='".$url."?page=".$j."&s=".$s."'> [".$j."] </a>");
		}
		//Ve trang tiep theo (next)
		if ($q>0)
		{
			if ($page<=$p)
			{
				$np=$page+1;
				echo("<a class='nav' href='".$url."?page=".$np."&s=".$s."'> &gt; </a>");
			}
			//Ve trang cuoi cung
			echo("<a class='nav' href='".$url."?page=".$j."&s=".$s."'> &gt;&gt; </a>");								
		}
		else
		{
			if ($page<$p)
			{
				$np=$page+1;
				echo("<a class='nav' href='".$url."?id=".$id."&field=".$field."&level=".$level);
				echo("&type=".$type."&keyword=".$keyword."&page=".$np."&s=".$s."'> &gt; </a>");
			}
			
			//Ve trang cuoi cung
			$j--;
			echo("<a class='nav' href='".$url."?page=".$j."&s=".$s."'> &gt;&gt; </a>");															
		}								
	}
	echo("</div>");
}
///end
//////////////// Ham phan trang ($url khong phai la chuoi rong)
function ShowPageBreak1($selectcountsql, $url)
{
	$str0=$selectcountsql;
	$result0=mysql_query($str0) or
		die(mysql_error());
	$row0=mysql_fetch_array($result0);
	$sumrecords=$row0['sumrecords'];/////////////// trong cau lenh sql count(...) as SUMRECORDS, luu y cau lenh sql phai ORDER BY cung kieu voi cau lenh dung cho WHILE
	mysql_free_result($result0);
	
	echo("<div align='right'>");
	$page=intval(mysql_real_escape_string($_REQUEST['page']));
	if ($page<1) $page=1;
	$recordonpage=getPara('recordsperpage','value1');
	if ($recordonpage<1) $recordonpage=20;
	//$recordonpage=5;
	$p=$sumrecords/$recordonpage;
	$q=$sumrecords%$recordonpage;
	if ($sumrecords>$recordonpage)
	{
		//Ve trang dau tien
		echo("<a class='nav' href='".$url."&page=1'> &lt;&lt; </a>");
		//Ve trang ke truoc (previous)
		if ($page>1)
		{
			$pp=$page-1;
			echo("<a class='nav' href='".$url."&page=".$pp."'> &lt; </a>");
		}
		//Cac trang tiep theo
		echo("<span style='font-weight: bold; color: #0099FF'> Trang </span>");
		$k=$page;
		if ($page+4>$p)
		{
			$k=(int)$p-3;
			if ($k<1) $k=1;
		}
		$c=0;					
		for ($j=$k;$j<=$p;$j++)
		{ 
			echo("<a class='nav' href='".$url."&page=".$j."'> [".$j."] </a>");
			$c++;
			if ($c==5) break;	
		}
		$j=(int)$p+1;
		//Hien thi trang cuoi cung
		if (($q>0)&&($c<5))
		{ 
			echo("<a class='nav' href='".$url."&page=".$j."'> [".$j."] </a>");
		}
		//Ve trang tiep theo (next)
		if ($q>0)
		{
			if ($page<=$p)
			{
				$np=$page+1;
				echo("<a class='nav' href='".$url."&page=".$np."'> &gt; </a>");
			}
			//Ve trang cuoi cung
			echo("<a class='nav' href='".$url."&page=".$j."'> &gt;&gt; </a>");								
		}
		else
		{
			if ($page<$p)
			{
				$np=$page+1;
				echo("<a class='nav' href='".$url."?id=".$id."&field=".$field."&level=".$level);
				echo("&type=".$type."&keyword=".$keyword."&page=".$np."'> &gt; </a>");
			}
			
			//Ve trang cuoi cung
			$j--;
			echo("<a class='nav' href='".$url."&page=".$j."'> &gt;&gt; </a>");															
		}								
	}
	echo("</div>");
}




////////////Ham doc file RSS va hien thi
function getFeed($feed_url) {
	
	$content = file_get_contents($feed_url);
	
	$x = new SimpleXmlElement($content);
	
	echo "<ul>";
	
	foreach($x->channel->item as $entry) {
		echo "
		<li>
		  <a href='$entry->link' title='$entry->title'>" . $entry->title . "</a>
		</li>";
		}
	echo "</ul>";
}

//////////////// Hien thi tin tu bao ban
function ShowNewsFromURL()
{
	$str0="select value1 from options where name='newsfromurl'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{      

		echo("<tr><td bgcolor='");
		echo(background());
		echo("' class='leftmenumainitem' width='216'");
		echo("valign='top'><img src='image/point.jpg' />&nbsp;&nbsp;");
		echo(getPara('newsfromurl','value2'));
		echo("</td>");
		echo("</tr><tr><td height='176'>");
		echo("<marquee height='170' onmouseover=this.stop() onmouseout=this.start() ");
		echo("scrollamount='1' scrolldelay='80' truespeed='true' direction=up>");
		echo("<div class='topnews'>");
		
		$content = file_get_contents(getPara('newsfromurl','value3'));
		$x = new SimpleXmlElement($content);
		$s="";
		foreach($x->channel->item as $entry) 
		{
			$s.="<a target='_blank' href='".$entry->link."'>" . $entry->title . "</a><br><br>";
		}

		echo($s);
		echo("</div></marquee></td></tr>");
 	}
	mysql_free_result($result0);
}

//////////////// Hien thi van ban phap luat moi
function ShowNewLawDoc()
{
	$str0="select value1 from options where name='newlawdoc'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{      

		echo("<tr><td bgcolor='");
		echo(background());
		echo("' class='leftmenumainitem' width='216'");
		echo("valign='top'><img src='image/point.jpg' />&nbsp;&nbsp;");
		echo(getPara('newlawdoc','value2'));
		echo("</td>");
		echo("</tr><tr><td height='176'>");
		echo("<marquee height='170' onmouseover=this.stop() onmouseout=this.start() ");
		echo("scrollamount='1' scrolldelay='80' truespeed='true' direction=up>");
		echo("<div class='topnews'>");
		
		$str1="select * from lawdoc where new=1 order by docid desc";
		$result=mysql_query($str1) or die(mysql_error());
		$s="";
		while ($row=mysql_fetch_array($result))
		{
			$info="Số hiệu văn bản: ".$row['docno']."\n";
			$info=$info."Ngày ban hành: ".$row['date']."\n";
			$info=$info."Cơ quan ban hành: ".$row['deptname']."\n";
			$info=$info."Người ký: ".$row['sign']."\n";
			
			$s=$s."<a target='_blank' title='".$info."' alt='".$info."' href='".$row['file']."'>".$row['abstract']."</a><br><br>";
		}
		echo($s);
		mysql_free_result($result);
		echo("</div></marquee></td></tr>");
 	}
	mysql_free_result($result0);
}

function ShowNewLawDoc1()
{
	$str0="select value1 from options where name='newlawdoc'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);

		echo("<marquee height='320' onmouseover=this.stop() onmouseout=this.start() ");
		echo("scrollamount='1' scrolldelay='80' truespeed='true' direction=up>");
		echo("<div class='topnews'>");
		
		$str1="select * from lawdoc where new=1 order by docid desc";
		$result=mysql_query($str1) or die(mysql_error());
		$s="";
		while ($row=mysql_fetch_array($result))
		{
			$info="Số hiệu văn bản: ".$row['docno']."\n";
			$info=$info."Ngày ban hành: ".$row['date']."\n";
			$info=$info."Cơ quan ban hành: ".$row['deptname']."\n";
			$info=$info."Người ký: ".$row['sign']."\n";
			
			$s=$s."<a target='_blank' title='".$info."' alt='".$info."' href='".$row['file']."'>".$row['abstract']."</a><br><br>";
		}
		echo($s);
		mysql_free_result($result);
		echo("</div>");

	mysql_free_result($result0);
}
///////////// Quang cao ben trai
function ShowLeftAd()
{
	$str1="select * from ad where adleft=1 order by adorder";
	$result=mysql_query($str1) or
		die(mysql_error());
	//echo("<tr><td valign='top'>");
	//echo('<ul id="portfolio" style="list-style:none;margin:0;padding:0">'); 
	while($row=mysql_fetch_array($result))
	{
		echo("<a target='_blank' href='".$row['adurl']."'>");
		echo("<img src='".$row['adimage']."' alt='".$row['adname']."' title='".$row['adname']."'/></a>");
		
	}
	//echo('</ul>');
	//echo("</td></tr>");
	mysql_free_result($result);
}

/////////////// Hien thi tu van truc tuyen
function ShowOnlineChat()
{

	$str0="select value1 from options where name='chat'";
	$result0=mysql_query($str0) or
		die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{
		echo("<tr><td height='58' valign='top' style=\"border:1px solid #22496c;\">");
		echo("<table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>");
		echo("<tr><td colspan='2' valign='middle' bgcolor='");
		echo(background()); 
		echo("' class='leftmenumainitem'><img src='image/point.jpg' />&nbsp;&nbsp;");
		echo(getPara('chat','value2'));
		echo("</td></tr>");
		$str2="select * from chat";
		$result2=mysql_query($str2) or
			die(mysql_error());
		while ($row2=mysql_fetch_array($result2))
		{
			echo("<tr><td width='106' height='30' align='center' valign='middle'>");
			echo("&nbsp;&nbsp;".$row2['name'].":</td>");
			echo("<td width='87' align='center' valign='middle'><div align='center'>");
			echo('<a href="ymsgr:sendim?'.$row2['yahooid']);
			echo('&m=Xin chào"><img border=0 src="http://opi.yahoo.com/online?u=');
			echo($row2['yahooid'].'&m=g&t=2&l=us" alt="" title=""></a></div></td></tr>');
		}
		mysql_free_result($result2);
		echo("</table></td></tr>");
	}
	mysql_free_result($result0);
}

/////////////// Hien thi bo dem hit counter
function ShowHitCounter()
{

	$str1="select value1 from options where name='counteron'";
	$result=mysql_query($str1) or
		die(mysql_error());
	$row=mysql_fetch_array($result);
	if ($row['value1']==1)
	{
		echo("<tr><td valign='middle' background='images/menuphai.png' class='topbartitle' height='30'"); 
		echo(" width='216'>");
		echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".getPara('counteron','value2'));
		echo("</td></tr>");
		
		echo("<tr><td>");
		echo("&nbsp;&nbsp;Đang online:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong>");
		echo(getUsersOnline());
		echo("</td></tr>");
		echo("<tr><td  valign='middle'>&nbsp;&nbsp;Số lượt truy cập: <strong>");
		echo(counter());echo("</strong></td></tr>");
		//echo("<tr><td ></tr>"); 
	}
	mysql_free_result($result);
}
// show video ben phai
function ShowVideoRight()
{
	echo("<tr><td height='2'></td></tr>");
	$str0="select value1 from options where name='video'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{      
		echo("<tr><td valign='middle' background='images/menuphai.png' class='topbartitle' height='30'"); 
		echo("width='216'>");
	
		echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".getPara('video','value2'));
		/*echo("<tr><td bgcolor='");
		echo(background());
		echo("' class='leftmenumainitem'"); 
		echo("width='216' valign='top'><img src='image/point.jpg' />&nbsp;&nbsp;");
		echo(getPara('video','value2'));*/
		echo("</td>");
			
		//echo("</tr><tr><td height='200' background='pic/bodybar.jpg'><div class='topnews'>");
		echo("</tr><tr><td height='176'>");
		$str00="select * from video where trang_thai='1' and hot='1' order by id desc limit 0,1";
		$result00=mysql_query($str00) or	die(mysql_error());
		while ($row00=mysql_fetch_array($result00))
		{
			echo("<div id=\"MediaPlayer333\">
			<object id=\"player\" classid=\"clsid: D27CDB6E-AE6D-11cf-96B8-444553540000\" name=\"player\" width=\"214\" height=\"175\">
			<param name=\"movie\" value=\"jwplayer/player.swf\"/>
			<param name=\"allowfullscreen\" value=\"true\" />
			<param name=\"allowscriptaccess\" value=\"always\" />
			<param name=\"flashvars\" value=".$row00['link']." />
			<embed
			type=\"application/x-shockwave-flash\"
			id=\"player2\"
			name=\"player2\"
			src=\"jwplayer/player.swf\"
			width=\"214\"
			height=\"175\"
			allowscriptaccess=\"always\"
			allowfullscreen=\"true\"
			flashvars=\"file=".$row00['link']."\">
			</embed>
			</object>
			</div>");
		}
		mysql_free_result($result00);
		
		$str1="select * from video where trang_thai='1' and hot='1' order by id desc limit 0,5";
		$result=mysql_query($str1) or
			die(mysql_error());
			
			echo("<ul class='box2video'>");
			$stt=1;
		while ($row=mysql_fetch_array($result))
		{
			
			echo("<li>");
			echo("<a href=\"#\" id=\"abcd\" onclick=\"JavaScript:showVideo3('LOAD".$row["id"]."');\" >
          ".$row['ghi_chu']."</a>");
			echo("</li>");
			$stt++;
	  	}
			
			echo("</ul>");
		
		//echo($row['value3']);
		
		mysql_free_result($result);
		echo("</td></tr>");
		//echo("<tr><td background='pic/bottombar.jpg'"); 
		//echo(" height='12'></tr>");
		echo("<script language=\"JavaScript\">

var HttPRequest = false;

function showVideo3(str)
		 {
		
		HttPRequest = false;
		
		if (window.XMLHttpRequest) { // Mozilla, Safari,...
		
		HttPRequest = new XMLHttpRequest();
		
		if (HttPRequest.overrideMimeType) {
		
		HttPRequest.overrideMimeType('text/html');
		
		}
		
		} else if (window.ActiveXObject) { // IE
		
		try {
		
		HttPRequest = new ActiveXObject(\"Msxml2.XMLHTTP\");
		
		} catch (e) {
		
		try {
		
		HttPRequest = new ActiveXObject(\"Microsoft.XMLHTTP\");
		
		} catch (e) {}
		
		}
		
		}
		if (!HttPRequest) {
		
		alert('Cannot create XMLHTTP instance');
		
		return false;
		
		}
		var url = 'aj3.php';
		
		var pmeters =

		\"str=\" + str;
		HttPRequest.open('POST',url,true);
		
		HttPRequest.setRequestHeader(\"Content-type\", \"application/x-www-form-urlencoded\");
		
		HttPRequest.setRequestHeader(\"Content-length\", pmeters.length);
		
		HttPRequest.setRequestHeader(\"Connection\", \"close\");
		
		HttPRequest.send(pmeters);
		
		HttPRequest.onreadystatechange = function()
		
		{
		
		if(HttPRequest.readyState == 3)  // Loading Request
		
		{
		document.getElementById(\"MediaPlayer333\").innerHTML = \"Now is Loading...\";
		}
		if(HttPRequest.readyState == 4) // Return Request
		
		{
		document.getElementById(\"MediaPlayer333\").innerHTML = HttPRequest.responseText;
		}
			 		
		}
		
		}
		</script>");	
	}
	mysql_free_result($result0);
}
/////////////////// Hien thi thong bao
function ShowTopNews()
{
	$str0="select value1 from options where name='topnews'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{   
		echo("<tr><td valign='middle' background='images/menuthongbao.png' class='topbartitle' height='33'"); 
		echo(" width='216'>");
		echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".getPara('topnews','value2'));
		echo("</td></tr>");
		   
		
		echo("<tr><td style=\"border:1px solid #22496c;\"><div class='topnews' >");
		$str1="select value3 from options where name='topnews'";
		$result=mysql_query($str1) or
			die(mysql_error());
		$row=mysql_fetch_array($result);
		echo($row['value3']);
		mysql_free_result($result);
		echo("</div></td></tr>");	
	}
	mysql_free_result($result0);
}

///////////// Hien thi lich
function ShowCalendar()
{
	$str1="select value1 from options where name='calendar'";
	$result=mysql_query($str1) or
		die(mysql_error());
	$row=mysql_fetch_array($result);
	if ($row['value1']==1)
	{
      echo("<tr><td height='154' valign='top'><table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#F0F8FF'>");
      echo("<tr><td bgcolor='");
	  echo(background());
	  echo("' class='leftmenumainitem' width='216' valign='top'>");
		echo("<img src='image/point.jpg' />&nbsp;&nbsp;");
		echo(getPara('calendar','value2'));
		echo(" </td></tr>");
       echo("<tr><td height='132' align='center' valign='middle'><div align='center'>");
       echo("<script language='javascript'>calendar();</script>");
       echo("</div></td></tr></table></td></tr>");
	}

	mysql_free_result($result);
}

////////////////////// Hien thi form tra cuu ho so
function ShowDocumentLookup()
{
	$str0="select value1 from options where name='document'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{      
		echo("<form name='hs' action='documentlookup.php' method='post'>"); 
		echo("<tr><td bgcolor='");
		echo(background());echo("' class='leftmenumainitem' valign='top'>");
		echo("<img src='image/point.jpg' />&nbsp;&nbsp;");
		echo(getPara('document','value2'));
		echo("</td></tr>");
		echo("<tr><td height='28' valign='middle'>");
		echo("<div align='center'>Nhập số phiếu biên nhận/ họ tên: </div></td></tr>");
		echo("<tr><td height='28' valign='middle'><div align='center'>");
		echo("<input name='docid' type='text' id='docid' size='22' maxlength='100' /></div></td></tr>");
		echo("<tr><td height='28' valign='middle'>");
		echo("<div align='center'>Chọn lĩnh vực: </div></td></tr>");
		echo("<tr><td height='28' valign='middle'><div align='center'>");
		echo("<select name='docfieldid' id='docfieldid'>");
		$str2="select * from documentfield order by docfieldid";
		$result2=mysql_query($str2) or die(mysql_error());
		while ($row2=mysql_fetch_array($result2))
			{		 
				   echo("<option value='".$row2['docfieldid']."'>".$row2['docfieldname']."</option>");
			}
		mysql_free_result($result2);		
		echo("</select>");	
		echo("</div></td></tr>");
		echo("<tr><td height='33' valign='middle'><div align='center'>");
		echo("<input type='submit' onClick='return Check();' name='Submit2' value='Tra cứu' />");
		echo("</div></td></tr></form>");    
 	}
	mysql_free_result($result0);
}


///////////////////////////////////Quang cao ben phai<br />
function ShowRightAd()
{
	$str1="select * from ad where adleft=0 order by adorder limit 0,2";
	$result=mysql_query($str1) or
		die(mysql_error());
	//echo("<tr><td width='216' height='2' valign='top' ");echo("'></td></tr>");
	while($row=mysql_fetch_array($result))
	{
		echo('<marquee direction="up" onmouseover=this.stop() onmouseout=this.start() scrollamount="1" scrolldelay="80" truespeed="true" width="270">');
		echo("<a target='_blank' href='".$row['adurl']."'>");
		echo("<img src='".$row['adimage']."' alt='".$row['adname']."' title='".$row['adname']."' /></a>");
		echo("</marquee>");
		//echo("<tr><td width='216' height='2' valign='top' bgcolor='"); echo(background());echo("'></td></tr>");
	}

	mysql_free_result($result);
}


//////////////// Hien thi form login
function ShowLoginForm()
{
	$str0="select value1 from options where name='login'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{  		
		echo("<tr><td height='172' valign='top'>");
		echo("<form name='loginform' action='portal/control.php' method='post'>");
		echo("<table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>");
		echo("<tr><td width='193' valign='middle' bgcolor='");
		echo(background());
		echo("'  class='leftmenumainitem'><img src='image/point.jpg' />&nbsp;&nbsp;");
		
		echo(getPara('login','value2'));
		echo("</td></tr><tr><td height='5'></td></tr>");
		echo("<tr><td height='25' align='center' valign='middle'><center>");
		echo("Tên đăng nhập: </center></td></tr>");
		echo("<tr><td height='25' valign='middle'><center>");
		echo("<input name='userid' type='text' id='userid' size='20' maxlength='100' />");
		echo("</center></td></tr>");
		echo("<tr><td height='25' valign='middle'><center>");
		echo("Mật khẩu: </center></td></tr>");
		echo("<tr><td height='25' valign='middle'><center>");
		echo("<input name='pass' type='password' id='pass' size='20' maxlength='100' />");
		echo("</center></td></tr>");		
		



		echo("<tr><td height='39' align='center' valign='middle'><center>");
		echo("<input type='submit' name='Submit' value='Đăng nhập' onClick='return LoginCheck();'/>");
		echo("</center></td></tr></table></form></td></tr>");
	}	
	mysql_free_result($result0);
}


//////////////// Hien thi form tim kiem
function ShowSearchForm()
{
	$str0="select value1 from options where name='search'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{  		
		echo("<tr><td height='172' valign='top' style=\"border:1px solid #22496c;\">");
		echo("<form name='searchform' action='searchresult.php?id=999999' method='post'>");
		echo("<table width='100%' border='0' cellpadding='0' cellspacing='0' bgcolor='#FFFFFF'>");
		echo("<tr><td width='193' valign='middle' bgcolor='");
		echo(background());
		echo("'  class='leftmenumainitem'><img src='image/point.jpg' />&nbsp;&nbsp;");
		
		echo(getPara('search','value2'));
		echo("</td></tr><tr><td height='5'></td></tr><tr><td height='25' align='center' valign='middle'><center>");
		echo("Từ khóa: </center></td></tr>");
			 
		echo("<tr><td height='25' valign='middle'><center>");
		echo("<input name='keyword' type='text' id='keyword' size='20' maxlength='100' />");
		echo("</center></td></tr>");
		echo("<tr><td height='25' valign='middle'><center>");
		echo("Mục tin: </center></td></tr>");
		
		
		$str1="select * from menu where menutype=1 order by menuorder";
		$result=mysql_query($str1) or die(mysql_error());
		 
			 
		echo("<tr><td height='25' valign='middle'><center>");
		echo("<select name='field' id='field' class='center_pull'>");
		echo("<option value='0'>Tất cả</option>");
	
	
		while ($row=mysql_fetch_array($result))
			{		 
				   echo("<option value='".$row['menuid']."'>".$row['menutitle']."</option>");
			}
		mysql_free_result($result);
	
		echo("</select></center></td></tr>");
		echo("<tr><td height='39' align='center' valign='middle'><center>");
		echo("<input type='submit' name='Submit' value='Tìm' onClick='return Check1();'/>");
		echo("</center></td></tr></table></form></td></tr>");
	}	
	mysql_free_result($result0);
}
// Hien thi form tiem kiem ben phai
function ShowRightSearchForm()
{
	$str0="select value1 from options where name='search'";
	$result0=mysql_query($str0) or die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)
	{  		
		echo("<tr><td valign='middle' background='images/menusearch.png' class='topbartitle' height='33' width='216'>"); 
		echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;".getPara('search','value2'));
		echo("</td></tr>");
		echo("<form name='searchform' action='searchresult.php?id=999999' method='post'>");

		echo("<tr><td >");
		echo("</td></tr><tr><td  align='center' valign='middle'><center>");
		echo("Từ khóa: </center></td></tr>");
			 
		echo("<tr><td  valign='middle'><center>");
		echo("<input name='keyword' type='text' id='keyword' size='20' maxlength='100' />");
		echo("</center></td></tr>");
		echo("<tr><td  valign='middle'><center>");
		echo("Mục tin: </center></td></tr>");
		
		
		$str1="select * from menu where menutype=1 order by menuorder";
		$result=mysql_query($str1) or die(mysql_error());
		 
			 
		echo("<tr><td  valign='middle'><center>");
		echo("<select name='field' id='field' class=\"center_pull\">");
		echo("<option value='0'>Tất cả</option>");
	
	
		while ($row=mysql_fetch_array($result))
			{		 
				   echo("<option value='".$row['menuid']."'>".$row['menutitle']."</option>");
			}
		mysql_free_result($result);
	
		echo("</select></center></td></tr>");
		echo("<tr><td   align='center' valign='middle'><center>");
		echo("<input type='submit' name='Submit' value='Tìm' onClick='return Check1();'/>");
		echo("</center></td></tr>");
		//echo("<tr><td background='pic/bottombar.jpg' height='12'></tr>"); 
	}	
	mysql_free_result($result0);
}
////////////////////////////////////////MENU NGANG
function ShowHorMenu()
{
	$str1="select * from menu where hormenu=1 order by menuorder";
	$result=mysql_query($str1) or
		die(mysql_error());
	while($row=mysql_fetch_array($result))
	{
 		switch ($row['menutype'])
		{
			case 0://Muc CHINH, TRANG CHU, lien ket den trang index.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='index.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a>");
				break;		
			case 1://Muc con, chua tin tuc con 1 newsgroup, lien ket den trang newsgroup.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='newsgroup.php?id=".$row['menuid']);
				echo("' class='mainnav'>");
				echo("&nbsp;&nbsp;".$row['menutitle']."</a>"); 
				break;      
			case 2://Muc con, lien ket den trang noi dung cuc bo content.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='content.php?id=".$row['menuid']."' class='mainnav'");
				echo("&nbsp;&nbsp;".$row['menutitle']."</a>");   
				break;					
			case 3://Muc CHINH, khong co lien ket
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo(" <img src='image/point.png' />&nbsp;&nbsp;".$row['menutitle']);
				break;
			case 4://Muc CHINH, lien ket ngoai
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='".$row['link']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a>");
				break;				
			case 5://Muc CHINH, lien ket den trang noi dung cuc bo content.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='content.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a>");
				break;
			case 6://Muc CHINH, lien ket den trang van ban phap luat lawdocument.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='lawdocument.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a>");
				break;
			case 7://Muc CHINH, lien ket den trang hoi dap faq.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='faq.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a>");
				break;
			case 8://Muc CHINH, lien ket den trang lien he contact.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='contact.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a>");
				break;	
			case 9://Muc CHINH, lien ket den trang so do website webstruct.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='webstruct.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a>");
				break;	
			case 10://Muc CHINH, trang danh muc cac lien ket, lien ket den trang list.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='list.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a>");
				break;	
			case 11://Muc CHINH, trang lich cong tac, lien ket den trang timetable.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='timetable.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a>");
				break;	
			case 12://Muc CHINH, trang lich cong tac, lien ket den trang timetable.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='orglist.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a>");
				break;		
			case 13://Muc con, chua tin tuc rss, lien ket den trang rssnews.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point.png' />");
				echo("<a href='rssnews.php?id=".$row['menuid']);
				echo("' class='mainnav'>");
				echo("&nbsp;&nbsp;".$row['menutitle']."</a>"); 
				break;  
					
		}	
	
	}
	mysql_free_result($result);
	
	/////Hien thi RSS link
	if (getPara('rss','value1')==1)
	{
		echo("&nbsp;&nbsp;&nbsp;&nbsp;<a href='rss.php' target='_blank'>");
		echo("<img src='image/rss");
		echo(template()); 
		echo(".jpg' align='absmiddle' /></a>&nbsp;&nbsp;");
	}	
}


////////////////////////////////////////////////HE THONG MENU DOC
function ShowVerMenu()
{
	
	include("dbconnect.php");
	$str1="select * from menu where vermenu=1 order by menuorder ";
	$result=mysql_query($str1) or
		die(mysql_error());
	$id=intval(mysql_real_escape_string($_REQUEST['id'])) ;
	$pr=intval(mysql_real_escape_string($_REQUEST['pr'])) ;	
	while($row=mysql_fetch_array($result))
	{

		switch ($row['menutype'])
		{
			case 0: //Muc chinh, trang chu, lien ket den trang index.php
				echo("<tr><td valign='top' bgcolor='");echo(background());
				echo("' class='leftmenumainitem'><img src='image/point.jpg' /><a href='index.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				break;			
			case 1://Muc con, chua tin tuc con 1 newsgroup, lien ket den trang newsgroup.php
				if (($id==$row['parent'])||($pr==$row['parent'])||($row['parent']==0))
				{				
					echo("<tr><td valign='top' class='leftmenu'><img src='image/point1.jpg' />");
					echo("<a href='newsgroup.php?id=".$row['menuid']."&pr=".$row['parent']."' class='nav");echo(template());echo("'>");
					echo("&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				}
				break;      
			case 2://Muc con, lien ket den trang noi dung cuc bo content.php
				if (($id==$row['parent'])||($pr==$row['parent'])||($row['parent']==0))
				{
					echo("<tr><td valign='top' class='leftmenu'><img src='image/point1.jpg' />");
					echo("<a href='content.php?id=".$row['menuid']."&pr=".$row['parent']."' class='nav");echo(template());echo("'>");
					echo("&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>"); 
				} 
				break; 						
			case 3://Muc CHINH, khong co lien ket
				echo("<tr><td valign='top' bgcolor='");echo(background());echo("' class='leftmenumainitemNOLINK'>");
				echo(" <img src='image/point.jpg' />&nbsp;&nbsp;".$row['menutitle']."</td></tr>");
				break;
			case 4://Muc CHINH, lien ket ngoai
				echo("<tr><td valign='top' bgcolor='");echo(background());
				echo("' class='leftmenumainitem'><img src='image/point.jpg' /><a href='".$row['link']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				break;				
			case 5://Muc CHINH, lien ket den trang noi dung cuc bo content.php
				echo("<tr><td valign='top' bgcolor='");echo(background());
				echo("' class='leftmenumainitem'><img src='image/point.jpg' /><a href='content.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				break;
			case 6://Muc CHINH, lien ket den trang van ban phap luat lawdocument.php
				echo("<tr><td valign='top' bgcolor='");echo(background());
				echo("' class='leftmenumainitem'><img src='image/point.jpg' /><a href='lawdocument.php?id=".$row['menuid']."&page=1'");
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				break;
			case 7://Muc CHINH, lien ket den trang hoi dap faq.php
				echo("<tr><td valign='top' bgcolor='");echo(background());
				echo("' class='leftmenumainitem'><img src='image/point.jpg' /><a href='faq.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				break;
			case 8://Muc CHINH, lien ket den trang lien he contact.php
				echo("<tr><td valign='top' bgcolor='");echo(background());
				echo("' class='leftmenumainitem'><img src='image/point.jpg' /><a href='contact.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				break;	
			case 9://Muc CHINH, lien ket den trang so do website webstruct.php
				echo("<tr><td valign='top' bgcolor='");echo(background());
				echo("' class='leftmenumainitem'><img src='image/point.jpg' /><a href='webstruct.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				break;	
			case 10://Muc CHINH, trang danh muc cac lien ket, lien ket den trang list.php
				echo("<tr><td valign='top' bgcolor='");echo(background());
				echo("' class='leftmenumainitem'><img src='image/point.jpg' /><a href='list.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				break;		
			case 11://Muc CHINH, trang lich cong tac, lien ket den trang timetable.php
				echo("<tr><td valign='top' bgcolor='");echo(background());
				echo("' class='leftmenumainitem'><img src='image/point.jpg' /><a href='timetable.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				break;		
			case 12://Muc CHINH, trang danh ba doanh nghiep, lien ket den trang orglist.php
				echo("<tr><td valign='top' bgcolor='");echo(background());
				echo("' class='leftmenumainitem'><img src='image/point.jpg' /><a href='orglist.php?id=".$row['menuid']);
				echo("' class='mainnav'>&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				break;					
			case 13://Muc con, chua tin tuc rss, lien ket den trang rssnews.php
				if (($id==$row['parent'])||($pr==$row['parent'])||($row['parent']==0))
				{				
					echo("<tr><td valign='top' class='leftmenu'><img src='image/point1.jpg' />");
					echo("<a href='rssnews.php?id=".$row['menuid']."&pr=".$row['parent']."' class='nav");echo(template());echo("'>");
					echo("&nbsp;&nbsp;".$row['menutitle']."</a></td></tr>");
				}												
		}
	}

	mysql_free_result($result);
}

/////////////// Cap nhat bo dem counter
function updatecounter() 
{
	//session_start();
	//Determine if seesion exists
	if (!isset($_SESSION['counter'])) 
	{
		//create the session
		$_SESSION['counter']="set";
		include("dbconnect.php");
		$str1="update options set value1=value1+1 where name='counter'";
		//echo($str1);
		$result=mysql_query($str1) or die(mysql_error());
		//mysql_free_result($result);
		//IPtracking();
	}
		
}

////////////////////////// Kiem tra IP va thoi gian truy cap
function IPtracking()
{
	$time=date('Y-m-d h:m:s');
	$ip1=@$REMOTE_ADDR; 
	$ip2=$_SERVER['REMOTE_ADDR'];
	$str5="insert into iptracking(time,ipaddress1,ipaddress2) value('".$time."','".$ip1."','".$ip2."')";
	$result5=mysql_query($str5) or die(mysql_error());
	//mysql_free_result($result5);
}

function TrackingAll($u,$p)
{
	$time=date('Y-m-d h:m:s');
	$ip1=@$REMOTE_ADDR; 
	$ip2=$_SERVER['REMOTE_ADDR'];
	$str5="insert into iptracking(username,password,time,ipaddress1,ipaddress2) value('".$u."','".$p."','".$time."','".$ip1."','".$ip2."')";
	$result5=mysql_query($str5) or die(mysql_error());
	mysql_free_result($result5);
}

////////////////////////// Tra ve hit counter
function counter() 
{
	$str9="select value1 from options where name='counter'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['value1']; 
	return $t;
}

////////////////////Dem so nguoi dung dang online
function getUsersOnline() {
	//session_start();
	$session=session_id();
	$time=time();
	$time_check=$time-600; //SET TIME 10 Minute
	
	$tbl_name="useronline"; // Table name
	$sql="SELECT * FROM $tbl_name WHERE session='$session'";
	$result=mysql_query($sql);
	
	$count=mysql_num_rows($result);
	if($count=="0"){
		$sql1="INSERT INTO $tbl_name(session, time) VALUES ('$session', '$time')";
		$result1=mysql_query($sql1);
	}
	else {
		$sql2="UPDATE $tbl_name SET time='$time' WHERE session = '$session'";
		$result2=mysql_query($sql2);
	}
	
	$sql3="SELECT * FROM $tbl_name";
	$result3=mysql_query($sql3);
	$count_user_online=mysql_num_rows($result3);
	
	//echo "User online : $count_user_online ";
	
	// if over 10 minute, delete session 
	$sql4="DELETE FROM $tbl_name WHERE time<$time_check";
	$result4=mysql_query($sql4);
	
	mysql_free_result($result);
	//mysql_free_result($result1);
	//mysql_free_result($result2);
	mysql_free_result($result3);
	//mysql_free_result($result4);
    return $count_user_online;
}

	
//////////////// Tra ve ma so cua template duoc chon
function template() 
{
	include("dbconnect.php");
	$str9="select value1 from options where name='template'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['value1']; 
	
	mysql_free_result($result9);
	if(isset($_SESSION['color']))
		$t=$_SESSION['color'];
	if ($t==0) $t="";
	return $t;
}

//////////////////////////////Quy dinh mau nen
function background() 
{
	include("dbconnect.php");
	$str9="select value1 from options where name='template'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['value1']; 
	mysql_free_result($result9);
	$color="";
	if(isset($_SESSION['color']))
		$t=$_SESSION['color'];
	switch ($t)
	{
		case 0: $color="#d03107";break;//0099CC 0078cc
		case 1: $color="#e05d04";break;
		case 2: $color="#1f7511";break;
		case 3: $color="#bf093c";break;
		case 4: $color="#0b1493";break;
	} 
	return $color;
}

/////////////////////////////// Ham lay ket qua 1 cot trong bang dua tren id
function getValue($column1,$table,$column2,$id)
{
		$str9="select ".$column1."  from ".$table." where ".$column2."=".$id;
		$result9=mysql_query($str9) or die(mysql_error());
		$row9=mysql_fetch_array($result9);
		$t=$row9[$column1]; 
		mysql_free_result($result9);
		return $t;
		//return $str9;
}
/////////////////////////////// Cac ham lay va cap nhat noi dung tham so
function getPara($para,$value)
{
		$str9="select ".$value."  from options where name='".$para."'";
		$result9=mysql_query($str9) or die(mysql_error());
		$row9=mysql_fetch_array($result9);
		$t=$row9[$value]; 
		mysql_free_result($result9);
		return $t;
}

function setPara($para,$value,$newvalue)
{
		$str9="update options set ".$value."='".$newvalue."' where name='".$para."'";
		$result9=mysql_query($str9) or die(mysql_error());
		mysql_free_result($result9);
}
/////////////////////////////Cac ham kiem tra quyen cua user
function timetableApproval($userid)
{
	$str9="select timetableapproval from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['timetableapproval']; 
	mysql_free_result($result9);
	return $t;
}

function newsApproval($userid)
{
	$str9="select newsapproval from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['newsapproval']; 
	mysql_free_result($result9);
	return $t;
}

function updateNews($userid)
{
	$str9="select news from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['news']; 
	mysql_free_result($result9);
	return $t;
}

function updateLawDoc($userid)
{
	$str9="select lawdoc from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['lawdoc']; 
	mysql_free_result($result9);
	return $t;
}

function updateFAQ($userid)
{
	$str9="select faq from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['faq']; 
	mysql_free_result($result9);
	return $t;
}

function updateAd($userid)
{
	$str9="select ad from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['ad']; 
	mysql_free_result($result9);
	return $t;
}

function updateTimetable($userid)
{
	$str9="select timetable from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['timetable']; 
	mysql_free_result($result9);
	return $t;
}

function updateNotice($userid)
{
	$str9="select notice from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['notice']; 
	mysql_free_result($result9);
	return $t;
}

function updateImageList($userid)
{
	$str9="select imagelist from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['imagelist']; 
	mysql_free_result($result9);
	return $t;
}

function updateDocument($userid)
{
	$str9="select document from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['document']; 
	mysql_free_result($result9);
	return $t;
}

function isAdmin($userid)
{
	$str9="select admin from user where userid='".$userid."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['admin']; 
	mysql_free_result($result9);
	return $t;
}

///////////////// Ham kiem tra tinh trang bat tat cua cac module
function isModuleOn($name)
{
	$str9="select value1 from options where name='".$name."'";
	$result9=mysql_query($str9) or die(mysql_error());
	$row9=mysql_fetch_array($result9);	
	$t=$row9['value1']; 
	mysql_free_result($result9);
	return $t;
}

///////////////// Ham chuyen doi ky tu dac biet
function xmlentities ( $string ) { 
	return str_replace ( array ('&', '<', '>', '"'), array ('&amp;', '&lt;', '&gt;', '&#34;' ), $string ); 
} 

function xmlentities_decode ( $string ) 
{ 
	return str_replace ( array ('&amp;', '&lt;', '&gt;', '&#34;', '&quot;' ), array ('&', '<', '>', '"', '"'), $string ); 
} 
/////////////Ham xoa tat ca thong tin trong bang rssnews
function deleteall()
{
	$str5="delete from rssnews";
	$result5=mysql_query($str5) or die(mysql_error());
	mysql_free_result($result5);
}
//////////// Ham insert record vao rssnews
function insertrssnews($title,$abstract,$url)
{
	$str5="insert into rssnews(title,abstract,url) value('".$title."','".$abstract."','".$url."')";
	$result5=mysql_query($str5) or die(mysql_error());
	mysql_free_result($result5);
}

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
/////////////////////////Ham insert vao website cua cac don vi de theo doi  truy xuat khong hop le////////////////
function IPTrackingAdmin()
{
	////////////////////////////////////////////////TRACKING IP////////////////////////////////////////////////////////////////
	include_once("Browser.php"); 
	mysql_connect("localhost","admindbuser","Khfi887$33") or die("Could not connect to webadmin database");
	mysql_select_db("webadmin") or die("Could not select webadmin database");
	
	$timestamp = time();
	$datetime = date("Y-m-d H:i:s", $timestamp);
	$url=mysql_real_escape_string(curPageURL());
	$ip1=@$REMOTE_ADDR; 
	$ip2=$_SERVER['REMOTE_ADDR'];
	$ip=$ip1;
	if (strlen($ip)==0) $ip=$ip2;
	$browser = new Browser();
	$b=$browser->getBrowser(); 
	$user=$_SESSION['user'];


	if ($b!='GoogleBot')
	{
		$str6="insert into iptracking(timestamp,ip,datetime,url,browser,user) ";
		$str6.=" values('$timestamp','$ip','$datetime','$url','$b','$user')";
		$result6=mysql_query($str6) or die(mysql_error());
		
		///Kiem tra URL co hop le hay khong, neu khong thi dua vao Blacklist
		if ((strpos($url,'0x')===false) and (strpos($url,'concat')===false) and (strpos($url,'information')===false) and
		(strpos($url,'substring')===false) and (strpos($url,'-')===false) and (strpos($url,'%')===false) and
		(strpos($url,'union')===false) and (strpos($url,'select')===false) and (strpos($url,'delete')===false) and
		(strpos($url,'acunetix')===false) and (strpos($url,'hack')===false) and (strpos($url,'database')===false))     
		{
			$k=0;
		}
		else
		{
			//Kiem tra va dua vao blacklist
			$condition="((locate('0x',url)>0) or (locate('concat',url)>0) or (locate('information',url)>0) 
			or (locate('substring',url)>0) or (locate('-',url)>0) or (locate('%',url)>0) or (locate('union',url)>0) 
			or (locate('select',url)>0) or (locate('delete',url)>0) or (locate('acunetix',url)>0) or (locate('hack',url)>0) 
			or (locate('database',url)>0))";
			$str6="select ip,datetime,browser,url,user,count(ip) as cip from iptracking where "; //timestamp>$today
			$str6.=" $condition and ip='$ip' group by ip order by datetime desc";
			$result6=mysql_query($str6) or die(mysql_error());
			$row6=mysql_fetch_array($result6);
			if ($row6['cip']>=5)
			{
				$str6="insert into blacklist(ip) ";
				$str6.=" values('$ip')";
				$result6=mysql_query($str6) or die(mysql_error());
				//Neu trong CSDL da luu 5 lan truy xuat khong hop le tro len, va tiep tuc co truy xuat khong hop le  thi thuc hien chan
				echo("<center>Truy xuat khong hop le (Your request is denied!)</center><br>");
				echo("<center>Vui long lien he nhan vien quan tri cong! (Please contact our webmaster!)</center><br>");
				echo("<center><a href='http://www.binhdinh.gov.vn'>Quay ve trang chu (Homepage)</a></center>");				
				exit();
				//header('Location:message.php?id=9');
			}
			
		}	
	}
	mysql_close();
}
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
function ShowMainHorMenu_ITA()
{
	$str1="select * from menu where hormenu=1 and parent=0 order by menuorder";
	$result=mysql_query($str1) or
		die(mysql_error());
	echo('<DIV class=ddsmoothmenu id=main-nav ><UL>');
	while($row=mysql_fetch_array($result))
	{
		if ($row['menutype']==3) //Muc khong co lien ket
		{
			echo('<LI><img src="images/point.png" /><A href="">&nbsp;&nbsp;'.$row['menutitle'].'</A>');
						$strSub = "select * from menu where hormenu=1 and parent=".$row['menuid']." order by menuorder";
						$resultSub = mysql_query($strSub) or die(mysql_error());
						if(mysql_num_rows($resultSub)>0)
						{
							echo('<UL>');
							while($rowSub = mysql_fetch_array($resultSub))
							{
								echo('<LI><A title="" href="'.PageLink($rowSub['menutype'],$rowSub['menuid'],$rowSub['parent'],$rowSub['link'],$rowSub['loaivb'],$rowSub['faqloai']));
								echo('">'.$rowSub['menutitle'].'</A> </LI>'); 
							}
							echo('</UL>');
						}	
			echo('</LI>');			
		}
		else
		{
			/////////////////////////Cac muc chinh
					
				echo('<LI><img src="images/point.png" /><A title="" href="'.PageLink($row['menutype'],$row['menuid'],$row['parent'],$row['link'],$row['loaivb'],$row['faqloai']));
				echo('">'.$row['menutitle'].'</A> </LI>'); 
			
		}
	
	}
	echo('</UL></DIV>');
	mysql_free_result($result);
	
}

/*menu ngang bootstrap*/
function ShowHorMenu_Bootstrap()
{
// echo('<div class="block-menu">');
 
 echo('<div class="navbar-default" role="navigation">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span>Danh mục</span>
                
            </button>
           
           

        </div>
        <div class="collapse navbar-collapse">
           
            <ul class="nav navbar-nav navbar-left">');
   
 $str1="select * from menu where hormenu=1 and parent=0 order by menuorder";
 $result=mysql_query($str1) or
  die(mysql_error());
 
 while($row=mysql_fetch_array($result))
 {
  
   echo('<LI>');
   //level 1
   $strSub = "select * from menu where hormenu=1 and parent=".$row['menuid']." order by menuorder";
   $resultSub = mysql_query($strSub) or die(mysql_error());
   
   //Kiem tra muc ko lien ket
   if (mysql_num_rows($resultSub)>0)
   {
    echo('<A href="#" class="dropdown-toggle" data-toggle="dropdown">'.$row['menutitle'].'<b class="caret"></b></A>');
   }
   else
   {	   
		echo('<A title="" href="'.PageLink($row['menutype'],$row['menuid'],$row['parent'],$row['link'],$row['loaivb']).'">'.$row['menutitle'].'</A>');  
	   	
   }
      //level 1
      
      if(mysql_num_rows($resultSub)>0)
      {
       //echo('<div class="collapse" id="toggle'.$row['menuid'].'" style="height: 0px;">');
       echo('<ul class="dropdown-menu multi-level">');
       while($rowSub = mysql_fetch_array($resultSub))
       {
        
        //level 2
        $strSub2 = "select * from menu where hormenu=1 and parent=".$rowSub['menuid']." order by menuorder";
        $resultSub2 = mysql_query($strSub2) or die(mysql_error());
        //Kiem tra muc ko lien ket
        if (mysql_num_rows($resultSub2)>0)
        {
         echo('<LI class="dropdown-submenu">');
         echo('<A href="#" class="dropdown-toggle" data-toggle="dropdown">'.$rowSub['menutitle'].'</A>');
        }
        else
        {
         echo('<LI>');
         echo('<A title="" href="'.PageLink($rowSub['menutype'],$rowSub['menuid'],$rowSub['parent'],$rowSub['link'],$rowSub['loaivb']).'">'.$rowSub['menutitle'].'</A>');    
        }
        
        //level 2
        if(mysql_num_rows($resultSub2)>0)
        {
         //echo('<div class="collapse" id="toggleDemo" style="height: 0px;">');
         echo('<ul class="dropdown-menu">');
         while($rowSub2 = mysql_fetch_array($resultSub2))
         {
          echo('<LI>');
          //Kiem tra muc ko lien ket
          if (mysql_num_rows($resultSub2)>0) 
          {
           echo('<A href="#">'.$rowSub2['menutitle'].'</A>');
          }
          else
          {
           echo('<A title="" href="'.PageLink($rowSub2['menutype'],$rowSub2['menuid'],$rowSub2['parent'],$rowSub2['link'],$rowSub2['loaivb']).'">'.$rowSub2['menutitle'].'</A>');    
          }
          
          
          
          echo('</LI>'); 
         }
         echo('</UL>');
        } 
        //end level 2
        
        
        echo('</LI>'); 
       }
       echo('</UL>');
      } 
      //end level 1
   echo('</LI>');   
  
 
 }
 echo('</UL>');

 echo('</DIV></DIV>');
 //echo('</div>');
 mysql_free_result($result);
 
 
}


function ShowHorMenu_Bootstrap_2level()
{

 
// echo('<div class="block-menu">');
 
 echo('<div class="tm-menu">
      <a href="#menu-mobile" class="menu-mobile">Menu Mobile</a>
      <ul class="menu hidden-sm hidden-xs">');
   
 $str1="select * from menu where hormenu=1 and parent=0 order by menuorder";
 $result=mysql_query($str1) or
  die(mysql_error());
 
 while($row=mysql_fetch_array($result))
 {
  
   echo('<LI>');
   //level 1
   $strSub = "select * from menu where hormenu=1 and parent=".$row['menuid']." order by menuorder";
   $resultSub = mysql_query($strSub) or die(mysql_error());
   
   //Kiem tra muc ko lien ket
   if (mysql_num_rows($resultSub)>0)
   {
    echo('<A href="#" >'.$row['menutitle'].'</A>');
    
   }
   else
   {   
  echo('<A title="" href="'.PageLink($row['menutype'],$row['menuid'],$row['parent'],$row['link'],$row['loaivb']).'">'.$row['menutitle'].'</A>');  
     
   }
      //level 1
      
      if(mysql_num_rows($resultSub)>0)
      {
       //echo('<div class="collapse" id="toggle'.$row['menuid'].'" style="height: 0px;">');
       echo('<ul>');
       while($rowSub = mysql_fetch_array($resultSub))
       {
        
        //level 2
        $strSub2 = "select * from menu where hormenu=1 and parent=".$rowSub['menuid']." order by menuorder";
        $resultSub2 = mysql_query($strSub2) or die(mysql_error());
        //Kiem tra muc ko lien ket
        if (mysql_num_rows($resultSub2)>0)
        {
         echo('<LI >');
         echo('<A href="#">'.$rowSub['menutitle'].'</A>');
        }
        else
        {
         echo('<LI>');
         echo('<A title="" href="'.PageLink($rowSub['menutype'],$rowSub['menuid'],$rowSub['parent'],$rowSub['link'],$rowSub['loaivb']).'">'.$rowSub['menutitle'].'</A>');    
        }
        
        //level 2
        if(mysql_num_rows($resultSub2)>0)
        {
         //echo('<div class="collapse" id="toggleDemo" style="height: 0px;">');
         echo('<ul >');
         while($rowSub2 = mysql_fetch_array($resultSub2))
         {
          echo('<LI>');
          //Kiem tra muc ko lien ket
          if (mysql_num_rows($resultSub2)>0) 
          {
           echo('<A href="#">'.$rowSub2['menutitle'].'</A>');
          }
          else
          {
           echo('<A title="" href="'.PageLink($rowSub2['menutype'],$rowSub2['menuid'],$rowSub2['parent'],$rowSub2['link'],$rowSub2['loaivb']).'">'.$rowSub2['menutitle'].'</A>');    
          }
          
          
          
          echo('</LI>'); 
         }
         echo('</UL>');
        } 
        //end level 2
        
        
        echo('</LI>'); 
       }
       echo('</UL>');
      } 
      //end level 1
   echo('</LI>');   
  
 
 }
 echo('</UL>');

 echo('<div class="clear"></DIV></DIV>');
 //echo('</div>');
 mysql_free_result($result);
 
 
}

function ShowHorMenu_Bootstrap_2level_mobile()
{

 
// echo('<div class="block-menu">');
 
 echo('<nav id="menu-mobile">
      <ul>');
   
 $str1="select * from menu where hormenu=1 and parent=0 order by menuorder";
 $result=mysql_query($str1) or
  die(mysql_error());
 
 while($row=mysql_fetch_array($result))
 {
  
   echo('<LI>');
   //level 1
   $strSub = "select * from menu where hormenu=1 and parent=".$row['menuid']." order by menuorder";
   $resultSub = mysql_query($strSub) or die(mysql_error());
   
   //Kiem tra muc ko lien ket
   if (mysql_num_rows($resultSub)>0)
   {
    echo('<A href="#" >'.$row['menutitle'].'</A>');
    
   }
   else
   {   
  echo('<A title="" href="'.PageLink($row['menutype'],$row['menuid'],$row['parent'],$row['link'],$row['loaivb']).'">'.$row['menutitle'].'</A>');  
     
   }
      //level 1
      
      if(mysql_num_rows($resultSub)>0)
      {
       //echo('<div class="collapse" id="toggle'.$row['menuid'].'" style="height: 0px;">');
       echo('<ul>');
       while($rowSub = mysql_fetch_array($resultSub))
       {
        
        //level 2
        $strSub2 = "select * from menu where hormenu=1 and parent=".$rowSub['menuid']." order by menuorder";
        $resultSub2 = mysql_query($strSub2) or die(mysql_error());
        //Kiem tra muc ko lien ket
        if (mysql_num_rows($resultSub2)>0)
        {
         echo('<LI >');
         echo('<A href="#">'.$rowSub['menutitle'].'</A>');
        }
        else
        {
         echo('<LI>');
         echo('<A title="" href="'.PageLink($rowSub['menutype'],$rowSub['menuid'],$rowSub['parent'],$rowSub['link'],$rowSub['loaivb']).'">'.$rowSub['menutitle'].'</A>');    
        }
        
        //level 2
        if(mysql_num_rows($resultSub2)>0)
        {
         //echo('<div class="collapse" id="toggleDemo" style="height: 0px;">');
         echo('<ul >');
         while($rowSub2 = mysql_fetch_array($resultSub2))
         {
          echo('<LI>');
          //Kiem tra muc ko lien ket
          if (mysql_num_rows($resultSub2)>0) 
          {
           echo('<A href="#">'.$rowSub2['menutitle'].'</A>');
          }
          else
          {
           echo('<A title="" href="'.PageLink($rowSub2['menutype'],$rowSub2['menuid'],$rowSub2['parent'],$rowSub2['link'],$rowSub2['loaivb']).'">'.$rowSub2['menutitle'].'</A>');    
          }
          
          
          
          echo('</LI>'); 
         }
         echo('</UL>');
        } 
        //end level 2
        
        
        echo('</LI>'); 
       }
       echo('</UL>');
      } 
      //end level 1
   echo('</LI>');   
  
 
 }
 echo('</UL>');

 echo('</nav>');
 //echo('</div>');
 mysql_free_result($result);
 
 
}
?>
