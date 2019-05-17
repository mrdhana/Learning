<?php
// Managing Web Operations: Reading Incoming Header Information
// $_SERVER stores incoming HTTP header information

echo '<br /><b>IP Address:</b> ', $_SERVER['REMOTE_ADDR'];

echo '<br /><b>Previous Webpage:</b> ', $_SERVER['HTTP_REFERER'];

echo '<br /><b>Browser:</b> ';

$customerBrowser = $_SERVER['HTTP_USER_AGENT'];

switch (TRUE) {
	case stripos($customerBrowser, 'MSIE') :
		echo 'Internet Explorer';
		break;
	case stripos($customerBrowser, 'Chrome') :
		echo 'Google Chrome';
		break;
	default :
		echo 'Unidentified';
}

phpinfo(INFO_VARIABLES);
