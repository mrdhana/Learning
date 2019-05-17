<?php 
// Managing Files: Updating the "error_log"
// set filename
$filename = 'website_access.log';
// create file handle -- append mode: use the "+" if you later want to read from the file
// get user's IP address
$ip = $_SERVER['REMOTE_ADDR'];
// get user's browser
$browser = $_SERVER['HTTP_USER_AGENT'];
// get date and time
// YYYY-mm-dd 24hour:minutes:seconds
$today = date('Y-m-d H:i:s');
// "\n" = new line character
$message = sprintf($fh, "%20s | %20s | %60s\n", $ip, $today, $browser);
