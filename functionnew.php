<?php
function setPara($para,$value,$newvalue)
{
		$str9="update options set ".$value."='".$newvalue."' where name='".$para."'";
		$result9=mysql_query($str9) or die(mysql_error());
		//mysql_free_result($result9);
}
?>