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
		
 <SCRIPT language=JavaScript type=text/JavaScript>
					<!--
					
					function Check()
					{
						if(document.form.questioner.value=="")
						{
							alert("Bạn chưa nhập họ tên!");
							document.form.questioner.focus();
							return false;
						}
						if(document.form.address.value=="")
						{
							alert("Bạn chưa nhập địa chỉ!");
							document.form.address.focus();
							return false;
						}
						if(document.form.phone.value=="")
						{
							alert("Bạn chưa nhập số điện thoại");
							document.form.phone.focus();
							return false;
						}
						if(document.form.question.value=="")
						{
							alert("Bạn chưa nhập nội dung góp ý/câu hỏi!");
							document.form.question.focus();
							return false;
						}
					}
					
					//-->
					</SCRIPT>		
          <div class="tm-grp">
          <div align="center" style="font-weight: bold; color: #0066FF"><?php echo(getPara('title','value2'));?></div><br>
              <div align="center">Xin vui lòng điền thông tin vào form dưới đây để gửi câu hỏi hoặc liên lạc với chúng tôi! <?php echo(getPara('title','value2'));?> sẽ trả lời hoặc liên lạc trong thời gian sớm nhất!&nbsp;</div>
           
			  <div class="panel panel-primary">
								<div class="panel-body">
			  <form name=form action='faqaddnew.php' method='post' class="form-horizontal">
			  			  <input type="hidden" name="csrf" value="<?php echo $key; ?>" />

			  			  <div class="form-group">
								    <label for="exampleInputName" class="col-md-4 control-label">Họ tên <span style="color: #FF0000">(*)</span></label>
								     <div class="col-md-8">
								     <input class="form-control" name="questioner" type="text" id="questioner"  maxlength="50" />
								     </div>
							</div>
							<div class="form-group">
								    <label for="exampleInputName" class="col-md-4 control-label">Địa chỉ  <span style="color: #FF0000">(*)</span></label>
								     <div class="col-md-8">
								     <input class="form-control" name="address" type="text" id="address"  maxlength="50" />
								     </div>
							</div>
							<div class="form-group">
								    <label for="exampleInputName" class="col-md-4 control-label">Điện thoại  <span style="color: #FF0000">(*)</span></label>
								     <div class="col-md-8">
								     <input class="form-control" name="phone" type="text" id="phone"  maxlength="50" onkeydown="return checkkytu(event);"/>
								     </div>
							</div>
							<div class="form-group">
								    <label for="exampleInputName" class="col-md-4 control-label">Email  <span style="color: #FF0000">(*)</span></label>
								     <div class="col-md-8">
								     <input class="form-control" name="email" type="text" id="email"  maxlength="50" />
								     </div>
							</div>
							<div class="form-group">
								    <label for="exampleInputName" class="col-md-4 control-label">Tiêu đề  <span style="color: #FF0000">(*)</span></label>
								     <div class="col-md-8">
								     <input class="form-control" name="title" type="text" id="title"  maxlength="50" />
								     </div>
							</div>
							<div class="form-group">
								    <label for="exampleInputName" class="col-md-4 control-label">Mã xác nhận  </label>
								     <div class="col-md-8">
								     <p><img src="visual-captcha.php" width="150" height="50" alt="ITA CAPTCHA" /></p>
								     </div>
							</div>
							<div class="form-group">
								    <label for="exampleInputName" class="col-md-4 control-label">Nhập mã xác nhận  <span style="color: #FF0000">(*)</span></label>
								     <div class="col-md-8">
								     <input class="form-control" name="user_code_ita" type="text" id="user_code_ita"  maxlength="50" />
								     </div>
							</div>

			 				<div class="form-group">
								    <label for="exampleInputName" class="col-md-4 control-label">Nội dung  <span style="color: #FF0000">(*)</span></label>
								     <div class="col-md-8">
								     <textarea class="form-control" name="question" type="text" id="question"  maxlength="50"> </textarea>
								     </div>
							</div>
							
							<div class="pull-right">
								    <button type="submit" class="btn btn-primary" onClick="return Check();">Gửi</button>
								    <button type="reset" class="btn btn-default">Xóa</button>
								     </div>
							
			 
			
                      
				
				</form>
				
              (Các dòng có dấu <span style="color: #FF0000">(*)</span> là bắt buộc nhập)
              				</div></div>
          </div>
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
