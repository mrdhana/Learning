<?php
// Managing Web Operations: Managing Sessions
// you can store anything you want in a session
// BUT ... if you don't include the class definition, watch the var_dump()

class Test
{
	public $test = 'TEST';
	public function add($op1, $op2)
	{
		return $op1 + $op2;
	}
}

session_start();
$object = $_SESSION['object'];
unset($_SESSION['array']);
?>
<!DOCTYPE html>
<head>
	<title>Sessions</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
</head>
	<body>
		<h1>Sessions</h1>
		Add 2 + 2: <?php echo $object->add(2, 2); ?>
		<br />
		<?php var_dump($object); ?>
		<br />
		<?php var_dump($array); ?>
		<?php phpinfo(INFO_VARIABLES); ?>
	</body>
</html>
