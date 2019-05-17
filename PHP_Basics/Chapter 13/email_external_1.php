<?php
// Managing Email: Using External Mail Libraries
/* phpmailer setup:
 * 1. Download from https://github.com/Synchro/PHPMailer
 * 2. Unzip into a directory
 * 3. Make sure this directory is in the php.ini "include_path"
 */

// set the include path to include the "PHPMailer" directory
$includePath = get_include_path();
set_include_path('./PHPMailer' . PATH_SEPARATOR . $includePath);

// include the phpmailer class
require_once('./PHPMailer/class.phpmailer.php');

// create the basic mail object
$mail = new PHPMailer(); 

// get body of the message from a sample file
$body = file_get_contents('./PHPMailer/examples/contents.html');

// add the "from" header
$mail->SetFrom('doug@unlikelysource.com', 'Doug Bierer');

// add the "to" header
$mail->AddAddress('test@unlikelysource.com', 'Test User');

// subject line
$mail->Subject = 'PHPMailer Test Subject Basic Send';

// used if the recipient doesn't have an HTML email client
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';

// add the body as an HTML email message
$mail->MsgHTML($body);

// send mail but use an if() statement to check that it was sent properly
if(!$mail->Send()) {
  $status = 'Mailer Error: ' . $mail->ErrorInfo;
} else {
  $status = 'Message sent!';
}
?>
<html>
<head>
<title>PHPMailer Test Subject Basic Send</title>
</head>
<body>
<h1>PHPMailer Test Subject Basic Send</h1>
<hr />
<h3>STATUS:</h3>
<?php echo $status; ?>
</body>
</html>
