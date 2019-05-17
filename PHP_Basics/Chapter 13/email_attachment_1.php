<?php
// Managing Email: Adding An Attachment to Email
// set include path to include library
$includePath = get_include_path();
set_include_path('./PHPMailer' . PATH_SEPARATOR . $includePath);
require_once('./PHPMailer/class.phpmailer.php');

// the TRUE param means it will throw exceptions on errors
$mail = new PHPMailer(TRUE);

try {
  $mail->AddAddress('test@unlikelysource.com', 'Test User');
  $mail->SetFrom('doug@unlikelysource.com', 'Doug Bierer');
  $mail->Subject = 'PHPMailer Test Subject Adding Attachment';
  $mail->AltBody = 'To view the message, please use an HTML compatible email viewer!';
  $mail->MsgHTML(file_get_contents('./PHPMailer/examples/contents.html'));
  // Add attachment
  $mail->AddAttachment('further_indications.jpg');      
  // send message
  $mail->Send();
  $status = "Message Sent OK</p>\n";
} catch (phpmailerException $e) {
  // returns error info from the PHPMailer Exception class
  $status = $e->errorMessage(); 
} catch (Exception $e) {
  // this is added in case the exception thrown is *not* a PHPMailer Exception
  $status = $e->getMessage();
}
?>
<html>
<head>
<title>PHPMailer - Sending an Attachment</title>
</head>
<body>
<h1>PHPMailer - Sending an Attachment</h1>
<hr />
<h3>STATUS:</h3>
<?php echo $status; ?>
</body>
</html>
