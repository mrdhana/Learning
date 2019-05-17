<?php
// Managing Web Operations: Handling Cookies
// Cookies are always 1 off

// check to see if cookie is set
if (isset($_COOKIE['count'])) {
	// check to see if "inc" was pressed
	$count = (int) $_COOKIE['count'];
	if (isset($_GET['inc'])) {
		$count++;
	// otherwise decrement
	} else {
		$count--;
	}
// if cookie is not set initialize variable to 0
} else {
	$count = 0;
}
// set cookie with current count
setcookie('count', $count, time() + 3600, '/');
?>
<!DOCTYPE html>
<head>
	<title>Cookies</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
	<body>
		<h1>Cookies</h1>
		<b>Count: </b><?php echo $count; ?>
		<form name="getForm" method="GET">
			<input type="submit" name="inc" value="+" />
			<input type="submit" name="dec" value="-" />
		</form>	
		<?php phpinfo(INFO_VARIABLES); ?>
	</body>
</html>
