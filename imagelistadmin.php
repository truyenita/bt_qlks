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
	if (updateAd($_SESSION['user'])==0)  
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
        <td width="52" height="29"><!-- InstanceBeginEditable name="EditRegion1" --><img src="pic/timetable.jpg">

		<!-- InstanceEndEditable --></td>
            <td width="243" valign="top" class="lefttitle"><!-- InstanceBeginEditable name="EditRegion2" -->Cập nhật hình ảnh hoạt động <!-- InstanceEndEditable --></td>
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
          <td width="40" height="37">&nbsp;</td>
          <td width="590">&nbsp;</td>
          <td width="161" align="right" valign="middle"><div align="right"><img src="pic/add.jpg" align="middle">&nbsp;&nbsp;<a href="imagelistaddnew.php" class="nav">Thêm mới</a> </div></td>
          <td width="53">&nbsp;</td>
        </tr>
        <tr>
          <td height="29">&nbsp;</td>
          <td colspan="2" valign="top"><TABLE class="deco" height=29 cellSpacing=0 cellPadding=0 
                  width="100%" align=center bgColor=#a6caf0 border=1 bordercolor="#a6caf0">
            <!--DWLayoutTable-->
            <TBODY>
              <TR>
                <TD width=141 height=27 align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">STT</TD>
                    <TD width=444 align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">Chú thích ảnh </TD>
                    <td width="158" align="center" valign="middle" background=pic/bgbt.gif class="table_title">Cập nhật</td>
                  </TR>
              
              
              <?php
					include("dbconnect.php");
					$mode=intval(mysql_real_escape_string($_REQUEST['mode'])) ;
					$id=intval(mysql_real_escape_string($_REQUEST['id'])) ;
					//Xoa anh duoc chon
					if ($mode=='1')
					{
						$str1="delete from imagelist where imageid=". $id;
						$result=mysql_query($str1) or die(mysql_error());
						//mysql_free_result($result);
					}
					
					//Cap nhat anh duoc chon
					if ($mode=='2')
					{
						$imageid=intval(mysql_real_escape_string($_REQUEST['id']));
						$file=mysql_real_escape_string($_REQUEST['file']);
						$title=mysql_real_escape_string($_REQUEST['title']);
						
						$str1="update imagelist set title='".$title."', file='".$file."' where imageid=". $imageid;
						//echo($str1);
						$result=mysql_query($str1) or die(mysql_error());
					}						
					

					//Them 01 anh
					if ($mode=='3')
					{
						$title=mysql_real_escape_string($_REQUEST['title']);
						$file=mysql_real_escape_string($_REQUEST['file']);
						$str1="insert into imagelist(title,file) ";
						$str1=$str1." values ('".$title."','".$file."')";
						//echo($str1);
						$result=mysql_query($str1) or die(mysql_error());
					}					
					
					
					//Hien thi danh sach anh hoat dong
					$str1="select * from imagelist order by imageid desc";
					$result=mysql_query($str1) or
						die(mysql_error());
					$i=0;
					$tt=1;	
					$c=0;
					RecordsIgnore($row,$result);
					while ($row=mysql_fetch_array($result))
					{
						$c++;
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
						echo("<TD vAlign=center align=middle height=24><center>".$tt."</center></TD>");
						echo("<TD vAlign=left align=middle>".$row['title']."</TD>");
						echo("<TD vAlign=center align=middle><center><a href='imagelistupdate.php?mode=2&id=".$row['imageid']."'>Sửa</a>");
						echo("&nbsp;&nbsp;&nbsp;<a href='imagelistadmin.php?mode=1&id=".$row['imageid']."'>Xóa</a></center></TD></TR>");
						$tt++;
						if ($c==getPara('recordsperpage','value1')) break;
					}
					mysql_free_result($result);
				?>
              </TBODY>
          </TABLE></td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="20">&nbsp;</td>
          <td colspan="2" valign="middle">
		  <?php
		  	$selectcountsql="select count(*) as sumrecords from imagelist order by imageid desc";
			ShowPageBreak($selectcountsql,"imagelistadmin.php");
		  ?>
		  </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
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
