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
            <td width="243" valign="top" class="lefttitle"><!-- InstanceBeginEditable name="EditRegion2" -->Cập nhật menu <!-- InstanceEndEditable --></td>
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
   	   <SCRIPT language=JavaScript type=text/JavaScript>
					<!--
 					function Check()
					{
						if(document.form.menutitle.value=="")
						{
							alert("Bạn chưa nhập tiêu đề menu!");
							document.form.menutitle.focus();
							return false;
						}
						if (isNaN(document.form.menuorder.value))
						{
							alert("Bạn phải nhập thứ tự hiển thị là chữ số!");
							document.form.menuorder.focus();
							return false;
						}
					} 
					-->
					function checklistmenu()
					{
						
						if(document.getElementById("menutype").selectedIndex=="6" || document.getElementById("menutype").selectedIndex=="15")
						{
							//alert("abc");
							document.getElementById("loaivbdiv").style.visibility='visible';
							//document.getElementById('hideShow').style.visibility = 'hidden'; 
						}
						else
						document.getElementById("loaivbdiv").style.visibility='hidden';
						document.getElementById("loaivb").value="0";
					}
	</script>
		<?php
			include("dbconnect.php");
			$mode=intval(mysql_real_escape_string($_REQUEST['mode'])) ;
			$id=intval(mysql_real_escape_string($_REQUEST['id'] ));
			if ($mode==2)
			{
				$str1="select * from menu where menuid='".$id."'";
				$result=mysql_query($str1) or die(mysql_error());
				$row = mysql_fetch_array($result);
			}
			//mysql_free_result($result);
		?>      
	<form name=form action=menuadmin.php?mode=2&id=<?php echo($row['menuid']);?> method=post>
	  <table width="100%" border="0" cellpadding="0" cellspacing="0">
        <!--DWLayoutTable-->
        <tr>
          <td width="40" height="15"></td>
          <td width="107"></td>
          <td width="52"></td>
          <td width="2"></td>
          <td width="299"></td>
          <td width="364"></td>
        </tr>

		
        <tr>
          <td height="25"></td>
          <td colspan="2" valign="top">Mã menu </td>
          <td colspan="3" valign="top"><input name="menuid" type="text" disabled="disabled" id="menuid" value="<?php if ($mode==2) echo($row['menuid']);?>" size="5" maxlength="5"></td>
          </tr>
        <tr>
          <td height="25"></td>
          <td colspan="2" valign="top">Tiêu đề </td>
          <td colspan="3" valign="top"><input name="menutitle" type="text" id="menutitle" value="<?php if ($mode==2) echo($row['menutitle']);?>" size="70" maxlength="150"></td>
          </tr>		
        <tr>
          <td height="25"></td>
          <td colspan="2" valign="top">Loại menu </td>
          
          <td valign="top" colspan="3"><select name="menutype" id="menutype">
            <option value="0" <?php if ($row['menutype']==0) echo("selected='selected'");?>>Mục chính, trang chủ</option>
            <option value="1" <?php if ($row['menutype']==1) echo("selected='selected'");?>>Mục con, liên kết đến tin tức của 1 newsgroup</option>
            <option value="2" <?php if ($row['menutype']==2) echo("selected='selected'");?>>Mục con, liên đến đến 1 trang nội dung cục bộ</option>
            <option value="3" <?php if ($row['menutype']==3) echo("selected='selected'");?>>Mục chính, không có liên kết</option>
            <option value="4" <?php if ($row['menutype']==4) echo("selected='selected'");?>>Mục chính, liên kết ngoài</option>
            <option value="5" <?php if ($row['menutype']==5) echo("selected='selected'");?>>Mục chính, liên kết đến 1 trang nội dung cục bộ</option>
             <option value="8" <?php if ($row['menutype']==8) echo("selected='selected'");?>>Mục chính, trang liên hệ</option>
           <!--
            <option value="6" <?php if ($row['menutype']==6) echo("selected='selected'");?>>Mục chính, trang văn bản pháp luật</option>
            <option value="7" <?php if ($row['menutype']==7) echo("selected='selected'");?>>Mục chính, trang hỏi đáp</option>
            <option value="8" <?php if ($row['menutype']==8) echo("selected='selected'");?>>Mục chính, trang liên hệ</option>
            <option value="9" <?php if ($row['menutype']==9) echo("selected='selected'");?>>Mục chính, trang sơ đồ website</option>
            <option value="10" <?php if ($row['menutype']==10) echo("selected='selected'");?>>Mục chính, trang danh mục các liên kết</option>
            <option value="11" <?php if ($row['menutype']==11) echo("selected='selected'");?>>Mục chính, trang lịch công tác</option>
            <option value="12" <?php if ($row['menutype']==12) echo("selected='selected'");?>>Mục chính, trang danh bạ doanh nghiệp</option>
            <option value="13" <?php if ($row['menutype']==13) echo("selected='selected'");?>>Mục con, liên kết đến trang tin tức RSS</option> 
            <!--
            <option value="14" <?php if ($row['menutype']==14) echo("selected='selected'");?>>Mục con, trang danh mục các liên kết</option>					          
             <option value="15" <?php if ($row['menutype']==15) echo("selected='selected'");?>>Mục con, trang văn bản pháp luật</option>
            <option value="14" <?php if ($row['menutype']==14) echo("selected='selected'");?>>Mục con, trang sản phẩm</option>   -->  
          </select>          </td>
          
        </tr>
<tr>
          <td height="25"></td>
          <td colspan="2" valign="top">Là menu con của mục </td>
          <td colspan="3" valign="top"><select name="parent" id="parent">
		<option value="0"
		<?php 
			if ($row['parent']==0)
					echo("selected='selected'");
		?>
		>Không phải là menu con</option>
           
		<?php
			include("dbconnect.php");
			$str0="select menuid,menutitle from menu order by menuorder,menuid";
			$result0=mysql_query($str0) or
				die(mysql_error());
			while ($row0=mysql_fetch_array($result0))
			{
				echo("<option value='".$row0['menuid']."' ");
				if ($row0['menuid']==$row['parent'])
					echo("selected='selected'");
				echo(">".$row0['menutitle']."</option>"); 
			}
			mysql_free_result($result0);
	?>
			
			

          </select>          </td>
          </tr>
        <tr>
          <td height="25"></td>
          <td colspan="2" valign="top">Thứ tự hiển thị </td>
          <td colspan="3" valign="top"><input name="menuorder" type="text" id="menuorder" value="<?php if ($mode==2) echo($row['menuorder']);?>" size="30" maxlength="30"></td>
          </tr>
        <tr>
          <td height="25"></td>
          <td colspan="2" valign="top">Hiển thị menu dọc </td>
          <td colspan="3" valign="top"><input name="vermenu" type="checkbox" id="vermenu" value="1" <?php if ($row['vermenu']==1) echo('checked');?>></td>
          </tr>
        <tr>
          <td height="25"></td>
          <td colspan="2" valign="top">Hiển thị menu ngang </td>
          <td colspan="3" valign="top"><input name="hormenu" type="checkbox" id="hormenu" value="1" <?php if ($row['hormenu']==1) echo('checked');?>></td>
          </tr>
          <tr>
          <td height="25"></td>
          <td colspan="2" valign="top">Hiển thị HomePage </td>
          <td valign="top"><input name="homepage" type="checkbox" id="homepage" value="1" <?php if ($row['homepage']==1) echo('checked');?>></td>
          </tr>
        <tr>
          <td height="25"></td>
          <td colspan="2" valign="top">Liên kết đến trang </td>
          <td colspan="3" valign="top"><input name="link" type="text" id="link" value="<?php if ($mode==2) echo($row['link']);?>" size="30" maxlength="300"></td>
          </tr>	
        <tr>
          <td height="25"></td>
          <td colspan="2" valign="top">Nội dung </td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
		  
        <tr>
          <td height="277"></td>
          <td colspan="5" valign="top"><textarea name="content" cols="70" rows="6" id="content"><?php if ($mode==2) echo($row['content']);?></textarea>
		  <script type="text/javascript"> 
			//<![CDATA[
 
				// This call can be placed at any point after the
				// <textarea>, or inside a <head><script> in a
				// window.onload event handler.
 
				// Replace the <textarea id="editor"> with an CKEditor
				// instance, using default configurations.
				var editor = CKEDITOR.replace( 'content' );
				CKFinder.SetupCKEditor( editor, '<?php echo(pathtockfinder());?>' ) ;
 
			//]]>
			</script>		  </td>
          </tr>
        		  	  		  		  
        
        <tr>
          <td height="25"></td>
          <td align="center" valign="middle"><label>
            <input type="submit" name="Submit" value="Lưu"  onClick="return Check();">
          </label></td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td height="46"></td>
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
