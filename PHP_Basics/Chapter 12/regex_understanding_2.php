<?php
// Using Regular Expressions: Understanding the Three Regular Expression Command Sets

// comes back as 7 characters
$name1 = 'Douglas';
// check length of username
$length1 = strlen($name1);

// comes back as 21 characters!
$name2 = 'ดั๊กลาส';
$length2 = strlen($name2);
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<style>
	td,th {
		text-align: right;
	}
	</style>
</head>
<body>
<table border=1 width="40%">
	<tr><th>Name</th><th>Length</th></tr>
	<tr><td><?php echo $name1;?></td><td><?php echo $length1;?></td></tr>
	<tr><td><?php echo $name2;?></td><td><?php echo $length2;?></td></tr>
</table>	
</body>
</html>
