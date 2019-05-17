<?php
// Managing Web Operations: Handling Cookies
// setcookie(name, value, expiration, path)

// remove a cookie by specifying expiration time into the past
$pastTime = time() - 3600;
// always set the path to '/' unless you want to tie the cookie to a folder on your webserver
// the value doesn't matter when removing a cookie
setcookie('info', 0, $pastTime, '/');
?>
<!DOCTYPE html>
<head>
	<title>Cookies</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
	<body>
		<h1>Cookies</h1>
		Note: cookies are always 1 off
		<br />Refresh the page and see that the cookie has been removed
		<?php phpinfo(INFO_VARIABLES); ?>
	</body>
</html>

