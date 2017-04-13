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
        <style>
		*{
    margin:0px;
    padding:0px;
}
body{
    color:#444444;
    font-size:13px;
    background: #f2f2f2;
    font-family:"Century Gothic", Helvetica, sans-serif;
}
#content{
    margin:15px auto;
    text-align:center;
    width:565px;
    position:relative;
    height:100%;
}
#wrapper{
    -moz-box-shadow:0px 0px 3px #aaa;
    -webkit-box-shadow:0px 0px 3px #aaa;
    box-shadow:0px 0px 3px #aaa;
    -moz-border-radius:10px;
    -webkit-border-radius:10px;
    border-radius:10px;
    border:2px solid #fff;
    background-color:#f9f9f9;
    width:565px;
    overflow:hidden;
}
#steps{
    width:565px;
	/*height:320px;*/
    overflow:hidden;
}
.step{
    float:left;
    width:600px;
	/*height:320px;*/
}
#navigation{
    height:45px;
    background-color:#e9e9e9;
    border-top:1px solid #fff;
    -moz-border-radius:0px 0px 10px 10px;
    -webkit-border-bottom-left-radius:10px;
    -webkit-border-bottom-right-radius:10px;
    border-bottom-left-radius:10px;
    border-bottom-right-radius:10px;
}
#navigation ul{
    list-style:none;
	float:left;
	margin-left:22px;
}
#navigation ul li{
	float:left;
    border-right:1px solid #ccc;
    border-left:1px solid #ccc;
    position:relative;
	margin:0px 2px;
}
#navigation ul li a{
    display:block;
    height:45px;
    background-color:#444;
    color:#777;
    outline:none;
    font-weight:bold;
    text-decoration:none;
    line-height:45px;
    padding:0px 20px;
    border-right:1px solid #fff;
    border-left:1px solid #fff;
    background:#f0f0f0;
    background:
        -webkit-gradient(
        linear,
        left bottom,
        left top,
        color-stop(0.09, rgb(240,240,240)),
        color-stop(0.55, rgb(227,227,227)),
        color-stop(0.78, rgb(240,240,240))
        );
    background:
        -moz-linear-gradient(
        center bottom,
        rgb(240,240,240) 9%,
        rgb(227,227,227) 55%,
        rgb(240,240,240) 78%
        )
}
#navigation ul li a:hover,
#navigation ul li.selected a{
    background:#d8d8d8;
    color:#666;
    text-shadow:1px 1px 1px #fff;
}
span.checked{
    background:transparent url('../images/checked.png') no-repeat top left;
    position:absolute;
    top:0px;
    left:1px;
    width:20px;
    height:20px;
}
span.error{
    background:transparent url('../images/error.png') no-repeat top left;
    position:absolute;
    top:0px;
    left:1px;
    width:20px;
    height:20px;
}
#steps form fieldset{
    border:none;
    padding-bottom:20px;
}
#steps form legend{
    text-align:center;
    background-color:#f0f0f0;
    color:#666;
    font-size:18px;
    text-shadow:1px 1px 1px #fff;
    font-weight:bold;
    float:left;
    width:550px;
    padding:5px 0px 5px 10px;
    margin:10px 0px;
    border-bottom:1px solid #fff;
    border-top:1px solid #d9d9d9;
}
#steps form p{
    float:left;
    clear:both;
    margin:5px 0px;
    background-color:#f4f4f4;
    border:1px solid #fff;
    width:400px;
    padding:10px;
    margin-left:80px;
    -moz-border-radius: 5px;
    -webkit-border-radius: 5px;
    border-radius: 5px;
    -moz-box-shadow:0px 0px 3px #aaa;
    -webkit-box-shadow:0px 0px 3px #aaa;
    box-shadow:0px 0px 3px #aaa;
}
#steps form p label{
    width:100px;
    float:left;
    text-align:right;
    margin-right:15px;
    line-height:26px;
    color:#666;
    text-shadow:1px 1px 1px #fff;
    font-weight:bold;
}
#steps form input:not([type=radio]),
#steps form textarea,
#steps form select{
    background: #ffffff;
    border: 1px solid #ddd;
    -moz-border-radius: 3px;
    -webkit-border-radius: 3px;
    border-radius: 3px;
    outline: none;
    padding: 5px;
    width: 200px;
    float:left;
}
#steps form input:focus{
    -moz-box-shadow:0px 0px 3px #aaa;
    -webkit-box-shadow:0px 0px 3px #aaa;
    box-shadow:0px 0px 3px #aaa;
    background-color:#FFFEEF;
}
#steps form p.submit{
    background:none;
    border:none;
    -moz-box-shadow:none;
    -webkit-box-shadow:none;
    box-shadow:none;
}
#steps form button {
	border:none;
	outline:none;
    -moz-border-radius: 10px;
    -webkit-border-radius: 10px;
    border-radius: 10px;
    color: #ffffff;
    display: block;
    cursor:pointer;
    margin: 0px auto;
    clear:both;
    padding: 7px 25px;
    text-shadow: 0 1px 1px #777;
    font-weight:bold;
    font-family:"Century Gothic", Helvetica, sans-serif;
    font-size:22px;
    -moz-box-shadow:0px 0px 3px #aaa;
    -webkit-box-shadow:0px 0px 3px #aaa;
    box-shadow:0px 0px 3px #aaa;
    background:#4797ED;
}
#steps form button:hover {
    background:#d8d8d8;
    color:#666;
    text-shadow:1px 1px 1px #fff;
}
        span.reference{
            position:fixed;
            left:5px;
            top:5px;
            font-size:10px;
            text-shadow:1px 1px 1px #fff;
        }
        span.reference a{
            color:#555;
            text-decoration:none;
			text-transform:uppercase;
        }
        span.reference a:hover{
            color:#000;
            
        }
        h1{
            color:#ccc;
            font-size:24px;
            text-shadow:1px 1px 1px #fff;
            padding:20px;
        }
    </style>
    <SCRIPT language=JavaScript type=text/JavaScript>
					
					
					function Check()
					{
						if(document.form.name.value=="")
						{
							alert("Bạn chưa nhập họ tên!");
							document.form.name.focus();
							return false;
						}
						if(document.form.email.value=="")
						{
							alert("Bạn chưa nhập email!");
							document.form.email.focus();
							return false;
						}
						if(document.form.phone.value=="")
						{
							alert("Bạn chưa nhập số điện thoại");
							document.form.phone.focus();
							return false;
						}
						if(isNaN(document.form.phone.value))
						{
						alert("Bạn chưa nhập số điện thoại");
						document.form.phone.value="";
						document.form.phone.focus();
						return false;	
						}
						if(document.form.address.value=="")
						{
							alert("Bạn chưa nhập địa chỉ!");
							document.form.address.focus();
							return false;
						}
						
						
						
					}
					
					
					</SCRIPT>
          <table width="100%" border="0" cellpadding="0" cellspacing="0">
          <!--DWLayoutTable-->
        
          <tr>
            <td width="575" height="186" valign="top">
            <div id="content">
            <div id="wrapper">
                <div id="steps">
                    <form id="form" name="form" action="registeraddnew.php" method="post">
                        <fieldset class="step">
                            <legend>Thông tin đăng ký</legend>
                            <p>
                                <label for="name">Tên đầy đủ</label>
                                <input id="name" name="name" type="text" autocomplete="OFF" src=""/>
                            </p>
                            <p>
                                <label for="email">Email</label>
                                <input id="email" name="email" placeholder="info@itacenter.vn" type="email" autocomplete="OFF" src=""/>
                            </p>
                            <p>
                                <label for="phone">Điện thoại</label>
                                <input id="phone" name="phone" placeholder="vd +056 3520959" type="tel" autocomplete="OFF" src=""/>
                            </p>
                           <p>
                                <label for="address">Địa chỉ</label>
                                <input id="address" name="address"  type="add" autocomplete="OFF" src=""/>
                            </p>
                             <p>
                                <label for="company">Công ty</label>
                                <input id="company" name="company"  type="com" autocomplete="OFF" src=""/>
                            </p>
                            <p>
                                <label for="user_code_ita">Mã xác nhận</label>
                                <img src="visual-captcha.php" width="150" height="50" alt="ITA CAPTCHA" />
                                
                            </p>
                            <p>
                            <label for="user_code_ita">Nhập mã XN</label>
                            <input id="user_code_ita" name="user_code_ita"  type="user_code_ita" autocomplete="OFF" src=""/>
                            </p>
                            <p class="submit">
                                <button id="registerButton" type="submit" onclick="return Check();">Đăng ký</button>
                            </p>
                        </fieldset>
                        
                      
                    </form>
                </div>
                <div id="navigation" style="display:none;">
                    <ul>
                        <li class="selected">
                            <a href="#">Thông tin đăng ký</a>
                        </li>
                        
                    </ul>
                </div>
            </div>
        </div>
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
