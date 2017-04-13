<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!--
 * CKFinder
 * ========
 * http://ckfinder.com
 * Copyright (C) 2007-2010, CKSource - Frederico Knabben. All rights reserved.
 *
 * The software, this file and its contents are subject to the CKFinder
 * License. Please read the license.txt file before using, installing, copying,
 * modifying or distribute this file or part of its contents. The contents of
 * this file is part of the Source Code of CKFinder.
-->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
	<title>CKFinder - Sample - Standalone</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="robots" content="noindex, nofollow" />
	<link href="ckfinder/_samples/sample.css" rel="stylesheet" type="text/css" />
	<style type="text/css">

		/* By defining CKFinderFrame, you are able to customize the CKFinder frame style */
		.CKFinderFrame
		{
			border: solid 2px #e3e3c7;
			background-color: #f1f1e3;
		}

	</style>
	<script type="text/javascript">

// This is a sample function which is called when a file is selected in CKFinder.
function ShowFileInfo( fileUrl, data )
{
	alert( 'The selected file URL is "' + fileUrl + '"' ) ;

	// Display additional information available in the "data" object.
	// For example, the size of a file (in KB) is available in the data["fileSize"] variable.
	for ( _info in data )
		alert( 'data["' + _info + '"]' + ' = ' + data[_info] ) ;
}

	</script>
</head>
<body>
	<p style="padding-left: 30px; padding-right: 30px;">
<?php

require_once 'ckfinder/ckfinder.php' ;

// You can use the "CKFinder" class to render CKFinder in a page:
$finder = new CKFinder() ;
$finder->BasePath = 'ckfinder/' ;	// The path for the installation of CKFinder (default = "/ckfinder/").
$finder->SelectFunction = 'ShowFileInfo' ;
$finder->Create() ;

// It can also be done in a single line, calling the "static"
// Create( basePath, width, height, selectFunction ) function:
// CKFinder::CreateStatic( '../../', null, null, 'ShowFileInfo' ) ;

?>
	</p>
</body>
</html>
