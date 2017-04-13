<?php
	//session_start();
	include("../function.php");
	include("../dbconnect.php");  
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.0 Transitional//EN">
<HTML 
xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/login.dwt" codeOutsideHTMLIsLocked="true" -->

<HEAD><TITLE><?php echo(getPara('title','value2'));?></TITLE>
<META http-equiv=Content-Type content="text/html; charset=utf-8"><!-- page title will be changed depend on which module -->
<link rel="shortcut icon" href="../pic/ita.ico"/>
<LINK href="../default.css" type=text/css rel=stylesheet>
<LINK href="../style.css" rel=stylesheet>

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
<link href="../default.css" rel="stylesheet" type="text/css">
<link href="../ita.css" rel="stylesheet" type="text/css">
<style type="text/css">
<!--
.style3 {
	color: #FF0000;
	font-weight: bold;
}
-->
</style>
</HEAD>
<BODY>
<TABLE cellSpacing=0 cellPadding=0 width=962 align=center border=0>
  <!--DWLayoutTable-->
  <TBODY>
  <TR>
    <TD width=36 height=36><IMG height=36 
      src="../pic/table-0-tl.jpg" width=36></TD>
    <TD width="890" background=../pic/table-0-bgr-top.jpg>&nbsp;</TD>
    <TD width=36 height=36><IMG height=36 
      src="../pic/table-0-tr.jpg" width=36></TD></TR>
  <TR>
    <TD height="81" background=../pic/table-0-bgr-left.jpg>&nbsp;</TD>
    <TD valign="top" bgColor=#ffffff>
      <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
        <!--DWLayoutTable-->
        <TBODY>
          <TR>
            <TD background="../pic/logo.jpg" width=650 height=81 valign="top"><!--DWLayoutEmptyCell-->&nbsp;</TD>
            <TD width=11>&nbsp;</TD>
            <TD width=229 vAlign=top>
              <TABLE cellSpacing=0 cellPadding=0 width="100%" border=0>
                <!--DWLayoutTable-->
                <TBODY>
                  <TR>
                    <TD width=109 height=8></TD>
                    <TD width=120></TD>
                  </TR>
                  <TR>
                    <TD height=25 colSpan=2 vAlign=top class="window_text_right">
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
                    <TD height=48 vAlign=middle><div align="right"><IMG height=24 src="../pic/login.jpg" 
                  width=29></div></TD>
                      <TD vAlign=middle class="login"><a href="../index.php" class="nav">&nbsp;&nbsp;Trang chủ</a></TD>
                  </TR>
                  </TBODY>
              </TABLE></TD>
          </TR>
          </TBODY>
      </TABLE></TD>
    <TD 
background=../pic/table-0-bgr-right.jpg>&nbsp;</TD></TR>
  </TBODY></TABLE>
<!-- #END# Header Section -->




<TABLE bgcolor="#FFFFFF" cellSpacing=0 cellPadding=0 width=962 height="300" align=center border=0><!--DWLayoutTable-->
  <TBODY>
  <TR>
    <TD width=34 rowspan="9" vAlign=top background=../pic/table-0-bgr-left.jpg><!--DWLayoutEmptyCell-->&nbsp;</TD>
    <TD width=267 height="10"></TD>
    <TD width=359></TD>
    <TD width=266></TD>
    <TD width=36 rowspan="9" vAlign=top background=../pic/table-0-bgr-right.jpg><!--DWLayoutEmptyCell-->&nbsp;</TD>
  </TR>
  <TR>
    <TD height="5" colspan="3" valign="top"><table background="../pic/line.jpg" width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="892" height="5"></td>
          </tr>
    </table></TD>
    </TR>
  <TR>
    <TD height="83">&nbsp;</TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
  </TR>
  <TR>
    <TD height="180">&nbsp;</TD>
    <TD valign="top">
	
	
	
	
	      <SCRIPT language=JavaScript type=text/JavaScript>
					<!--
					function openinthiswindow(url){
						window.location = url;
						return false;
					}
					
					function Check()
					{
						if(document.form.txtName.value=="")
						{
							alert("Ban chua nhap ten dang nhap!");
							document.form.txtName.focus();
							return false;
						}
						if(document.form.txtPassword.value=="")
						{
							alert("Ban chua nhap mat khau!");
							document.form.txtPassword.focus();
							return false;
						}
					}
					
					//-->
					</SCRIPT>
	
	
	<form name=form action=control.php method=post>
	
	
	  <TABLE style="BORDER-COLLAPSE: collapse" cellSpacing=0 cellPadding=0 
            width=359 align=center border=0>
	    <!--DWLayoutTable-->
	    <TBODY>
	      <TR>
	        <TD vAlign=top width=20 background=../pic/gybd.gif 
                bgColor=#f4f8ff height=20><IMG height=20 
                  src="../pic/trentrai.gif" width=20></TD>
              <TD vAlign=top width=317 background=../pic/gybd.gif 
                bgColor=#f4f8ff></TD>
              <TD vAlign=top width=19 background=../pic/gybd.gif 
                bgColor=#f4f8ff><IMG height=19 src="../pic/trenphai.gif" 
                  width=19></TD>
            <TD width=3></TD></TR>
	      <TR>
	        <TD vAlign=top background=../pic/gybd.gif bgColor=#f4f8ff 
                colSpan=3 height=95>
	          <CENTER>
	            <TABLE id=AutoNumber1 style="BORDER-COLLAPSE: collapse" 
                  borderColor=#111111 height=78 cellSpacing=0 cellPadding=3 
                  width=318 border=0><!--DWLayoutTable-->
	              <TBODY>
	                <TR>
	                  <TD vAlign=top colSpan=2 height=28>
	                    <DIV align=center><STRONG><FONT color=#0066ff>ĐĂNG 
                        NHẬP</FONT></STRONG></DIV></TD></TR>
	                	                <TR>
	                  <TD width=105 height=28 vAlign=middle><FONT 
                        color=#003399>Tên đăng nhập</FONT></TD>
                        <TD width=201 align=left vAlign=middle>
                          <DIV align=center><INPUT 
                        name="ijud7" type=text id=txtName size=25 maxlength="30"> 
                          </DIV></TD>
                      </TR>
	                <TR>
	                  <TD height=28 vAlign=middle><FONT 
                        color=#003399>Mật khẩu</FONT></TD>
                        <TD align=left vAlign=middle>
                          <DIV align=center><INPUT 
                        name="dieju8" type="password" autocomplete='off' id=txtPassword size=25 maxlength="30"> 
                          </DIV></TD>
                    </TR>

	                <TR>
	                  <TD height=28 vAlign=middle></TD>
                        <TD align=left vAlign=middle><center><img src="../visual-captcha.php" width='150' height='50' alt='ITA CAPTCHA' /></center></TD>
                    </TR>
	                <TR>
	                  <TD height=28 vAlign=middle><FONT 
                        color=#003399>Mã xác nhận </FONT></TD>
                        <TD align=left vAlign=middle>
                          <DIV align=center><INPUT 
                        name="user_code_ita" type=text id="user_code_ita" size=25 maxlength="30"> 
                          </DIV></TD>
                    </TR>					
	                <tr>
	                  <td height="0"></td>
	                  <td></td>
	                  </tr>
	              </TBODY></TABLE>
	            <BR></CENTER></TD>
            <TD></TD></TR>
	      <TR>
	        <TD height=45 
                colSpan=3 vAlign=top background=../pic/gybd.gif bgColor=#f4f8ff>
	          <CENTER>
	            <BR>
	            <TABLE cellSpacing=0 cellPadding=0 width=140 border=0>
	              <TBODY>
	                <TR>
	                  <TD>
	                    <DIV align=center><INPUT style="CURSOR: hand" onClick="return Check();" type=submit value="   OK   " name=Submit> 
	                      </DIV></TD>
                        <TD>
                          <DIV align=center><INPUT class=imageSubmit2 style="CURSOR: hand" type=reset value="   Xóa   " name=Submit2> 
                          </DIV></TD>		
                        </TR></TBODY></TABLE>
                </CENTER></TD>
            <TD></TD></TR>
	      
	      <tr>
	        <TD rowspan="2" vAlign=top background=../pic/gybd.gif bgColor=#f4f8ff><IMG height=20 src="../pic/duoitrai.gif" 
                  width=20></TD>
              <TD rowspan="2" align="center" vAlign="top" background="../pic/gybd.gif" bgColor=#f4f8ff>
   				</TD>
              <TD height="19" vAlign=top background=../pic/gybd.gif 
                  bgColor=#f4f8ff><IMG height=19 src="../pic/duoiphai.gif" 
                  width=19></TD>
              <td></td>
            </tr>
	      <tr>
	        <TD height="1"></TD>
	        <td></td>
	        </tr>
	      </TBODY>
      </TABLE>
	  </form>	  </TD>
    <TD>&nbsp;</TD>
  </TR>
  <TR>
    <TD height="21">&nbsp;</TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
  </TR>
  <TR>
    <TD height="21">&nbsp;</TD>
    <TD valign="top" class="error">
	
	  <div align="center" class="style3">
          <?php
					$id=$_REQUEST['id'];
					switch ($id)
					{
						case 1:
								echo('Đăng nhập không thành công!');
								break;
						case 2:
								echo('Bạn không có quyền sử dụng chức năng này!<br>Vui lòng liên hệ với quản trị website');
								break;					
					}
					
				?>
				
				&nbsp;</div></TD>
    <TD>&nbsp;</TD>
  </TR>
  <TR>
    <TD height="68">&nbsp;</TD>
    <TD>&nbsp;</TD>
    <TD>&nbsp;</TD>
  </TR>
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  
  <TR>
    <TD height="5" colspan="3" valign="top"><table background="../pic/line.jpg" width="100%" border="0" cellpadding="0" cellspacing="0">
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
  </TR>
  </TBODY></TABLE>




<!-- #BEGIN# Footer Section -->
<TABLE cellSpacing=0 cellPadding=0 width=962 align=center border=0>
  <TBODY>
  <TR>
    <TD background=../pic/table-0-bgr-left.jpg>&nbsp;</TD>
    <TD bgColor=#ffffff>
      <TABLE height=60 cellSpacing=0 cellPadding=0 width="890" border=0>
        <!--DWLayoutTable-->
        <TBODY>
        <TR>
          <TD width="448" height=60 valign="middle"><div align="left" class="window_text_left_blue">
		  <?php
		  include("..\dbconnect.php");
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
    <TD background=../pic/table-0-bgr-right.jpg>&nbsp;</TD></TR>
  <TR>
    <TD width=36 height=36><IMG height=36 
      src="../pic/table-0-bl.jpg" width=36></TD>
    <TD background=../pic/table-0-bgr-bottom.jpg>&nbsp;</TD>
    <TD width=36 height=36><IMG height=36 
      src="../pic/table-0-br.jpg" width=36></TD></TR></TBODY></TABLE><!-- #END# Footer Section --></BODY><!-- InstanceEnd --></HTML>
