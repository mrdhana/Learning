<?php
// Managing Email: Sending Mail Using "mail()"

// Just put a comma between email addresses when sending to more than 1 recipient
$to = 'test@unlikelysource.com, test3@unlikelysource.com';
$subject = 'Test Message Multiple Senders Subject Line';
$message = 'Test message multiple senders body.';

// "required" additional header
$headers = 'From: doug@unlikelysource.com' . "\r\n"
		 . 'X-Mailer: PHP/' . phpversion();

// use an "if" statement to check sure the mail was properly sent
// that way you can notify your website users if there is a problem
if (mail($to, $subject, $message, $headers)) {
	echo 'OK';
} else {
	echo 'Problem';
}
