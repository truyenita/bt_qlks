<?php
	session_start();  
	include("../../function.php");
	include("../../dbconnect.php");
	if (strlen($_SESSION['user'])<1)
		header('Location:../login.php?id=2');
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">

<HTML 
xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/admin.dwt" codeOutsideHTMLIsLocked="true" -->
<style type="text/css">
<!--
.style3 {color: #3366FF}
-->
</style><HEAD><TITLE><?php echo(getPara('title','value2'));?></TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8"><!-- page title will be changed depend on which module -->
<link rel="shortcut icon" href="../../image/favicon.ico"/>
<LINK href="../../default.css" type=text/css rel=stylesheet>
<LINK href="../../style.css" rel=stylesheet>

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
<link href="../../default.css" rel="stylesheet" type="text/css">
<link href="../../ita.css" rel="stylesheet" type="text/css"></HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width=962 align=center border=0>
  <!--DWLayoutTable-->
  <TBODY>
  <TR>
    <TD width=36 height=36><IMG height=36 
      src="../../pic/table-0-tl.jpg" width=36></TD>
    <TD width="890" background=../../pic/table-0-bgr-top.jpg>&nbsp;</TD>
    <TD width=36 height=36><IMG height=36 
      src="../../pic/table-0-tr.jpg" width=36></TD></TR>
  <TR>
    <TD height="81" background=../../pic/table-0-bgr-left.jpg>&nbsp;</TD>
    <TD valign="top" bgColor=#ffffff>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <!--DWLayoutTable-->
        <TBODY>
          <TR>
            <TD background="../../pic/logo.jpg" width=650 height=81 valign="top"><!--DWLayoutEmptyCell-->&nbsp;</TD>
            <TD width=11>&nbsp;</TD>
            <TD width=229 vAlign=top>
              <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                <!--DWLayoutTable-->
                <TBODY>
                  <TR>
                    <TD width=229 height=8></TD>
                    </TR>
                  <TR>
                    <TD height=25 vAlign=middle class="window_text_right">
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
                    <TD height=48 align="center" vAlign=middle class="login"><center>
                      <IMG src="../../pic/login.jpg" 
                  width=29 height=24 align="middle">&nbsp;&nbsp;&nbsp;<a href="../../updatedb.php?action=7" class="navmiddle">Đăng xuất </a>
                    </center></TD>
                  </TR>
                  </TBODY>
              </TABLE></TD>
          </TR>
          </TBODY>
      </TABLE></TD>
    <TD 
background=../../pic/table-0-bgr-right.jpg>&nbsp;</TD></TR>
  </TBODY></TABLE>
<!-- #END# Header Section -->




<TABLE bgcolor="#FFFFFF" cellSpacing=0 cellPadding=0 width=962 height="417" align=center border=0><!--DWLayoutTable-->
  <TBODY>
  <TR>
    <TD width=34 rowspan="15" vAlign=top background=../../pic/table-0-bgr-left.jpg><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD width=25 height="10"></TD>
    <TD width=52></TD>
    <TD width=228></TD>
    <TD width=15></TD>
    <TD width=37></TD>
    <TD width=228></TD>
    <TD width=52></TD>
    <TD width=228></TD>
    <TD width=27></TD>
    <TD width=36 rowspan="15" vAlign=top background=../../pic/table-0-bgr-right.jpg><!--DWLayoutEmptyCell-->&nbsp;</TD>
  </TR>
  <TR>
    <TD height="5" colspan="9" valign="top"><table background="../../pic/line.jpg" width="100%" border="0" cellpadding="0" cellspacing="0">
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
    <TD></TD>
    <TD></TD>
    <TD></TD>
    <TD></TD>
    <TD></TD>
  </TR>
  <TR>
    <TD height="41"></TD>
    <TD colspan="3" valign="top"><table width="295" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td height="3" colspan="2" valign="top"><table background="../../pic/hline.jpg" width="295" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="295" height="3"></td>
                </tr>
          </table></td>
          </tr>
      <tr>
        <td width="52" height="29"><!-- InstanceBeginEditable name="EditRegion1" --><img src="../../pic/qtm.jpg"><!-- InstanceEndEditable --></td>
            <td width="243" valign="top" class="lefttitle"><!-- InstanceBeginEditable name="EditRegion2" -->Trang quản trị hệ thống <!-- InstanceEndEditable --></td>
          </tr>
      <tr>
        <td height="3" colspan="2" valign="top"><table background="../../pic/hline.jpg" width="295" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="295" height="3"></td>
                </tr>
          </table></td>
          </tr>
      
      
      
    </table></TD>
    <TD></TD>
    <TD></TD>
    <TD colspan="2" valign="middle"><div align="right"><strong><span class="style3">Chào <?php echo($_SESSION['username']);?></span></strong></div></TD>
    <TD></TD>
  </TR>
  <TR>
    <TD height="32"></TD>
    <TD><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD colspan="2"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD></TD>
  </TR>
  <TR>
    <TD height="35"></TD>
    <TD align="center" valign="middle"><div align="center"><img src="../../pic/home.jpg" width="29" height="24"></div></TD>
    <TD align="left" valign="middle">
	<?php 
	if (updateAd($_SESSION['user'])==1)
	{
		echo("<a href='../../adadmin.php' class='nav");
		echo(template());
		echo("'>Quản lý quảng cáo</a>"); 
	}
	else
	{
	?>
	Quản lý quảng cáo
	<?php
	}
	?>	</TD>
    <TD colspan="2" align="center" valign="middle"><img src="../../pic/doitac.jpg" alt="" width="52" height="33"></TD>
    <TD align="left" valign="middle"><?php 
	if (updateImageList($_SESSION['user'])==1)
	{
		echo("<a href='../../imagelistadmin.php' class='nav");
		echo(template());
		echo("'>Cập nhật hình ảnh hoạt động</a>"); 
	}
	else
	{
	?>
Cập nhật hình ảnh hoạt động
  <?php
	}
	?></TD>
    <TD align="center" valign="middle"><img src="../../pic/faq.jpg" width="52" height="29"></TD>
    <TD align="left" valign="middle"><?php 
	if (isAdmin($_SESSION['user'])==1)
	{
		echo("<a href='../../useradmin.php' class='nav");
		echo(template());
		echo("'>Quản lý người dùng</a>"); 
	}
	else
	{
	?>
Quản lý người dùng
  <?php
	}
	?></TD>
    <TD>&nbsp;</TD>
  </TR>
  
  <TR>
    <TD height="35"></TD>
    <TD align="left" valign="middle"><div align="center"><img src="../../pic/notice.jpg" width="52" height="29"></div></TD>
    <TD align="left" valign="middle"><!-- InstanceBeginEditable name="EditRegion4" -->
    <?php 
	if (updateNews($_SESSION['user'])==1)
	{
		echo("<a href='../../newsadmin.php' class='nav");
		echo(template());
		echo("'>Cập nhật tin tức </a>"); 
		//Hien thi thong bao co tin moi cho user co quyen duyet tin
		if (newsApproval($_SESSION['user'])==1)
		{
			$str0="select count(newsid) as sumnew from news where approval=0";
			$result0=mysql_query($str0) or die(mysql_error());
			$row0= mysql_fetch_array($result0);
			if ($row0['sumnew']>0)
			{
				echo("<img src='../../image/new.gif'>");
			}
			mysql_free_result($result0);
		}
	}
	else
	{
	?>
Cập nhật tin tức
<?php
	}
	?>
    <!-- InstanceEndEditable --></TD>
    <TD colspan="2" align="center" valign="middle"><img src="../../pic/doitac.jpg" width="52" height="33"></TD>
    <TD align="left" valign="middle"><span class="nav">
      <?php 
	if (isAdmin($_SESSION['user'])==1)
	{
		echo("<a href='../../parameterupdate.php' class='nav");
		echo(template());
		echo("'>Cập nhật các tham số </a>"); 
	}
	else
	{
	?>
Cập nhật các tham số
<?php
	}
	?>
    </span></TD>
    <TD align="center" valign="middle"><img src="../../pic/contacct.jpg" width="52" height="29"></TD>
    <TD align="left" valign="middle"><a href="../../passwordupdate.php" class="nav<?php echo(template());?>">Đổi mật khẩu </a></TD>
    <TD>&nbsp;</TD>
  </TR>
  <TR>
    <TD height="35"></TD>
    <TD align="center" valign="middle"><img src="../../pic/notice.jpg" alt="" width="52" height="29"></TD>
    <TD align="left" valign="middle">
	<?php 
	if (isAdmin($_SESSION['user'])==1)
	{
		echo("<a href='../../menuadmin.php' class='nav");
		echo(template());
		echo("'>Cập nhật menu</a>"); 
	}
	else
	{
	?>
	Cập nhật menu
	<?php
	}
	?>	</TD>
    <TD colspan="2" align="center" valign="middle"><img src="../../pic/doitac.jpg" alt="" width="52" height="33"></TD>
    <TD align="left" valign="middle"><?php 
	if (isAdmin($_SESSION['user'])==1)
	{
		echo("<a href='../../albumimagelist.php' class='nav");
		echo(template());
		echo("'>Cập nhật Album</a>"); 
	}
	else
	{
	?>
Cập nhật Album
  <?php
	}
	?>&nbsp;</TD>
    <TD align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD align="left" valign="middle"></TD>
    <TD>&nbsp;</TD>
  </TR>
  <TR>
    <TD height="35"></TD>
    <TD align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD align="left" valign="middle"></TD>
    <TD colspan="2" align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD align="left" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD align="center" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD align="left" valign="middle" class="nav"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD>&nbsp;</TD>
  </TR>
  <TR>
    <TD height="35"></TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    
	<TD colspan="2" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
	<TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD></TD>
  </TR>
  <TR>
    <TD height="35"></TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD colspan="2" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD></TD>
  </TR>
  <TR>
    <TD height="35"></TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
	
	
	
    <TD colspan="2" valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD></TD>
  </TR>
  
  <TR>
    <TD height="28"></TD>
    <TD valign="middle"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD colspan="2"><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD>	  </TD>
    <TD><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD></TD>
  </TR>
  <tr>
  <TD height="27"></TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
    <TD></TD>
  </tr>
  
  <TR>
    <TD height="5" colspan="9" valign="top"><table background="../../pic/line.jpg" width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="892" height="5"></td>
          </tr>
    </table></TD>
    </TR>
  
</TBODY></TABLE>




<!-- #BEGIN# Footer Section -->
<TABLE cellSpacing=0 cellPadding=0 width=962 align=center border=0>
  <TBODY>
  <TR>
    <TD background=../../pic/table-0-bgr-left.jpg>&nbsp;</TD>
    <TD bgColor=#ffffff>
      <TABLE height=60 cellSpacing=0 cellPadding=0 width="890" border=0>
        <!--DWLayoutTable-->
        <TBODY>
        <TR>
          <TD width="448" height=60 valign="middle"><div align="left" class="window_text_left_blue">
		  <?php
		  include("..\..\dbconnect.php");
		$str1="select value3 from options where name='leftfooter'";
		$result=mysql_query($str1) or
			die(mysql_error());
		$row=mysql_fetch_array($result);
		echo($row['value3']);
		mysql_free_result($result);
?>
		  </div></TD>
          <TD width="442" valign="middle"><div align="right" class="window_text_right_blue"> <?php
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
    <TD background=../../pic/table-0-bgr-right.jpg>&nbsp;</TD></TR>
  <TR>
    <TD width=36 height=36><IMG height=36 
      src="../../pic/table-0-bl.jpg" width=36></TD>
    <TD background=../../pic/table-0-bgr-bottom.jpg>&nbsp;</TD>
    <TD width=36 height=36><IMG height=36 
      src="../../pic/table-0-br.jpg" width=36></TD></TR></TBODY></TABLE><!-- #END# Footer Section --></BODY><!-- InstanceEnd --></HTML>
