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
        
			<form id="form1" name="form1" method="post" action="ajvote.php" >
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="561"><div align="center" class="color_22" style="font-weight: bold; font-size: 14px">Ý KIẾN ĐỐI VỚI CÁC DỊCH VỤ HÀNH CHÍNH CÔNG</div></td>
          </tr>
            <!--DWLayoutTable-->
            <tr>
              <td width="561" class="vote">
              <p align="center" style="font-size: 14px; font-family: Arial, Helvetica, sans-serif; font-weight: bold"><span lang="FR" style="mso-ansi-language: FR">Để nhằm mục đích cải tiến cho công việc của </span>
                    <span lang="FR" style="mso-bidi-font-size:12.0pt; mso-ansi-language:FR">Sở Lao động - Thương binh và Xã hội</span> </p>
              <p align="center" class="MsoNormal" style="font-size: 14px; font-family: Arial, Helvetica, sans-serif; font-weight: bold"><span lang="FR" 
            style="mso-ansi-language:FR">ngày 
                càng được hoàn thiện</span>.</p>
              <p align="center" class="MsoNormal" style="font-size: 14px; font-family: &quot;Times New Roman&quot;, Times, serif"><span lang="FR" 
            style="mso-ansi-language:FR"> <span style="font-family: Arial, Helvetica, sans-serif">Đề nghị Đơn vị/ Ông/ Bà cho biết ý kiến đối với các dịch 
                vụ hành chính công:</span>
                  <o:p></o:p>
              </span></p>
              
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <![if !supportLists]><b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-bidi-font-size: 12.0pt;mso-ansi-language:FR">
        <span style="mso-list:Ignore; font-size: 14px">1.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">        </span></span></span></b><span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif">
        <![endif]>
        <b style="mso-bidi-font-weight:normal">
        Thái độ của CBNV Sở Lao động Thương binh và Xã hội</b> 
        <b style="mso-bidi-font-weight:normal">
        
        đối với Đơn vị/ Ông/ Bà</b></span><span style="font-size: 12px"><b style="mso-bidi-font-weight:normal"></b></span><span style="font-size: 14px"><b style="mso-bidi-font-weight:normal">
        <o:p></o:p>
        </b></span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <span lang="FR" 
            style="mso-ansi-language:FR"><o:p>
        &nbsp;</o:p></span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <span lang="FR" 
            style="mso-ansi-language:FR"><span style="mso-tab-count:1">
        <input name="1" type="radio" id="1" value="0" checked="checked" />
        </span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">Tốt/ Rất hài lòng&nbsp;&nbsp;&nbsp; </span>
        <span style="mso-spacerun:yes; font-family: Arial, Helvetica, sans-serif; font-size: 12px">&nbsp;&nbsp;
        <input type="radio" name="1" id="1" value="1" />
        </span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"> Đạt yêu 
        cầu/ hài lòng&nbsp;&nbsp; </span>
        <span style="mso-spacerun:yes; font-family: Arial, Helvetica, sans-serif; font-size: 12px">&nbsp;&nbsp;&nbsp; </span><span style="mso-tab-count:1; font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        <input type="radio" name="1" id="1" value="2" />
        </span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"> Chưa đạt yêu cầu/ 
        Không hài lòng</span>
        <o:p></o:p></span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-ansi-language:FR"><o:p>&nbsp;</o:p></span></b></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <![if !supportLists]><b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-ansi-language:FR"><span style="mso-list:Ignore">2.<span 
            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        </span></span></span></span></b><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        <![endif]>
        <b style="mso-bidi-font-weight:normal">
        Việc giữ gìn hồ sơ do 
        Đơn vị/ Ông/ Bà</b><b style="mso-bidi-font-weight:
normal"> nộp</b></span><span style="font-size: 12px"><b style="mso-bidi-font-weight:
normal"></b></span><span style="font-size: 14px"><b style="mso-bidi-font-weight:
normal">
        <o:p></o:p>
        </b></span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <span lang="FR" 
            style="mso-ansi-language:FR"><o:p>
        &nbsp;</o:p></span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <span lang="FR" 
            style="mso-ansi-language:FR">
        <input name="2" type="radio" id="2" value="0" checked="checked" />
        <span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif">Tốt/ Rất hài lòng&nbsp;&nbsp;&nbsp; </span>
        <span style="mso-spacerun:yes; font-size: 12px; font-family: Arial, Helvetica, sans-serif">&nbsp;&nbsp;</span>
        <span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif">
        <input type="radio" name="2" id="2" value="1" /> 
        Đạt yêu 
        cầu/ hài lòng&nbsp;&nbsp; </span>
        <span style="mso-spacerun:yes; font-size: 12px; font-family: Arial, Helvetica, sans-serif">&nbsp;&nbsp;&nbsp; </span>
        <span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif">
        <input type="radio" name="2" id="2" value="2" />
        Chưa đạt yêu cầu/ 
        Không hài lòng</span></span><span lang="FR" style="mso-bidi-font-size: 12.0pt;mso-ansi-language:FR"><o:p></o:p></span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-ansi-language:FR"><o:p>&nbsp;</o:p></span></b></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <![if !supportLists]><b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-bidi-font-size: 12.0pt;mso-ansi-language:FR">
        <span style="mso-list:Ignore">3.<span 
            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        </span></span></span></span></b><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        <![endif]>
        <b style="mso-bidi-font-weight:normal">
        Chất lượng xử lý hồ sơ của Sở</b> <b style="mso-bidi-font-weight:normal">đối với các hồ sơ của Đơn 
        vị/ Ông/ Bà nộp</b></span><span lang="FR" style="mso-bidi-font-size:12.0pt; mso-ansi-language:FR; font-size: 14px"><b style="mso-bidi-font-weight:normal"><o:p></o:p>
        </b></span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <span lang="FR" 
            style="mso-ansi-language:FR"><o:p>
        &nbsp;</o:p></span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <span lang="FR" 
            style="mso-ansi-language:FR">
        <input name="3" type="radio" id="3" value="0" checked="checked" />
        <span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"> Tốt/ Rất hài lòng&nbsp;&nbsp;&nbsp; </span>
        <span style="mso-spacerun:yes; font-family: Arial, Helvetica, sans-serif; font-size: 12px">&nbsp;&nbsp;</span>
        <span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        <input type="radio" name="3" id="3" value="1" />
        Đạt yêu 
        cầu/ hài lòng&nbsp;&nbsp; </span>
        <span style="mso-spacerun:yes; font-family: Arial, Helvetica, sans-serif; font-size: 12px">&nbsp;&nbsp;&nbsp;
        <input type="radio" name="3" id="3" value="2" />
        </span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"> Chưa đạt yêu cầu/ 
        Không hài lòng</span></span><span lang="FR" style="mso-bidi-font-size: 12.0pt;mso-ansi-language:FR; font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        <o:p></o:p>
        </span><span lang="FR" style="mso-bidi-font-size: 12.0pt;mso-ansi-language:FR; font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        </span><span lang="FR" style="mso-bidi-font-size: 12.0pt;mso-ansi-language:FR; font-family: Arial, Helvetica, sans-serif">
        </span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-ansi-language:FR"><o:p>&nbsp;</o:p></span></b></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <![if !supportLists]><b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-ansi-language:FR"><span style="mso-list:Ignore">4.<span 
            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        </span></span></span></b><![endif]><b style="mso-bidi-font-weight:normal">
        <span lang="FR" 
            style="mso-ansi-language:FR">
        <span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif">Thời gian </span></span>
        <span lang="FR" style="mso-bidi-font-size:12.0pt; mso-ansi-language:FR; font-size: 12px; font-family: Arial, Helvetica, sans-serif">Sở</span></b>        <span style="font-size: 12px; font-family: Arial, Helvetica, sans-serif"><b style="mso-bidi-font-weight:normal">
        xử lý các hồ sơ của </b>
        <b style="mso-bidi-font-weight:
normal">Đơn vị/ Ông/ Bà 
        <o:p></o:p>
        </b></span> </p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <span lang="FR" 
            style="mso-ansi-language:FR"><o:p>
        &nbsp;</o:p></span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <span lang="FR" 
            style="mso-ansi-language:FR">
        <input name="4" type="radio" id="4" value="0" checked="checked" /> 
        <span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">Tốt/ Rất hài lòng&nbsp;&nbsp;&nbsp; </span>
        <span style="mso-spacerun:yes; font-family: Arial, Helvetica, sans-serif; font-size: 12px">&nbsp;&nbsp;
        <input type="radio" name="4" id="4" value="1" />
        </span><span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px"> Đạt yêu 
        cầu/ hài lòng&nbsp;&nbsp; </span>
        <span style="mso-spacerun:yes; font-family: Arial, Helvetica, sans-serif; font-size: 12px">&nbsp;&nbsp;&nbsp; </span>
        <span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        <input name="4" type="radio" id="4" value="2" /> 
        Chưa đạt yêu cầu/ 
        Không hài lòng</span></span><span lang="FR" style="mso-bidi-font-size: 12.0pt;mso-ansi-language:FR; font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        <o:p></o:p>
        </span><span lang="FR" style="mso-bidi-font-size: 12.0pt;mso-ansi-language:FR; font-family: Arial, Helvetica, sans-serif; font-size: 12px">
        </span><span lang="FR" style="mso-bidi-font-size: 12.0pt;mso-ansi-language:FR; font-family: Arial, Helvetica, sans-serif">
        </span></p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <span lang="FR" style="mso-bidi-font-size:12.0pt; mso-ansi-language:FR"><o:p>&nbsp;</o:p></span>    </p>
    <p class="MsoNormal" style="font-size: 14; font-family: &quot;Times New Roman&quot;, Times, serif">
        <![if !supportLists]><b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="mso-ansi-language:FR"><span style="mso-list:Ignore">5.<span 
            style="font:7.0pt &quot;Times New Roman&quot;">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 14px">
        </span></span></span></span></b><span style="font-size: 14px">
        <![endif]>
        <b style="mso-bidi-font-weight:normal">
        
        <span style="font-family: Arial, Helvetica, sans-serif; font-size: 12px">Góp ý chung</span>:
        <o:p></o:p>
        </b></span></p>
    <p class="MsoNormal">
      <textarea name="textarea" id="44" cols="70" rows="2"></textarea>
      <span lang="FR" style="mso-bidi-font-size:12.0pt;font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;
mso-ansi-language:FR">
        <o:p></o:p>
        </span></p>
        </br>
        
    <p class="MsoNormal">
        <b style="mso-bidi-font-weight:normal">
        <span lang="FR" style="font-size:8.0pt;
font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR"><o:p>&nbsp;</o:p></span></b>
        <input type="submit" name="votes" id="votes" value="Gửi ý kiến"  />
    </p>
    <p class="MsoNormal">
        <span lang="FR" 
            style="font-family:&quot;Times New Roman&quot;,&quot;serif&quot;;mso-ansi-language:FR">
        <span style="font-size: 14px; font-family: Arial, Helvetica, sans-serif">Rất mong sự hợp tác của </span></span>
        <span lang="FR" style="mso-bidi-font-size:12.0pt; font-family:Arial, Helvetica, sans-serif; mso-ansi-language:FR; font-size: 14px">Đơn vị/ 
        Ông/ Bà</span><span lang="FR" 
            style="font-family:Arial, Helvetica, sans-serif; mso-ansi-language:FR; font-size: 14px"> 
        giúp </span>
        <span lang="FR" style="mso-bidi-font-size:12.0pt; font-family:Arial, Helvetica, sans-serif; mso-ansi-language:FR; font-size: 14px">Sở</span><span lang="FR" style="font-family:Arial, Helvetica, sans-serif; mso-ansi-language:FR; font-size: 14px"> để Sở </span>
        <span lang="FR" style="mso-bidi-font-size: 12.0pt; font-family:Arial, Helvetica, sans-serif; mso-ansi-language:FR; font-size: 14px">
        Lao động Thương binh và Xã hội</span> 
        <span lang="FR" style="font-family:Arial, Helvetica, sans-serif; mso-ansi-language:FR; font-size: 14px">luôn cải tiến được</span><span lang="FR" style="font-family:Arial, Helvetica, sans-serif; mso-ansi-language:FR; font-size: 14px"> hoạt động của mình. Xin chân thành cám ơn</span><span lang="FR" style="font-family:Tahoma, Arial, Helvetica, sans-serif; mso-ansi-language:FR; font-size: 14px"></span><span lang="FR" style="font-family:Tahoma, Arial, Helvetica, sans-serif; mso-ansi-language:FR; font-size: 14">.
        <o:p></o:p>
        </span> </p></td>
            </tr>
            <tr>
              <td class="vote"><!--DWLayoutEmptyCell-->&nbsp;</td>
            </tr>
          </table>
          </form>
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
