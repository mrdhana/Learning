<?php
// Managing Email: Using External Mail Libraries
// adding additional headers: CC, BCC, and Reply To

// set the include path to include the "PHPMailer" directory
$includePath = get_include_path();
set_include_path('./PHPMailer' . PATH_SEPARATOR . $includePath);

// include the phpmailer class
require_once('./PHPMailer/class.phpmailer.php');

// create the basic mail object
$mail = new PHPMailer(); 

// get body of the message from a sample file
$body = file_get_contents('./PHPMailer/examples/contents.html');
$mail->SetFrom('doug@unlikelysource.com', 'Doug Bierer');
$mail->AddAddress('test@unlikelysource.com', 'Test User');
$mail->Subject = 'PHPMailer Test Subject via mail(), basic';

// add CC, BCC and Reply To headers
$mail->AddCC('test3@unlikelysource.com');
$mail->AddBCC('noona@unlikelysource.com');
$mail->AddReplyTo('doug@unlikelysource.com');

// set body of the message contents
$mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
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
<title>PHPMailer Test Subject CC, BCC, etc.</title>
</head>
<body>
<h1>PHPMailer Test Subject CC, BCC, etc.</h1>
<hr />
<h3>STATUS:</h3>
<?php echo $status; ?>
</body>
</html>
