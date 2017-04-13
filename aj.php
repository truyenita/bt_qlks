<?php
include("dbconnect.php");
//pageing tim kiem tin tuc theo cbb loai tin
if(isset($_REQUEST["search"]))
{
$return="<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#faf4dd\">";
	$newsgroup=$_REQUEST["newsgroup"];
	$sql="select * from news where newsgroup=".$newsgroup;
	$result=mysql_query($sql) or die(mysql_error());
					$i=0;
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
						

						echo("<td height=\"29\"><input name=\"checkbox[]\" type=\"checkbox\" id=\"checkbox[]\" value=".$row['newsid']."></td>");						
						echo("<TD vAlign=center height=24>&nbsp;&nbsp;".$row['title']."</TD>");
						echo("<TD vAlign=center><center>".$row['user']."</center></TD>");
						echo("<TD vAlign=center align=middle><center>");
						if ($row['approval']==1) echo("x");
						echo("</center></TD>");
						echo("<TD vAlign=center align=middle><center><a href='newsdetailadmin.php?id=".$row['newsid']."'>Xem</a>");
						echo("&nbsp;&nbsp;&nbsp;<a href='newsadminupdate.php?mode=2&id=".$row['newsid']."'>Sửa</a>");

						if ($c==getPara('recordsperpage','value1')) break;
					}
					mysql_free_result($result);
					$return = $return."
                      </table>";
					  echo($return);
}
// page hinh anh hoat dong
if(isset($_REQUEST["page_picAc"]))
{
						$return="<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#faf4dd\"><tr>";
						
                        $limit = $_REQUEST["page_picAc"]*40;
						$sql_pic = "select * from imagelist order by imageid desc limit ".$limit.",40";
						$result_pic = mysql_query($sql_pic) or die(mysql_error());
						$sttpic = 0;
						while(($row_pic = mysql_fetch_array($result_pic)) and $sttpic++ < 40)
						{							
						if($sttpic%4==1 and $sttpic > 2){
						$return = $return."
                        </tr>
                        <tr>";
                        
						} 
						$return = $return."
                        <td valign=\"top\" align=\"center\">
                        <table width=\"132px\" height=\"120px\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\">
                          <tr>
                            <td width=\"6px\" height=\"6px\"></td>
                            <td width=\"120px\" height=\"6px\"></td>
                            <td width=\"6px\" height=\"6px\"></td>
                          </tr>
                          <tr>
                            <td width=\"6px\" height=\"108px\"></td>
                            <td valign=\"top\"><img src=\"".$row_pic["file"]."\" alt=\"".$row_pic["title"]."\" width=\"120px\" height=\"90px\" border=\"0\" onclick=\"$(this).fancyzoom();\"/>
                            	<br />".$row_pic["title"]."
                            </td>
                            <td width=\"6px\" height=\"108px\">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width=\"6px\" height=\"6px\"></td>
                            <td width=\"120px\" height=\"6px\"></td>
                            <td width=\"6px\" height=\"6px\"></td>
                          </tr>
                        </table>
						
                        </td>";
						}
						$return = $return."
                                         
                      </tr> </table>";
					  
					  echo($return);
						

}

//paging hình ảnh album
if(isset($_REQUEST["page_pic"]))
{
						//$idalbum1=intval(mysql_real_escape_string($_GET['idalbum1']));
						$return="<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#faf4dd\"><tr>";
						
                        $limit = $_REQUEST["page_pic"]*40;
                        //$sql_pic = "select * from album2 where `trangthai`='1' and `idalbum1`='2' limit ".$limit.",9";
						$idalbum1=$_REQUEST["idalbum1"];
						$sql_pic = "select * from album2 where `trangthai`='1' and `idalbum1`='".$idalbum1."' order by id desc limit ".$limit.",40";
						$result_pic = mysql_query($sql_pic) or die(mysql_error());
						$sttpic = 0;
						while(($row_pic = mysql_fetch_array($result_pic)) and $sttpic++ < 40)
						{							
						if($sttpic%4==1 and $sttpic > 2){
						$return = $return."
                        </tr>
                        <tr>";
                        
						} 
						$return = $return."
                        <td valign=\"top\" align=\"center\">
                        <table width=\"132px\" height=\"120px\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\">
                          <tr>
                            <td width=\"6px\" height=\"6px\"><img src=\"images/pic11.gif\" border=\"0\" /></td>
                            <td width=\"120px\" height=\"6px\" background=\"images/pic12.gif\"></td>
                            <td width=\"6px\" height=\"6px\"><img src=\"images/pic13.gif\" width=\"6\" height=\"6\" border=\"0\" /></td>
                          </tr>
                          <tr>
                            <td width=\"6px\" height=\"108px\" background=\"images/pic21.gif\"></td>
                            <td valign=\"top\"><img src=\"".$row_pic["duongdananh"]."\" alt=\"".$row_pic["ghichu"]."\" width=\"120px\" height=\"90px\" border=\"0\" onclick=\"$(this).fancyzoom();\"/>
                            	<br />".$row_pic["ghichu"]."
                            </td>
                            <td width=\"6px\" height=\"108px\" background=\"images/pic23.gif\">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width=\"6px\" height=\"6px\"><img src=\"images/pic31.gif\" width=\"6\" height=\"6\" border=\"0\" /></td>
                            <td width=\"120px\" height=\"6px\" background=\"images/pic32.gif\"></td>
                            <td width=\"6px\" height=\"6px\"><img src=\"images/pic33.gif\" width=\"6\" height=\"6\" border=\"0\" /></td>
                          </tr>
                        </table>
						
                        </td>";
						}
						$return = $return."
                                         
                      </tr> </table>";
					  
					  echo($return);
						

}

//paging load danh sach dai bieu
if(isset($_REQUEST["page_daibieu"]))
{
						$return="<table width=\"100%\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#faf4dd\"><tr>";
                        $limit = $_REQUEST["page_daibieu"]*9;
						//$peopleid=intval(mysql_real_escape_string($_REQUEST['peopleid'])) ;
					//$peoplegroup=intval(mysql_real_escape_string($_REQUEST['id'] ));
						$peoplegroup=$_REQUEST["peoplegroup"];

						$str1="select * from people where approval=1 and peoplegroup=".$peoplegroup." order by ngay desc,peopleid desc limit ".$limit.",9";
						$result = mysql_query($str1) or die(mysql_error());
						$sttpic = 0;
						while(($row = mysql_fetch_array($result)) and $sttpic++ < 9)
						{							
						if($sttpic%3==1 and $sttpic > 2){
						$return = $return."
                        </tr>
                        <tr>";
                        
						} 
						$return = $return."
                        <td valign=\"top\" align=\"center\">
						<div id=\"divdaibieu\">
                        <table width=\"132px\" height=\"120px\" border=\"0\" cellspacing=\"0\" cellpadding=\"0\" bgcolor=\"#FFFFFF\">
                          <tr>
                            <td width=\"6px\" height=\"6px\"><img src=\"images/pic11.gif\" border=\"0\" /></td>
                            <td width=\"120px\" height=\"6px\" background=\"images/pic12.gif\"></td>
                            <td width=\"6px\" height=\"6px\"><img src=\"images/pic13.gif\" width=\"6\" height=\"6\" border=\"0\" /></td>
                          </tr>
                          <tr>
                            <td width=\"6px\" height=\"108px\" background=\"images/pic21.gif\"></td>
                            <td valign=\"top\"><img src=\"".$row["image"]."\" alt=\"".$row["image"]." width=\"120px\" height=\"90px\" border=\"0\">
                            	<br />
						<a href=\"peopledetail.php?peopleid=".$row["peopleid"]."&id=".$row["peoplegroup"].">".$row["hoten"]."</a>                            </td>
                            <td width=\"6px\" height=\"108px\" background=\"images/pic23.gif\">&nbsp;</td>
                          </tr>
                          <tr>
                            <td width=\"6px\" height=\"6px\"><img src=\"images/pic31.gif\" width=\"6\" height=\"6\" border=\"0\" /></td>
                            <td width=\"120px\" height=\"6px\" background=\"images/pic32.gif\"></td>
                            <td width=\"6px\" height=\"6px\"><img src=\"images/pic33.gif\" width=\"6\" height=\"6\" border=\"0\" /></td>
                          </tr>
                        </table>
						</div>
                        </td>";
						}
						$return = $return."
                                         
                      </tr> </table>";
					  
					  echo($return);
						/*echo("abc");*/

}

//video
if(isset($_REQUEST["video"]))
{
		$return="<div id=\"MediaPlayer\" align=\"center\">
<object id=\"player\" classid=\"clsid: D27CDB6E-AE6D-11cf-96B8-444553540000\" name=\"player\" width=\"328\" height=\"200\">
<param name=\"movie\" value=\"jwplayer/player.swf\"/>
<param name=\"allowfullscreen\" value=\"true\" />
<param name=\"allowscriptaccess\" value=\"always\" />
<param name=\"flashvars\" value=\"".$_REQUEST["video"]."\" />
<embed
type=\"application/x-shockwave-flash\"
id=\"player2\"
name=\"player2\"
src=\"jwplayer/player.swf\"
width=\"328\"
height=\"200\"
allowscriptaccess=\"always\"
allowfullscreen=\"true\"
flashvars=\"file=".$_REQUEST["video"]."&amp;autostart=true\">
</embed>
</object>
</div>";
	echo($return);
}

//music
if(isset($_REQUEST["music"]))
{
		$return="<div id=\"MediaPlayerMusic\" align=\"center\">
<object id=\"player\" classid=\"clsid: D27CDB6E-AE6D-11cf-96B8-444553540000\" name=\"player\" width=\"328\" height=\"22\">
<param name=\"movie\" value=\"jwplayer/player.swf\"/>
<param name=\"allowfullscreen\" value=\"true\" />
<param name=\"allowscriptaccess\" value=\"always\" />
<param name=\"flashvars\" value=\"".$_REQUEST["music"]."\" />
<embed
type=\"application/x-shockwave-flash\"
id=\"player3\"
name=\"player3\"
src=\"jwplayer/player.swf\"
width=\"328\"
height=\"22\"
allowscriptaccess=\"always\"
allowfullscreen=\"true\"
flashvars=\"file=".$_REQUEST["music"]."&amp;autostart=true\">
</embed>
</object>
</div>";
	echo($return);
}
?>