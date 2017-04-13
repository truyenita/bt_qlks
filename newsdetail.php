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
		
		<script language="JavaScript">
			var gAutoPrint = true; // Flag for whether or not to automatically call the print function
			
			function printSpecial()
			{
				if (document.getElementById != null)
				{
					var html = '<HTML>\n<HEAD>\n';
			
					if (document.getElementsByTagName != null)
					{
						var headTags = document.getElementsByTagName("head");
						if (headTags.length > 0)
							html += headTags[0].innerHTML;
					}
					
					html += '\n</HE' + 'AD>\n<BODY>\n';
					
					var printReadyElem = document.getElementById("printReady");
					
					if (printReadyElem != null)
					{
							html += printReadyElem.innerHTML;
					}
					else
					{
						alert("Không tìm thấy đoạn printReady trong mã HTML");
						return;
					}
						
					html += '\n</BO' + 'DY>\n</HT' + 'ML>';
					
					var printWin = window.open("","printSpecial");
					printWin.document.open();
					printWin.document.write(html);
					printWin.document.close();
					if (gAutoPrint)
						printWin.print();
				}
				else
				{
					alert("Chức năng này chỉ được hỗ trợ đối với các trình duyệt mới!");
				}
			}
			
			</script>
		
        <div class="tm-resistant">
       
       <!--
					<ul class="list-res row">                    
						<li class="col-md-9 col-sm-6 col-xs-6">
							<div class="detail">
								<i class="tm-ic tm-res-1"></i>
								<h4><a href="#">Chống Thấm Khe Co Giãn, Khe Hở</a></h4>
								<p>Tường ngoài trời của một ngôi nhà qua thời gian sử dụng thường có các vết rạn nứt xuất hiện do nhiều nguyên nhân. Nước mưa thấm vào các vị trí này gây thấm ...</p>
								
							</div>
						</li>
					</ul>
                    -->
                    <?php
					$newsid=intval(mysql_real_escape_string($_REQUEST['newsid'] ));
					$str1="select * from news where approval=1 and newsid=".$newsid;
					$result=mysql_query($str1) or die(mysql_error());
					echo('<ul class="list-res row">');
					if ($row=mysql_fetch_array($result))
					{
						echo('<li class="col-md-12 col-sm-12 col-xs-12">');
							echo('<div class="detail">');
							echo("<h4>");
							echo($row['title']."</h4>");
							if (strlen($row['image'])>0)
							echo("<img src='".$row['image']."' />");
							echo("<h5>".$row['abstract']."</h5>");
							echo($row['content']);
							echo('</div>');
							echo('</li>');
					}
					echo('</ul>');
					?>
                    
        </div>
                <?php
					///////////////////////////////////Hien thi noi dung tin duoc chon
				/*include("dbconnect.php");
				//echo("Hello!");
				$newsid=intval(mysql_real_escape_string($_REQUEST['newsid'] ));
				$str1="select * from news where approval=1 and newsid=".$newsid;
				$result=mysql_query($str1) or die(mysql_error());
				if ($row=mysql_fetch_array($result))
				{
					echo("<div id='printReady'>");
					echo("<h3");echo("'>".$row['title']."</h3>"); 
					//echo("<br>");
					//echo("<br>");
					if (strlen($row['image'])>0)
					{
						switch ($row['imagepos'])
						{
							case 1:
								echo("<div style='float:left;width: 250px;margin-top: 5px;margin-right: 10px;margin-bottom: 5px;
	margin-left: 0px;'>");
								echo("<img class='iconleft250' src='".$row['image']."' />");
								if (strlen($row['imagedes'])>0)
								echo("<p style='text-align: center; '> <em>".$row['imagedes']."</em></p>");
								echo("</div>");
								break;
							case 2:
								echo("<div style='float:right;width: 250px;margin-top: 5px;margin-right: 0px;margin-bottom: 5px;
	margin-left: 10px;'>");
								echo("<img class='iconright250' src='".$row['image']."' />");
								if (strlen($row['imagedes'])>0)
								echo("<p style='text-align: center; '> <em>".$row['imagedes']."</em></p>");
								echo("</div>");
								break;		
							//case 3:
								//echo("<img class='iconleft250' src='".$row['image']."' />");
								//break;													
						}
					}
					echo("<div  class='abstract'>".$row['abstract']."</div>");
					if ($row['imagepos']!=3) echo("<br>");
					
					if ($row['imagepos']==3)
					{
						echo("<p style='text-align: center; '>"); 
						echo("<img alt='' src='".$row['image']."' style='width: 350px; height: 263px; ' /></p> ");
						if (strlen($row['imagedes'])>0)
							echo("<p style='text-align: center; '> <em>".$row['imagedes']."</em></p>");
					}
					
					echo("<div  class='newscontent'>".$row['content']."</div>");
					echo("<br>");
					$date=strtotime($row['date']);							
					$update_date=date("d-m-Y", $date);
					echo("<strong>".$row['author']."</strong>&nbsp;&nbsp;(Cập nhật ngày ".$update_date.")");
					echo("<a alt='In trang này' title='In trang này' href='javascript:void(printSpecial())'>");
					echo("&nbsp;&nbsp;<img src='image/printButton.png' />");echo("</a>");
					echo("&nbsp;&nbsp;");
					echo("<a alt='Gửi email cho bạn bè' title='Gửi email cho bạn bè' href='mailto:?subject=Tin từ Website Sở Thông tin và Truyền thông Bình Định&body=Hãy đọc tin này: ");
					echo(curPageURL()."'");
					echo("&nbsp;&nbsp;&nbsp;<img src='image/emailButton.png' />");echo("</a>");
					echo("<br>");echo("<br>");
					echo("<img src='image/nextnews.jpg' />");
					echo("<br>");echo("<br>");
					echo("</div>");
				
					//Hien thi cac tin lien quan
					$newsgroup=intval(mysql_real_escape_string($_REQUEST['id'] ));
					$str1="select * from news where (approval=1 and newsgroup=".$newsgroup." and newsid<".$newsid.") order by date desc,newsid desc";
					$result=mysql_query($str1) or
						die(mysql_error());
					$i=0;
					while ($row=mysql_fetch_array($result))
					{
						if ($i==0) {echo("<strong>Các tin liên quan:</strong>");echo("<br>");}
						$i=$i+1;
						echo("<img src='image/newspoint.jpg' />&nbsp;&nbsp;");
						$date=strtotime($row['date']);							
						$update_date=date("d-m-Y", $date);
						
						echo("<a alt='".$row['abstract']."' title='".$row['abstract']."'  href='newsdetail.php?newsid=".$row['newsid']."&id=".$row['newsgroup']."' class='newstitle");echo(template());echo("'>".$row['title']."</a>"." (".$update_date.")");
						echo("<br>");
						if ($i==5) break;
					}
					mysql_free_result($result);
				}*/
			?>			
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
