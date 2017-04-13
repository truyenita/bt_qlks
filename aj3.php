<?php
include("dbconnect.php");
$str = $_POST["str"];
if(substr($str,0,4) == "LOAD")
{
		
			
			$sql_select_video = "select * from video where trang_thai='1' and hot='1' and id='".substr($str,4)."' order by id desc";
			//$objQuery = mysql_query($sql_select_video) or die ("Error Query [".$sql_select_video."]");
			$result_select_video = mysql_query($sql_select_video) or die(mysql_error());
			$i=1;
				while($row_select_video = mysql_fetch_array($result_select_video))
				{
						
						$return="<div id=\"MediaPlayer333\" align=\"center\">
						
						<object id=\"player3\" classid=\"clsid: D27CDB6E-AE6D-11cf-96B8-444553540000\" name=\"player\" width=\"216\" height=\"175\">
						<param name=\"movie\" value=\"jwplayer/player.swf\"/>
						<param name=\"allowfullscreen\" value=\"true\" />
						<param name=\"allowscriptaccess\" value=\"always\" />
						<param name=\"flashvars\" value=\"".$row_select_video["link"]."\" />
						<embed
						type=\"application/x-shockwave-flash\"
						id=\"player3\"
						name=\"player3\"
						src=\"jwplayer/player.swf\"
						width=\"216\"
						height=\"175\"
						allowscriptaccess=\"always\"
						allowfullscreen=\"true\"
						flashvars=\"file=".$row_select_video["link"]."&amp;autostart=true\">
						</embed>
						</object>
					
						</div>";
						
						//echo($row_select_video["link"]);
						}
		echo($return);
	}
?>


