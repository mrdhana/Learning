<?php
// Managing Web Operations: Handling Cookies
// setcookie(name, value, expiration, path)

// read the cookie using $_COOKIE['name_of_cookie']
// use strip_tags() to strip out any malicious tags
$value = strip_tags($_COOKIE['info']);
?>
<!DOCTYPE html>
<head>
	<title>Cookies</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
	<body>
		<h1>Cookies</h1>
		<!-- use htmlspecialchars() to echo value of cookie as it is untrusted -->
		<b>Value: </b><?php echo htmlspecialchars($value); ?>
		<?php phpinfo(INFO_VARIABLES); ?>
	</body>
</html>

