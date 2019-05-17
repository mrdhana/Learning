<?php
// Managing Email: Sending Mail Using "mail()"

$to = 'test@unlikelysource.com';
$subject = 'Test Message With CC and BCC Subject Line';
$message = 'Test message body with CC and BCC';

// "From" header
$headers = 'From: doug@unlikelysource.com' . "\r\n";

// To add additional headers, just keep using the concatenate operator "."
// Make sure all additional headers (except for the last one) end with "\r\n"
$headers .= 'CC: noona@unlikelysource.com' . "\r\n";
$headers .= 'BCC: scott@unlikelysource.com'  . "\r\n";
$headers .= 'X-Mailer: PHP/' . phpversion();

// checks to make sure mail was sent
if (mail($to, $subject, $message, $headers)) {
	echo 'OK';
} else {
	echo 'Problem';
}
