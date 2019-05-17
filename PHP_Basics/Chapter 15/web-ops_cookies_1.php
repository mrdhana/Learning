<?php
// Managing Web Operations: Handling Cookies
// setcookie(name, value, expiration, path)

// set a cookie by specifying name, value, and expiration time into the future
$futureTime = time() + 3600;
// always set the path to '/' unless you want to tie the cookie to a folder on your webserver
setcookie('info', 'Cookie Info', $futureTime, '/');
?>
<!DOCTYPE html>
<head>
	<title>Cookies</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
	<body>
		<h1>Cookies</h1>
		<?php phpinfo(INFO_VARIABLES); ?>
	</body>
</html>

