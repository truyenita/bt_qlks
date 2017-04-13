<?php
include("dbconnect.php");
$str = $_POST["str"];
if(substr($str,0,4) == "LOAD")
{
			$sql_select_video = "select * from video where trang_thai='1' and id='".substr($str,4)."' order by id desc";
			//$objQuery = mysql_query($sql_select_video) or die ("Error Query [".$sql_select_video."]");
			$result_select_video = mysql_query($sql_select_video) or die(mysql_error());
			$i=1;
				while($row_select_video = mysql_fetch_array($result_select_video))
				{
						
						$return="<div id=\"MediaPlayer\" align=\"center\">
						<table width=\"551\" class=\"deco\" cellSpacing=0 cellPadding=0 
                  align=center border=1 bordercolor=\"#a6caf0\">
       			 	<tr>
          				<td width=\"100%\" align=middle vAlign=center 
                      >
						<div style=\"width:100%\">
						<object id=\"player\" classid=\"clsid: D27CDB6E-AE6D-11cf-96B8-444553540000\" name=\"player\" width=\"551\" height=\"200\">
						<param name=\"movie\" value=\"jwplayer/player.swf\"/>
						<param name=\"allowfullscreen\" value=\"true\" />
						<param name=\"allowscriptaccess\" value=\"always\" />
						<param name=\"flashvars\" value=\"".$row_select_video["link"]."\" />
						<embed
						type=\"application/x-shockwave-flash\"
						id=\"player2\"
						name=\"player2\"
						src=\"jwplayer/player.swf\"
						width=\"551\"
						height=\"200\"
						allowscriptaccess=\"always\"
						allowfullscreen=\"true\"
						flashvars=\"file=".$row_select_video["link"]."&amp;autostart=true\">
						</embed>
						</object>
						</div>
						</td>
                       </tr>
					  <tr>
						<td width=\"80%\" align=left vAlign=left 
						  background=pic/bgbt.gif class=\"table_title\">
						  <div align=\"left\" style=\"width:100%\">".$row_select_video['ghi_chu']."</div>
						  
						  </td>
						</tr>
						
						
                </table>
						</div>";
						//echo($row_select_video["link"]);
						}
		echo($return);
	}
?>

