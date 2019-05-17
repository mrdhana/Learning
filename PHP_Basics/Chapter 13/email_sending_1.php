<?php
// Managing Email: Sending Mail Using "mail()"
// If you have a mail server configured (i.e. Exchange, exim, postfix, etc., ignore these directions

// To test your email programs, you will need to configure a test sendmail program
// Open in the /path/to/xampp/php/php.ini file
// Look for the "sendmail_path" parameter
// Use the sendmail program which is appropriate for your system
// Alternatively, you could use "sendmail" or "sendmail.bat" provided in the working files area for this chapter

// Simple send
$to = 'test@unlikelysource.com';
$subject = 'Simple Send Test Message Subject Line';
$message = 'Simple send test message body.';

// additional headers always end with "\r\n" except for the last one
// NOTE: you need "" around "\r\n" so that interpolation takes place!
$headers = 'From: doug@unlikelysource.com' . "\r\n";

// Use "." or ".=" to concatenate additional headers
// It is recommended you add "X-Mailer: PHP/xxx" as the last header
// This tells the email server the mail originates from a PHP program
// phpversion() gives you the current version of PHP
$headers .= 'X-Mailer: PHP/' . phpversion();

// send the mail using the mail() command
mail($to, $subject, $message, $headers);
