<?php 
// Managing Files: Updating the "error_log"

// set filename
$filename = 'website_access.log';
// get user's IP address
$ip = $_SERVER['REMOTE_ADDR'];
// get user's browser
$browser = $_SERVER['HTTP_USER_AGENT'];
// get date and time
// YYYY-mm-dd 24hour:minutes:seconds
$today = date('Y-m-d H:i:s');
// Use sprintf() to return a formatted string
$message = sprintf("%20s | %20s | %60s\n", $ip, $today, $browser);

// write message to php error log (see "error_log" setting in php.ini file)
error_log($message);

// write message to email address (assuming this server has an MTA)
//error_log($message, 2, 'doug@unlikelysource.com');

// write message to $filename
error_log($message, 3, $filename);

// display contents of the file
echo '<pre>';
readfile($filename);
echo '</pre>';
