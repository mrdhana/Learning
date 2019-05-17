<?php
// Managing Email: Adding An Attachment to Email
// example using only mail() and no external library

$msgTo      = 'test@unlikelysource.com';
$msgSubject = 'Test Attachment Using Only PHP mail()';
$msgBody 	= 'Test attachment using only php mail()';
$fnShort 	= 'further_indications.jpg';
$fileName 	= __DIR__ . DIRECTORY_SEPARATOR . $fnShort;
$num 		= md5(time());

$headers = 'From: doug@unlikelysource.com' . "\r\n";
$headers .= 'MIME-Version: 1.0' . "\r\n";
$file 	 = file_get_contents($fileName);
$file 	 = chunk_split(base64_encode($file));
$headers .= "Content-Type: multipart/mixed; boundary=------".$num."\r\n";
$headers .= "\r\n";
$headers .= "This is a multi-part message in MIME format.\r\n";
$headers .= "--------" . $num . "\r\n";
$headers .= "Message-ID: <" . sha1(microtime()) . "@".$_SERVER['SERVER_NAME'].">\r\n";
$headers .= "X-Mailer: PHP v".phpversion()."\r\n";         
$headers .= "Content-Type: text/html; charset=iso-8859-1; format=flowed\r\n";
$headers .= "Content-Transfer-Encoding: 8bit\r\n";
$headers .= "<html><body>";
$headers .= "" . $msgBody . "\n";
$headers .= "</body></html>";
$headers .= "--------" . $num . "\r\n"; 
$headers .= "Content-Type: image/jpeg name=\"$fnShort\"r\n";
$headers .= "Content-Transfer-Encoding: base64\r\n";
$headers .= "Content-Disposition: attachment; filename=\"$fnShort\"\r\n\n";
$headers .= "" . $file . "\r\n";
$headers .= "--------" . $num . "--";

if (mail($msgTo, $msgSubject, $msgBody, $headers)) {
	echo 'OK';
} else {
	echo 'Problem';
}
