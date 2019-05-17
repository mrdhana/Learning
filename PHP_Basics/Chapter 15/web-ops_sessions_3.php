<?php
// Managing Web Operations: Managing Sessions
// you can store anything you want in a session

class Test
{
	public $test = 'TEST';
	public function add($op1, $op2)
	{
		return $op1 + $op2;
	}
}

session_start();
$_SESSION['object'] = new Test();
$_SESSION['array'] = array(1, 2, 3, 4, 5);
?>
<!DOCTYPE html>
<head>
	<title>Sessions</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
	<body>
		<h1>Sessions</h1>
		Info stored in session
		<?php phpinfo(INFO_VARIABLES); ?>
	</body>
</html>
