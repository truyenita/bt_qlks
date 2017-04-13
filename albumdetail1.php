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
              <style type="text/css">
<!--
.style6 {
	color: #0099FF;
	font-weight: bold;
}
-->
</style>	
 <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
                   <tr>
                      <td height="421" valign="top">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#FFFFFF">
                       <tr>
                        <td colspan="3" valign="middle"><div align="center" class="style6">
						<!--begin list chu de album -->
						
			  <?php 
						
						include("dbconnect.php");
						$id=intval(mysql_real_escape_string($_REQUEST['id'])) ;
						$idalbum=intval(mysql_real_escape_string($_REQUEST['idalbum'])) ;
						$str1="select * from album1 order by id desc";
						$result=mysql_query($str1) or die(mysql_error());
					
						while($row= mysql_fetch_array($result))
						{							
						if($row['id']== $idalbum)
						echo($row['tenalbum']);
						}
						mysql_free_result($result);
						?>
			  
           
			  <!--end list chu de album -->
						</div></td>			
                      </tr>
                      <tr>
                        <td colspan="3">&nbsp;</td>
                        
                      </tr>
                      <tr>
                      	<td colspan="3" valign="top">
                      <div id="divpic">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        
                        <?php 
						
						//include("dbconnect.php");
						//$idalbum1=intval(mysql_real_escape_string($_REQUEST['idalbum1']));
			  			$str1="select * from album2 where trangthai=1 and idalbum1='".$_REQUEST["idalbum"]."' order by id desc";
			  			$result_pic=mysql_query($str1) or die(mysql_error());
						$sttpic = 0;
						
						while(($row_pic = mysql_fetch_array($result_pic)) and $sttpic++ < 40)
						{							
						?>
                        <?php if($sttpic%4==1 and $sttpic >2){
						?>
                        </tr>
                        <tr>
                        <?php
						} ?>
                        <td valign="top" align="center">
                        <table width="132px" height="120px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                          <tr>
                            <td width="6px" height="6px"></td>
                            <td width="120px" height="6px" bgcolor="#FFFFFF"></td>
                            <td width="6px" height="6px"></td>
                          </tr>
                          <tr>
                            <td width="6px" height="108px"></td>
                            <td valign="top"><img class="zoom" src="<?php echo($row_pic["duongdananh"]); ?>" alt="<?php echo($row_pic["ghichu"]); ?>" width="120px" height="90px" border="0" />
                            	<br />
                                <?php echo($row_pic["ghichu"]); ?>
                            </td>
                            <td width="6px" height="108px">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width="6px" height="6px"></td>
                            <td width="120px" height="6px" bgcolor="#FFFFFF"></td>
                            <td width="6px" height="6px"></td>
                          </tr>
                        </table>
						
                        </td>
                        <?php } ?>
                                         
                      </tr> 
                      </table>
                      </div>  
                      </td>
                      </tr>                 
                      <tr>
                        <td colspan="3" align="center">
                          <div align="center"><input id="idalbum" name="idalbum" type="hidden" value="<?php echo($_REQUEST["idalbum"]); ?>" />
                            <input id="hiddenPageCurrent" name="hiddenPageCurrent" type="hidden" value="0" /><input id="hiddenPageMax" name="hiddenPageMax" type="hidden" value="<?php $pages = (int)(mysql_num_rows($result_pic)/40);
						  							 $residual = mysql_num_rows($result_pic)%40;
													 if($residual > 0) {$pages+=1;}
													 echo($pages); ?>" />
                            <button value="nav_first" style="width:15px;height:13px;border:0px;size:15px;background-image:url(images/nav_first.gif);font-weight:bold;cursor:pointer" onclick="nav_paging(this.value);"></button>
                            <button value="nav_prev" style="width:15px;height:13px;border:0px;size:15px;background-image:url(images/nav_prev.gif);font-weight:bold;cursor:pointer" onclick="nav_paging(this.value);"></button>
                            <?php for($i=0;$i<$pages;$i++)
								{ ?>                                
                            <a id="<?php echo($i); ?>" class="<?php echo($i?"num_paging":"num_paging_select") ?>" onclick="num_paging(this.id);"><?php echo($i+1); ?></a>							
                            <?php 
														} ?>
                            <button value="nav_next" style="width:15px;height:13px;border:0px;size:15px;background-image:url(images/nav_next.gif);font-weight:bold;cursor:pointer" onclick="nav_paging(this.value);"></button>
                            <button value="nav_last" style="width:15px;height:13px;border:0px;size:15px;background-image:url(images/nav_last.gif);font-weight:bold;cursor:pointer" onclick="nav_paging(this.value);"></button>
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="3">&nbsp;</td>
                        
                      </tr>
                    </table>

                      </td>
                    </tr>
          </table>
		  <script type="text/javascript">
					function num_paging(num)
					{
						curPage = document.getElementById('hiddenPageCurrent').value;
						if(parseInt(num)==parseInt(curPage))
						{
							alert('trang hien tai');
							return false;							
						}
						document.getElementById(curPage).className = 'num_paging';
						document.getElementById(num).className = 'num_paging_select';
						document.getElementById('hiddenPageCurrent').value = num;
						showpage(num);
						return false;
					}
					function nav_paging(values)
					{
						switch(values)
						{
							case 'nav_first':
								if(document.getElementById('hiddenPageCurrent').value=='0')
								{
									return false;
								}
								else
								{
									//quay lai page number 0
									var curPage = document.getElementById('hiddenPageCurrent').value;
									document.getElementById(curPage).className = "num_paging";
									document.getElementById(0).className = "num_paging_select";
									document.getElementById('hiddenPageCurrent').value='0';
									showpage(0);
									
									return false;
								}
							break;
							case 'nav_prev':
								if(document.getElementById('hiddenPageCurrent').value=='0')
								{
									return false;
								}
								else
								{
									//quay lai page number preview
									var curPage = document.getElementById('hiddenPageCurrent').value;
									document.getElementById(curPage).className = "num_paging";
									curPage--;
									document.getElementById(curPage).className = "num_paging_select";
									document.getElementById('hiddenPageCurrent').value=curPage;
									showpage(curPage);
									return false;
								}
							break;
							case 'nav_next':
								if(parseInt(document.getElementById('hiddenPageCurrent').value) < parseInt(document.getElementById('hiddenPageMax').value)-1)
								{
									//toi page number next
									var curPage = document.getElementById('hiddenPageCurrent').value;
									document.getElementById(curPage).className = "num_paging";
									curPage = parseInt(curPage)+1;
									document.getElementById(curPage).className = "num_paging_select";
									document.getElementById('hiddenPageCurrent').value=curPage;
									showpage(curPage);
									
									return false;
									
								}
								else
								{
									return false;
								}
							break;
							case 'nav_last':
								if(parseInt(document.getElementById('hiddenPageCurrent').value) < parseInt(document.getElementById('hiddenPageMax').value)-1)
								{
									//toi page number last
									var curPage = document.getElementById('hiddenPageCurrent').value;
									document.getElementById(curPage).className = "num_paging";
									document.getElementById('hiddenPageCurrent').value= parseInt(document.getElementById('hiddenPageMax').value) - 1;
									document.getElementById(parseInt(document.getElementById('hiddenPageMax').value) - 1).className = "num_paging_select";				
									showpage(parseInt(document.getElementById('hiddenPageMax').value) - 1);
									return false;
									
								}
								else
								{
									return false;
								}
							break;
						}
						//var p = document.getElementById("hiddenPage").value;
						alert(values);
						//document.getElementById("hiddenPage").value = p;
						return false;
					}
					function changeCss(element)
					{
						
						for(i=0;i<=3;i++)
						{
							document.getElementById(i).className = 'num_paging';
							
						}
						element.className = 'num_paging_select';
						return false;
					}
					
					function showpage(valueSelect)
					{
					var idalbum1 = document.getElementById('idalbum1').value;
					if (valueSelect.length==0)
					  { 
					  document.getElementById("divpic").innerHTML="";
					  return;
					  }
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						document.getElementById("divpic").innerHTML=xmlhttp.responseText;
						}
					  }
					xmlhttp.open("GET","aj.php?page_pic="+valueSelect+"&idalbum1="+idalbum1,true);					xmlhttp.send();
					}
					</script>
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
