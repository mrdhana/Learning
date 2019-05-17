<?php
// Using Regular Expressions: Understanding the Three Regular Expression Command Sets
// example of validation

// $_GET is an associative array created by PHP to represent parameters in the URL
// check to see if set; if so, assign $_GET to $name; otherwise assign '' to $name
$name = isset($_GET['username']) ? $_GET['username'] : '';

// check to see if username is set
if (!$name) {
	$message = '';
// Here is an example of a pattern which searches for alphabetic and numeric characters
} elseif (preg_match('/^\w+$/', $name)) {
	$message = 'Username is OK';
// otherwise assume username is invalid
} else {
	$message = 'Username is INVALID!';
}
?>
<!DOCTYPE html><html lang="en">
  <head>
    <title>PHP and MySQL</title>
    <style>
	.container {
		background-image: url("images/BG.jpg");
		background-position: top left;
		background-repeat: no-repeat;
		width: 1280px;
		height: 720px;
	}
    </style>
    </head>
  <body topmargin="0" leftmargin="0">
    <div class="container">
		<form method="GET">
		<table width="80%">
			<tr height="140px;">
				<td width="100px;">&nbsp;</td>
				<td>&nbsp;</td>
			</tr>
			<tr>
				<td width="100px;">&nbsp;</td>
				<th>Enter Username:</th>
				<td><input type="TEXT" name="username" size=40 maxlength=64 /></td>
			</tr>
			<tr>
				<td width="100px;">&nbsp;</td>
				<td>&nbsp;</td>
				<td><input type="SUBMIT" /></td>
			</tr>
			<tr>
				<td width="100px;">&nbsp;</td>
				<td>&nbsp;</td>
				<td><?php echo $message; ?></td>
			</tr>
		</table>
		</form>
    </div>
  </body>
</html>

