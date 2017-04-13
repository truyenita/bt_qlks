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
              <td width="561">
	<div id="MediaPlayer" align="center">
    <table width="551" class="deco" cellSpacing=0 cellPadding=0 
                  align=center border=1 bordercolor="#a6caf0">
       			 <tr>
          				<td width="100%" align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">
        <div style="width:100%">
                <object id="player" classid="clsid: D27CDB6E-AE6D-11cf-96B8-444553540000" name="player" width="551" height="200">
                <param name="movie" value="jwplayer/player.swf"/>
                <param name="allowfullscreen" value="true" />
                <param name="allowscriptaccess" value="always" />
                <param name="flashvars" value="" />
                <embed
                type="application/x-shockwave-flash"
                id="player2"
                name="player2"
                src="jwplayer/player.swf"
                width="551"
                height="200"
                allowscriptaccess="always"
                allowfullscreen="true"
                flashvars="file="
                ></embed>
                </object> 
   		 </div>
          </td>
                       </tr>
                  <tr>
           			<td width="80%" align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">
                      <div style="width:100%"></div>
                      </td>
                    </tr>
                </table>
     </div> 
		  </td>
            </tr>
		
			<tr>
			  <td width="561"><!--DWLayoutEmptyCell-->&nbsp;</td>
			  </tr>
			<!--begin td 3 -->
      <tr>
      <td width="561">
      <table width="100%" class="deco" height=29 cellSpacing=0 cellPadding=0 
                  align=center border=1 bordercolor="#a6caf0">
        <tr>
          <td width="5%" align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">STT</td>
           <td width="80%" align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">Tên </td>
			<td width="15%" align=middle vAlign=center 
                      background=pic/bgbt.gif class="table_title">Hình minh họa</td>
                      
         
        </tr>
        <?php 
		include("dbconnect.php");
		$sql_select_video = "select * from video where trang_thai='1' order by id desc";
		$stt=1;
		$result_select_video = mysql_query($sql_select_video) or die(mysql_error());
		while($row_select_video = mysql_fetch_array($result_select_video))
		{
		?>
        <tr>
       		<div id="MediaPlayer222">
          <td align="middle"><?php echo($stt++); ?></td>
          <td><a href="#" id="abc" onclick="JavaScript:showVideo('LOAD<?php echo($row_select_video['id']);?>');" >
          <?php echo($row_select_video["ghi_chu"]); ?></a>
          
          </td>
		  <td><center>
          <img src="<?php echo($row_select_video["imagelink"]); ?>" border="0" height="25" width="65" /></center>
          </td>
          </div>
        </tr>
        <?php } ?>
      </table>
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
