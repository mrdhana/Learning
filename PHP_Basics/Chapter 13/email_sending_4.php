<?php
// Managing Email: Sending Mail Using "mail()"
// to send an HTML email set the MIME type and Content-Type headers

// Sending an HTML email
$to = 'test@unlikelysource.com';
$subject = 'HTML Email Test Message Subject Line';

// Notice that there are HTML tags in this message body
$message = '<h1>HTML Test</h1><hr /><p><i>HTML email test message body.</p></i>';

// To send HTML email, add these two headers:
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";

// the rest of the additional headers are like the earlier examples
$headers .= 'From: doug@unlikelysource.com' . "\r\n";
$headers .= 'CC: noona@unlikelysource.com' . "\r\n";
$headers .= 'BCC: scott@unlikelysource.com'  . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

// checks to make sure mail was sent
if (mail($to, $subject, $message, $headers)) {
	echo 'OK';
} else {
	echo 'Problem';
}
