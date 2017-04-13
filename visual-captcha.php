<?php
require('php-captcha.inc.php');
$aFonts = array('fonts/VeraBd.ttf', 'fonts/VeraIt.ttf', 'fonts/Vera.ttf');
$oVisualCaptcha = new PhpCaptcha($aFonts, 150, 50);
$oVisualCaptcha->Create();
?>