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
<style type="text/css">

 table.MsoNormalTable
	{font-size:10.0pt;
	font-family:"Times New Roman","serif";
        }
 p.MsoNormal
	{margin-bottom:.0001pt;
	font-size:12.0pt;
	font-family:"Times New Roman","serif";
	        margin-left: 0in;
            margin-right: 0in;
            margin-top: 0in;
        }
    table.MsoTableGrid
	{border:solid windowtext 1.0pt;
	font-size:10.0pt;
	font-family:"Times New Roman","serif";
        }
    </style>
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
        <td width="52" height="29"><!-- InstanceBeginEditable name="EditRegion1" --><!-- InstanceEndEditable --></td>
            <td width="243" valign="top" class="lefttitle"><!-- InstanceBeginEditable name="EditRegion2" -->Thống kê<!-- InstanceEndEditable --></td>
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
      <?php
				include("dbconnect.php");	
				$str1="select sum(`11`) as 11_1, sum(`12`) as 12_1,sum(`13`) as 13_1,sum(`21`) as 21_2, sum(`22`) as 22_2,sum(`23`) as 23_2,sum(`31`) as 31_3, sum(`32`) as 32_3,sum(`33`) as 33_3,sum(`41`) as 41_4, sum(`42`) as 42_4,sum(`43`) as 43_4,group_concat(`44` separator '. ') as `44`
				 from tbl_vote ";
				$result=mysql_query($str1) or die(mysql_error());
				
				while($row = mysql_fetch_array($result))
				{
				?>
      <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr><td><div align="center"><span class="style4 style3"><strong>Ý KIẾN CỦA NGƯỜI DÂN</strong></span></div></td>
        </tr>
        <tr>
          <td><p class="MsoNormal">
        <![if !supportLists]><b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-bidi-font-size:
12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
        <span style="mso-list:Ignore">1.<span 
            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span></span></span></b><![endif]><b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-bidi-font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR">Thái độ của CBNV Sở Lao động Thương binh và Xã hội</span></b><span 
            lang="FR" style="mso-bidi-font-size:12.0pt;mso-ansi-language:FR"> </span>
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-bidi-font-size:
12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
        đối với Đơn vị/ Ông/ Bà<o:p></o:p></span></b></p>
    <p class="MsoNormal">
        <span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR"><o:p>
        &nbsp;</o:p></span><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">1/ Tốt/ Rất hài lòng<span style="mso-tab-count:1">&nbsp;&nbsp;
        <label>Tổng số: <?php echo($row['11_1']); ?></label>
        </span></span></p>
    <p class="MsoNormal"><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">2/ Đạt yêu 
      cầu/ hài lòng</span>&nbsp;&nbsp;
      <label>Tổng số: <?php echo($row['12_1']); ?></label></p>
      
    <p class="MsoNormal"><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">3/ Chưa đạt yêu cầu/ 
      Không hài lòng
        <o:p></o:p>
    </span>&nbsp;&nbsp;<label>Tổng số: <?php echo($row['13_1']); ?></label></p>
    <p class="MsoNormal">
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="font-size:8.0pt;
font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR"><o:p>&nbsp;</o:p></span></b>
        <![if !supportLists]>
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR"><span style="mso-list:Ignore">2.<span 
            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span></span></span></b>
        <![endif]>
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
        Việc giữ gìn hồ sơ do </span>
        <span lang="FR" style="mso-bidi-font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR">Đơn vị/ Ông/ Bà</span></b><b style="mso-bidi-font-weight:
normal"><span lang="FR" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:
FR"> nộp
        <o:p></o:p>
        </span></b></p>
    <p class="MsoNormal">
        <span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR"><o:p>
        &nbsp;</o:p></span><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">1/
        Tốt/ Rất hài lòng<span style="mso-tab-count:1">&nbsp;&nbsp;
        <label>Tổng số: <?php echo($row['21_2']); ?></label>
        </span>
        <span style="mso-spacerun:yes">&nbsp;&nbsp;</span> </span></p>
    <p class="MsoNormal"><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
      2/ 
      Đạt yêu 
      cầu/ hài lòng<span style="mso-tab-count:1">&nbsp;&nbsp;
      <label>Tổng số: <?php echo($row['22_2']); ?></label> </span>
      <span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;</span></span></p>
    <p class="MsoNormal"><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
      3/
      Chưa đạt yêu cầu/ 
      Không hài lòng</span><span lang="FR" style="mso-bidi-font-size:
12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
      <o:p></o:p>&nbsp;&nbsp;&nbsp;<label>Tổng số: <?php echo($row['23_2']); ?></label>
      </span></p>
    <p class="MsoNormal">
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="font-size:8.0pt;
font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR"><o:p>&nbsp;</o:p></span></b>
        <![if !supportLists]>
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-bidi-font-size:
12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
        <span style="mso-list:Ignore">3.<span 
            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span></span></span></b>
        <![endif]>
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-bidi-font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR">Chất lượng xử lý hồ sơ của Sở</span></b><span lang="FR" style="mso-bidi-font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR"> <b style="mso-bidi-font-weight:normal">đối với các hồ sơ của Đơn 
        vị/ Ông/ Bà nộp
        <o:p></o:p>
        </b></span></p>
    <p class="MsoNormal">
        <span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR"><o:p>
        &nbsp;</o:p></span><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">1/ 
        Tốt/ Rất hài lòng<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp; </span>
        <span style="mso-spacerun:yes">&nbsp;&nbsp;
        <label>Tổng số: <?php echo($row['31_3']); ?></label>
        </span> </span></p>
    <p class="MsoNormal"><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
      2/ 
      Đạt yêu 
      cầu/ hài lòng<span style="mso-tab-count:1">&nbsp;&nbsp;
      <label>Tổng số: <?php echo($row['32_3']); ?></label> </span>
      <span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp;        </span></span></p>
    <p class="MsoNormal"><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
      3/
       Chưa đạt yêu cầu/ 
      Không hài lòng</span><span lang="FR" style="mso-bidi-font-size:
12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
      <o:p></o:p>&nbsp;&nbsp;<label>Tổng số: <?php echo($row['33_3']); ?></label>
      </span></p>
    <p class="MsoNormal">
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="font-size:8.0pt;
font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR"><o:p>&nbsp;</o:p></span></b>
        <![if !supportLists]>
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR"><span style="mso-list:Ignore">4.<span 
            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span></span></span></b>
        <![endif]>
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
        Thời gian </span>
        <span lang="FR" style="mso-bidi-font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR">Sở</span></b><span lang="FR" style="mso-bidi-font-size:
12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
        </span><b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR">xử lý các hồ sơ của </span></b>
        <b style="mso-bidi-font-weight:
normal"><span lang="FR" style="mso-bidi-font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR">Đơn vị/ Ông/ Bà</span><span lang="FR" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:
FR"> 
        <o:p></o:p>
        </span></b> </p>
    <p class="MsoNormal">
        <span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR"><o:p>
        &nbsp;</o:p></span><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">1/ 
        Tốt/ Rất hài lòng<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        <label>Tổng số: <?php echo($row['41_4']); ?></label>
        </span>
        <span style="mso-spacerun:yes">&nbsp;&nbsp;        </span></span></p>
    <p class="MsoNormal"><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
      2/
       Đạt yêu 
      cầu/ hài lòng<span style="mso-tab-count:1">&nbsp;&nbsp;&nbsp;&nbsp;
      <label>Tổng số: <?php echo($row['42_4']); ?></label> </span>
      <span style="mso-spacerun:yes">&nbsp;&nbsp;&nbsp; </span>
      </span></p>
    <p class="MsoNormal"><span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
      3/ 
      Chưa đạt yêu cầu/ 
      Không hài lòng</span><span lang="FR" style="mso-bidi-font-size:
12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
      <o:p></o:p>&nbsp;&nbsp;<label>Tổng số: <?php echo($row['43_4']); ?></label>
      </span></p>
    <p class="MsoNormal">
        <span lang="FR" style="mso-bidi-font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR"><o:p>&nbsp;</o:p></span><![if !supportLists]><b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR"><span style="mso-list:Ignore">5.<span 
            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span></span></span></b><![endif]><b style="mso-bidi-font-weight:normal">
        <span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
        Góp ý chung:<o:p></o:p></span></b></p>
    <p class="MsoNormal">
      <textarea name="textarea" id="44" cols="70" rows="2"><?php echo($row['44']); ?></textarea>
      <span lang="FR" style="mso-bidi-font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR">
        <o:p></o:p>
        </span></p>
        
        
  
          </td>
        </tr>
      </table>
      <?php
				}
				mysql_free_result($result);
			?>
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
