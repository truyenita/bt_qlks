<?php
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
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<META http-equiv=Content-Type content="text/html; charset=utf-8">
<META NAME="KEYWORDS" CONTENT="<?php echo(getPara('keyword','value3'));?>">
<title><?php echo(getPara('title','value2'));?></title>
<LINK href="style.css" type=text/css rel=stylesheet>
<LINK href="ita.css" type=text/css rel=stylesheet>
<link rel="shortcut icon" href="image/stttt.ico"/>
<link href="dynmenu.css" type="text/css" rel="stylesheet" />
<SCRIPT src="jquery-1.4.2.js" type=text/javascript></SCRIPT>
<SCRIPT src="ddaccordion.js" type=text/javascript></SCRIPT>
<SCRIPT type=text/javascript>
ddaccordion.init({
	headerclass: "submenuheader", //Shared CSS class name of headers group
	contentclass: "submenu", //Shared CSS class name of contents group
	revealtype: "mouseover", //Reveal content when user clicks or onmouseover the header? Valid value: "click" or "mouseover
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
.style6 {
	color: #0099FF;
	font-weight: bold;
}
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
</head>

<body style="BACKGROUND-IMAGE: url(images/nen.png);BACKGROUND-REPEAT: repeat-x;background-attachment:fixed;">
<?php
	ShowHeader();
	//ShowTopBar();
?>
<table width="1000" border="0" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
  <!--DWLayoutTable-->
  
  <tr>
    <td height="30" colspan="3" valign="top">
	<table 
<?php   
	if (getPara('vermenu','value1')==1)
	{	
		echo('background="image/menuhor.png" ');
	}
	else
	{
		echo(' bgcolor="'.GetHorMenuColor().'"' );
	}	 
?>
	width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#c76403">
      <!--DWLayoutTable-->

<?php   
	if (getPara('vermenu','value1')==1)
	{	  
		echo('<tr><td width="332" height="30" valign="middle">');
		echo('<div align="LEFT" class="hormenu">&nbsp;&nbsp;<strong>
          <SCRIPT language=JavaScript src="datetime.js"></SCRIPT>
          <SCRIPT language=JavaScript>dT();</SCRIPT></strong>
          </div></td>');
		echo('<td width="668" valign="middle">');
		//ShowHorMenu();
		ShowMainHorMenu_ITA();
		echo('</td></tr>');
	}
	else
	{
		echo('<tr><td width="1000" height="30" valign="middle">');
		//ShowMainHorMenu();
		//ShowMainHorMenu_ITA();
		echo('</td></tr>');
	
	}
?>		
    </table></td>
  </tr>
  <tr>
    <td width="193" height="620" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0" bgcolor="#F0F8FF">
   
      
<?php
	ShowVerMenu1();
	ShowAllLeftModules();
	 //ShowRightAd(1);
?>   


      


      
    </table></td>
    <td width="807" valign="top" background="image/largecenterbg.jpg"><table width="100%" border="0" cellpadding="0" cellspacing="0">
      <!--DWLayoutTable-->
      <tr>
        <td width="15" height="10"></td>
        <td width="770"></td>
        <td width="22"></td>
      </tr>
      <tr>
        <td height="456"></td>
        <td valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
              <!--DWLayoutTable-->
              <tr>
                <td width="770" height="30" valign="middle"><div align="center" class="style6">
                <?php
                		include("dbconnect.php");
						$loaivb=intval(mysql_real_escape_string($_REQUEST['loaivb'])) ;
						$str0="select * from lawdoc_loai";
						$result0=mysql_query($str0) or
							die(mysql_error());
						while ($row0=mysql_fetch_array($result0))
						{
							
							if ($row0['id']==$loaivb)
							echo($row0['ten']);
							//echo("a"); 
						}
						mysql_free_result($result0);
						?>
                </div></td>
              </tr>	              
              <tr>
                <td width="770" height="44" valign="middle"><span class="style6">Lọc văn bản </span></td>
              </tr>			  
              <tr>
                <td height="33" valign="top">
				<form name="law" action="lawdocument.php?page=1&id=<?php echo($id);?>&loaivb=<?php echo($loaivb);?>" method="post">
				<table class="deco" bordercolor="#a6caf0" width="100%" border="1" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->

                  <tr>
                    <td height="61" valign="top"><table width="100%" border="0" cellpadding="0" cellspacing="0">
                      <!--DWLayoutTable-->
					   <tr>
                        <td></td>
                          <td height="10"></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>  
                      <tr>
                        <td width="3"></td>
                          <td height="30" valign="middle">Lĩnh vực: </td>
                    <td valign="middle"><select name="field" id="field">
					<option value="0">Tất cả</option>
					
					<?php
					include("dbconnect.php");
					//echo("Hello!");
					$loaivb=intval(mysql_real_escape_string($_REQUEST['loaivb'])) ;
					$field=intval(mysql_real_escape_string($_REQUEST['field'])) ;
					$level=intval(mysql_real_escape_string($_REQUEST['level'] ));
					$type=intval(mysql_real_escape_string($_REQUEST['type'] ));
					//$keyword=mysql_real_escape_string($_REQUEST['keyword']);
					//$keyword=sql_quote($_REQUEST['keyword']);
					$keyword=SafeConvert($_REQUEST['keyword']);
					
					
					
					$str0="select * from lawdocfield";
					$result0=mysql_query($str0) or
						die(mysql_error());
					while ($row0=mysql_fetch_array($result0))
					{
						echo("<option ");
						if ($field==$row0['fieldid']) echo("selected='selected'");
						echo(" value='".$row0['fieldid']."'>".$row0['fieldname']."</option>");
					}
				
					mysql_free_result($result0);
				?>
                      
                      </select></td>
                    <td valign="middle">Hình thức văn bản: </td>
                    <td valign="middle"><select name="type" id="type">
                    
                      <option value="0">Tất cả</option>
					
					<?php
					include("dbconnect.php");
					//echo("Hello!");
					$loaivb=intval(mysql_real_escape_string($_REQUEST['loaivb'])) ;
					$field=intval(mysql_real_escape_string($_REQUEST['field'])) ;
					$level=intval(mysql_real_escape_string($_REQUEST['level'] ));
					$type=intval(mysql_real_escape_string($_REQUEST['type'] ));
					//$keyword=mysql_real_escape_string($_REQUEST['keyword']);
					//$keyword=sql_quote($_REQUEST['keyword']);
					$keyword=SafeConvert($_REQUEST['keyword']);
					
					
					
					$str0="select * from lawdoctype";
					$result0=mysql_query($str0) or
						die(mysql_error());
					while ($row0=mysql_fetch_array($result0))
					{
						echo("<option ");
						if ($type==$row0['typeid']) echo("selected='selected'");
						echo(" value='".$row0['typeid']."'>".$row0['typename']."</option>");
					}
				
					mysql_free_result($result0);
				?>
                      </select></td>
                    <td>&nbsp;</td>
                    <td width="2"></td>
                </tr>
                      <tr>
                        <td></td>
                          <td height="30" valign="middle">Cấp ban hành: </td>
                    <td valign="middle"><select name="level" id="level">
                    
                      <option value="0">Tất cả</option>
					
					<?php
					include("dbconnect.php");
					//echo("Hello!");
					$loaivb=intval(mysql_real_escape_string($_REQUEST['loaivb'])) ;
					$field=intval(mysql_real_escape_string($_REQUEST['field'])) ;
					$level=intval(mysql_real_escape_string($_REQUEST['level'] ));
					$type=intval(mysql_real_escape_string($_REQUEST['type'] ));
					//$keyword=mysql_real_escape_string($_REQUEST['keyword']);
					//$keyword=sql_quote($_REQUEST['keyword']);
					$keyword=SafeConvert($_REQUEST['keyword']);
					
					
					
					$str0="select * from lawdoclevel";
					$result0=mysql_query($str0) or
						die(mysql_error());
					while ($row0=mysql_fetch_array($result0))
					{
						echo("<option ");
						if ($level==$row0['levelid']) echo("selected='selected'");
						echo(" value='".$row0['levelid']."'>".$row0['levelname']."</option>");
					}
				
					mysql_free_result($result0);
				?>
                      </select></td>
                    <td valign="middle">Từ khóa: </td>
                    <td valign="middle"><input name="keyword" type="text" id="keyword" value="<?php echo($keyword);?>" /></td>
                    <td align="center" valign="middle"><input type="submit" name="Submit" value="  Lọc  " /></td>
                    <td></td>
                  </tr>
                      <tr>
                        <td></td>
                          <td height="10"></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                          <td></td>
                        </tr>
                    </table></td>
                  </tr>
                </table>       
                
                </form>
                 
                
               
                       </td>
              </tr>
              
    					<?php
						//Hien thi cac van ban tim thay
						include("dbconnect.php");
						//echo("Hello!");
						//echo("field: ".$field." level: ".$level." type: ".$type." keyword: ".$keyword);
						
						
						$s1="";$s2="";$s3="";$s4="";$s5="";
						if ($field>0)
							$s1=" field=".$field;
						else
							$s1=" field<99999";
						if ($level>0)
							$s2=" level=".$level;
						else
							$s2=" level<99999";							
						if ($type>0)
							$s3=" type=".$type;
						else
							$s3=" type<99999";							
						if (strlen(trim(keyword))>0)
							$s4=" abstract like '%".trim($keyword)."%'";
						else
							$s4=" true";
						if ($loaivb>0)
							$s5=" loaivb=".$loaivb;
						else
							$s5=" loaivb<99999";
						//$s4="abstract like '%a%'";
						$wherestr=" where ".$s1." and ".$s2." and ".$s3." and ".$s4." and ".$s5;
						$str1="select count(docid) as sumdoc from lawdoc ".$wherestr." order by date desc";
						//echo($str1);
						$result=mysql_query($str1) or
							die(mysql_error());
						$row=mysql_fetch_array($result);	
				?>          
              
  
              <tr>
                <td height="52" valign="middle"><span class="style6">Tổng số văn bản tìm thấy: </span><strong><?php 
				$sumdoc=$row['sumdoc'];
				echo($row['sumdoc']);?></strong>
                </td>
              </tr>
              
              <tr>
                <td height="60" valign="top"><table class="deco" bgcolor="#a6caf0" bordercolor="#a6caf0" width="100%" border="1" cellpadding="0" cellspacing="0">
                  <!--DWLayoutTable-->
                  <tr>
                    <td background="image/bgbt.gif" width="49" height="28" valign="middle"><div align="center" class="style6">STT</div></td>
                      <td  background="image/bgbt.gif" width="132" valign="middle" class="style6"><div align="center">Số hiệu </div></td>
                      <td width="118" align="center" valign="middle"  background="image/bgbt.gif" class="style6"><div align="center">Cơ quan ban hành </div></td>
                      <td width="100" align="center" valign="middle"  background="image/bgbt.gif" class="style6"><div align="center">Ngày ban hành </div></td>
                      <td width="361" valign="middle"  background="image/bgbt.gif"><div align="center" class="style6">Trích yếu nội dung </div></td>
                    </tr>
					
					

						<?php 
						
						
						$str1="select * from lawdoc ".$wherestr." order by date desc";
						$result=mysql_query($str1) or
							die(mysql_error());
						$page=intval(mysql_real_escape_string($_REQUEST['page'] ));
						if ($page>1000) $page=1;
						if ($page<1) $page=1;
						//Bo qua cac van ban dau 
						$recordonpage=getPara('recordsperpage','value1');
						if ($recordonpage<1) $recordonpage=20;
						$k=($page-1)*$recordonpage;
						for ($j=1;$j<=$k;$j++)
							$row=mysql_fetch_array($result);
						$i=1;
						$id=intval(mysql_real_escape_string($_REQUEST['id'])) ;
						while ($row=mysql_fetch_array($result))
						{
                  			$k++;
							$date=strtotime($row['date']);
							$update_date=date("d-m-Y", $date);
							echo("<tr bgcolor='#FFFFFF'><td height='30' valign='middle'><div align='center'>".$k."</div></td>");
                      		echo("<td valign='middle'><div align='center'><a href='lawdocdetail.php?id=".$id."&docid=".$row['docid']."'>".$row['docno']."</a></div></td>");
							echo("<td valign='middle'><div align='center'><a href='lawdocdetail.php?id=".$id."&docid=".$row['docid']."'>".$row['deptname']."</div></td>");
							echo("<td valign='middle'><div align='center'><a href='lawdocdetail.php?id=".$id."&docid=".$row['docid']."'>".$update_date."</div></td>");
                      		echo("<td valign='middle'><div align='left'><a href='lawdocdetail.php?id=".$id."&docid=".$row['docid']."'>".$row['abstract']."</div></td></tr>");		
							
							if ($i==$recordonpage) break;
							$i++;				
						}

						mysql_free_result($result);
						

						                    
                    /*<tr bgcolor="#FFFFFF">
                    <td height="30" valign="middle"><div align="center"></div></td>
                      <td valign="middle"><div align="center"></div></td>
                      <td valign="middle"><div align="center"></div></td>
                      <td valign="middle"><div align="left"></div></td>
                    </tr> */

					
					  
						
					  					
					?>					
					
</table></td></tr>
                <?php 
					  echo("<tr><td height='45' valign='middle'><div align='right'>");
						$p=$sumdoc/$recordonpage;
						$q=$sumdoc%$recordonpage;
						if ($sumdoc>$recordonpage)
						{
							
							//Ve trang dau tien
							echo("<a class='nav' href='lawdocument.php?id=".$id."&field=".$field."&level=".$level."&type=".$type."&loaivb=".$loaivb."&keyword=".$keyword."&page=1'> &lt;&lt; </a>");
							//Ve trang ke truoc (previous)
							if ($page>1)
							{
								$pp=$page-1;
								echo("<a class='nav' href='lawdocument.php?id=".$id."&field=".$field."&level=".$level."&type=".$type."&loaivb=".$loaivb."&keyword=".$keyword."&page=".$pp."'> &lt; </a>");
							}
							//Cac trang tiep theo
							echo("<span style='font-weight: bold; color: #0099FF'> Trang </span>");
							/*for ($j=1;$j<=$p;$j++)
							{ 
								echo("<a class='nav' href='lawdocument.php?id=".$id."&field=".$field."&level=".$level);
								echo("&type=".$type."&keyword=".$keyword."&page=".$j."'> [".$j."] </a>");	
							}*/
							$k=$page;
							if ($page+4>$p)
							{
								$k=(int)$p-3;
								if ($k<1) $k=1;
							}
							$c=0;					
							for ($j=$k;$j<=$p;$j++)
							{ 
								echo("<a class='nav' href='lawdocument.php?id=".$id."&field=".$field."&level=".$level);
								echo("&type=".$type."&loaivb=".$loaivb."&keyword=".$keyword."&page=".$j."'> [".$j."] </a>");
								$c++;
								if ($c==5) break;	
							}
							$j=(int)$p+1;
							//Hien thi trang cuoi cung
							if (($q>0)&&($c<5))
							{ 
								echo("<a class='nav' href='lawdocument.php?id=".$id."&field=".$field."&level=".$level);
								echo("&type=".$type."&loaivb=".$loaivb."&keyword=".$keyword."&page=".$j."'> [".$j."] </a>");
							}
							//Ve trang tiep theo (next)
							if ($q>0)
							{
								if ($page<=$p)
								{
									$np=$page+1;
									echo("<a class='nav' href='lawdocument.php?id=".$id."&field=".$field."&level=".$level);
									echo("&type=".$type."&loaivb=".$loaivb."&keyword=".$keyword."&page=".$np."'> &gt; </a>");
								}
								//Ve trang cuoi cung
								echo("<a class='nav' href='lawdocument.php?id=".$id."&field=".$field."&level=".$level);
								echo("&type=".$type."&loaivb=".$loaivb."&keyword=".$keyword."&page=".$j."'> &gt;&gt; </a>");								
							}
							else
							{
								if ($page<$p)
								{
									$np=$page+1;
									echo("<a class='nav' href='lawdocument.php?id=".$id."&field=".$field."&level=".$level);
									echo("&type=".$type."&loaivb=".$loaivb."&keyword=".$keyword."&page=".$np."'> &gt; </a>");
								}
								
								//Ve trang cuoi cung
								$j--;
								echo("<a class='nav' href='lawdocument.php?id=".$id."&field=".$field."&level=".$level);
								echo("&type=".$type."&loaivb=".$loaivb."&keyword=".$keyword."&page=".$j."'> &gt;&gt; </a>");															
							}								
						}
						echo("</div></td></tr>");
              		$field=intval(mysql_real_escape_string($_REQUEST['field'] ));
					$level=intval(mysql_real_escape_string($_REQUEST['level'] ));
					$type=intval(mysql_real_escape_string($_REQUEST['type'])) ;
					$keyword=intval(mysql_real_escape_string($_REQUEST['keyword'])) ;
					$loaivb=intval(mysql_real_escape_string($_REQUEST['loaivb'] ));
 				?>
              
          </table></td>
          <td></td>
      </tr>
      <tr>
        <td height="10"></td>
        <td>&nbsp;</td>
        <td></td>
      </tr>
      
   
      
    </table></td>
  </tr>
</table>
<?php
	/*if (getPara('headerfooter','value1')==1)
	{	
		ShowFooter1();
		ShowBottomBar();
	}
	else
	{
		ShowFooter2();
	}*/
	ShowFooter1();
?>
</body>
</html>
