<?php
	session_start();
	error_reporting (0);
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
<!DOCTYPE html>
<html><!-- InstanceBegin template="/Templates/stttt1.dwt" codeOutsideHTMLIsLocked="false" -->
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
	<title><?php echo(getPara('title','value2'));?></title>
	<meta http-equiv="Content-type" content="text/html;charset=UTF-8">
	<meta name="description" content="mô tả website">
	<meta name="keywords" content="những từ khóa của website bạn">
	<meta name="SKYPE_TOOLBAR" content="SKYPE_TOOLBAR_PARSER_COMPATIBLE">
	<meta name="format-detection" content="telephone=no">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
	<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	<![endif]-->

	<link href='https://fonts.googleapis.com/css?family=Roboto:300,400,700,500&amp;subset=latin,vietnamese,latin-ext' rel='stylesheet' type='text/css'>

	<link rel="icon" href="images/front/favicon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/camera.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
	<link rel="stylesheet" type="text/css" href="css/common.css"/>
</head>
<body>
	<div id="wrapper">
		<div id="header">
			
<div class="container">
			<div class="header-ct">
				
					<img src="images/banner.png"/>
				</div>
			</div> <!-- end header-ct -->
<div class="container">
			<div class="header-bot">
				<?php ShowHorMenu_Bootstrap();?>
			</div></div> <!-- end header-bot -->
		</div> <!-- end header -->

		<div id="content"><div class="container">
			<div class="slider">
				<div class="camera_wrap" id="slider-id">
		    		<div data-src="images/anh1.png">		    			
		    		</div>
		    		<div data-src="images/anh2.png">		    			
		    		</div>
                    <div data-src="images/anh3.png">		    			
		    		</div>
		    		
		    	</div> <!-- end camera_wrap -->
			</div> <!-- end slider -->
</div>
			
<div class="container">
			<div class="tm-group">
				
					<div class="row">
                   <div class="container">
						<div class="col-md-9 col-sm-8 col-xs-12">
                         <!-- InstanceBeginEditable name="EditRegion1" -->
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
            <tr>
              <td width="561" height="50" valign="middle">
			  <?php
				//include("dbconnect.php");
				$id=intval(mysql_real_escape_string($_REQUEST['id'])) ;
				$str1="select * from menu where menuid=".$id;
				$result=mysql_query($str1) or
					die(mysql_error());
				$row=mysql_fetch_array($result);
				echo($row['content']);
				mysql_free_result($result);
			?>			  </td>
            </tr>
			    <?php
				$str1="select * from list where menuid=".$id." order by listorder,listid desc";
				$result=mysql_query($str1) or
					die(mysql_error());
				$i=1;
				$c=0;
				RecordsIgnore($row,$result);
				echo("<tr><td height='30' valign='top'>");					
				while ($row=mysql_fetch_array($result))
				{
					$c++;
					if ((strlen($row['listcontent'])==0)&&(strlen($row['file'])==0))
					{
						echo("<strong>".$row['listtitle']."</strong><br><br>");
					}
					else
					{
						if (strlen($row['listcontent'])>0)
						{
							echo($i.". <a class='newstitlelink");echo(template());echo("' ");
							echo("href='listdetail.php?listid=".$row['listid']."&id=".$id."'>".$row['listtitle']."</a><br><br>");
							$i++;
						}
						else
						{
							echo($i.". <a class='newstitlelink");echo(template());echo("' ");
							echo("href='".$row['file']."'>".$row['listtitle']."</a><br><br>");
							$i++;
						}	
					}
					if ($c==getPara('recordsperpage','value1')) break;	
				}
				echo("</td></tr>");
				mysql_free_result($result);
			?>
            <tr>
				<td width="561" height="40" valign="middle">
		  <?php
		  	$selectcountsql="select count(*) as sumrecords from list where menuid=".$id." order by listorder,listid desc";
			ShowPageBreak1($selectcountsql,'list.php?id='.$id);
		  ?>			
				</td>
			</tr>
          </table>
        <!-- InstanceEndEditable -->
						</div>
						<div class="col-md-3 col-sm-4 col-xs-12">
							<div class="tm-contact text-center">
								<h4>Đối tác</h4>
								<?php
                                ShowRightAd();

                                ?>
							</div> <!-- end tm-contact --><?php
                                ShowImageList();

                                ?>
						</div>
                       </div>
					</div>
				</div>
			</div> <!-- end tm-group -->
		</div> <!-- end content -->
<div class="container">
		<div id="footer">
				<div class="footer-bot">
				<div class="container">
					<p class="pull-left">
                    <?php ShowFooter1(); ?>
                    </p>

					</div>
				</div>
			</div> <!-- end footer-bot -->
		</div> <!-- end footer -->
	</div> <!-- end wrapper -->

<script type="text/javascript" src="js/admin2/jquery.min.js"></script>
    <script type="text/javascript" src="js/admin2/sb-admin-2.js"></script>
    <script type="text/javascript" src="js/admin2/metisMenu.min.js"></script>
	<script type="text/javascript" src="js/admin2/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="js/smoothscroll.js"></script>
	<script type="text/javascript" src="js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="js/camera.js"></script>
	<script type="text/javascript" src="js/slick.min.js"></script>
	<script type="text/javascript" src="js/simpleMobileMenu.js"></script>
	<script type="text/javascript" src="js/lightslider.js"></script>
	<script type="text/javascript" src="js/common.js"></script>
    <script type="text/javascript" src="js/jquery.tmpl.min.js"></script>
		<script type="text/javascript" src="js/jquery.elastislide.js"></script>
		<script type="text/javascript" src="js/gallery.js"></script>
</body>

<!-- InstanceEnd --></html>
