<?php
    header("Content-Type: application/rss+xml; charset=utf-8");

	include("dbconnect.php"); 
	include("function.php");
	//ISO-8859-1
    $rssfeed = '<?xml version="1.0" encoding="utf-8"?>';
    $rssfeed .= '<rss version="2.0">';
    $rssfeed .= '<channel>';
    $rssfeed .= '<title>'.getPara('title','value2').'</title>';
    $rssfeed .= '<link>'.getPara('url','value2').'</link>';
    $rssfeed .= '<description>'.getPara('title','value2').'</description>';
    $rssfeed .= '<language>Vietnamese</language>';
    $rssfeed .= '<copyright>Copyright (C) 2009-2010 ita-binhdinh.com</copyright>';
	$rssfeed .= '<image><title>eGovCMS</title>';
	$rssfeed .= '<url>'.getPara('url','value2').'/image/egovcms.jpg</url>';
	$rssfeed .= '<link>'.getPara('url','value2').'</link>';
	$rssfeed .= '<width>88</width>';
	$rssfeed .= '<height>31</height>';
	$rssfeed .= '</image>';
 
	$str1="select * from news where approval=1 order by newsid desc";
	$result=mysql_query($str1) or
		die(mysql_error());
	$i=0;
    while($row = mysql_fetch_array($result)) {
        extract($row);
		$i++;
        $rssfeed .= '<item>';
        $rssfeed .= '<title>' . strip_tags($title) . '</title>';
        $rssfeed .= '<description>' . strip_tags($abstract) . '</description>';
        $rssfeed .= '<link>'.getPara('url','value2').'/newsdetail.php?id='.$newsgroup.'&amp;newsid='.$newsid.'</link>';
        $rssfeed .= '<pubDate>' . date("D, d M Y H:i:s O", strtotime($date)) . '</pubDate>';
        $rssfeed .= '</item>';
		if ($i==10) break;
    }

    $rssfeed .= '</channel>';
    $rssfeed .= '</rss>';

    echo $rssfeed;
?>