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
            <td width="164" height="1">&nbsp;</td>
              <td width="9"></td>
              <td width="388"></td>
          </tr>
       <!--   <tr>
            <td height="89" colspan="3" valign="top">-->
                <?php
				
				///////////////////////////////////Hien thi noi dung trang hoi dap
				include("dbconnect.php");
				//Tinh tong so cau hoi
				$contentid=intval(mysql_real_escape_string($_REQUEST['id'])) ;
				$str1="select count(faqid) as sumfaq from faq";
				$result=mysql_query($str1) or die(mysql_error());
				$row=mysql_fetch_array($result);
				$sumdoc=$row['sumfaq'];
				
			    //Hien thi cac cau hoi
				
				echo("<TR><TD colspan=3><span style='color:#0099cc;'><strong><center>HỎI ĐÁP<br>");
				echo("Vui lòng đặt câu hỏi <a href='contact.php?id=33'>tại đây</a><br><br>");
				
				echo("</center></strong></span></td></tr>");
				
				$str1="select * from faq order by date desc";
				$result=mysql_query($str1) or die(mysql_error());					
				$page=intval(mysql_real_escape_string($_REQUEST['page'] ));
				if ($page>1000) $page=1;
				if ($page<1) $page=1;
				//Bo qua cac cau hoi dau 
				$recordonpage=getPara("recordsperpage","value1");
				$k=($page-1)*$recordonpage;
				for ($j=1;$j<=$k;$j++)
					$row=mysql_fetch_array($result);

				
				$i=1;
				while ($row=mysql_fetch_array($result))
				{
					if (strlen($row['answer'])>0)
					{
						$k++;
						
						$date=strtotime($row['date']);
						$update_date=date("d-m-Y", $date);
						
						?>
						
         <tr bgcolor="#486CFF">
            <td height="26" width="164" valign="middle">
			&nbsp;&nbsp;<img src="pic/question.jpg" width="20" height="20" align="absmiddle" /><span class="leftfooter" style="font-weight: bold">
			<?php 
			echo("&nbsp;&nbsp;".$update_date);
			?></span></td>
            <td>&nbsp;</td>
            <td valign="middle" width="388"><span class="leftfooter" style="font-weight: bold">
			<?php 
			echo($row['title']);
			?>
            </span></td>
          </tr>
          <tr bgcolor="#E1F2F1">
            <td height="38" valign="top">
			<?php 
			echo("&nbsp;Người gửi: ".$row['questioner']."<br>");
			echo("&nbsp;Email: ".$row['email']."<br>");
			echo("&nbsp;Địa chỉ: ".$row['address']."<br>");
			echo("&nbsp;Điện thoại: ".$row['phone']."<br>");
			?>			</td>
            <td>&nbsp;</td>
            <td valign="top">
						<?php 
			echo(" <b>Câu hỏi:</b> <br><br>".$row['question']."<br><br>");
			echo(" <b>Trả lời:</b> ".$row['answer']);
			?>			</td>
          </tr>
						
					<?php	
						
						//echo("<br>");
						//echo($k.". ");
						//echo("<a href='faqdetail.php?id=".$id."&faqid=".$row['faqid']."'>".$row['question']."</a><br>");
						
						
						
						if ($i==$recordonpage) break;
						$i++;
					}

				}
				
				
				/////////////////////////////////// PHAN PHAN TRANG
				echo("<tr><td colspan=3>");
				echo("<br>");
				echo("<div align='right'>");
				
						$p=$sumdoc/$recordonpage;
						$q=$sumdoc%$recordonpage;
						if ($sumdoc>$recordonpage)
						{
							
							//Ve trang dau tien
							echo("<a class='nav' href='faq.php?id=".$id."&page=1'> &lt;&lt; </a>");
							//Ve trang ke truoc (previous)
							if ($page>1)
							{
								$pp=$page-1;
								echo("<a class='nav' href='faq.php?id=".$id."&page=".$pp."'> &lt; </a>");
							}
							//Cac trang tiep theo
							echo("<span style='font-weight: bold; color: #0099FF'> Trang </span>");
							/*for ($j=1;$j<=$p;$j++)
							{ 
								echo("<a class='nav' href='lawdocument.php?id=".$id."&field=".$field."&level=".$level);
								echo("&type=".$type."&keyword=".$keyword."&page=".$j."'> [".$j."] </a>");	
							}*/
							$k=$page;
							if ($page+4>$p)
							{
								$k=(int)$p-3;
								if ($k<1) $k=1;
							}
							$c=0;					
							for ($j=$k;$j<=$p;$j++)
							{ 
								echo("<a class='nav' href='faq.php?id=".$id."&page=".$j."'> [".$j."] </a>");
								$c++;
								if ($c==5) break;	
							}
							$j=(int)$p+1;
							//Hien thi trang cuoi cung
							if (($q>0)&&($c<5))
							{ 
								echo("<a class='nav' href='faq.php?id=".$id."&page=".$j."'> [".$j."] </a>");
							}
							//Ve trang tiep theo (next)
							if ($q>0)
							{
								if ($page<=$p)
								{
									$np=$page+1;
									echo("<a class='nav' href='faq.php?id=".$id."&page=".$np."'> &gt; </a>");
								}
								//Ve trang cuoi cung
								echo("<a class='nav' href='faq.php?id=".$id."&page=".$j."'> &gt;&gt; </a>");								
							}
							else
							{
								if ($page<$p)
								{
									$np=$page+1;
									echo("<a class='nav' href='faq.php?id=".$id."&page=".$np."'> &gt; </a>");
								}
								
								//Ve trang cuoi cung
								$j--;
								echo("<a class='nav' href='faq.php?id==".$id."&page=".$j."'> &gt;&gt; </a>");															
							}								
						}
						
				echo("</div>");
				echo("</td></tr>");		
				////////////////////////////////// KET THUC PHAN TRANG
				
				
				
				mysql_free_result($result);
			?> 
			
	<!--		</td>
              </tr>-->
          
		  
		  <tr>
            <td height="50">&nbsp;</td>
            <td></td>
            <td></td>
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
