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
	<link type="text/css" rel="stylesheet" href="css/nivo-slider.css" />
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
			    				<div class="yl-block"><p>'.$row2["title"].'</p>');
						echo('</div> 
			    			</div>
				    	</div></div>');
						$k++;
					}
					
				?>
                </div>
			</div>
            </div>
           
			

			
		</div> <!-- end content -->
<div class="container">
		<div id="footer">
			
			<div class="footer-bot">
				<div class="container">
					<p class="pull-left"><?php ShowFooter1(); ?></p>
					
				</div>
			</div> <!-- end footer-bot -->
		</div> <!-- end footer -->
</div>
		<?php ShowHorMenu_Bootstrap_2level_mobile(); ?>
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
	    	height: '50%',
	    });
		
	</script>
    

</body>
</html>