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
		 <?php
		 	//Xoa tat ca thong tin trong bang rssnews
			$page=mysql_real_escape_string($_REQUEST['page']) ;
			if ($page<1)
			{
				deleteall();
				$str0="select * from rssurl";
				$result0=mysql_query($str0) or die(mysql_error());
				//Dua thong tin vao bang rssnews
				while ($row0=mysql_fetch_array($result0))
				{
					$content = file_get_contents($row0['url']);
					//http://vietnamnet.vn/khoahoc/index.rss
					//http://www.thanhnien.com.vn//_layouts/NewsRss.aspx?List=&MainCat=C%C3%B4ng+ngh%E1%BB%87+th%C3%B4ng+tin
					//getPara('newsfromurl','value3')
					$x = new SimpleXmlElement($content);
					$s="";
					foreach($x->channel->item as $entry) 
					{
						$s.="<a target='_blank' class='nav' target='_blank' href='".$entry->link;
						$s.="'>" . xmlentities(strip_tags($entry->title)) . "</a><br>".xmlentities(strip_tags($entry->description))."<br><br>";
						insertrssnews(xmlentities(strip_tags($entry->title)),xmlentities(strip_tags(trim($entry->description))),strip_tags(trim($entry->link)));
					}
					//echo($s);
				}
				mysql_free_result($result0);	
			}

			//Doc thong tin trong bang rssnews va hien thi
			$str0="select * from rssnews";
			$result0=mysql_query($str0) or die(mysql_error());
			$s="<br><center><strong>TIN RSS</strong></center><br>";
			$c=0;
			RecordsIgnore($row0,$result0);
			while ($row0=mysql_fetch_array($result0))
			{
				$c++;
				$s.="<a target='_blank' class='nav' target='_blank' href='".$row0['url'];
				$s.="'>" . $row0['title'] . "</a><br>".$row0['abstract']."<br><br>";
				if ($c==10) break;
			}
			echo($s);
			mysql_free_result($result0);			
		?>			
          <tr>
            <td height="30" valign="middle">
		  <?php
		  	$selectcountsql="select count(*) as sumrecords from rssnews order by rssnewsid";
			ShowPageBreak($selectcountsql,"rssnews.php");
		  ?>				
			</td>
		</tr>			  
			  
			  
			  
          <tr>
            <td height="10"></td>
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
