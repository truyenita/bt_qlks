<?php
error_reporting (0);
session_start();
	include("function.php");
	include("dbconnect.php");
	updatecounter();
	$str0="select value1 from options where name='update'";
	$result0=mysql_query($str0) or
		die(mysql_error());
	$row0=mysql_fetch_array($result0);
	if ($row0['value1']==1)	
		header('Location:message.php?id=1');
	mysql_free_result($result0);
	

	
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/stttt1.dwt" codeOutsideHTMLIsLocked="true" -->
<head>

<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META NAME="KEYWORDS" CONTENT="<?php echo(getPara('keyword','value3'));?>">
<title><?php echo(getPara('title','value2'));?></title>
<LINK href="style.css" type=text/css rel=stylesheet>
<LINK href="ita.css" type=text/css rel=stylesheet>
<link rel="shortcut icon" href="image/stttt.ico"/>
<script type="text/javascript" src="jquery.dock-0.8b.source.js"></script>
<script language="javascript" src="calendar.js"></script>
<link href="dynmenu.css" type="text/css" rel="stylesheet" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/jquery.innerfade.js"></script>
<!-- optional -->
<script type="text/javascript" src="js/jquery.shadow.js"></script>
<script type="text/javascript" src="js/jquery.ifixpng.js"></script>
<script type="text/javascript" src="js/jquery.fancyzoom.min.js"></script>
<script type="text/javascript">
$(function(){
$('img.zoom').fancyzoom();

});
</script>
<script type="text/javascript">
			$(document).ready(
				function(){
					$('#portfolio').innerfade({
						speed: 'slow',
						timeout: 4000,
						type: 'sequence',
						containerheight: '120px'
					});	
							
			
				}
			);
		</script>
		
		
<!-- -->
<link href="js/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript" src="js/jquery-ui-personalized-1.5.2.packed.js"></script>
<script type="text/javascript" src="js/sprinkle.js"></script>
<!-- -->		
<SCRIPT src="ddaccordion.js" type=text/javascript></SCRIPT>
<SCRIPT type=text/javascript>
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "click", //Reveal content when user clicks or onmouseover the header? Valid value: "click" or "mouseover
	collapseprev: true, //Collapse previous content (so only one open at any time)? true/false
	defaultexpanded: [], //index of content(s) open by default [index1, index2, etc] [] denotes no content
	onemustopen: false, //Specify whether at least one header should be open always (so never all headers closed)
	animatedefault: false, //Should contents open by default be animated into view?
	persiststate: true, //persist state of opened contents within browser session?
	toggleclass: ["", ""], //Two CSS classes to be applied to the header when it's collapsed and expanded, respectively ["class1", "class2"]
	togglehtml: ["", "<img src='image/plus.gif' class='statusicon' />", "<img src='image/minus.gif' class='statusicon' />"], //Additional HTML added to the header when it's collapsed and expanded, respectively  ["position", "html1", "html2"] (see docs)
	animatespeed: "normal", //speed of animation: "fast", "normal", or "slow"
	oninit:function(headers, expandedindices){ //custom code to run when headers have initalized
		//do nothing
	},
	onopenclose:function(header, index, state, isuseractivated){ //custom code to run whenever a header is opened or closed
		//do nothing
	}
})
</SCRIPT>
<style type="text/css">
<!--
.style3 {color: #FFFFFF}
-->
</style>



<!--[if lt IE 8]><LINK href="ie.css" type=text/css rel=stylesheet><![endif]-->
<LINK href="ddsmoothmenu.css" type=text/css rel=stylesheet>
<SCRIPT src="ddsmoothmenu.js" type=text/javascript>
</SCRIPT>

<SCRIPT type=text/javascript>
	ddsmoothmenu.init({
		mainmenuid: "main-nav", //menu DIV id
		orientation: 'h', //Horizontal or vertical menu: Set to "h" or "v"
		classname: 'ddsmoothmenu', //class added to menu's outer DIV
		
		//customtheme: ["#e05d04", "#18374a"],
		contentsource: "markup" //"markup" or ["container_id", "path_to_menu_file"]
	})

</SCRIPT>

<SCRIPT type=text/javascript><!--//--><![CDATA[//><!--
startList = function() {
	if (document.all&&document.getElementById) {
	cssdropdownRoot = document.getElementById("cssdropdown");
	for (i=0; i<cssdropdownRoot.childNodes.length; i++) {
	node = cssdropdownRoot.childNodes[i];
	if (node.nodeName=="LI") {
	node.onmouseover=function() {
	this.className+=" over";
	}
	node.onmouseout=function() {
	this.className=this.className.replace(" over", "");
	}}}}
}
if (window.attachEvent)
	window.attachEvent("onload", startList)
else
	window.onload=startList;
//--><!]]></SCRIPT>
<script type="text/javascript" src="js/jwplayer/swfobject.js"></script>


</head>

<body>
<?php
	if (getPara('headerfooter','value1')==1)
	{	
		ShowTopBar();
		ShowHeader();
	}
	else
	{
		ShowHeader();
	}
?>

<table width="1000" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  
  <tr>
        <td height="30" colspan="3" valign="top">
        <table width="100%" border="0" cellpadding="0" cellspacing="0" background="images/thanhngang.png">
          <!--DWLayoutTable-->
    
    <?php   
            echo('<tr>');
		
		echo('<td width="44" height="27"><a href="index.php"><img src="images/home.png"/></a></td><td width="720" valign="middle" height="27">');
		//ShowHorMenu();
		ShowMainHorMenu_ITA();
		
		echo('</td></tr>');
    ?>	
    
    
        </table>
        </td>
  </tr>
  <tr>
    <td width="770" valign="top" background="image/centerbgchrome.jpg">
    	<table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
          <tr>
            <td width="15" height="10"></td>
            <td width="770"></td>
            <td width="15"></td>
          </tr>
          <tr>
            <td height="287"></td>
            <td valign="top" width="770"><!-- InstanceBeginEditable name="EditRegion1" -->
		
 <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td colspan="2" height="27" valign="top"><div align="center" class="color_22" style="font-weight: bold; font-size: 14px">HÌNH ẢNH HOẠT ĐỘNG</div></td>
            </tr>
            
              
			  <?php 
			  include("dbconnect.php");
			  //Hien thi danh sach chu de album
			 $idalbum=intval(mysql_real_escape_string($_REQUEST['idalbum'])) ;
					$str1="select * from album1 order by id desc";
					$result=mysql_query($str1) or
						die(mysql_error());
					$i=0;
					//$tt=1;	
					while ($row=mysql_fetch_array($result))
					{
						if ($i==0)
						{
							echo("<TR bgColor=#ffffff>");
							$i=1;
						}
						else
						{
							echo("<TR bgColor=#f4f4f4>");
							$i=0;
						}				
						//echo("<TD vAlign=center align=middle height=24><center>".$tt."</center></TD>");		
						
						 echo("<TD  width=\"15%\" vAlign=left align=\"top\">&nbsp;&nbsp;&nbsp;&nbsp;<a href='albumdetail.php?idalbum=".$row['id']."'><img src=".$row['link']." border='0' height='45' width='60' /></a></TD><TD width=\"85%\" valign=left><a href='albumdetail.php?idalbum=".$row['id']."'>".$row["tenalbum"]."</a></TD>");
						
						echo("</tr>");
						//$tt++;
					}
					mysql_free_result($result);
				
			  ?>
			  
          </table>
        <!-- InstanceEndEditable --></td>
        	<td></td>
      	</tr>
    	</table>
    </td>
   
       <td width="5" height="620" valign="top">
        <!-- <?php 
       ShowNewLawDoc();ShowThuTucHanhChinh();
       ?>-->
       </td>

    <td width="216" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
	  
<?php 
ShowRightAd(1);// hien thi hih chu tich
	 // ShowRightAd(3);// hien thi bản đồ
      //ShowAlbumVinhThanh();
      //ShowImageList();//
	ShowAllRightModules();
?> 

      
    </table></td>
  </tr>
</table>

<?php
	/*if (getPara('headerfooter','value1')==1)
	{	
		ShowFooter1();
		//ShowBottomBar();
	}
	else
	{*/
		ShowFooter2();
	//}
?>
</body>
<!-- InstanceEnd --></html>
