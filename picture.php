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
			<div class="header-top">
				<div class="container">
					<div class="pull-left hidden-xs">
						<span><i class="tm-ic tm-p"></i>Phone:</span>
						<span><i class="tm-ic tm-a"></i>Address:</span>
					</div>
					<div class="pull-right">
						<div class="tm-search pull-left">
							<input type="text" class="form-control" placeholder="tìm kiếm ...">
							<button class="tm-ic">Search</button>
						</div> <!-- end tm-search -->
						<div class="tm-social pull-right">
							<ul>
								<li><a href="#" class="tm-ic tm-f">Facebook</a></li>
								<li><a href="#" class="tm-ic tm-t">Twitter</a></li>
								<li><a href="#" class="tm-ic tm-g">Google Plus</a></li>
								<li><a href="#" class="tm-ic tm-i">Linked</a></li>
							</ul>
						</div>
					</div>
				</div>
			</div> <!-- end header-top -->
			<div class="header-bot">
				<div class="container">
					<div class="tm-logo pull-left">
						<a href="index-2.html"><img src="page/images/logo.png" alt=""/></a>
					</div> <!-- end tm-logo -->
					<?php ShowHorMenu_Bootstrap_2level() ?>
				</div>
			</div> <!-- end header-bot -->
		</div> <!-- end header -->

		<div id="content">
			<div class="tm-slider">
				<div class="camera_wrap" id="slider-id" style="height:500px;">
				    <div data-src="page/images/slider-1.jpg">

				    	<div class="camera_caption fadeFromRight">
			    			<div class="container">
			    				<div class="yl-block">
				    				<h3>CÂN BẰNG - HẠNH PHÚC – TIẾN BỘ</h3>
					    			<p>LẮNG NGHE - CHIA SẺ  - TÍCH CỰC - VUI TƯƠI</p>
					    			
			    				</div> <!-- end yl-block -->
			    			</div>
				    	</div>
				    </div>
				    <div data-src="page/images/slider-2.jpg">
				    	<div class="camera_caption fadeFromBottom">
			    			<div class="container">
			    				<div class="yl-block">
				    				<h3>CÂN BẰNG - HẠNH PHÚC – TIẾN BỘ</h3>
					    			<p>LẮNG NGHE - CHIA SẺ  - TÍCH CỰC - VUI TƯƠI</p>
					    			
			    				</div> <!-- end yl-block -->
			    			</div>
				    	</div>
				    </div>
				</div>
			</div>

			

			<div class="content-bot">
				<div class="container">
					<div class="ct-bot-lf">
						<div class="block-bot tm-handbook">
							<table width="100%" border="0" cellpadding="0" cellspacing="0">
            <!--DWLayoutTable-->
                   <tr>
                      <td height="421" valign="top">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                       
                      <tr>
                        <td colspan="3">&nbsp;</td>
                        
                      </tr>
                      <tr>
                      	<td colspan="3" valign="top">
                      <div id="divpic">
                      <table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ffffff">
                      <tr>
                        
                        <?php 
						
						include("dbconnect.php");
			  			$str1="select * from imagelist order by imageid desc";
			  			$result_pic=mysql_query($str1) or die(mysql_error());
						$sttpic = 0;
						while(($row_pic = mysql_fetch_array($result_pic)) and $sttpic++ < 40)
						{							
						?>
                        <?php 
						if($sttpic%4==1 and $sttpic >2)
						{
						?>
                        </tr>
                        <tr>
                        <?php
						} ?>
                        <td valign="top" align="center">
                        <table width="132px" height="120px" border="0" align="center" cellpadding="0" cellspacing="0" bgcolor="#FFFFFF">
                          
                          <tr>
                            
                            <td valign="top"><img class="zoom" src="<?php echo($row_pic["file"]); ?>" alt="<?php echo($row_pic["title"]); ?>" width="131" height="90px" border="0" />
                            	<br />
                                <?php echo($row_pic["title"]); ?>
                            </td>
                            
                          </tr>
                          
                        </table>
						
                        </td>
                        <?php } ?>
                                         
                      </tr> 
                      </table>
                      </div>  
                      </td>
                      </tr>                 
                      <tr>
                        <td colspan="3" align="center">
                          <div align="center">
                            <input id="hiddenPageCurrent" name="hiddenPageCurrent" type="hidden" value="0" /><input id="hiddenPageMax" name="hiddenPageMax" type="hidden" value="<?php $pages = (int)(mysql_num_rows($result_pic)/40);
						  							 $residual = mysql_num_rows($result_pic)%40;
													 if($residual > 0) {$pages+=1;}
													 echo($pages); ?>" />
                            <button value="nav_first" style="width:15px;height:13px;border:0px;size:15px;background-image:url(images/nav_first.gif);font-weight:bold;cursor:pointer" onclick="nav_paging(this.value);"></button>
                            <button value="nav_prev" style="width:15px;height:13px;border:0px;size:15px;background-image:url(images/nav_prev.gif);font-weight:bold;cursor:pointer" onclick="nav_paging(this.value);"></button>
                            <?php for($i=0;$i<$pages;$i++)
								{ ?>                                
                            <a href="#" id="<?php echo($i); ?>" class="<?php echo($i?"num_paging":"num_paging_select") ?>" onclick="num_paging(this.id);"><?php echo($i+1); ?></a>							
                            <?php 
														} ?>
                            <button value="nav_next" style="width:15px;height:13px;border:0px;size:15px;background-image:url(images/nav_next.gif);font-weight:bold;cursor:pointer" onclick="nav_paging(this.value);"></button>
                            <button value="nav_last" style="width:15px;height:13px;border:0px;size:15px;background-image:url(images/nav_last.gif);font-weight:bold;cursor:pointer" onclick="nav_paging(this.value);"></button>
                        </div></td>
                      </tr>
                      <tr>
                        <td colspan="3"></td>
                        
                      </tr>
                    </table>

                      </td>
                    </tr>
          </table>
		  <script type="text/javascript">
					function num_paging(num)
					{
						curPage = document.getElementById('hiddenPageCurrent').value;
						if(parseInt(num)==parseInt(curPage))
						{
							alert('trang hien tai');
							return false;							
						}
						document.getElementById(curPage).className = 'num_paging';
						document.getElementById(num).className = 'num_paging_select';
						document.getElementById('hiddenPageCurrent').value = num;
						showpage(num);
						return false;
					}
					function nav_paging(values)
					{
						switch(values)
						{
							case 'nav_first':
								if(document.getElementById('hiddenPageCurrent').value=='0')
								{
									return false;
								}
								else
								{
									//quay lai page number 0
									var curPage = document.getElementById('hiddenPageCurrent').value;
									document.getElementById(curPage).className = "num_paging";
									document.getElementById(0).className = "num_paging_select";
									document.getElementById('hiddenPageCurrent').value='0';
									showpage(0);
									
									return false;
								}
							break;
							case 'nav_prev':
								if(document.getElementById('hiddenPageCurrent').value=='0')
								{
									return false;
								}
								else
								{
									//quay lai page number preview
									var curPage = document.getElementById('hiddenPageCurrent').value;
									document.getElementById(curPage).className = "num_paging";
									curPage--;
									document.getElementById(curPage).className = "num_paging_select";
									document.getElementById('hiddenPageCurrent').value=curPage;
									showpage(curPage);
									return false;
								}
							break;
							case 'nav_next':
								if(parseInt(document.getElementById('hiddenPageCurrent').value) < parseInt(document.getElementById('hiddenPageMax').value)-1)
								{
									//toi page number next
									var curPage = document.getElementById('hiddenPageCurrent').value;
									document.getElementById(curPage).className = "num_paging";
									curPage = parseInt(curPage)+1;
									document.getElementById(curPage).className = "num_paging_select";
									document.getElementById('hiddenPageCurrent').value=curPage;
									showpage(curPage);
									
									return false;
									
								}
								else
								{
									return false;
								}
							break;
							case 'nav_last':
								if(parseInt(document.getElementById('hiddenPageCurrent').value) < parseInt(document.getElementById('hiddenPageMax').value)-1)
								{
									//toi page number last
									var curPage = document.getElementById('hiddenPageCurrent').value;
									document.getElementById(curPage).className = "num_paging";
									document.getElementById('hiddenPageCurrent').value= parseInt(document.getElementById('hiddenPageMax').value) - 1;
									document.getElementById(parseInt(document.getElementById('hiddenPageMax').value) - 1).className = "num_paging_select";				
									showpage(parseInt(document.getElementById('hiddenPageMax').value) - 1);
									return false;
									
								}
								else
								{
									return false;
								}
							break;
						}
						//var p = document.getElementById("hiddenPage").value;
						alert(values);
						//document.getElementById("hiddenPage").value = p;
						return false;
					}
					function changeCss(element)
					{
						
						for(i=0;i<=3;i++)
						{
							document.getElementById(i).className = 'num_paging';
							
						}
						element.className = 'num_paging_select';
						return false;
					}
					
					function showpage(valueSelect)
					{
					//var idalbum1 = document.getElementById('idalbum1').value;
					if (valueSelect.length==0)
					  { 
					  document.getElementById("divpic").innerHTML="";
					  return;
					  }
					if (window.XMLHttpRequest)
					  {// code for IE7+, Firefox, Chrome, Opera, Safari
					  xmlhttp=new XMLHttpRequest();
					  }
					else
					  {// code for IE6, IE5
					  xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
					  }
					xmlhttp.onreadystatechange=function()
					  {
					  if (xmlhttp.readyState==4 && xmlhttp.status==200)
						{
						document.getElementById("divpic").innerHTML=xmlhttp.responseText;
						}
					  }
					  
					xmlhttp.open("GET","aj.php?page_picAc="+valueSelect,true);	
					xmlhttp.send();
					}
					</script>
							
						</div> <!-- end block-bot -->

						
					</div> <!-- end ct-bot-lf -->
					<div class="ct-bot-rg">
						<div class="tm-support">
							<h3>Liên hệ BBT</h3>

							<ul>
								<li>
									<strong>Mr A</strong>
									<span>Call: </span>
									<span>Email: tuvan1@gmail.com</span>
									<p class="sp-social">
										<a href="#" class="tm-ic tm-f">Facebook</a>
										<a href="#" class="tm-ic tm-s">Skype</a>
										<a href="#" class="tm-ic tm-y">Yahoo</a>
									</p>
								</li>
								<li>
									<strong>Mr B</strong>
									<span>Call: </span>
									<span>Email: tuvan1@gmail.com</span>
									<p class="sp-social">
										<a href="#" class="tm-ic tm-f">Facebook</a>
										<a href="#" class="tm-ic tm-s">Skype</a>
										<a href="#" class="tm-ic tm-y">Yahoo</a>
									</p>
								</li>
								<li class="text-center">
									<span class="cl-red">Mọi chi tiết xin vui lòng gửi về địa chỉ</span>
									<span>hotro@gmail.com</span>
								</li>
							</ul>
						</div> <!-- end tm-support -->

						<div class="banner hidden-sm hidden-xs">
							<?php
                                ShowRightAd();

                                ?>
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
					<p class="pull-left">Bản quyền thuộc về  © 2017. Tất cả các quyền được bảo hộ.</p>
					<p class="pull-right">Phát triển bởi <a href="#" target="_blank">group</a></p>
				</div>
			</div> <!-- end footer-bot -->
		</div> <!-- end footer -->

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
	<script type="text/javascript">
		$('#slider-id').camera({
	    	playPause: false,
	    	navigation: true,
	    	pagination: false,
	    	time: 6000,
	    	height: '31%',
	    });
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