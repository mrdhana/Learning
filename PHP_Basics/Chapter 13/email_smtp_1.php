<?php
// Managing Email: Sending Email Using SMTP
// SMTP = Simple Mail Transfer Protocol

// setting up the PHPMailer object
require_once('./PHPMailer/class.phpmailer.php');
$mail             = new PHPMailer();

// recipient
$mail->AddAddress('test@unlikelysource.com', 'Test User');
// sender
$mail->SetFrom('doug@unlikelysource.com', 'Doug Bierer');

// subject, body and attachments
$body             = file_get_contents('./PHPMailer/examples/contents.html');
$mail->Subject    = 'PHPMailer Test Subject via SMTP';
$mail->MsgHTML($body);
$mail->AddAttachment('./PHPMailer/examples/images/phpmailer.gif');      // attachment
$mail->AddAttachment('./PHPMailer/examples/images/phpmailer_mini.gif'); // attachment

// SMTP configuration
$mail->IsSMTP(); // telling the class to use SMTP
$mail->SMTPDebug  = 1;                     // enables SMTP debug information (for testing)
                                           // 1 = errors and messages
                                           // 2 = messages only
$mail->SMTPAuth   = true;                  		// enable SMTP authentication
$mail->CharSet	  = 'utf-8';			   		// character encoding
$mail->Secure	  = 'tls';				   		// sets the security transport to transport layer security
												// depending on the SMTP server could also be "ssl"
$mail->Host       = 'smtp.yourserver.com'; 		// sets the SMTP server
$mail->Port       = 587;						// SMTP "tls" port -- for "ssl" might use a different port
$mail->Username   = 'doug@unlikelysource.com'; 	// SMTP account username
$mail->Password   = 'password';        	   		// SMTP account password

if ($mail->Send()) {
	$status = 'Message sent!';
} else {
	$status = 'PROBLEM!';
}
?>
<html>
<head>
<title>PHPMailer - SMTP basic test</title>
</head>
<body>
<h1>PHPMailer - SMTP basic test</h1>
<hr />
<h3>STATUS: </h3>
<?php echo $status; ?>
</body>
</html>
