<?php
// Managing Web Operations: Reading Inbound Information from Built-in $_* Globals
// Super Globals: $_GET  $_POST  $_COOKIE  $_REQUEST  $_SESSION  $_SERVER  $_ENV
// setcookie(name, value, expiration time, path)
setcookie('name_from_cookie', 'NAME', time() + 3600, '/');
?>
<!DOCTYPE html>
<head>
	<title>$_* Globals</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
	<body>
		<h1>$_* Globals</h1>
		<h3>GET</h3>
		<form name="getForm" method="GET">
			<input type="text" name="name_from_get" />
			<input type="submit" />	
		</form>	
		<h3>POST</h3>
		<form name="postForm" method="POST">
			<input type="text" name="name_from_post" />
			<input type="submit" />		
		</form>	
		NOTE: $_REQUEST = $_GET + $_POST + $_COOKIE
		<?php phpinfo(INFO_VARIABLES); ?>
	</body>
</html>
