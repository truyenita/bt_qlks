<?php
	session_start(); 
	include("../../dbconnect.php");
	////////////////////////////////Cap nhat thong tin bat/tat menu doc
	$action=$_REQUEST['action'] ;
	if ($action==1)
	{
			$onoff=$_REQUEST['onoff'] ;
			$str1="update ad set onoff=".$onoff;
			echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			mysql_free_result($result);
			//Chuyen ve trang thong bao
			header('Location:messageadmin.php?id=1');
	}
	
/*	////////////////////////////////////// Xoa user
	if ($action==6)
	{
			$userid=$_REQUEST['userid'] ;
			if ($userid==$_SESSION['user'])
				header('Location:messageadmin.php?id=2');
			else
			{
				//Xoa thong tin trong bang user
				$str1="delete from user where DeptID='".$userid."'";
				$result=mysql_query($str1) or die(mysql_error());
				//Xoa thong tin trong bang reportinfo
				$str1="delete from reportinfo where macq='".$userid."'";
				$result=mysql_query($str1) or die(mysql_error());	
				//Xoa thong tin trong bang otherapp
				$str1="delete from otherapp where macq='".$userid."'";
				$result=mysql_query($str1) or die(mysql_error());		
				mysql_free_result($result);
				//Chuyen ve trang quan tri thanh vien
				header('Location:userlist.php');
			}
	}	
	/////////////////////////////////////////////////////Nhap bao cao nguon nhan luc
	if ($action==2)
	{
		//Lay thong tin tu form
		$macq=$_SESSION['user'];
		$quy=$_REQUEST['quy'] ;
		$nam=$_REQUEST['nam'] ;
		//Kiem tra xem bao cao co bi khoa hay khong?
		$str1="select sum(locked) as sumlocked from reportinfo where quy=".$quy." and nam=".$nam;
		$result=mysql_query($str1) or die(mysql_error());
		$row=mysql_fetch_array($result);
		if ($row['sumlocked']>0)
		{
				header('Location:message.php?id=5&quy='.$quy.'&nam='.$nam);
				mysql_free_result($result);
		}
		else
		{			
			$ldcntt=$_REQUEST['ldcntt'] ;
			$hotenld=$_REQUEST['hotenld'] ;
			$chucvuld=$_REQUEST['chucvuld'] ;
			$dtld=$_REQUEST['dtld'] ;
			$emailld=$_REQUEST['emailld'] ;
			$cvcntt=$_REQUEST['cvcntt'] ;
			$hotencv=$_REQUEST['hotencv'] ;
			$chucvucv=$_REQUEST['chucvucv'] ;
			$phongbancv=$_REQUEST['phongbancv'] ;
			$namsinhcv=$_REQUEST['namsinhcv'] ;
			$tdocnttcv=$_REQUEST['tdocnttcv'] ;
			$ngoaingucv=$_REQUEST['ngoaingucv'] ;
			$chuyenmoncv=$_REQUEST['chuyenmoncv'] ;
			$dtcv=$_REQUEST['dtcv'] ;
			$emailcv=$_REQUEST['emailcv'] ;
			$tscbcc=$_REQUEST['tscbcc'] ;
			$tsts=$_REQUEST['tsts'] ;
			$tsths=$_REQUEST['tsths'] ;
			$tsdh=$_REQUEST['tsdh'] ;
			$tscd=$_REQUEST['tscd'] ;
			$tstc=$_REQUEST['tstc'] ;
			$tsktv=$_REQUEST['tsktv'] ;
			$tsa=$_REQUEST['tsa'] ;
			$tsb=$_REQUEST['tsb'] ;
			$tskhac=$_REQUEST['tskhac'] ;
			$hocts=$_REQUEST['hocts'] ;
			$hocths=$_REQUEST['hocths'] ;
			$hocdh=$_REQUEST['hocdh'] ;
			$hoccd=$_REQUEST['hoccd'] ;
			$hoctc=$_REQUEST['hoctc'] ;
			$hocktv=$_REQUEST['hocktv'] ;
			$hoca=$_REQUEST['hoca'] ;
			$hocb=$_REQUEST['hocb'] ;
			$hockhac=$_REQUEST['hockhac'] ;
			$dxnhanluc=$_REQUEST['dxnhanluc'] ;
			
			
			//Kiem tra da co 1 trong cac loai bao cao chua?
			$str1="select * from reportinfo where macq='".$macq."' and quy=".$quy." and nam=".$nam;
			$result=mysql_query($str1) or die(mysql_error());
			if ($row=mysql_fetch_array($result))
			{
				//Kiem tra da co bao cao nguon nhan luc chua?
				$str1="select * from reportinfo where bcnhanluc=1 and macq='".$macq."' and quy=".$quy." and nam=".$nam;
				$result=mysql_query($str1) or die(mysql_error());
				if ($row=mysql_fetch_array($result))
				{
					mysql_free_result($result);
					//Chuyen ve trang thong bao da co bao cao nguon nhan luc
					header('Location:message.php?id=1&quy='.$quy.'&nam='.$nam);				
				}
				else
				{
					//Da co loai bao cao khac, them bao cao nguon nhan luc
					//$str1="aaa";
					$str1="update reportinfo set bcnhanluc=1,ldcntt=".$ldcntt.",hotenld='".$hotenld."',chucvuld='".$chucvuld."',";
					$str1=$str1."dtld='".$dtld."',emailld='".$emailld."',cvcntt=".$cvcntt.",hotencv='".$hotencv."',";
					$str1=$str1."chucvucv='".$chucvucv."',phongbancv='".$phongbancv."',namsinhcv=".$namsinhcv.",tdocnttcv=".$tdocnttcv;
					$str1=$str1.",ngoaingucv='".$ngoaingucv."',chuyenmoncv='".$chuyenmoncv."',dtcv='".$dtcv."',";
					$str1=$str1."emailcv='".$emailcv."',tscbcc=".$tscbcc.",tsts=".$tsts.",tsths=".$tsths.",tsdh=".$tsdh.",tscd=".$tscd.",";
					$str1=$str1."tstc=".$tstc.",tsktv=".$tsktv.",tsa=".$tsa.",tsb=".$tsb.",tskhac=".$tskhac.",hocts=".$hocts.",";
					$str1=$str1."hocths=".$hocths.",hocdh=".$hocdh.",hoccd=".$hoccd.",hoctc=".$hoctc.",hocktv=".$hocktv.",hoca=".$hoca.",";
					$str1=$str1."hocb=".$hocb.",hockhac=".$hockhac.",dxnhanluc='".$dxnhanluc."' where macq='".$macq."' and quy=".$quy." and nam=".$nam;
					//echo($str1);
					$result=mysql_query($str1) or die(mysql_error());
					mysql_free_result($result);
					
					//Chuyen ve trang thong bao
					header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
				}
			}
			else
			{
				//Them bao cao moi (hien tai chua co loai bao cao nao)		
				$str1="insert into reportinfo (bcnhanluc,macq,quy,nam,ldcntt,hotenld,chucvuld,dtld,emailld,cvcntt,hotencv,";
				$str1=$str1."chucvucv,phongbancv,namsinhcv,tdocnttcv,ngoaingucv,chuyenmoncv,dtcv,emailcv,tscbcc,tsts,tsths,tsdh,tscd,";
				$str1=$str1."tstc,tsktv,tsa,tsb,tskhac,hocts,hocths,hocdh,hoccd,hoctc,hocktv,hoca,hocb,hockhac,dxnhanluc)"; 
				$str1=$str1." values (1,'". $macq."',".$quy.",".$nam.",".$ldcntt.",'".$hotenld."','".$chucvuld."','".$dtld."','".$emailld;
				$str1=$str1."',".$cvcntt.",'".$hotencv."','".$chucvucv."','".$phongbancv."',".$namsinhcv.",".$tdocnttcv.",'".$ngoaingucv."','";
				$str1=$str1.$chuyenmoncv."','".$dtcv."','".$emailcv."',".$tscbcc.",".$tsts.",".$tsths.",".$tsdh.",".$tscd.",".$tstc.",";
				$str1=$str1.$tsktv.",".$tsa.",".$tsb.",".$tskhac.",".$hocts.",".$hocths.",".$hocdh.",".$hoccd.",".$hoctc.",".$hocktv.",";
				$str1=$str1.$hoca.",".$hocb.",".$hockhac.",'".$dxnhanluc."')";
				$result=mysql_query($str1) or die(mysql_error());
				mysql_free_result($result);
				
				//Chuyen ve trang thong bao
				header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
				//header('Location:geninfo.php');
			}
		}	
	}

	/////////////////////////////////////////////////////////////////////Thay doi mat khau
	if ($action==3)
	{
		$userid=$_REQUEST['userid'] ;
		$oldpass=$_REQUEST['oldpass'] ;
		$newpass1=$_REQUEST['newpass1'] ;
		$newpass2=$_REQUEST['newpass2'] ;
		//echo($oldpass."///////////".$_SESSION['pass']);
		if ($oldpass!=$_SESSION['pass'])
			header('Location:message.php?id=3');
		else
		{	
			$str1="update user set Password='".$newpass1."' where DeptID='".$userid."'" ;
			$result=mysql_query($str1) or die(mysql_error());
			mysql_free_result($result);
			header('Location:message.php?id=4');
		}
	}


	//////////////////////////////////////////////////////////////////////Them don vi moi
	if ($action==4)
	{
		$deptid=$_REQUEST['deptid'] ;
		$deptname=$_REQUEST['deptname'] ;
		$address=$_REQUEST['address'] ;
		$phone=$_REQUEST['phone'] ;
		$email=$_REQUEST['email'] ;
		$role=$_REQUEST['role'] ;
		$str1="insert into user (DeptID,Password,Role,Deptname,Address,Phone,Email) values ('".$deptid."','123',".$role.",'".$deptname."','".$address."','".$phone."','".$email."')";
		$result=mysql_query($str1) or die(mysql_error());
		mysql_free_result($result);
		//Chuyen ve trang thong bao
		header('Location:messageadmin.php?id=1');
	}
	
	
	////////////////////////////////////////////////////////////////////////Nhap bao cao ha tang CNTT
	if ($action==5)
	{
		//Lay thong tin tu form
		$macq=$_SESSION['user'];
		$quy=$_REQUEST['quy'] ;
		$nam=$_REQUEST['nam'] ;	
		//Kiem tra xem bao cao co bi khoa hay khong?
		$str1="select sum(locked) as sumlocked from reportinfo where quy=".$quy." and nam=".$nam;
		$result=mysql_query($str1) or die(mysql_error());
		$row=mysql_fetch_array($result);
		if ($row['sumlocked']>0)
		{
				header('Location:message.php?id=5&quy='.$quy.'&nam='.$nam);
				mysql_free_result($result);
		}
		else
		{			
			$tsserver=$_REQUEST['tsserver'] ;
			$tsrouter=$_REQUEST['tsrouter'] ;
			$tsswitch=$_REQUEST['tsswitch'] ;
			$tspc=$_REQUEST['tspc'] ;
			$tslaptop=$_REQUEST['tslaptop'] ;
			$tsprinter=$_REQUEST['tsprinter'] ;
			$tscamera=$_REQUEST['tscamera'] ;
			$tsprojector=$_REQUEST['tsprojector'] ;
			$tsups=$_REQUEST['tsups'] ;
			$tsscanner=$_REQUEST['tsscanner'] ;
			$tsvdcamera=$_REQUEST['tsvdcamera'] ;
			$tsplotter=$_REQUEST['tsplotter'] ;
			$tstbikhac=$_REQUEST['tstbikhac'] ;
			$lan=$_REQUEST['lan'] ;
			$tsmaylan=$_REQUEST['tsmaylan'] ;
			$lanknoiall=$_REQUEST['lanknoiall'] ;
			$wan=$_REQUEST['wan'] ;
			$tsmaywan=$_REQUEST['tsmaywan'] ;
			$mdwan=$_REQUEST['mdwan'] ;
			$internet=$_REQUEST['internet'] ;
			$tsinternet=$_REQUEST['tsinternet'] ;
			$tslline=$_REQUEST['tslline'] ;
			$tscquang=$_REQUEST['tscquang'] ;
			$tsadsl=$_REQUEST['tsadsl'] ;
			$tsdialup=$_REQUEST['tsdialup'] ;
			$mdinternet=$_REQUEST['mdinternet'] ;
			$dxhatang=$_REQUEST['dxhatang'] ;
	
			
			//Kiem tra da co 1 trong cac loai bao cao chua?
			$str1="select * from reportinfo where macq='".$macq."' and quy=".$quy." and nam=".$nam;
			$result=mysql_query($str1) or die(mysql_error());
			if ($row=mysql_fetch_array($result))
			{
				//Kiem tra da co bao cao ha tang chua?
				$str1="select * from reportinfo where bchatang=1 and macq='".$macq."' and quy=".$quy." and nam=".$nam;
				$result=mysql_query($str1) or die(mysql_error());
				if ($row=mysql_fetch_array($result))
				{
					mysql_free_result($result);
					//Chuyen ve trang thong bao da co bao cao ha tang
					//header('Location:message.php?id=1&quy='.$quy.'&nam='.$nam);				
				}
				else
				{
					//Da co loai bao cao khac, them bao cao ha tang
					$str1="update reportinfo set bchatang=1, tsserver=".$tsserver;
					$str1=$str1.",tsrouter=".$tsrouter.",tsswitch=".$tsswitch.",tspc=".$tspc.",tslaptop=".$tslaptop;
					$str1=$str1.",tsprinter=".$tsprinter.",tscamera=".$tscamera.","; 
					$str1=$str1."tsprojector=".$tsprojector.",tsups=".$tsups.",tsscanner=".$tsscanner.",tsvdcamera=".$tsvdcamera;
					$str1=$str1.",tsplotter=".$tsplotter.",tstbikhac='".$tstbikhac."',lan=".$lan.",tsmaylan=".$tsmaylan.",lanknoiall=".$lanknoiall;
					$str1=$str1.",wan=".$wan.",tsmaywan=".$tsmaywan.",mdwan='".$mdwan."',"; 
					$str1=$str1."internet=".$internet.",tsinternet=".$tsinternet.",tslline=".$tslline.",tscquang=".$tscquang;
					$str1=$str1.",tsadsl=".$tsadsl.",tsdialup=".$tsdialup.",mdinternet='".$mdinternet."',dxhatang='".$dxhatang."' ";
					$str1=$str1."where macq='".$macq."' and quy=".$quy." and nam=".$nam;
	
	
					//echo($str1);
					$result=mysql_query($str1) or die(mysql_error());
					mysql_free_result($result);
					
					//Chuyen ve trang thong bao
					//header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
				}
			}
			else
			{
				//Them bao cao moi (hien tai chua co loai bao cao nao)		
				$str1="insert into reportinfo (bchatang, macq, quy, nam, tsserver, tsrouter, tsswitch, tspc, tslaptop, tsprinter, tscamera,"; 
				$str1=$str1."tsprojector, tsups, tsscanner, tsvdcamera, tsplotter, tstbikhac, lan, tsmaylan, lanknoiall, wan, tsmaywan, mdwan,"; 
				$str1=$str1."internet, tsinternet, tslline, tscquang, tsadsl, tsdialup, mdinternet, dxhatang)"; 
				$str1=$str1."values (1,'". $macq."',".$quy.",".$nam.",".$tsserver.",".$tsrouter.",".$tsswitch.",".$tspc.",".$tslaptop.",".$tsprinter.",".$tscamera.",";
				$str1=$str1.$tsprojector.",".$tsups.",".$tsscanner.",".$tsvdcamera.",".$tsplotter.",'".$tstbikhac."',".$lan.",".$tsmaylan.",".$lanknoiall.",".$wan.",";
				$str1=$str1.$tsmaywan.",'".$mdwan."',".$internet.",".$tsinternet.",".$tslline.",".$tscquang.",".$tsadsl.",".$tsdialup.",'".$mdinternet."','".$dxhatang."')";
	
				//echo($str1);
				$result=mysql_query($str1) or die(mysql_error());
				mysql_free_result($result);
				
				//Chuyen ve trang thong bao
				//header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
			}
		}	
	}	

	////////////////////////////////////////////////////////////////////////Reset mat khau
	if ($action==7)
	{
		$userid=$_REQUEST['userid'] ;
		$newpass1=$_REQUEST['newpass1'] ;
		$newpass2=$_REQUEST['newpass2'] ;
		$str1="update user set Password='".$newpass1."' where DeptID='".$userid."'" ;
		$result=mysql_query($str1) or die(mysql_error());
		mysql_free_result($result);
		header('Location:messageadmin.php?id=3');
	}
	
	////////////////////////////////////////////Dieu huong xem bao cao
	if ($action==8)
	{
		$quy=$_REQUEST['quy'] ;
		$nam=$_REQUEST['nam'] ;
		$macq=$_REQUEST['macq'] ;
		$bc=$_REQUEST['bc'] ;
		$s="userid=".$macq."&y=".$nam."&q=".$quy;
		$str1="select bcnhanluc,bchatang,bcungdung1,bcungdung2 from reportinfo where quy=".$quy." and nam=".$nam." and macq='".$macq."'";
		$result=mysql_query($str1) or die(mysql_error());
		$row=mysql_fetch_array($result);
		$bcnhanluc=$row['bcnhanluc'];
		$bchatang=$row['bchatang'];
		$bcungdung1=$row['bcungdung1'];
		$bcungdung2=$row['bcungdung2'];	
		mysql_free_result($result);	
		switch ($bc)
		{
			case 1:	if ($bcnhanluc==0)
					{ 
						header('Location:messageadmin.php?id=5');
						break;
					}	
					else
					{
						header('Location:hrreportview.php?'.$s);
						break;
					}	
			case 2:if ($bchatang==0)
					{ 
						header('Location:messageadmin.php?id=5');
						break;
					}	
					else
					{
						header('Location:infrasreportview.php?'.$s);
						break;
					}
			case 3:if ($bcungdung1==0)
					{ 
						header('Location:messageadmin.php?id=5');
						break;
					}	
					else
					{
						header('Location:appreport1view.php?'.$s);
						break;
					}
			case 4:if ($bcungdung2==0)
					{ 
						header('Location:messageadmin.php?id=5');
						break;
					}	
					else
					{
						header('Location:appreport2view.php?'.$s);
						break;
					}														
		}
	}
	
	////////////////////////////////////////////Quy dinh du lieu mac dinh
	if ($action==9)
	{
		$ddata=$_REQUEST['ddata'] ;
		$str1="update user set dulieumd='".$ddata."' where DeptID='".$_SESSION['user']."'" ;
		$result=mysql_query($str1) or die(mysql_error());
		mysql_free_result($result);
		header('Location:geninfo.php');		
	}
	
	////////////////////////////////////////////Cap nhat bao cao nguon nhan luc
	if ($action==10)
	{
		//Lay thong tin tu form
		$macq=$_SESSION['user'];
		$quy=$_REQUEST['q'] ;
		$nam=$_REQUEST['y'] ;
		//Kiem tra xem bao cao co bi khoa hay khong?
		$str1="select sum(locked) as sumlocked from reportinfo where quy=".$quy." and nam=".$nam;
		$result=mysql_query($str1) or die(mysql_error());
		$row=mysql_fetch_array($result);
		if ($row['sumlocked']>0)
		{
				header('Location:message.php?id=5&quy='.$quy.'&nam='.$nam);
				mysql_free_result($result);
		}
		else
		{			
			$ldcntt=$_REQUEST['ldcntt'] ;
			$hotenld=$_REQUEST['hotenld'] ;
			$chucvuld=$_REQUEST['chucvuld'] ;
			$dtld=$_REQUEST['dtld'] ;
			$emailld=$_REQUEST['emailld'] ;
			$cvcntt=$_REQUEST['cvcntt'] ;
			$hotencv=$_REQUEST['hotencv'] ;
			$chucvucv=$_REQUEST['chucvucv'] ;
			$phongbancv=$_REQUEST['phongbancv'] ;
			$namsinhcv=$_REQUEST['namsinhcv'] ;
			$tdocnttcv=$_REQUEST['tdocnttcv'] ;
			$ngoaingucv=$_REQUEST['ngoaingucv'] ;
			$chuyenmoncv=$_REQUEST['chuyenmoncv'] ;
			$dtcv=$_REQUEST['dtcv'] ;
			$emailcv=$_REQUEST['emailcv'] ;
			$tscbcc=$_REQUEST['tscbcc'] ;
			$tsts=$_REQUEST['tsts'] ;
			$tsths=$_REQUEST['tsths'] ;
			$tsdh=$_REQUEST['tsdh'] ;
			$tscd=$_REQUEST['tscd'] ;
			$tstc=$_REQUEST['tstc'] ;
			$tsktv=$_REQUEST['tsktv'] ;
			$tsa=$_REQUEST['tsa'] ;
			$tsb=$_REQUEST['tsb'] ;
			$tskhac=$_REQUEST['tskhac'] ;
			$hocts=$_REQUEST['hocts'] ;
			$hocths=$_REQUEST['hocths'] ;
			$hocdh=$_REQUEST['hocdh'] ;
			$hoccd=$_REQUEST['hoccd'] ;
			$hoctc=$_REQUEST['hoctc'] ;
			$hocktv=$_REQUEST['hocktv'] ;
			$hoca=$_REQUEST['hoca'] ;
			$hocb=$_REQUEST['hocb'] ;
			$hockhac=$_REQUEST['hockhac'] ;
			$dxnhanluc=$_REQUEST['dxnhanluc'] ;
			
			
			$str1="update reportinfo set bcnhanluc=1,ldcntt=".$ldcntt.",hotenld='".$hotenld."',chucvuld='".$chucvuld."',";
			$str1=$str1."dtld='".$dtld."',emailld='".$emailld."',cvcntt=".$cvcntt.",hotencv='".$hotencv."',";
			$str1=$str1."chucvucv='".$chucvucv."',phongbancv='".$phongbancv."',namsinhcv=".$namsinhcv.",tdocnttcv=".$tdocnttcv;
			$str1=$str1.",ngoaingucv='".$ngoaingucv."',chuyenmoncv='".$chuyenmoncv."',dtcv='".$dtcv."',";
			$str1=$str1."emailcv='".$emailcv."',tscbcc=".$tscbcc.",tsts=".$tsts.",tsths=".$tsths.",tsdh=".$tsdh.",tscd=".$tscd.",";
			$str1=$str1."tstc=".$tstc.",tsktv=".$tsktv.",tsa=".$tsa.",tsb=".$tsb.",tskhac=".$tskhac.",hocts=".$hocts.",";
			$str1=$str1."hocths=".$hocths.",hocdh=".$hocdh.",hoccd=".$hoccd.",hoctc=".$hoctc.",hocktv=".$hocktv.",hoca=".$hoca.",";
			$str1=$str1."hocb=".$hocb.",hockhac=".$hockhac.",dxnhanluc='".$dxnhanluc."' where macq='".$macq."' and quy=".$quy." and nam=".$nam;
			$result=mysql_query($str1) or die(mysql_error());
			mysql_free_result($result);
			//echo($str1);
			//Chuyen ve trang thong bao
			header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
		}
	}

	////////////////////////////////////////////////////////////////////////Cap nhat bao cao ha tang CNTT
	if ($action==11)
	{
		//Lay thong tin tu form
		$macq=$_SESSION['user'];
		$quy=$_REQUEST['q'] ;
		$nam=$_REQUEST['y'] ;
		//Kiem tra xem bao cao co bi khoa hay khong?
		$str1="select sum(locked) as sumlocked from reportinfo where quy=".$quy." and nam=".$nam;
		$result=mysql_query($str1) or die(mysql_error());
		$row=mysql_fetch_array($result);
		if ($row['sumlocked']>0)
		{
				header('Location:message.php?id=5&quy='.$quy.'&nam='.$nam);
				mysql_free_result($result);
		}
		else
		{			
			$tsserver=$_REQUEST['tsserver'] ;
			$tsrouter=$_REQUEST['tsrouter'] ;
			$tsswitch=$_REQUEST['tsswitch'] ;
			$tspc=$_REQUEST['tspc'] ;
			$tslaptop=$_REQUEST['tslaptop'] ;
			$tsprinter=$_REQUEST['tsprinter'] ;
			$tscamera=$_REQUEST['tscamera'] ;
			$tsprojector=$_REQUEST['tsprojector'] ;
			$tsups=$_REQUEST['tsups'] ;
			$tsscanner=$_REQUEST['tsscanner'] ;
			$tsvdcamera=$_REQUEST['tsvdcamera'] ;
			$tsplotter=$_REQUEST['tsplotter'] ;
			$tstbikhac=$_REQUEST['tstbikhac'] ;
			$lan=$_REQUEST['lan'] ;
			$tsmaylan=$_REQUEST['tsmaylan'] ;
			$lanknoiall=$_REQUEST['lanknoiall'] ;
			$wan=$_REQUEST['wan'] ;
			$tsmaywan=$_REQUEST['tsmaywan'] ;
			$mdwan=$_REQUEST['mdwan'] ;
			$internet=$_REQUEST['internet'] ;
			$tsinternet=$_REQUEST['tsinternet'] ;
			$tslline=$_REQUEST['tslline'] ;
			$tscquang=$_REQUEST['tscquang'] ;
			$tsadsl=$_REQUEST['tsadsl'] ;
			$tsdialup=$_REQUEST['tsdialup'] ;
			$mdinternet=$_REQUEST['mdinternet'] ;
			$dxhatang=$_REQUEST['dxhatang'] ;
	
			$str1="update reportinfo set bchatang=1, tsserver=".$tsserver;
			$str1=$str1.",tsrouter=".$tsrouter.",tsswitch=".$tsswitch.",tspc=".$tspc.",tslaptop=".$tslaptop;
			$str1=$str1.",tsprinter=".$tsprinter.",tscamera=".$tscamera.","; 
			$str1=$str1."tsprojector=".$tsprojector.",tsups=".$tsups.",tsscanner=".$tsscanner.",tsvdcamera=".$tsvdcamera;
			$str1=$str1.",tsplotter=".$tsplotter.",tstbikhac='".$tstbikhac."',lan=".$lan.",tsmaylan=".$tsmaylan.",lanknoiall=".$lanknoiall;
			$str1=$str1.",wan=".$wan.",tsmaywan=".$tsmaywan.",mdwan='".$mdwan."',"; 
			$str1=$str1."internet=".$internet.",tsinternet=".$tsinternet.",tslline=".$tslline.",tscquang=".$tscquang;
			$str1=$str1.",tsadsl=".$tsadsl.",tsdialup=".$tsdialup.",mdinternet='".$mdinternet."',dxhatang='".$dxhatang."' ";
			$str1=$str1."where macq='".$macq."' and quy=".$quy." and nam=".$nam;
	
	
			//echo($str1);
			$result=mysql_query($str1) or die(mysql_error());
			mysql_free_result($result);
			
			//Chuyen ve trang thong bao
			header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
		}	
	}	

	////////////////////////////////////////////////////////////////////////Mo/khoa chuc nang cap nhat bao cao
	if ($action==12)
	{
		//Lay thong tin tu form
		$locked=$_REQUEST['locked'];
		$quy=$_REQUEST['quy'] ;
		$nam=$_REQUEST['nam'] ;		
		$str1="update reportinfo set locked=".$locked;
		$str1=$str1." where quy=".$quy." and nam=".$nam;
		$result=mysql_query($str1) or die(mysql_error());
		mysql_free_result($result);
		
		//Chuyen ve trang thong bao
		header('Location:messageadmin.php?id=4&quy='.$quy.'&nam='.$nam.'&locked='.$locked);			
	}	
	
	
	/////////////////////////////////////////////////////Nhap bao cao ung dung CNTT 1
	if ($action==13)
	{
		//Lay thong tin tu form
		$macq=$_SESSION['user'];
		$quy=$_REQUEST['quy'] ;
		$nam=$_REQUEST['nam'] ;
		//Kiem tra xem bao cao co bi khoa hay khong?
		$str1="select sum(locked) as sumlocked from reportinfo where quy=".$quy." and nam=".$nam;
		$result=mysql_query($str1) or die(mysql_error());
		$row=mysql_fetch_array($result);
		if ($row['sumlocked']>0)
		{
				header('Location:message.php?id=5&quy='.$quy.'&nam='.$nam);
				mysql_free_result($result);
		}
		else
		{			
			$tsmicrosoft=$_REQUEST['tsmicrosoft'] ;
			$tsmicrosoftbq=$_REQUEST['tsmicrosoftbq'] ;
			$tsmicrosoftkbq=$_REQUEST['tsmicrosoftkbq'] ;
			$tsmac=$_REQUEST['tsmac'] ;
			$tsmacbq=$_REQUEST['tsmacbq'] ;
			$tsmackbq=$_REQUEST['tsmackbq'] ;
			$tshdhnm=$_REQUEST['tshdhnm'] ;
			$tshdhkhac=$_REQUEST['tshdhkhac'] ;
			$tshdhkhacbq=$_REQUEST['tshdhkhacbq'] ;
			$tshdhkhackbq=$_REQUEST['tshdhkhackbq'] ;
			$tsmoffice=$_REQUEST['tsmoffice'] ;
			$tsmofficebq=$_REQUEST['tsmofficebq'] ;
			$tsmofficekbq=$_REQUEST['tsmofficekbq'] ;
			$tstviet=$_REQUEST['tstviet'] ;
			$tstvietbq=$_REQUEST['tstvietbq'] ;
			$tstvietkbq=$_REQUEST['tstvietkbq'] ;
			$tstvietnm=$_REQUEST['tstvietnm'] ;
			$tsautocad=$_REQUEST['tsautocad'] ;
			$tsautocadbq=$_REQUEST['tsautocadbq'] ;
			$tsautocadkbq=$_REQUEST['tsautocadkbq'] ;
			$tsphotoshop=$_REQUEST['tsphotoshop'] ;
			$tsphotoshopbq=$_REQUEST['tsphotoshopbq'] ;
			$tsphotoshopkbq=$_REQUEST['tsphotoshopkbq'] ;
			$tscorel=$_REQUEST['tscorel'] ;
			$tscorelbq=$_REQUEST['tscorelbq'] ;
			$tscorelkbq=$_REQUEST['tscorelkbq'] ;
			$tsflash=$_REQUEST['tsflash'] ;
			$tsflashbq=$_REQUEST['tsflashbq'] ;
			$tsflashkbq=$_REQUEST['tsflashkbq'] ;
			$tsdream=$_REQUEST['tsdream'] ;
			$tsdreambq=$_REQUEST['tsdreambq'] ;
			$tsdreamkbq=$_REQUEST['tsdreamkbq'] ;
	
			$tenudk1=$_REQUEST['tenudk1'];
			$tsudk1=$_REQUEST['tsudk1'];
			$tsudk1bq=$_REQUEST['tsudk1bq'];
			$tsudk1kbq=$_REQUEST['tsudk1kbq'];
			$tsudk1nm=$_REQUEST['tsudk1nm'];
			$tsudk1txd=$_REQUEST['tsudk1txd'];
			$tenudk2=$_REQUEST['tenudk2'];
			$tsudk2=$_REQUEST['tsudk2'];
			$tsudk2bq=$_REQUEST['tsudk2bq'];
			$tsudk2kbq=$_REQUEST['tsudk2kbq'];
			$tsudk2nm=$_REQUEST['tsudk2nm'];
			$tsudk2txd=$_REQUEST['tsudk2txd'];
			$tenudk3=$_REQUEST['tenudk3'];
			$tsudk3=$_REQUEST['tsudk3'];
			$tsudk3bq=$_REQUEST['tsudk3bq'];
			$tsudk3kbq=$_REQUEST['tsudk3kbq'];
			$tsudk3nm=$_REQUEST['tsudk3nm'];
			$tsudk3txd=$_REQUEST['tsudk3txd'];
			$tenudk4=$_REQUEST['tenudk4'];
			$tsudk4=$_REQUEST['tsudk4'];
			$tsudk4bq=$_REQUEST['tsudk4bq'];
			$tsudk4kbq=$_REQUEST['tsudk4kbq'];
			$tsudk4nm=$_REQUEST['tsudk4nm'];
			$tsudk4txd=$_REQUEST['tsudk4txd'];
			$tenudk5=$_REQUEST['tenudk5'];
			$tsudk5=$_REQUEST['tsudk5'];
			$tsudk5bq=$_REQUEST['tsudk5bq'];
			$tsudk5kbq=$_REQUEST['tsudk5kbq'];
			$tsudk5nm=$_REQUEST['tsudk5nm'];
			$tsudk5txd=$_REQUEST['tsudk5txd'];
			$tenudk6=$_REQUEST['tenudk6'];
			$tsudk6=$_REQUEST['tsudk6'];
			$tsudk6bq=$_REQUEST['tsudk6bq'];
			$tsudk6kbq=$_REQUEST['tsudk6kbq'];
			$tsudk6nm=$_REQUEST['tsudk6nm'];
			$tsudk6txd=$_REQUEST['tsudk6txd'];
			$tenudk7=$_REQUEST['tenudk7'];
			$tsudk7=$_REQUEST['tsudk7'];
			$tsudk7bq=$_REQUEST['tsudk7bq'];
			$tsudk7kbq=$_REQUEST['tsudk7kbq'];
			$tsudk7nm=$_REQUEST['tsudk7nm'];
			$tsudk7txd=$_REQUEST['tsudk7txd'];
			$tenudk8=$_REQUEST['tenudk8'];
			$tsudk8=$_REQUEST['tsudk8'];
			$tsudk8bq=$_REQUEST['tsudk8bq'];

			$tsudk8kbq=$_REQUEST['tsudk8kbq'];
			$tsudk8nm=$_REQUEST['tsudk8nm'];
			$tsudk8txd=$_REQUEST['tsudk8txd'];
			$tenudk9=$_REQUEST['tenudk9'];
			$tsudk9=$_REQUEST['tsudk9'];
			$tsudk9bq=$_REQUEST['tsudk9bq'];
			$tsudk9kbq=$_REQUEST['tsudk9kbq'];
			$tsudk9nm=$_REQUEST['tsudk9nm'];
			$tsudk9txd=$_REQUEST['tsudk9txd'];
			$tenudk10=$_REQUEST['tenudk10'];
			$tsudk10=$_REQUEST['tsudk10'];
			$tsudk10bq=$_REQUEST['tsudk10bq'];
			$tsudk10kbq=$_REQUEST['tsudk10kbq'];
			$tsudk10nm=$_REQUEST['tsudk10nm'];
			$tsudk10txd=$_REQUEST['tsudk10txd'];
	
			//Kiem tra da co 1 trong cac loai bao cao chua?
			$str1="select * from reportinfo where macq='".$macq."' and quy=".$quy." and nam=".$nam;
			$result=mysql_query($str1) or die(mysql_error());
			if ($row=mysql_fetch_array($result))
			{
				//Kiem tra da co bao cao ung dung 1 chua?
				$str1="select * from reportinfo where bcungdung1=1 and macq='".$macq."' and quy=".$quy." and nam=".$nam;
				$result=mysql_query($str1) or die(mysql_error());
				if ($row=mysql_fetch_array($result))
				{
					mysql_free_result($result);
					//Chuyen ve trang thong bao da co bao cao ungdung1
					header('Location:message.php?id=1&quy='.$quy.'&nam='.$nam);				
				}
				else
				{
					//Da co loai bao cao khac, them bao cao ung dung 1
					$str1="update reportinfo set bcungdung1=1,tsmicrosoft=".$tsmicrosoft.",tsmicrosoftbq=".$tsmicrosoftbq;
					$str1=$str1.",tsmicrosoftkbq=".$tsmicrosoftkbq.",tsmac=".$tsmac.",tsmacbq=".$tsmacbq;
					$str1=$str1.",tsmackbq=".$tsmackbq.",tshdhnm=".$tshdhnm.",tshdhkhac=".$tshdhkhac;
					$str1=$str1.",tshdhkhacbq=".$tshdhkhacbq.",tshdhkhackbq=".$tshdhkhackbq.",tsmoffice=".$tsmoffice;
					$str1=$str1.",tsmofficebq=".$tsmofficebq.",tsmofficekbq=".$tsmofficekbq.",tstviet=".$tstviet;
					$str1=$str1.",tstvietbq=".$tstvietbq.",tstvietkbq=".$tstvietkbq.",tstvietnm=".$tstvietnm;
					$str1=$str1.",tsautocad=".$tsautocad.",tsautocadbq=".$tsautocadbq.",tsautocadkbq=".$tsautocadkbq;
					$str1=$str1.",tsphotoshop=".$tsphotoshop.",tsphotoshopbq=".$tsphotoshopbq;
					$str1=$str1.",tsphotoshopkbq=".$tsphotoshopkbq.",tscorel=".$tscorel.",tscorelbq=".$tscorelbq;
					$str1=$str1.",tscorelkbq=".$tscorelkbq.",tsflash=".$tsflash.",tsflashbq=".$tsflashbq;
					$str1=$str1.",tsflashkbq=".$tsflashkbq.",tsdream=".$tsdream.",tsdreambq=".$tsdreambq.",tsdreamkbq=".$tsdreamkbq;
					$str1=$str1." where macq='".$macq."' and quy=".$quy." and nam=".$nam;
	
					$result=mysql_query($str1) or die(mysql_error());
					mysql_free_result($result);
					
					//Cap nhat thong tin trong bang otherapp
					//Kiem tra co bao cao trong bang otherapp chua, neu co thi cap nhat
					$str1="select * from otherapp where macq='".$macq."' and quy=".$quy." and nam=".$nam;
					$result=mysql_query($str1) or die(mysql_error());
					if ($row=mysql_fetch_array($result))
					{
						$str1="update otherapp  set tenudk1='".$tenudk1."',tsudk1=".$tsudk1.",tsudk1bq=".$tsudk1bq;
						$str1=$str1.",tsudk1kbq=".$tsudk1kbq.",tsudk1nm=".$tsudk1nm.",tsudk1txd=".$tsudk1txd;
						$str1=$str1.",tenudk2='".$tenudk2."',tsudk2=".$tsudk2.",tsudk2bq=".$tsudk2bq;
						$str1=$str1.",tsudk2kbq=".$tsudk2kbq.",tsudk2nm=".$tsudk2nm.",tsudk2txd=".$tsudk2txd;
						$str1=$str1.",tenudk3='".$tenudk3."',tsudk3=".$tsudk3.",tsudk3bq=".$tsudk3bq;
						$str1=$str1.",tsudk3kbq=".$tsudk3kbq.",tsudk3nm=".$tsudk3nm.",tsudk3txd=".$tsudk3txd;
						$str1=$str1.",tenudk4='".$tenudk4."',tsudk4=".$tsudk4.",tsudk4bq=".$tsudk4bq;
						$str1=$str1.",tsudk4kbq=".$tsudk4kbq.",tsudk4nm=".$tsudk4nm.",tsudk4txd=".$tsudk4txd;
						$str1=$str1.",tenudk5='".$tenudk5."',tsudk5=".$tsudk5.",tsudk5bq=".$tsudk5bq;
						$str1=$str1.",tsudk5kbq=".$tsudk5kbq.",tsudk5nm=".$tsudk5nm.",tsudk5txd=".$tsudk5txd;
						$str1=$str1.",tenudk6='".$tenudk6."',tsudk6=".$tsudk6.",tsudk6bq=".$tsudk6bq;
						$str1=$str1.",tsudk6kbq=".$tsudk6kbq.",tsudk6nm=".$tsudk6nm.",tsudk6txd=".$tsudk6txd;
						$str1=$str1.",tenudk7='".$tenudk7."',tsudk7=".$tsudk7.",tsudk7bq=".$tsudk7bq;
						$str1=$str1.",tsudk7kbq=".$tsudk7kbq.",tsudk7nm=".$tsudk7nm.",tsudk7txd=".$tsudk7txd;
						$str1=$str1.",tenudk8='".$tenudk8."',tsudk8=".$tsudk8.",tsudk8bq=".$tsudk8bq;
						$str1=$str1.",tsudk8kbq=".$tsudk8kbq.",tsudk8nm=".$tsudk8nm.",tsudk8txd=".$tsudk8txd;
						$str1=$str1.",tenudk9='".$tenudk9."',tsudk9=".$tsudk9.",tsudk9bq=".$tsudk9bq;
						$str1=$str1.",tsudk9kbq=".$tsudk9kbq.",tsudk9nm=".$tsudk9nm.",tsudk9txd=".$tsudk9txd;
						$str1=$str1.",tenudk10='".$tenudk10."',tsudk10=".$tsudk10.",tsudk10bq=".$tsudk10bq;
						$str1=$str1.",tsudk10kbq=".$tsudk10kbq.",tsudk10nm=".$tsudk10nm.",tsudk10txd=".$tsudk10txd;
						$str1=$str1." where macq='".$macq."' and quy=".$quy." and nam=".$nam;
						$result=mysql_query($str1) or die(mysql_error());
						mysql_free_result($result);				
					}
					//Neu chua co thong tin trong bang otherapp, them moi
					else
					{
						$str1="insert into otherapp (macq,quy,nam,tenudk1,tsudk1,tsudk1bq,tsudk1kbq,tsudk1nm,tsudk1txd,";
						$str1=$str1."tenudk2,tsudk2,tsudk2bq,tsudk2kbq,tsudk2nm,tsudk2txd,";
						$str1=$str1."tenudk3,tsudk3,tsudk3bq,tsudk3kbq,tsudk3nm,tsudk3txd,";
						$str1=$str1."tenudk4,tsudk4,tsudk4bq,tsudk4kbq,tsudk4nm,tsudk4txd,";
						$str1=$str1."tenudk5,tsudk5,tsudk5bq,tsudk5kbq,tsudk5nm,tsudk5txd,";
						$str1=$str1."tenudk6,tsudk6,tsudk6bq,tsudk6kbq,tsudk6nm,tsudk6txd,";
						$str1=$str1."tenudk7,tsudk7,tsudk7bq,tsudk7kbq,tsudk7nm,tsudk7txd,";
						$str1=$str1."tenudk8,tsudk8,tsudk8bq,tsudk8kbq,tsudk8nm,tsudk8txd,";
						$str1=$str1."tenudk9,tsudk9,tsudk9bq,tsudk9kbq,tsudk9nm,tsudk9txd,";
						$str1=$str1."tenudk10,tsudk10,tsudk10bq,tsudk10kbq,tsudk10nm,tsudk10txd)";
						$str1=$str1." values ('". $macq."',".$quy.",".$nam.",'";
						$str1=$str1.$tenudk1."',".$tsudk1.",".$tsudk1bq.",".$tsudk1kbq.",".$tsudk1nm.",".$tsudk1txd.",'";
						$str1=$str1.$tenudk2."',".$tsudk2.",".$tsudk2bq.",".$tsudk2kbq.",".$tsudk2nm.",".$tsudk2txd.",'";
						$str1=$str1.$tenudk3."',".$tsudk3.",".$tsudk3bq.",".$tsudk3kbq.",".$tsudk3nm.",".$tsudk3txd.",'";
						$str1=$str1.$tenudk4."',".$tsudk4.",".$tsudk4bq.",".$tsudk4kbq.",".$tsudk4nm.",".$tsudk4txd.",'";
						$str1=$str1.$tenudk5."',".$tsudk5.",".$tsudk5bq.",".$tsudk5kbq.",".$tsudk5nm.",".$tsudk5txd.",'";
						$str1=$str1.$tenudk6."',".$tsudk6.",".$tsudk6bq.",".$tsudk6kbq.",".$tsudk6nm.",".$tsudk6txd.",'";
						$str1=$str1.$tenudk7."',".$tsudk7.",".$tsudk7bq.",".$tsudk7kbq.",".$tsudk7nm.",".$tsudk7txd.",'";
						$str1=$str1.$tenudk8."',".$tsudk8.",".$tsudk8bq.",".$tsudk8kbq.",".$tsudk8nm.",".$tsudk8txd.",'";
						$str1=$str1.$tenudk9."',".$tsudk9.",".$tsudk9bq.",".$tsudk9kbq.",".$tsudk9nm.",".$tsudk9txd.",'";
						$str1=$str1.$tenudk10."',".$tsudk10.",".$tsudk10bq.",".$tsudk10kbq.",".$tsudk10nm.",".$tsudk10txd.")";			
						$result=mysql_query($str1) or die(mysql_error());
						mysql_free_result($result);
					}
					//Chuyen ve trang thong bao
					header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
				}
			}
			else
			{
				//Them bao cao moi (hien tai chua co loai bao cao nao)		
				
				$str1="insert into reportinfo (bcungdung1,macq,quy,nam,tsmicrosoft,tsmicrosoftbq,tsmicrosoftkbq,tsmac,tsmacbq,tsmackbq,tshdhnm,tshdhkhac,";
				$str1=$str1."tshdhkhacbq,tshdhkhackbq,tsmoffice,tsmofficebq,tsmofficekbq,tstviet,tstvietbq,";
				$str1=$str1."tstvietkbq,tstvietnm,tsautocad,tsautocadbq,tsautocadkbq,tsphotoshop,tsphotoshopbq,";
				$str1=$str1."tsphotoshopkbq,tscorel,tscorelbq,tscorelkbq,tsflash,tsflashbq,tsflashkbq,tsdream,";
				$str1=$str1."tsdreambq,tsdreamkbq) values (1,'". $macq."',".$quy.",".$nam.",";
				$str1=$str1.$tsmicrosoft.",".$tsmicrosoftbq.",".$tsmicrosoftkbq.",".$tsmac.",".$tsmacbq.",".$tsmackbq.",";
				$str1=$str1.$tshdhnm.",".$tshdhkhac.",".$tshdhkhacbq.",".$tshdhkhackbq.",".$tsmoffice.",".$tsmofficebq.",";
				$str1=$str1.$tsmofficekbq.",".$tstviet.",".$tstvietbq.",".$tstvietkbq.",".$tstvietnm.",".$tsautocad.",".$tsautocadbq.",";
				$str1=$str1.$tsautocadkbq.",".$tsphotoshop.",".$tsphotoshopbq.",".$tsphotoshopkbq.",".$tscorel.",".$tscorelbq.",";
				$str1=$str1.$tscorelkbq.",".$tsflash.",".$tsflashbq.",".$tsflashkbq.",".$tsdream.",".$tsdreambq.",".$tsdreamkbq.")";
				
				$result=mysql_query($str1) or die(mysql_error());
				mysql_free_result($result);
				
				//Cap nhat thong tin trong bang otherapp
				$str1="insert into otherapp (macq,quy,nam,tenudk1,tsudk1,tsudk1bq,tsudk1kbq,tsudk1nm,tsudk1txd,";
				$str1=$str1."tenudk2,tsudk2,tsudk2bq,tsudk2kbq,tsudk2nm,tsudk2txd,";
				$str1=$str1."tenudk3,tsudk3,tsudk3bq,tsudk3kbq,tsudk3nm,tsudk3txd,";
				$str1=$str1."tenudk4,tsudk4,tsudk4bq,tsudk4kbq,tsudk4nm,tsudk4txd,";
				$str1=$str1."tenudk5,tsudk5,tsudk5bq,tsudk5kbq,tsudk5nm,tsudk5txd,";
				$str1=$str1."tenudk6,tsudk6,tsudk6bq,tsudk6kbq,tsudk6nm,tsudk6txd,";
				$str1=$str1."tenudk7,tsudk7,tsudk7bq,tsudk7kbq,tsudk7nm,tsudk7txd,";
				$str1=$str1."tenudk8,tsudk8,tsudk8bq,tsudk8kbq,tsudk8nm,tsudk8txd,";
				$str1=$str1."tenudk9,tsudk9,tsudk9bq,tsudk9kbq,tsudk9nm,tsudk9txd,";
				$str1=$str1."tenudk10,tsudk10,tsudk10bq,tsudk10kbq,tsudk10nm,tsudk10txd)";
				$str1=$str1." values ('". $macq."',".$quy.",".$nam.",'";
				$str1=$str1.$tenudk1."',".$tsudk1.",".$tsudk1bq.",".$tsudk1kbq.",".$tsudk1nm.",".$tsudk1txd.",'";
				$str1=$str1.$tenudk2."',".$tsudk2.",".$tsudk2bq.",".$tsudk2kbq.",".$tsudk2nm.",".$tsudk2txd.",'";
				$str1=$str1.$tenudk3."',".$tsudk3.",".$tsudk3bq.",".$tsudk3kbq.",".$tsudk3nm.",".$tsudk3txd.",'";
				$str1=$str1.$tenudk4."',".$tsudk4.",".$tsudk4bq.",".$tsudk4kbq.",".$tsudk4nm.",".$tsudk4txd.",'";
				$str1=$str1.$tenudk5."',".$tsudk5.",".$tsudk5bq.",".$tsudk5kbq.",".$tsudk5nm.",".$tsudk5txd.",'";
				$str1=$str1.$tenudk6."',".$tsudk6.",".$tsudk6bq.",".$tsudk6kbq.",".$tsudk6nm.",".$tsudk6txd.",'";
				$str1=$str1.$tenudk7."',".$tsudk7.",".$tsudk7bq.",".$tsudk7kbq.",".$tsudk7nm.",".$tsudk7txd.",'";
				$str1=$str1.$tenudk8."',".$tsudk8.",".$tsudk8bq.",".$tsudk8kbq.",".$tsudk8nm.",".$tsudk8txd.",'";
				$str1=$str1.$tenudk9."',".$tsudk9.",".$tsudk9bq.",".$tsudk9kbq.",".$tsudk9nm.",".$tsudk9txd.",'";
				$str1=$str1.$tenudk10."',".$tsudk10.",".$tsudk10bq.",".$tsudk10kbq.",".$tsudk10nm.",".$tsudk10txd.")";			
				$result=mysql_query($str1) or die(mysql_error());
				mysql_free_result($result);
				//Chuyen ve trang thong bao
				header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
			}
		}	
	}
	
	////////////////////////////////////////////////////////////////////////Cap nhat bao cao ung dung CNTT 1
	if ($action==14)
	{
		//Lay thong tin tu form
		$macq=$_SESSION['user'];
		$quy=$_REQUEST['q'] ;
		$nam=$_REQUEST['y'];
		//Kiem tra xem bao cao co bi khoa hay khong?
		$str1="select sum(locked) as sumlocked from reportinfo where quy=".$quy." and nam=".$nam;
		$result=mysql_query($str1) or die(mysql_error());
		$row=mysql_fetch_array($result);
		if ($row['sumlocked']>0)
		{
				header('Location:message.php?id=5&quy='.$quy.'&nam='.$nam);
				mysql_free_result($result);
		}
		else
		{			
			$tsmicrosoft=$_REQUEST['tsmicrosoft'] ;
			$tsmicrosoftbq=$_REQUEST['tsmicrosoftbq'] ;
			$tsmicrosoftkbq=$_REQUEST['tsmicrosoftkbq'] ;
			$tsmac=$_REQUEST['tsmac'] ;
			$tsmacbq=$_REQUEST['tsmacbq'] ;
			$tsmackbq=$_REQUEST['tsmackbq'] ;
			$tshdhnm=$_REQUEST['tshdhnm'] ;
			$tshdhkhac=$_REQUEST['tshdhkhac'] ;
			$tshdhkhacbq=$_REQUEST['tshdhkhacbq'] ;
			$tshdhkhackbq=$_REQUEST['tshdhkhackbq'] ;
			$tsmoffice=$_REQUEST['tsmoffice'] ;
			$tsmofficebq=$_REQUEST['tsmofficebq'] ;
			$tsmofficekbq=$_REQUEST['tsmofficekbq'] ;
			$tstviet=$_REQUEST['tstviet'] ;
			$tstvietbq=$_REQUEST['tstvietbq'] ;
			$tstvietkbq=$_REQUEST['tstvietkbq'] ;
			$tstvietnm=$_REQUEST['tstvietnm'] ;
			$tsautocad=$_REQUEST['tsautocad'] ;
			$tsautocadbq=$_REQUEST['tsautocadbq'] ;
			$tsautocadkbq=$_REQUEST['tsautocadkbq'] ;
			$tsphotoshop=$_REQUEST['tsphotoshop'] ;
			$tsphotoshopbq=$_REQUEST['tsphotoshopbq'] ;
			$tsphotoshopkbq=$_REQUEST['tsphotoshopkbq'] ;
			$tscorel=$_REQUEST['tscorel'] ;
			$tscorelbq=$_REQUEST['tscorelbq'] ;
			$tscorelkbq=$_REQUEST['tscorelkbq'] ;
			$tsflash=$_REQUEST['tsflash'] ;
			$tsflashbq=$_REQUEST['tsflashbq'] ;
			$tsflashkbq=$_REQUEST['tsflashkbq'] ;
			$tsdream=$_REQUEST['tsdream'] ;
			$tsdreambq=$_REQUEST['tsdreambq'] ;
			$tsdreamkbq=$_REQUEST['tsdreamkbq'] ;
	
			$tenudk1=$_REQUEST['tenudk1'];
			$tsudk1=$_REQUEST['tsudk1'];
			$tsudk1bq=$_REQUEST['tsudk1bq'];
			$tsudk1kbq=$_REQUEST['tsudk1kbq'];
			$tsudk1nm=$_REQUEST['tsudk1nm'];
			$tsudk1txd=$_REQUEST['tsudk1txd'];
			$tenudk2=$_REQUEST['tenudk2'];
			$tsudk2=$_REQUEST['tsudk2'];
			$tsudk2bq=$_REQUEST['tsudk2bq'];
			$tsudk2kbq=$_REQUEST['tsudk2kbq'];
			$tsudk2nm=$_REQUEST['tsudk2nm'];
			$tsudk2txd=$_REQUEST['tsudk2txd'];
			$tenudk3=$_REQUEST['tenudk3'];
			$tsudk3=$_REQUEST['tsudk3'];
			$tsudk3bq=$_REQUEST['tsudk3bq'];
			$tsudk3kbq=$_REQUEST['tsudk3kbq'];
			$tsudk3nm=$_REQUEST['tsudk3nm'];
			$tsudk3txd=$_REQUEST['tsudk3txd'];
			$tenudk4=$_REQUEST['tenudk4'];
			$tsudk4=$_REQUEST['tsudk4'];
			$tsudk4bq=$_REQUEST['tsudk4bq'];
			$tsudk4kbq=$_REQUEST['tsudk4kbq'];
			$tsudk4nm=$_REQUEST['tsudk4nm'];
			$tsudk4txd=$_REQUEST['tsudk4txd'];
			$tenudk5=$_REQUEST['tenudk5'];
			$tsudk5=$_REQUEST['tsudk5'];
			$tsudk5bq=$_REQUEST['tsudk5bq'];
			$tsudk5kbq=$_REQUEST['tsudk5kbq'];
			$tsudk5nm=$_REQUEST['tsudk5nm'];
			$tsudk5txd=$_REQUEST['tsudk5txd'];
			$tenudk6=$_REQUEST['tenudk6'];
			$tsudk6=$_REQUEST['tsudk6'];
			$tsudk6bq=$_REQUEST['tsudk6bq'];
			$tsudk6kbq=$_REQUEST['tsudk6kbq'];
			$tsudk6nm=$_REQUEST['tsudk6nm'];
			$tsudk6txd=$_REQUEST['tsudk6txd'];
			$tenudk7=$_REQUEST['tenudk7'];
			$tsudk7=$_REQUEST['tsudk7'];
			$tsudk7bq=$_REQUEST['tsudk7bq'];
			$tsudk7kbq=$_REQUEST['tsudk7kbq'];
			$tsudk7nm=$_REQUEST['tsudk7nm'];
			$tsudk7txd=$_REQUEST['tsudk7txd'];
			$tenudk8=$_REQUEST['tenudk8'];
			$tsudk8=$_REQUEST['tsudk8'];
			$tsudk8bq=$_REQUEST['tsudk8bq'];
			$tsudk8kbq=$_REQUEST['tsudk8kbq'];
			$tsudk8nm=$_REQUEST['tsudk8nm'];
			$tsudk8txd=$_REQUEST['tsudk8txd'];
			$tenudk9=$_REQUEST['tenudk9'];
			$tsudk9=$_REQUEST['tsudk9'];
			$tsudk9bq=$_REQUEST['tsudk9bq'];
			$tsudk9kbq=$_REQUEST['tsudk9kbq'];
			$tsudk9nm=$_REQUEST['tsudk9nm'];
			$tsudk9txd=$_REQUEST['tsudk9txd'];
			$tenudk10=$_REQUEST['tenudk10'];
			$tsudk10=$_REQUEST['tsudk10'];
			$tsudk10bq=$_REQUEST['tsudk10bq'];
			$tsudk10kbq=$_REQUEST['tsudk10kbq'];
			$tsudk10nm=$_REQUEST['tsudk10nm'];
			$tsudk10txd=$_REQUEST['tsudk10txd'];	
	
			$str1="update reportinfo set bcungdung1=1,tsmicrosoft=".$tsmicrosoft.",tsmicrosoftbq=".$tsmicrosoftbq;
			$str1=$str1.",tsmicrosoftkbq=".$tsmicrosoftkbq.",tsmac=".$tsmac.",tsmacbq=".$tsmacbq;
			$str1=$str1.",tsmackbq=".$tsmackbq.",tshdhnm=".$tshdhnm.",tshdhkhac=".$tshdhkhac;
			$str1=$str1.",tshdhkhacbq=".$tshdhkhacbq.",tshdhkhackbq=".$tshdhkhackbq.",tsmoffice=".$tsmoffice;
			$str1=$str1.",tsmofficebq=".$tsmofficebq.",tsmofficekbq=".$tsmofficekbq.",tstviet=".$tstviet;
			$str1=$str1.",tstvietbq=".$tstvietbq.",tstvietkbq=".$tstvietkbq.",tstvietnm=".$tstvietnm;
			$str1=$str1.",tsautocad=".$tsautocad.",tsautocadbq=".$tsautocadbq.",tsautocadkbq=".$tsautocadkbq;
			$str1=$str1.",tsphotoshop=".$tsphotoshop.",tsphotoshopbq=".$tsphotoshopbq;
			$str1=$str1.",tsphotoshopkbq=".$tsphotoshopkbq.",tscorel=".$tscorel.",tscorelbq=".$tscorelbq;
			$str1=$str1.",tscorelkbq=".$tscorelkbq.",tsflash=".$tsflash.",tsflashbq=".$tsflashbq;
			$str1=$str1.",tsflashkbq=".$tsflashkbq.",tsdream=".$tsdream.",tsdreambq=".$tsdreambq.",tsdreamkbq=".$tsdreamkbq;
			$str1=$str1." where macq='".$macq."' and quy=".$quy." and nam=".$nam;
			$result=mysql_query($str1) or die(mysql_error());
			
			//Cap nhat bang otherapp
			$str1="update otherapp  set tenudk1='".$tenudk1."',tsudk1=".$tsudk1.",tsudk1bq=".$tsudk1bq;
			$str1=$str1.",tsudk1kbq=".$tsudk1kbq.",tsudk1nm=".$tsudk1nm.",tsudk1txd=".$tsudk1txd;
			$str1=$str1.",tenudk2='".$tenudk2."',tsudk2=".$tsudk2.",tsudk2bq=".$tsudk2bq;
			$str1=$str1.",tsudk2kbq=".$tsudk2kbq.",tsudk2nm=".$tsudk2nm.",tsudk2txd=".$tsudk2txd;
			$str1=$str1.",tenudk3='".$tenudk3."',tsudk3=".$tsudk3.",tsudk3bq=".$tsudk3bq;
			$str1=$str1.",tsudk3kbq=".$tsudk3kbq.",tsudk3nm=".$tsudk3nm.",tsudk3txd=".$tsudk3txd;
			$str1=$str1.",tenudk4='".$tenudk4."',tsudk4=".$tsudk4.",tsudk4bq=".$tsudk4bq;
			$str1=$str1.",tsudk4kbq=".$tsudk4kbq.",tsudk4nm=".$tsudk4nm.",tsudk4txd=".$tsudk4txd;
			$str1=$str1.",tenudk5='".$tenudk5."',tsudk5=".$tsudk5.",tsudk5bq=".$tsudk5bq;
			$str1=$str1.",tsudk5kbq=".$tsudk5kbq.",tsudk5nm=".$tsudk5nm.",tsudk5txd=".$tsudk5txd;
			$str1=$str1.",tenudk6='".$tenudk6."',tsudk6=".$tsudk6.",tsudk6bq=".$tsudk6bq;
			$str1=$str1.",tsudk6kbq=".$tsudk6kbq.",tsudk6nm=".$tsudk6nm.",tsudk6txd=".$tsudk6txd;
			$str1=$str1.",tenudk7='".$tenudk7."',tsudk7=".$tsudk7.",tsudk7bq=".$tsudk7bq;
			$str1=$str1.",tsudk7kbq=".$tsudk7kbq.",tsudk7nm=".$tsudk7nm.",tsudk7txd=".$tsudk7txd;
			$str1=$str1.",tenudk8='".$tenudk8."',tsudk8=".$tsudk8.",tsudk8bq=".$tsudk8bq;
			$str1=$str1.",tsudk8kbq=".$tsudk8kbq.",tsudk8nm=".$tsudk8nm.",tsudk8txd=".$tsudk8txd;
			$str1=$str1.",tenudk9='".$tenudk9."',tsudk9=".$tsudk9.",tsudk9bq=".$tsudk9bq;
			$str1=$str1.",tsudk9kbq=".$tsudk9kbq.",tsudk9nm=".$tsudk9nm.",tsudk9txd=".$tsudk9txd;
			$str1=$str1.",tenudk10='".$tenudk10."',tsudk10=".$tsudk10.",tsudk10bq=".$tsudk10bq;
			$str1=$str1.",tsudk10kbq=".$tsudk10kbq.",tsudk10nm=".$tsudk10nm.",tsudk10txd=".$tsudk10txd;
			$str1=$str1." where macq='".$macq."' and quy=".$quy." and nam=".$nam;
			$result=mysql_query($str1) or die(mysql_error());		
			mysql_free_result($result);		
			//Chuyen ve trang thong bao
			header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
		}
	}
	
	
	
	
	////////////////////////////////////////////////////////////////////////Nhap bao cao ung dung CNTT 2
	if ($action==15)
	{
		//Lay thong tin tu form
		$macq=$_SESSION['user'];
		$quy=$_REQUEST['quy'] ;
		$nam=$_REQUEST['nam'] ;
		//Kiem tra xem bao cao co bi khoa hay khong?
		$str1="select sum(locked) as sumlocked from reportinfo where quy=".$quy." and nam=".$nam;
		$result=mysql_query($str1) or die(mysql_error());
		$row=mysql_fetch_array($result);
		if ($row['sumlocked']>0)
		{
				header('Location:message.php?id=5&quy='.$quy.'&nam='.$nam);
				mysql_free_result($result);
		}
		else
		{			
			$website=$_REQUEST['website'] ;
			$dcwebsite=$_REQUEST['dcwebsite'] ;
			$tsuatweb=$_REQUEST['tsuatweb'] ;
			$qcheweb=$_REQUEST['qcheweb'] ;
			$tsdvc=$_REQUEST['tsdvc'] ;
			$tsdvc1=$_REQUEST['tsdvc1'] ;
			$tsdvc2=$_REQUEST['tsdvc2'] ;
			$tsdvc3=$_REQUEST['tsdvc3'] ;
			$tsdvc4=$_REQUEST['tsdvc4'] ;
			$tsemail=$_REQUEST['tsemail'] ;
			$sdtxemail=$_REQUEST['sdtxemail'] ;
			$tsuatemail=$_REQUEST['tsuatemail'] ;
			$baomat=$_REQUEST['baomat'] ;
			$tenpcbaomat=$_REQUEST['tenpcbaomat'] ;
			$tenpmbaomat=$_REQUEST['tenpmbaomat'] ;
			$tongkp=$_REQUEST['tongkp'] ;
			$nstw=$_REQUEST['nstw'] ;
			$nsdp=$_REQUEST['nsdp'] ;
			$nskhac=$_REQUEST['nskhac'] ;
			$dxungdung=$_REQUEST['dxungdung'] ;
			
			$tencsdl1=$_REQUEST['tencsdl1'] ;
			$heqtcsdl1=$_REQUEST['heqtcsdl1'] ;
			$namxdcsdl1=$_REQUEST['namxdcsdl1'] ;
			$mdcncsdl1=$_REQUEST['mdcncsdl1'] ;
			$tencsdl2=$_REQUEST['tencsdl2'] ;
			$heqtcsdl2=$_REQUEST['heqtcsdl2'] ;
			$namxdcsdl2=$_REQUEST['namxdcsdl2'] ;
			$mdcncsdl2=$_REQUEST['mdcncsdl2'] ;
			$tencsdl3=$_REQUEST['tencsdl3'] ;
			$heqtcsdl3=$_REQUEST['heqtcsdl3'] ;
			$namxdcsdl3=$_REQUEST['namxdcsdl3'] ;
			$mdcncsdl3=$_REQUEST['mdcncsdl3'] ;
			$tencsdl4=$_REQUEST['tencsdl4'] ;
			$heqtcsdl4=$_REQUEST['heqtcsdl4'] ;
			$namxdcsdl4=$_REQUEST['namxdcsdl4'] ;
			$mdcncsdl4=$_REQUEST['mdcncsdl4'] ;
			$tencsdl5=$_REQUEST['tencsdl5'] ;
			$heqtcsdl5=$_REQUEST['heqtcsdl5'] ;
			$namxdcsdl5=$_REQUEST['namxdcsdl5'] ;
			$mdcncsdl5=$_REQUEST['mdcncsdl5'] ;
			$tenda1=$_REQUEST['tenda1'] ;
			$chudt1=$_REQUEST['chudt1'] ;
			$tongkpda1=$_REQUEST['tongkpda1'] ;
			$tenda2=$_REQUEST['tenda2'] ;
			$chudt2=$_REQUEST['chudt2'] ;
			$tongkpda2=$_REQUEST['tongkpda2'] ;
			$tenda3=$_REQUEST['tenda3'] ;
			$chudt3=$_REQUEST['chudt3'] ;
			$tongkpda3=$_REQUEST['tongkpda3'] ;
			$tenda4=$_REQUEST['tenda4'] ;
			$chudt4=$_REQUEST['chudt4'] ;
			$tongkpda4=$_REQUEST['tongkpda4'] ;

			//Kiem tra da co 1 trong cac loai bao cao chua?
			$str1="select * from reportinfo where macq='".$macq."' and quy=".$quy." and nam=".$nam;
			$result=mysql_query($str1) or die(mysql_error());
			if ($row=mysql_fetch_array($result))
			{
				//Kiem tra da co bao cao ung dung 2 chua?
				$str1="select * from reportinfo where bcungdung2=1 and macq='".$macq."' and quy=".$quy." and nam=".$nam;
				$result=mysql_query($str1) or die(mysql_error());
				if ($row=mysql_fetch_array($result))
				{
					mysql_free_result($result);
					//Chuyen ve trang thong bao da co bao cao ungdung1
					header('Location:message.php?id=1&quy='.$quy.'&nam='.$nam);				
				}
				else
				{
					//Da co loai bao cao khac, them bao cao ung dung 2
					$str1="update reportinfo set bcungdung2=1,website=".$website.",dcwebsite='".$dcwebsite."',tsuatweb=".$tsuatweb;
					$str1=$str1.",qcheweb=".$qcheweb.",tsdvc=".$tsdvc.",tsdvc1=".$tsdvc1.",tsdvc2=".$tsdvc2;
					$str1=$str1.",tsdvc3=".$tsdvc3.",tsdvc4=".$tsdvc4.",tsemail=".$tsemail;
					$str1=$str1.",sdtxemail=".$sdtxemail.",tsuatemail=".$tsuatemail.",baomat=".$baomat;
					$str1=$str1.",tenpcbaomat='".$tenpcbaomat."',tenpmbaomat='".$tenpmbaomat."',tongkp=".$tongkp;
					$str1=$str1.",nstw=".$nstw.",nsdp=".$nsdp.",nskhac=".$nskhac.",dxungdung='".$dxungdung;
					$str1=$str1."' where macq='".$macq."' and quy=".$quy." and nam=".$nam;
					$result=mysql_query($str1) or die(mysql_error());
					mysql_free_result($result);
					
					//Cap nhat thong tin trong bang otherapp
					//Kiem tra co bao cao trong bang otherapp chua, neu co thi cap nhat
					$str1="select * from otherapp where macq='".$macq."' and quy=".$quy." and nam=".$nam;
					$result=mysql_query($str1) or die(mysql_error());
					if ($row=mysql_fetch_array($result))
					{
						$str1="update otherapp set tencsdl1='".$tencsdl1."',heqtcsdl1=".$heqtcsdl1.",namxdcsdl1=".$namxdcsdl1;
						$str1=$str1.",mdcncsdl1=".$mdcncsdl1.",tencsdl2='".$tencsdl2."',heqtcsdl2=".$heqtcsdl2;
						$str1=$str1	.",namxdcsdl2=".$namxdcsdl2.",mdcncsdl2=".$mdcncsdl2.",tencsdl3='".$tencsdl3;
						$str1=$str1."',heqtcsdl3=".$heqtcsdl3.",namxdcsdl3=".$namxdcsdl3.",mdcncsdl3=".$mdcncsdl3;
						$str1=$str1.",tencsdl4='".$tencsdl4."',heqtcsdl4=".$heqtcsdl4.",namxdcsdl4=".$namxdcsdl4;
						$str1=$str1.",mdcncsdl4=".$mdcncsdl4.",tencsdl5='".$tencsdl5."',heqtcsdl5=".$heqtcsdl5;
						$str1=$str1.",namxdcsdl5=".$namxdcsdl5.",mdcncsdl5=".$mdcncsdl5.",tenda1='".$tenda1;
						$str1=$str1."',chudt1='".$chudt1."',tongkpda1=".$tongkpda1.",tenda2='".$tenda2;
						$str1=$str1."',chudt2='".$chudt2."',tongkpda2=".$tongkpda2.",tenda3='".$tenda3;
						$str1=$str1."',chudt3='".$chudt3."',tongkpda3=".$tongkpda3.",tenda4='".$tenda4;
						$str1=$str1."',chudt4='".$chudt4."',tongkpda4=".$tongkpda4;
						$str1=$str1." where macq='".$macq."' and quy=".$quy." and nam=".$nam;
						$result=mysql_query($str1) or die(mysql_error());
						mysql_free_result($result);				
					}
					//Neu chua co thong tin trong bang otherapp, them moi
					else
					{
						$str1="insert into otherapp (macq,quy,nam,tencsdl1,heqtcsdl1,namxdcsdl1,mdcncsdl1,";
						$str1=$str1."tencsdl2,heqtcsdl2,namxdcsdl2,mdcncsdl2,tencsdl3,heqtcsdl3,";
						$str1=$str1."namxdcsdl3,mdcncsdl3,tencsdl4,heqtcsdl4,namxdcsdl4,mdcncsdl4,";
						$str1=$str1."tencsdl5,heqtcsdl5,namxdcsdl5,mdcncsdl5,tenda1,chudt1,";
						$str1=$str1."tongkpda1,tenda2,chudt2,tongkpda2,tenda3,chudt3,tongkpda3,";
						$str1=$str1."tenda4,chudt4,tongkpda4) values ('". $macq."',".$quy.",".$nam.",'";
						$str1=$str1.$tencsdl1."',".$heqtcsdl1.",".$namxdcsdl1.",".$mdcncsdl1;
						$str1=$str1.",'".$tencsdl2."',".$heqtcsdl2.",".$namxdcsdl2.",".$mdcncsdl2;
						$str1=$str1.",'".$tencsdl3."',".$heqtcsdl3.",".$namxdcsdl3.",".$mdcncsdl3;
						$str1=$str1.",'".$tencsdl4."',".$heqtcsdl4.",".$namxdcsdl4.",".$mdcncsdl4;
						$str1=$str1.",'".$tencsdl5."',".$heqtcsdl5.",".$namxdcsdl5.",".$mdcncsdl5;
						$str1=$str1.",'".$tenda1."','".$chudt1."',".$tongkpda1.",'".$tenda2."','".$chudt2;
						$str1=$str1."',".$tongkpda2.",'".$tenda3."','".$chudt3."',".$tongkpda3;
						$str1=$str1.",'".$tenda4."','".$chudt4."',".$tongkpda4.")";
						
						$result=mysql_query($str1) or die(mysql_error());
						mysql_free_result($result);
					}
					//Chuyen ve trang thong bao
					header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
				}
			}
			else
			{
				//Them bao cao moi (hien tai chua co loai bao cao nao)		
				$str1="insert into reportinfo (bcungdung2,macq,quy,nam,website,dcwebsite,tsuatweb,";
				$str1=$str1."qcheweb,tsdvc,tsdvc1,tsdvc2,tsdvc3,tsdvc4,tsemail,";
				$str1=$str1."sdtxemail,tsuatemail,baomat,tenpcbaomat,tenpmbaomat,";
				$str1=$str1."tongkp,nstw,nsdp,nskhac,dxungdung) values (1,'". $macq."',".$quy.",".$nam.",";
				$str1=$str1.$website.",'".$dcwebsite."',".$tsuatweb.",".$qcheweb.",".$tsdvc;
				$str1=$str1.",".$tsdvc1.",".$tsdvc2.",".$tsdvc3.",".$tsdvc4.",".$tsemail.",".$sdtxemail;
				$str1=$str1.",".$tsuatemail.",".$baomat.",'".$tenpcbaomat."','".$tenpmbaomat;
				$str1=$str1."',".$tongkp.",".$nstw.",".$nsdp.",".$nskhac.",'".$dxungdung."')";
				$result=mysql_query($str1) or die(mysql_error());
				mysql_free_result($result);
				
				//Cap nhat thong tin trong bang otherapp
				$str1="insert into otherapp (macq,quy,nam,tencsdl1,heqtcsdl1,namxdcsdl1,mdcncsdl1,";
				$str1=$str1."tencsdl2,heqtcsdl2,namxdcsdl2,mdcncsdl2,tencsdl3,heqtcsdl3,";
				$str1=$str1."namxdcsdl3,mdcncsdl3,tencsdl4,heqtcsdl4,namxdcsdl4,mdcncsdl4,";
				$str1=$str1."tencsdl5,heqtcsdl5,namxdcsdl5,mdcncsdl5,tenda1,chudt1,";
				$str1=$str1."tongkpda1,tenda2,chudt2,tongkpda2,tenda3,chudt3,tongkpda3,";
				$str1=$str1."tenda4,chudt4,tongkpda4) values ('". $macq."',".$quy.",".$nam.",'";
				$str1=$str1.$tencsdl1."',".$heqtcsdl1.",".$namxdcsdl1.",".$mdcncsdl1;
				$str1=$str1.",'".$tencsdl2."',".$heqtcsdl2.",".$namxdcsdl2.",".$mdcncsdl2;
				$str1=$str1.",'".$tencsdl3."',".$heqtcsdl3.",".$namxdcsdl3.",".$mdcncsdl3;
				$str1=$str1.",'".$tencsdl4."',".$heqtcsdl4.",".$namxdcsdl4.",".$mdcncsdl4;
				$str1=$str1.",'".$tencsdl5."',".$heqtcsdl5.",".$namxdcsdl5.",".$mdcncsdl5;
				$str1=$str1.",'".$tenda1."','".$chudt1."',".$tongkpda1.",'".$tenda2."','".$chudt2;
				$str1=$str1."',".$tongkpda2.",'".$tenda3."','".$chudt3."',".$tongkpda3;
				$str1=$str1.",'".$tenda4."','".$chudt4."',".$tongkpda4.")";
				//echo($str1);
				$result=mysql_query($str1) or die(mysql_error());
				mysql_free_result($result);
				//Chuyen ve trang thong bao
				header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);
			}
		}	
	}
	
	////////////////////////////////////////////////////////////////////////Cap nhat bao cao ung dung CNTT 2
	if ($action==16)
	{	
		//Lay thong tin tu form
		$macq=$_SESSION['user'];
		$quy=$_REQUEST['q'] ;
		$nam=$_REQUEST['y'] ;
		//Kiem tra xem bao cao co bi khoa hay khong?
		$str1="select sum(locked) as sumlocked from reportinfo where quy=".$quy." and nam=".$nam;
		$result=mysql_query($str1) or die(mysql_error());
		$row=mysql_fetch_array($result);
		if ($row['sumlocked']>0)
		{
				header('Location:message.php?id=5&quy='.$quy.'&nam='.$nam);
				mysql_free_result($result);
		}
		else
		{			
			$website=$_REQUEST['website'] ;
			$dcwebsite=$_REQUEST['dcwebsite'] ;
			$tsuatweb=$_REQUEST['tsuatweb'] ;
			$qcheweb=$_REQUEST['qcheweb'] ;
			$tsdvc=$_REQUEST['tsdvc'] ;
			$tsdvc1=$_REQUEST['tsdvc1'] ;
			$tsdvc2=$_REQUEST['tsdvc2'] ;
			$tsdvc3=$_REQUEST['tsdvc3'] ;
			$tsdvc4=$_REQUEST['tsdvc4'] ;
			$tsemail=$_REQUEST['tsemail'] ;
			$sdtxemail=$_REQUEST['sdtxemail'] ;
			$tsuatemail=$_REQUEST['tsuatemail'] ;
			$baomat=$_REQUEST['baomat'] ;
			$tenpcbaomat=$_REQUEST['tenpcbaomat'] ;
			$tenpmbaomat=$_REQUEST['tenpmbaomat'] ;
			$tongkp=$_REQUEST['tongkp'] ;
			$nstw=$_REQUEST['nstw'] ;
			$nsdp=$_REQUEST['nsdp'] ;
			$nskhac=$_REQUEST['nskhac'] ;
			$dxungdung=$_REQUEST['dxungdung'] ;
			
			$tencsdl1=$_REQUEST['tencsdl1'] ;
			$heqtcsdl1=$_REQUEST['heqtcsdl1'] ;
			$namxdcsdl1=$_REQUEST['namxdcsdl1'] ;
			$mdcncsdl1=$_REQUEST['mdcncsdl1'] ;
			$tencsdl2=$_REQUEST['tencsdl2'] ;
			$heqtcsdl2=$_REQUEST['heqtcsdl2'] ;
			$namxdcsdl2=$_REQUEST['namxdcsdl2'] ;
			$mdcncsdl2=$_REQUEST['mdcncsdl2'] ;
			$tencsdl3=$_REQUEST['tencsdl3'] ;
			$heqtcsdl3=$_REQUEST['heqtcsdl3'] ;
			$namxdcsdl3=$_REQUEST['namxdcsdl3'] ;
			$mdcncsdl3=$_REQUEST['mdcncsdl3'] ;
			$tencsdl4=$_REQUEST['tencsdl4'] ;
			$heqtcsdl4=$_REQUEST['heqtcsdl4'] ;
			$namxdcsdl4=$_REQUEST['namxdcsdl4'] ;
			$mdcncsdl4=$_REQUEST['mdcncsdl4'] ;
			$tencsdl5=$_REQUEST['tencsdl5'] ;
			$heqtcsdl5=$_REQUEST['heqtcsdl5'] ;
			$namxdcsdl5=$_REQUEST['namxdcsdl5'] ;
			$mdcncsdl5=$_REQUEST['mdcncsdl5'] ;
			$tenda1=$_REQUEST['tenda1'] ;
			$chudt1=$_REQUEST['chudt1'] ;
			$tongkpda1=$_REQUEST['tongkpda1'] ;
			$tenda2=$_REQUEST['tenda2'] ;
			$chudt2=$_REQUEST['chudt2'] ;
			$tongkpda2=$_REQUEST['tongkpda2'] ;
			$tenda3=$_REQUEST['tenda3'] ;
			$chudt3=$_REQUEST['chudt3'] ;
			$tongkpda3=$_REQUEST['tongkpda3'] ;
			$tenda4=$_REQUEST['tenda4'] ;
			$chudt4=$_REQUEST['chudt4'] ;
			$tongkpda4=$_REQUEST['tongkpda4'] ;
		
			$str1="update reportinfo set bcungdung2=1,website=".$website.",dcwebsite='".$dcwebsite."',tsuatweb=".$tsuatweb;
			$str1=$str1.",qcheweb=".$qcheweb.",tsdvc=".$tsdvc.",tsdvc1=".$tsdvc1.",tsdvc2=".$tsdvc2;
			$str1=$str1.",tsdvc3=".$tsdvc3.",tsdvc4=".$tsdvc4.",tsemail=".$tsemail;
			$str1=$str1.",sdtxemail=".$sdtxemail.",tsuatemail=".$tsuatemail.",baomat=".$baomat;
			$str1=$str1.",tenpcbaomat='".$tenpcbaomat."',tenpmbaomat='".$tenpmbaomat."',tongkp=".$tongkp;
			$str1=$str1.",nstw=".$nstw.",nsdp=".$nsdp.",nskhac=".$nskhac.",dxungdung='".$dxungdung;
			$str1=$str1."' where macq='".$macq."' and quy=".$quy." and nam=".$nam;
			$result=mysql_query($str1) or die(mysql_error());
			
			//Cap nhat thong tin trong bang otherapp
			$str1="update otherapp set tencsdl1='".$tencsdl1."',heqtcsdl1=".$heqtcsdl1.",namxdcsdl1=".$namxdcsdl1;
			$str1=$str1.",mdcncsdl1=".$mdcncsdl1.",tencsdl2='".$tencsdl2."',heqtcsdl2=".$heqtcsdl2;
			$str1=$str1	.",namxdcsdl2=".$namxdcsdl2.",mdcncsdl2=".$mdcncsdl2.",tencsdl3='".$tencsdl3;
			$str1=$str1."',heqtcsdl3=".$heqtcsdl3.",namxdcsdl3=".$namxdcsdl3.",mdcncsdl3=".$mdcncsdl3;
			$str1=$str1.",tencsdl4='".$tencsdl4."',heqtcsdl4=".$heqtcsdl4.",namxdcsdl4=".$namxdcsdl4;
			$str1=$str1.",mdcncsdl4=".$mdcncsdl4.",tencsdl5='".$tencsdl5."',heqtcsdl5=".$heqtcsdl5;
			$str1=$str1.",namxdcsdl5=".$namxdcsdl5.",mdcncsdl5=".$mdcncsdl5.",tenda1='".$tenda1;
			$str1=$str1."',chudt1='".$chudt1."',tongkpda1=".$tongkpda1.",tenda2='".$tenda2;
			$str1=$str1."',chudt2='".$chudt2."',tongkpda2=".$tongkpda2.",tenda3='".$tenda3;
			$str1=$str1."',chudt3='".$chudt3."',tongkpda3=".$tongkpda3.",tenda4='".$tenda4;
			$str1=$str1."',chudt4='".$chudt4."',tongkpda4=".$tongkpda4;
			$str1=$str1." where macq='".$macq."' and quy=".$quy." and nam=".$nam;
			$result=mysql_query($str1) or die(mysql_error());
			mysql_free_result($result);		
			header('Location:message.php?id=2&quy='.$quy.'&nam='.$nam);		
		}	
	}	*/
?>