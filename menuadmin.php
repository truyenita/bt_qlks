<?php
	session_start();
    error_reporting (E_ALL ^ E_NOTICE);
	include("function.php");
	include("dbconnect.php");
	if (strlen($_SESSION['user'])<1)
		header('Location:portal/login.php?id=2');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML 
xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/adminfunction.dwt" codeOutsideHTMLIsLocked="true" -->
<!-- InstanceBeginEditable name="CheckRole" -->
<?php
	if (isAdmin($_SESSION['user'])==0)  
		header('Location:portal/login.php?id=2');
?>
	<!-- InstanceEndEditable -->
<style type="text/css">
<!--
.style3 {
	color: #0099FF;
	font-weight: bold;
}
-->
</style>
<HEAD><TITLE><?php echo(getPara('title','value2'));?></TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8"><!-- page title will be changed depend on which module -->
<link rel="shortcut icon" href="image/favicon.ico"/>
<LINK href="default.css" type=text/css rel=stylesheet>
<LINK href="style.css" rel=stylesheet>


	<script type="text/javascript" src="datepicker.js"></script> 
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script> 
	<script type="text/javascript" src="ckfinder/ckfinder.js"></script>
	<script src="sample.js" type="text/javascript"></script> 
	<link href="sample.css" rel="stylesheet" type="text/css" /> 
	
<STYLE type=text/css>
#dropmenudiv {
	BORDER-RIGHT: #d4d4d4 1px solid; BORDER-TOP: #d4d4d4 1px solid; Z-INDEX: 100; BORDER-LEFT: #d4d4d4 1px solid; BORDER-BOTTOM: 0px; POSITION: absolute; BACKGROUND-COLOR: #ffffff
}
#dropmenudiv A {
	PADDING-RIGHT: 5px; DISPLAY: block; PADDING-LEFT: 5px; FONT-WEIGHT: bold; FONT-SIZE: 10px; PADDING-BOTTOM: 5px; WIDTH: 100%; COLOR: #666666; TEXT-INDENT: 5px; PADDING-TOP: 5px; BORDER-BOTTOM: #d4d4d4 1px solid; TEXT-DECORATION: none
}
#dropmenudiv A:hover {
	FONT-WEIGHT: bold; COLOR: #9d032a; BACKGROUND-COLOR: #efefef; TEXT-DECORATION: none
}
A.nav {
	FONT-WEIGHT: bold; COLOR: #666666; TEXT-DECORATION: none
}
A.nav:visited {
	FONT-WEIGHT: bold; COLOR: #666666; TEXT-DECORATION: none
}
A.nav:hover {
	COLOR: #9d032a; TEXT-DECORATION: none
}
</STYLE>


<META content="MSHTML 6.00.2900.2180" name=GENERATOR>
<link href="default.css" rel="stylesheet" type="text/css">
<link href="ita.css" rel="stylesheet" type="text/css">
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width=962 align=center border=0>
  <!--DWLayoutTable-->
  <TBODY>
  <TR>
    <TD width=36 height=36><IMG height=36 
      src="pic/table-0-tl.jpg" width=36></TD>
    <TD width="890" background=pic/table-0-bgr-top.jpg>&nbsp;</TD>
    <TD width=36 height=36><IMG height=36 
      src="pic/table-0-tr.jpg" width=36></TD></TR>
  <TR>
    <TD height="81" background=pic/table-0-bgr-left.jpg>&nbsp;</TD>
    <TD valign="top" bgColor=#ffffff>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <!--DWLayoutTable-->
        <TBODY>
          <TR>
            <TD background="pic/logo.jpg" width=650 height=81 valign="top"><!--DWLayoutEmptyCell-->&nbsp;</TD>
            <TD width=11>&nbsp;</TD>
            <TD width=229 vAlign=top>
              <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                <!--DWLayoutTable-->
                <TBODY>
                  <TR>
                    <TD width=229 height=8></TD>
                    </TR>
                  <TR>
                    <TD height=25 vAlign=top class="window_text_right">
                      <SCRIPT language=JavaScript>
							function tS(){ x=new Date(); x.setTime(x.getTime()); return x; } 
							function lZ(x){ return (x>9)?x:'0'+x; } 
							function tH(x){ if(x==0){ x=12; } return (x>12)?x-=12:x; } 
							function y2(x){ x=(x<500)?x+1900:x; return String(x).substring(0,4) } 
							function dT(){ if(fr==0){ fr=1; document.write('<span id="tP">'+eval(oT)+'</span>'); } tP.innerText=eval(oT); setTimeout('dT()',1000); } 
							function aP(x){ return (x>11)?'PM':'AM'; } 
							var dN=new Array('Chủ nhật','Thứ hai','Thứ ba','Thứ tư','Thứ năm','Thứ sáu','Thứ bảy'),mN=new Array('-01','-02','-03','-04','-05','-06','-07','-08','-09','-10','-11','-12'),fr=0,oT="'Hôm nay,'+' '+dN[tS().getDay()]+' ngày '+tS().getDate()+''+mN[tS().getMonth()]+'-'+y2(tS().getYear())+''";
						</SCRIPT>
                      
                      <SCRIPT language=JavaScript>dT();</SCRIPT>                </TD>
                    </TR>
                                   
                  <TR>
                    <TD height=48 vAlign=middle><center><IMG src="pic/login.jpg" 
                  width=29 height=24 align="middle">&nbsp;&nbsp;&nbsp;<a href="adm/admin/admin.php" class="navmiddle">Quản trị </a></center></TD>
                  </TR>
                  </TBODY>
              </TABLE></TD>
          </TR>
          </TBODY>
      </TABLE></TD>
     
    <TD 
background=pic/table-0-bgr-right.jpg>&nbsp;</TD></TR>
  </TBODY></TABLE>
<!-- #END# Header Section -->




<TABLE bgcolor="#FFFFFF" cellSpacing=0 cellPadding=0 width=962 height="300" align=center border=0><!--DWLayoutTable-->
  <TBODY>
  <TR>
    <TD width=34 rowspan="8" vAlign=top background=pic/table-0-bgr-left.jpg><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD width=25 height="10"></TD>
    <TD width=295></TD>
    <TD width=549></TD>
    <TD width=23></TD>
    <TD width=36 rowspan="8" vAlign=top background=pic/table-0-bgr-right.jpg><!--DWLayoutEmptyCell-->&nbsp;</TD>
  </TR>
  <TR>
    <TD height="5" colspan="4" valign="top"><table background="pic/line.jpg" width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="892" height="5"></td>
          </tr>
    </table></TD>
    </TR>
  <TR>
    <TD height="16"></TD>
    <TD></TD>
    <TD></TD>
    <TD></TD>
  </TR>
  <TR>
    <TD height="41"></TD>
    <TD valign="top"><table width="295" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td height="3" colspan="2" valign="top"><table background="pic/hline.jpg" width="295" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="295" height="3"></td>
                </tr>
          </table></td>
          </tr>
      <tr>
        <td width="52" height="29"><!-- InstanceBeginEditable name="EditRegion1" --><img src="pic/timetable.jpg"><!-- InstanceEndEditable --></td>
            <td width="243" valign="top" class="lefttitle"><!-- InstanceBeginEditable name="EditRegion2" -->Cập nhật menu<!-- InstanceEndEditable --></td>
          </tr>
      <tr>
        <td height="3" colspan="2" valign="top"><table background="pic/hline.jpg" width="295" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="295" height="3"></td>
                </tr>
          </table></td>
          </tr>
      
      
      
    </table></TD>
    <TD valign="middle"><div align="right" class="style3">Chào <?php echo($_SESSION['username']);?></div></TD>
    <TD></TD>
  </TR>
  <TR>
    <TD height="7"></TD>
    <TD></TD>
    <TD></TD>
    <TD></TD>
  </TR>
  <TR>
    <TD height="339"></TD>
    <TD colspan="2" valign="top"><!-- InstanceBeginEditable name="EditRegion3" -->
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="39" height="37">&nbsp;</td>
          <td width="591">&nbsp;</td>
          <td width="161" align="right" valign="middle"><div align="right"><img src="pic/add.jpg" align="middle">&nbsp;&nbsp;<a href="menuadminaddnew.php" class="nav">Thêm mới</a> </div></td>
          <td width="53">&nbsp;</td>
        </tr>
        <tr>
          <td height="26">&nbsp;</td>
          <td colspan="2" valign="top"><TABLE height=29 cellSpacing=0 cellPadding=0 
                  width="100%" align=center bgColor=#a6caf0 border=1 bordercolor="#a6caf0">
            <!--DWLayoutTable-->
            <TBODY>
              <TR>
              <TD width=10 height=27 align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">ID </TD>
                <TD width=182 height=27 align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">Tiêu đề menu </TD>
                    <TD width=40 align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">Thứ tự hiển thị </TD>
                    <TD width=100 align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">Loại menu </TD>
                    <TD width=70 align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">Menu dọc </TD>
                      <TD width=59 align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">HomePage </TD>
                    <td width="158" align="center" valign="middle" background=pic/bgbt.gif class="table_title">Cập nhật</td>
                </TR>
              
              
              <?php
					include("dbconnect.php");
					$mode=intval(mysql_real_escape_string($_REQUEST['mode'] ));
					$id=intval(mysql_real_escape_string($_REQUEST['id'])) ;
					//Xoa muc menu duoc chon
					if ($mode=='1')
					{
						$str1="delete from menu where menuid='". $id."'";
						$result=mysql_query($str1) or die(mysql_error());
						//mysql_free_result($result);
					}
					
					//Cap nhat muc menu duoc chon
					if ($mode=='2')
					{
						$menuid=intval(mysql_real_escape_string($_REQUEST['id']));
						$menutitle=mysql_real_escape_string($_REQUEST['menutitle']);
						$menutype=intval(mysql_real_escape_string($_REQUEST['menutype']));
						$parent=intval(mysql_real_escape_string($_REQUEST['parent']));
						$menuorder=intval(mysql_real_escape_string($_REQUEST['menuorder']));
						$vermenu=intval(mysql_real_escape_string($_REQUEST['vermenu']));
						$hormenu=intval(mysql_real_escape_string($_REQUEST['hormenu']));
						$homepage=intval(mysql_real_escape_string($_REQUEST['homepage']));
						$link=mysql_real_escape_string($_REQUEST['link']);
						$content=$_REQUEST['content'];
						//$loaivb=intval(mysql_real_escape_string($_REQUEST['loaivb']));
						if ($vermenu!=1) $vermenu=0;
						if ($hormenu!=1) $hormenu=0;
						if ($homepage!=1) $homepage=0;
						
						$str1="update menu set parent=".$parent.", menutitle='".$menutitle."', menutype=".$menutype.", menuorder=".$menuorder;
						$str1=$str1.",homepage=".$homepage.", vermenu=".$vermenu.", hormenu=".$hormenu.", link='".$link."', content='".$content."' where menuid=". $menuid;
						//echo($str1);
						$result=mysql_query($str1) or die(mysql_error());
					}						
					

					//Them moi 1 muc trong menu
					if ($mode=='3')
					{
						$menutitle=mysql_real_escape_string($_REQUEST['menutitle']);
						$menutype=intval(mysql_real_escape_string($_REQUEST['menutype']));
						$parent=intval(mysql_real_escape_string($_REQUEST['parent']));
						$menuorder=intval(mysql_real_escape_string($_REQUEST['menuorder']));
						$vermenu=intval(mysql_real_escape_string($_REQUEST['vermenu']));
						$hormenu=intval(mysql_real_escape_string($_REQUEST['hormenu']));
						$homepage=intval(mysql_real_escape_string($_REQUEST['homepage']));

						$link=mysql_real_escape_string($_REQUEST['link']);
						$content=$_REQUEST['content'];
						//$loaivb=intval(mysql_real_escape_string($_REQUEST['loaivb']));
						if ($vermenu!=1) $vermenu=0;
						if ($hormenu!=1) $hormenu=0;
						if ($homepage!=1) $homepage=0;
						$str1="insert into menu (menutitle,menutype,parent,menuorder,homepage,vermenu,hormenu,link,content) ";
						$str1=$str1." values ('".$menutitle."',".$menutype.",".$parent.",".$menuorder.",".$homepage.",".$vermenu.",".$hormenu.",'".$link."','".$content."')";
						//echo($str1);
						$result=mysql_query($str1) or die(mysql_error());
					}					
					
					
					//Khai báo mảng tên menu
					$arr_menu_type = array(0=>"Mục chính, trang chủ",
												1=>"Mục con, liên kết đến tin tức của 1 chủ đề",
												2=>"Mục con, liên đến đến 1 trang nội dung cục bộ",
												3=>"Mục chính, không có liên kết",
												4=>"Mục chính, liên kết ngoài",
												5=>"Mục chính, liên kết đến 1 trang nội dung cục bộ",
												6=>"Mục chính, trang văn bản pháp luật",
												//7=>"Mục chính, trang hỏi đáp",
												8=>"Mục chính, trang liên hệ",         
												//9=>"Mục chính, trang sơ đồ website",
												//10=>"Mục chính, trang danh mục các liên kết",
												//11=>"Mục chính, trang lịch công tác",  
												//12=>"Mục chính, trang danh bạ doanh nghiệp",
												//13=>"Mục con, liên kết đến trang tin tức RSS",
												14=>"Mục con, trang sản phẩm");
					
					//Hien thi cac muc cua menu
					$str1="select * from menu where parent=0 order by menuorder";
					$result=mysql_query($str1) or
						die(mysql_error());
					$i=0;	
					while ($row=mysql_fetch_array($result))
					{
						if ($i==0)
						{
							echo("<TR bgColor=#ffffff>");
							$i=1;
						}
						else
						{
							echo("<TR bgColor=#d2e9fb>");
							$i=0;
						}
						echo("<TD vAlign=center height=24>&nbsp;&nbsp;<b>".$row['menuid']."</b></TD>");						
						echo("<TD vAlign=center height=24>&nbsp;&nbsp;".$row['menutitle']."</TD>");
						echo("<TD vAlign=center>&nbsp;&nbsp;".$row['menuorder']."</TD>");
						echo("<TD vAlign=center align=middle><center>".$arr_menu_type[$row['menutype']]."</center></TD>");
						echo("<TD vAlign=center align=middle><center>".$row['vermenu']."</center></TD>");
						echo("<TD vAlign=center align=middle><center>".$row['homepage']."</center></TD>");
						echo("<TD vAlign=center align=middle><center><a href='menuadminupdate.php?mode=2&id=".$row['menuid']."'>Sửa</a>");
						echo("&nbsp;&nbsp;&nbsp;<a href='menuadmin.php?mode=1&id=".$row['menuid']."'>Xóa</a></center></TD></TR>");
						
						//Hien thi cac muc cua menu level 1
						$str1="select * from menu where parent=".$row['menuid']." order by menuorder";
						$result1=mysql_query($str1) or	die(mysql_error());							
						$level++;
						while ($row1=mysql_fetch_array($result1))
						{
							if ($i==0)
							{
								echo("<TR bgColor=#ffffff>");
								$i=1;
							}
							else
							{
								echo("<TR bgColor=#d2e9fb>");
								$i=0;
							}
							echo("<TD vAlign=center height=24>&nbsp;&nbsp;<b>".$row1['menuid']."</b></TD>");						
							echo("<TD vAlign=center height=24>&nbsp;&nbsp;|-".$row1['menutitle']."</TD>");
							echo("<TD vAlign=center width=20px>&nbsp;&nbsp;".$row1['menuorder']."</TD>");
							echo("<TD vAlign=center align=middle><center>".$arr_menu_type[$row1['menutype']]."</center></TD>");
							echo("<TD vAlign=center align=middle><center>".$row1['vermenu']."</center></TD>");
							echo("<TD vAlign=center align=middle><center>".$row1['homepage']."</center></TD>");
							echo("<TD vAlign=center align=middle><center><a href='menuadminupdate.php?mode=2&id=".$row1['menuid']."'>Sửa</a>");
						echo("&nbsp;&nbsp;&nbsp;<a href='menuadmin.php?mode=1&id=".$row1['menuid']."'>Xóa</a></center></TD></TR>");
							
							//Hien thi cac muc cua menu level 2
							$str2="select * from menu where parent=".$row1['menuid']." order by menuorder";
							$result2=mysql_query($str2) or	die(mysql_error());							
							$level++;
							while ($row2=mysql_fetch_array($result2))
							{
								if ($i==0)
								{
									echo("<TR bgColor=#ffffff>");
									$i=1;
								}
								else
								{
									echo("<TR bgColor=#d2e9fb>");
									$i=0;
								}	
								echo("<TD vAlign=center height=24>&nbsp;&nbsp;<b>".$row2['menuid']."</b></TD>");					
								echo("<TD vAlign=center height=24>&nbsp;&nbsp;<i>|--".$row2['menutitle']."</i></TD>");
								echo("<TD vAlign=center width=20px>&nbsp;&nbsp;".$row2['menuorder']."</TD>");
								echo("<TD vAlign=center align=middle><center>".$arr_menu_type[$row2['menutype']]."</center></TD>");
								echo("<TD vAlign=center align=middle><center>".$row2['vermenu']."</center></TD>");
								echo("<TD vAlign=center align=middle><center>".$row2['homepage']."</center></TD>");
								echo("<TD vAlign=center align=middle><center><a href='menuadminupdate.php?mode=2&id=".$row2['menuid']."'>Sửa</a>");
								echo("&nbsp;&nbsp;&nbsp;<a href='menuadmin.php?mode=1&id=".$row2['menuid']."' onClick='return doConfirm()'>Xóa</a></center></TD></TR>");
								
							}
							mysql_free_result($result2);
							//end level 2
						}
						mysql_free_result($result1);
						//end level 1
					}
					mysql_free_result($result);
				?>
              </TBODY>
          </TABLE></td>
          <td>&nbsp;</td>
        </tr>
		<tr><td height="20">
		</tr>
      </table>
    <!-- InstanceEndEditable --></TD>
    <TD>&nbsp;</TD>
  </TR>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  

  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <TR>
    <TD height="5" colspan="4" valign="top"><table background="pic/line.jpg" width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="892" height="5"></td>
          </tr>
    </table></TD>
    </TR>
  <TR>
    <TD height="7"></TD>
    <TD></TD>
    <TD></TD>
    <TD></TD>
  </TR>
  </TBODY></TABLE>




<!-- #BEGIN# Footer Section -->
<TABLE cellSpacing=0 cellPadding=0 width=962 align=center border=0>
  <TBODY>
  <TR>
    <TD background=pic/table-0-bgr-left.jpg>&nbsp;</TD>
    <TD bgColor=#ffffff>
      <TABLE height=60 cellSpacing=0 cellPadding=0 width="890" border=0>
        <!--DWLayoutTable-->
        <TBODY>
        <TR>
          <TD width="448" height=60 valign="middle"><div align="left" class="window_text_left_blue">
		  <?php
		 include("dbconnect.php"); 
	$str1="select value3 from options where name='leftfooter'";
	$result=mysql_query($str1) or
		die(mysql_error());
	$row=mysql_fetch_array($result);
	echo($row['value3']);
	mysql_free_result($result);
?>
</div></TD>
          <TD width="442" valign="middle"><div align="right" class="window_text_right_blue">
		  <?php
	$str1="select value3 from options where name='rightfooter'";
	$result=mysql_query($str1) or
		die(mysql_error());
	$row=mysql_fetch_array($result);
	echo($row['value3']);
	mysql_free_result($result);
?>
          </div></TD>
        </TR>
        </TBODY></TABLE></TD>
    <TD background=pic/table-0-bgr-right.jpg>&nbsp;</TD></TR>
  <TR>
    <TD width=36 height=36><IMG height=36 
      src="pic/table-0-bl.jpg" width=36></TD>
    <TD background=pic/table-0-bgr-bottom.jpg>&nbsp;</TD>
    <TD width=36 height=36><IMG height=36 
      src="pic/table-0-br.jpg" width=36></TD></TR></TBODY></TABLE><!-- #END# Footer Section --></BODY><!-- InstanceEnd --></HTML>
