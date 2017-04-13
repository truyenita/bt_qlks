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
    <link rel="stylesheet" type="text/css" href="page/css/ninja-slider.css"/>
	<link rel="stylesheet" type="text/css" href="css/nivo-slider.css"/>
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
                    <div id="slider" class="nivoSlider"> 
						<?php ShowLeftAd() ?>
                        </div>
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
			
			<div class="content-top">
				<div class="container">
					<div class="ct-bot-lf">
						<div class="block-bot tm-handbook">
							
                            <div class="tm-title text-left">
                            <h2>Album hoạt động </h2>
                            </div>
			 			 
                    
                            <div class="tm-slick">
								<ul class="lst-handbook slick-handbook">
                                <?php
								 $gallary=intval(mysql_real_escape_string($_REQUEST['gallary'])) ;
                                $str1="select * from album1 order by id desc";
								//echo($str1);
                                $result=mysql_query($str1) or die(mysql_error());
                               // $stt=0;
								
                               while($row= mysql_fetch_array($result))
                                {
                                        echo('<li><div class="detail">');
                                        echo("<a class='img' href='albumdetail.php?gallary=".$row['id']."'><img src=".$row['link']."></a>");
										echo('<div class="txt-hb">');
                                        echo"<h3><a href='albumdetail.php?gallary=".$row['id']."'>".$row['tenalbum']."</a></h3>";
										echo('</div></div></li>');
        
                                }   
                                ?>
                                </ul>
                            </div>
							
						</div> <!-- end block-bot -->

						
					</div> <!-- end ct-bot-lf -->
					<div class="ct-bot-rg">
                    <div class="tm-right-ct list-banner">
						
                        <?php
							$str="select * from news where approval=1 and image!='' and topnews = 1 order by date desc,newsid desc limit 0,3";
							$result=mysql_query($str) or die(mysql_error());							
							echo('<ul>');							
							while($row = mysql_fetch_array($result))
							{
								echo('<li><div class="detail">');
								echo('<a class="img" href="details.php?newsid='.$row["newsid"].'&id='.$row["newsgroup"].'">');
								echo('<img src='.$row["image"].' alt=""/></a>');
								echo('<h4><a href="details.php?newsid='.$row['newsid'].'&id='.$row['newsgroup'].'">');
								echo($row["title"].'</a></h4>');
								echo('</div></li>');	
							}
							echo('</ul>');
						
							?>
					</div> <!-- end list-banner -->
					<div class="clear"></div>
						

						<div class="tm-like-box">
							<div class="fb-page" data-href="https://www.facebook.com/H%E1%BB%99i-N%E1%BB%AF-Doanh-Nh%C3%A2n-T%E1%BB%89nh-B%C3%ACnh-%C4%90%E1%BB%8Bnh-277545905702346/?ref=page_internal" data-tabs="timeline" data-width="270" data-height="186" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/H%E1%BB%99i-N%E1%BB%AF-Doanh-Nh%C3%A2n-T%E1%BB%89nh-B%C3%ACnh-%C4%90%E1%BB%8Bnh-277545905702346/?ref=page_internal" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/H%E1%BB%99i-N%E1%BB%AF-Doanh-Nh%C3%A2n-T%E1%BB%89nh-B%C3%ACnh-%C4%90%E1%BB%8Bnh-277545905702346/?ref=page_internal">Hội Nữ Doanh Nhân Tỉnh Bình Định</a></blockquote></div>
						</div> <!-- end tm-like-box -->
					</div> <!-- end ct-bot-rg -->
					<div class="clear"></div>
				</div>
			</div> <!-- end content-bot -->
		</div> <!-- end content -->
<!-- Cac Doanh nghiep -->

				<div class="container">
                <div class="block-bot tm-handbook">
							<div class="tm-title text-left">
								<h2>Các doanh nghiệp</h2>
							</div> <!-- end tm-title -->
							

							<div class="tm-slick">
								<ul class="lst-handbook slick-handbook">
                               
                                    <?php
									$str1="select * from ad where adleft=0 and adorder>=0 order by adorder";
									$result=mysql_query($str1) or die(mysql_error());			
									while($row=mysql_fetch_array($result))
									{
										echo('<li>
										<div class="detail">');
										echo("<a class=\"img\" href=".$row['adurl']."><img src='".$row['adimage']."' alt='".$row['adname']."' title='".$row['adname']."' /></a>");
										echo("</div>
									</li>");
									}
									?>
								</ul>
							</div> <!-- end tm-slick -->
						</div> <!-- end block-bot -->
                        </div>
                        <div class="container">
		<div id="footer">
			
			<div class="footer-bot">
				<div class="container">
					<p class="pull-left"><?php ShowFooter1(); ?></p>
					
				</div>
			</div> <!-- end footer-bot -->
		</div> <!-- end footer -->
</div>
		<?php ShowHorMenu_Bootstrap_2level_mobile(); ?>>
		</nav>
	</div> <!-- end wrapper -->


	<script type="text/javascript" src="page/js/jquery-1.9.1.js"></script>
	<script type="text/javascript" src="page/js/smoothscroll.js"></script>
	<script type="text/javascript" src="page/js/jquery.mmenu.all.min.js"></script>
	<script type="text/javascript" src="page/js/jquery.easing.1.3.js"></script>
	<script type="text/javascript" src="page/js/camera.js"></script>
	<script type="text/javascript" src="page/js/slick.min.js"></script>
	<script type="text/javascript" src="page/js/common.js"></script>
    <script language="javascript" src="css/jquery.nivo.slider.js"></script> 
<script>
    $(window).load(function() {
        $('#slider').nivoSlider();
        $('#slider1').nivoSlider();
    });
    </script>
	<script type="text/javascript">
		$('#slider-id').camera({
	    	playPause: false,
	    	navigation: true,
	    	pagination: false,
	    	time: 6000,
	    	height: '31%',
	    });
	</script>
    <script type="text/javascript" src="page/js/ninja-slider.js"></script>
                               <script>
                            function lightbox(idx) {
                               
                                //show the slider's wrapper: this is required when the transitionType has been set to "slide" in the ninja-slider.js
                                var ninjaSldr = document.getElementById("ninja-slider");
                                ninjaSldr.parentNode.style.display = "block";
                    
                                nslider.init(idx);
                    
                                var fsBtn = document.getElementById("fsBtn");
                                fsBtn.click();
                            }
                    
                            function fsIconClick(isFullscreen) { //fsIconClick is the default event handler of the fullscreen button
                                if (isFullscreen) {
                                    var ninjaSldr = document.getElementById("ninja-slider");
                                    ninjaSldr.parentNode.style.display = "none";
                                }
                            }
                        </script>
    <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
</body>
</html>