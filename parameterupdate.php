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
        <td width="52" height="29"><!-- InstanceBeginEditable name="EditRegion1" --><img src="pic/notice.jpg" width="52" height="29"><!-- InstanceEndEditable --></td>
            <td width="243" valign="top" class="lefttitle"><!-- InstanceBeginEditable name="EditRegion2" -->Cập nhật các tham số <!-- InstanceEndEditable --></td>
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
  
	<form name=form action='updatedb.php?action=12' method=post>
	  <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="40" height="15"></td>
          <td width="211"></td>
          <td width="414"></td>
          <td width="66"></td>
          <td width="61"></td>
          <td width="70"></td>
          </tr>
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề trang </td>
          <td colspan="3" valign="middle">
            <input name="title" type="text" id="title" value="<?php echo(getPara('title','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr> <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề hình ảnh hoạt động </td>
          <td colspan="3" valign="middle">
            <input name="imagelist" type="text" id="imagelist" value="<?php echo(getPara('imagelist','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>		
       <!--  <tr>
          <td height="25"></td>
          <td valign="middle">Mẫu đầu và chân trang </td>
          <td colspan="3" valign="middle">
            <select name="headerfooter" id="headerfooter">
              <option value="1" <?php  if(getPara('headerfooter','value1')==1) echo('selected="selected"');?>>Mẫu 1</option>
              <option value="2" <?php  if(getPara('headerfooter','value1')==2) echo('selected="selected"');?>>Mẫu 2</option>
            </select>
          </td>
          <td>&nbsp;</td>
          </tr>
         
        <tr>
          <td height="25"></td>
          <td valign="middle">Mẫu 5 tin mới nhất </td>
          <td colspan="3" valign="middle">
            <select name="top5newsstyle" id="top5newsstyle">
              <option value="1" <?php  if(getPara('top5newsstyle','value1')==1) echo('selected="selected"');?>>Mẫu 1</option>
              <option value="2" <?php  if(getPara('top5newsstyle','value1')==2) echo('selected="selected"');?>>Mẫu 2</option>
            </select>
          </td>
          <td>&nbsp;</td>
          </tr>	
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề văn bản mới </td>
          <td colspan="3" valign="middle">
            <input name="newlawdoc" type="text" id="newlawdoc" value="<?php echo(getPara('newlawdoc','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>	
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề tra cứu hồ sơ </td>
          <td colspan="3" valign="middle">
            <input name="document" type="text" id="document" value="<?php echo(getPara('document','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>	
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề hình ảnh hoạt động </td>
          <td colspan="3" valign="middle">
            <input name="imagelist" type="text" id="imagelist" value="<?php echo(getPara('imagelist','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>	
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề lịch </td>
          <td colspan="3" valign="middle">
            <input name="calendar" type="text" id="calendar" value="<?php echo(getPara('calendar','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>			
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề tìm kiếm </td>
          <td colspan="3" valign="middle">
            <input name="search" type="text" id="search" value="<?php echo(getPara('search','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>	
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề thông báo </td>
          <td colspan="3" valign="middle">
            <input name="topnews" type="text" id="topnews" value="<?php echo(getPara('topnews','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>
          <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề Video </td>
          <td colspan="3" valign="middle">
            <input name="video" type="text" id="video" value="<?php echo(getPara('video','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>
          -->
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề thống kê </td>
          <td colspan="3" valign="middle">
            <input name="counteron" type="text" id="counteron" value="<?php echo(getPara('counteron','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>
          <!--	
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề liên kết web </td>
          <td colspan="3" valign="middle">
            <input name="weblist" type="text" id="weblist" value="<?php echo(getPara('weblist','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>	
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề trao đổi trực tuyến </td>
          <td colspan="3" valign="middle">
            <input name="chat" type="text" id="chat" value="<?php echo(getPara('chat','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td height="25"></td>
          <td valign="middle">Tiêu đề form đăng nhập </td>
          <td colspan="3" valign="middle">
            <input name="login" type="text" id="login" value="<?php echo(getPara('login','value2'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>	
        <tr>
          <td height="25"></td>
          <td valign="middle">Dòng chữ chạy đầu trang</td>
          <td colspan="3" valign="middle">
            <input name="marqueetext" type="text" id="marqueetext" value="<?php echo(getPara('marqueetext','value2'));?>" size="78" maxlength="500">          </td>
          <td>&nbsp;</td>
          </tr>			  
        <tr>
          <td height="25"></td>
          <td valign="middle">URL của báo cung cấp tin </td>
          <td colspan="3" valign="middle">
            <input name="newsfromurlURL" type="text" id="newsfromurlURL" value="<?php echo(getPara('newsfromurl','value3'));?>" size="78" maxlength="300">          </td>
          <td>&nbsp;</td>
          </tr>	
		
		
		  <tr>
          <td height="25"></td>
          <td valign="middle">Ảnh/Flash banner trang chủ </td>
          <td valign="middle"><input name="bannerimage" type="text" id="bannerimage" value="<?php echo(getPara('banner','value3'));?>" size="65" maxlength="500"></td>
	    <td align="left" valign="middle"><input type="button" name="Submit3" value="Chọn file" onClick="BrowseServer1();"></td>
		  <td>&nbsp;</td>
	      <td>&nbsp;</td>
		  </tr>	
		
		-->
		
		  <tr>
          <td height="25"></td>
          <td valign="middle">Ảnh/Flash header </td>
          <td valign="middle"><input name="logoimage" type="text" id="logoimage" value="<?php echo(getPara('logo','value3'));?>" size="65" maxlength="500"></td>
       
	<td align="left" valign="middle"><input type="button" name="Submit2" value="Chọn file" onClick="BrowseServer();"></td>
		  <td>&nbsp;</td>
	      <script type="text/javascript" src="ckfinder/ckfinder.js"></script>
	<script type="text/javascript">

		function BrowseServer()
		{
			// You can use the "CKFinder" class to render CKFinder in a page:
			var finder = new CKFinder() ;
			finder.BasePath = 'ckfinder/' ;	// The path for the installation of CKFinder (default = "/ckfinder/").
			finder.SelectFunction = SetFileField ;
			finder.Popup() ;
		
			// It can also be done in a single line, calling the "static"
			// Popup( basePath, width, height, selectFunction ) function:
			// CKFinder.Popup( '../../', null, null, SetFileField ) ;
			//
			// The "Popup" function can also accept an object as the only argument.
			// CKFinder.Popup( { BasePath : '../../', SelectFunction : SetFileField } ) ;
		}
		
		// This is a sample function which is called when a file is selected in CKFinder.
		function SetFileField( fileUrl )
		{
			document.getElementById( 'logoimage' ).value = fileUrl ;
		}



		function BrowseServer1()
		{
			// You can use the "CKFinder" class to render CKFinder in a page:
			var finder1 = new CKFinder() ;
			finder1.BasePath = 'ckfinder/' ;	// The path for the installation of CKFinder (default = "/ckfinder/").
			finder1.SelectFunction = SetFileField1 ;
			finder1.Popup() ;
		
			// It can also be done in a single line, calling the "static"
			// Popup( basePath, width, height, selectFunction ) function:
			// CKFinder.Popup( '../../', null, null, SetFileField ) ;
			//
			// The "Popup" function can also accept an object as the only argument.
			// CKFinder.Popup( { BasePath : '../../', SelectFunction : SetFileField } ) ;
		}
		
		// This is a sample function which is called when a file is selected in CKFinder.
		function SetFileField1( fileUrl1 )
		{
			document.getElementById( 'bannerimage' ).value = fileUrl1 ;
		}
	</script>		   
	    <td>&nbsp;</td>
		  </tr>			
		
								
        <tr>
          <td height="25"></td>
          <td valign="middle">Số bản ghi hiển thị trên 01 trang </td>
          <td colspan="3" valign="middle"><input name="recordsperpage" type="text" id="recordsperpage" value="<?php echo(getPara('recordsperpage','value1'));?>" size="78" maxlength="3"></td>
          <td>&nbsp;</td>
          </tr>	
       <tr>
          <td height="25"></td>
          <td valign="top">Nội dung chân trang trái </td>
          <td colspan="3" rowspan="2" valign="top"><textarea cols="60" id="leftfooter" name="leftfooter" rows="8"><?php echo(getPara('leftfooter','value3'));?></textarea> </td>
          <td>&nbsp;</td>
          </tr>
	
        <tr>
          <td height="106"></td>
          <td valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
          <td>&nbsp;</td>
          </tr>

        <tr>
          <td height="25"></td>
          <td valign="middle">Nội dung chân trang phải </td>
          <td colspan="3" rowspan="2" valign="top"><textarea cols="60" id="rightfooter" name="rightfooter" rows="8"> <?php echo(getPara('rightfooter','value3'));?></textarea></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td height="106"></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
         <tr>
          <td height="25"></td>
          <td valign="middle">Google Analytics </td>
          <td colspan="3" rowspan="2" valign="top"><textarea cols="60" id="google" name="google" rows="8"> <?php echo(getPara('google','value3'));?></textarea></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td height="106"></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td height="25"></td>
          <td valign="middle">Từ khóa tìm kiếm </td>
          <td colspan="3" rowspan="2" valign="top"><textarea cols="60" id="keyword" name="keyword" rows="8"> <?php echo(getPara('keyword','value3'));?></textarea></td>
          <td>&nbsp;</td>
          </tr>
	  
        <tr>
          <td height="106"></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
        
        
        
        
        
        
        <tr>
          <td height="25"></td>
          <td>&nbsp;</td>
          <td colspan="3" align="center" valign="middle"><label>
            <input type="submit" name="Submit" value="Lưu">
          </label></td>
          <td>&nbsp;</td>
          </tr>
        <tr>
          <td height="22"></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          </tr>
      </table>
	</form>
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
