<?php
// Managing Web Operations: Managing Sessions
// session_start()
// 1st time: sets a cookie PHPSESSID
// 2nd time: looks for the cookie and reads session info
session_start();
if (isset($_POST['first_name'])) {
	$_SESSION['first'] = strip_tags($_POST['first_name']);
} else {
	$_SESSION['first'] = 'Unknown';
}
if (isset($_POST['family_name'])) {
	$_SESSION['last'] = strip_tags($_POST['family_name']);
} else {
	$_SESSION['last'] = 'User';
}
$fullName = $_SESSION['first'] . ' ' . $_SESSION['last'];
?>
<!DOCTYPE html>
<head>
	<title>Sessions</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
	<body>
		<h1>Sessions</h1>
		Welcome <?php echo htmlspecialchars($fullName); ?>
		<form name="postForm" method="POST">
			<table width=60%>
			<tr><th>First Name</th><td><input type="text" name="first_name" /></td></tr>
			<tr><th>Family (last) Name</th><td><input type="text" name="family_name" /></td></tr>
			<tr><td>&nbsp;</td><td><input type="submit" /></td></tr>
			</table>	
		</form>	
		NOTE: session data never appears as inbound data!
		<?php phpinfo(INFO_VARIABLES); ?>
	</body>
</html>
