<? ob_start(); ?>
<?php
include("dbconnect.php");
if(isset($_POST["votes"]))
{
	if($_POST["1"]==0)
		{
			$t11=1;$t12=0;$t13=0;
		}
		else if($_POST["1"]==1)
		{
		$t11=0;$t12=1;$t13=0;
		}
		else
		{
			$t11=0;$t12=0;$t13=1;
		}
		
	if($_POST["2"]==0)
		{
			$t21=1;$t22=0;$t23=0;
		}
		else if($_POST["2"]==1)
		{
		$t21=0;$t22=1;$t23=0;
		}
		else
		{
			$t21=0;$t22=0;$t23=1;
		}

	if($_POST["3"]==0)
		{
			$t31=1;$t32=0;$t33=0;
		}
		else if($_POST["3"]==1)
		{
			$t31=0;$t32=1;$t33=0;
		}
		else
		{
			$t31=0;$t32=0;$t33=1;
		}

	if($_POST["4"]==0)
		{
			$t41=1;$t42=0;$t43=0;
		}
		else if($_POST["4"]==1)
		{
			$t41=0;$t42=1;$t43=0;
		}
		else
		{
			$t41=0;$t42=0;$t43=1;
		}

$sql_add_cs = "insert into tbl_vote(`11`,`12`,`13`,`21`,`22`,`23`,`31`,`32`,`33`,`41`,`42`,`43`,`44`)
	 values('".$t11."','".$t12."','".$t13."','".$t21."','".$t22."','".$t23."','".$t31."','".$t32."','".$t33."','".$t41."','".$t42."','".$t43."'	,'".mysql_real_escape_string($_POST['44'])
."'									)";
	if(mysql_query($sql_add_cs))
	{
		header("Location:index.php");
	}
	else
	{
		echo(mysql_error());
		mysql_error();
	}
}
?>
