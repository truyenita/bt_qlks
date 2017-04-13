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
              <td height="38" colspan="2" valign="top"><div align="center" style="color: #0099FF"><span style="font-weight: bold;">SƠ ĐỒ WEBSITE </span></div></td>
            </tr>
            <tr>
              <td width="74" height="168" valign="top"><!--DWLayoutEmptyCell-->&nbsp;</td>
            <td width="487" valign="top">
			  <?php
	////////////////////////////////////////////////So do website

	$str0="select * from menu where vermenu=1 order by menuorder, menuid ";
	$result0=mysql_query($str0) or
		die(mysql_error());
	while($row0=mysql_fetch_array($result0))
	{

		switch ($row0['menutype'])
		{
			case 0://Muc CHINH, lien ket den trang chu index.php
				echo("<img src='image/point.jpg' /><a href='index.php?id=".$row0['menuid']);
				echo("' class='nav");echo(template());echo("'>&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;			
			case 1://Muc con, chua tin tuc con 1 newsgroup, lien ket den trang newsgroup.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='image/point1.jpg' /><a href='newsgroup.php?id=".$row0['menuid']."' class='nav");echo(template());echo("'>");
				echo("&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;      
			case 2://Muc con, lien ket den trang noi dung cuc bo content.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;");
				echo("<img src='image/point1.jpg' />");
				echo("<a href='content.php?id=".$row0['menuid']."' class='nav");echo(template());echo("'>");
				echo("&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;  						
			case 3://Muc CHINH, khong co lien ket
				echo(" <img src='image/point.jpg' />&nbsp;&nbsp;<strong>".$row0['menutitle']."</strong>");
				echo("<br>");echo("<br>");break;
			case 4://Muc CHINH, lien ket ngoai
				echo("<img src='image/point.jpg' /><a href='".$row0['link']);
				echo("' class='nav");echo(template());echo("'>&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;				
			case 5://Muc CHINH, lien ket den trang noi dung cuc bo content.php
				echo("<img src='image/point.jpg' /><a href='content.php?id=".$row0['menuid']);
				echo("' class='nav");echo(template());echo("'>&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;
			case 6://Muc CHINH, lien ket den trang van ban phap luat lawdocument.php
				echo("<img src='image/point.jpg' /><a href='lawdocument.php?id=".$row0['menuid']);
				echo("' class='nav");echo(template());echo("'>&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;
			case 7://Muc CHINH, lien ket den trang hoi dap faq.php
				echo("<img src='image/point.jpg' /><a href='faq.php?id=".$row0['menuid']);
				echo("' class='nav");echo(template());echo("'>&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;
			case 8://Muc CHINH, lien ket den trang lien he contact.php
				echo("<img src='image/point.jpg' /><a href='contact.php?id=".$row0['menuid']);
				echo("' class='nav");echo(template());echo("'>&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;	
			case 9://Muc CHINH, lien ket den trang so do website webstruct.php
				echo("<img src='image/point.jpg' /><a href='webstruct.php");
				echo("' class='nav");echo(template());echo("'>&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;
			case 10://Muc CHINH, lien ket den trang danh muc lien ket list.php
				echo("<img src='image/point.jpg' /><a href='list.php?id=".$row0['menuid']);
				echo("' class='nav");echo(template());echo("'>&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;
			case 11://Muc CHINH, lien ket den trang lich cong tac timetable.php
				echo("<img src='image/point.jpg' /><a href='timetable.php?id=".$row0['menuid']);
				echo("' class='nav");echo(template());echo("'>&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;
			case 12://Muc CHINH, lien ket den trang danh ba DN orglist.php
				echo("<img src='image/point.jpg' /><a href='orglist.php?id=".$row0['menuid']);
				echo("' class='nav");echo(template());echo("'>&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;	
			case 13://Muc con, lien ket den trang rssnews.php
				echo("&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src='image/point1.jpg' /><a href='rssnews.php?id=".$row0['menuid']."' class='nav");echo(template());echo("'>");
				echo("&nbsp;&nbsp;".$row0['menutitle']."</a>");
				echo("<br>");echo("<br>");break;      																			
		}
	}

	mysql_free_result($result0);
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
