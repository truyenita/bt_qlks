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
<html>
<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
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

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700" rel="stylesheet">

	<link rel="icon" href="images/front/favicon.png" type="image/x-icon">
	<link rel="stylesheet" type="text/css" href="page/css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="page/css/jquery.mmenu.all.css"/>
	<link rel="stylesheet" type="text/css" href="page/css/camera.css"/>
	<link rel="stylesheet" type="text/css" href="page/css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="page/css/common.css"/>
	
</head>
<body>
	<div id="wrapper">
		<div id="header">
			
			<div class="header-bot">
				<div class="container">
					<div class="tm-logo pull-left">
						<a href="index.php"><img src="page/images/logo.png" alt=""/></a>
					</div> <!-- end tm-logo -->
                   
					<div class="tm-menu pull-right">
						<?php ShowLeftAd() ?>
						<div class="clear"></div>
					</div>
                   
                    
				</div>
			</div> <!-- end header-bot -->
            <div class="header-top">
				<div class="container">
					<?php ShowHorMenu_Bootstrap_2level() ?>
					
				</div>
			</div> <!-- end header-top -->
		</div> <!-- end header -->

		<div id="content">
        <div class="container">
			<div class="tm-slider">
				<div class="camera_wrap" id="slider-id" style="height:500px;">
                <?php
					$str2="select * from imagelist order by imageid desc";
					$result2=mysql_query($str2) or die(mysql_error());
					$k=0;
					while ($row2=mysql_fetch_array($result2))
					{
						echo('<div data-src="'.$row2["file"].'">');
						echo('<div class="camera_caption fadeFromRight">
			    			<div class="container">
			    				<div class="yl-block"><h3>'.$row2["title"].'</h3>');
						echo('</div> 
			    			</div>
				    	</div></div>');
						$k++;
					}
					
				?>
                </div>
			</div>
            </div>
           
			

			<div class="content-bot">
				<div class="container">
					<div class="ct-bot-lf">
						<div class="block-bot tm-handbook">
							<div class="info-intro">
								

								<?php
							$str1="select menutitle,content from menu where menuid=70";
							$result=mysql_query($str1) or die(mysql_error());
							$row=mysql_fetch_array($result);
							//echo $row['content'];
							/*echo('<div class="tm-title text-left">');
							echo("<h2>".$row['menutitle']."</h2>");
							echo('</div><!-- end tm-title -->');*/
							$array11 = explode(' ', $row['content']);
										$sss11 = "";
										for($ii11=0;$ii11<=160;$ii11++)
										{
											$sss11=$sss11.$array11[$ii11]." ";
										}
										if(count($array11)>160)
										{ 
											$sss11 = $sss11."...";echo("<p>".$sss11."</p>");echo("<a href='view.php?id=70' class='view-more'>chi tiết</a>");
										}
										else
										{	
											echo ($row['content']);
										}
							?>

								
							</div> <!-- end info-intro -->
						</div> <!-- end block-bot -->

						
					</div> <!-- end ct-bot-lf -->
					<div class="ct-bot-rg">
						<div class="tm-support">
							<h3>Tin tức</h3>
						 <?php
							$str="select * from news where approval=1 and image!='' and topnews = 1 order by date desc,newsid desc limit 0,2";
							$result=mysql_query($str) or die(mysql_error());
							echo('<marquee direction="up" onmouseover=this.stop() onmouseout=this.start() scrollamount="1" scrolldelay="100" truespeed="true" width="270">');
							echo('<ul class="row lst-2-col">');
							while($row = mysql_fetch_array($result))
							{
								echo('<li class="col-md-12 col-sm-12 col-xs-4">');
								echo('<a class="img" href="details.php?newsid='.$row["newsid"].'&id='.$row["newsgroup"].'">');
								echo('<img src='.$row["image"].' alt=""/></a>');
								echo('<h4><a href="details.php?newsid='.$row['newsid'].'&id='.$row['newsgroup'].'">');
								echo($row["title"].'</a></h4>');
								echo('</li>');	
							}
							echo('</ul>');
							echo("</marquee>");
							?>
							
						</div> <!-- end tm-support -->
						<div class="tm-support">
                        <h3>Các doanh nghiệp</h3>
						<div class="banner hidden-sm hidden-xs">
							<?php
                                ShowRightAd();

                                ?>
						</div>
                        </div> <!-- end banner -->

						<div class="tm-like-box">
							<div class="fb-page" data-href="https://www.facebook.com/H%E1%BB%99i-N%E1%BB%AF-Doanh-Nh%C3%A2n-T%E1%BB%89nh-B%C3%ACnh-%C4%90%E1%BB%8Bnh-277545905702346/?ref=page_internal" data-tabs="timeline" data-width="270" data-height="186" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/H%E1%BB%99i-N%E1%BB%AF-Doanh-Nh%C3%A2n-T%E1%BB%89nh-B%C3%ACnh-%C4%90%E1%BB%8Bnh-277545905702346/?ref=page_internal" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/H%E1%BB%99i-N%E1%BB%AF-Doanh-Nh%C3%A2n-T%E1%BB%89nh-B%C3%ACnh-%C4%90%E1%BB%8Bnh-277545905702346/?ref=page_internal">Hội Nữ Doanh Nhân Tỉnh Bình Định</a></blockquote></div>
						</div> <!-- end tm-like-box -->
					</div> <!-- end ct-bot-rg -->
					<div class="clear"></div>
				</div>
			</div> <!-- end content-bot -->
		</div> <!-- end content -->

		<div id="footer">
			
			<div class="footer-bot">
				<div class="container">
					<p class="pull-left"><?php ShowFooter1(); ?></p>
					<p class="pull-right">Phát triển bởi <a href="#" target="_blank">group</a></p>
				</div>
			</div> <!-- end footer-bot -->
		</div> <!-- end footer -->

		<?php ShowHorMenu_Bootstrap_2level_mobile(); ?>
	</div> <!-- end wrapper -->


	<script type="text/javascript" src="page/js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="page/js/smoothscroll.js"></script>
	<script type="text/javascript" src="page/js/jquery.mmenu.all.min.js"></script>
	<script type="text/javascript" src="page/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="page/js/camera.js"></script>
	<script type="text/javascript" src="page/js/slick.min.js"></script>
	<script type="text/javascript" src="page/js/common.js"></script>
	<script type="text/javascript">
		$('#slider-id').camera({
	    	playPause: false,
	    	navigation: true,
	    	pagination: false,
	    	time: 6000,
	    	height: '31%',
	    });
	</script>
    
    
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>