<?php
// Building Web Forms: Capturing <form> Data

// check to see if data has been set
if (isset($_POST['data'])) {
	// extract $_POST data into a variable
	$data = $_POST['data'];

	// sanatize data
	foreach ($data as $key => $value) {
		$data[$key] = strip_tags($value);
	}
	
	// dump data for demo purposes
	echo '<br />POST data<hr />', var_dump($data);

	// database username
	$user = 'class';
	// database password
	$pass = 'password';
	// data source = mysql driver, localhost, database = class
	$dsn = 'mysql:host=localhost;dbname=class';

	// create PDO object and activate an error mode of warning
	$pdo = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));

	// build SQL statement
	// note that labels in "VALUES" match $_POST field names coming from the form
	$sql = 'INSERT INTO `users` '
		 . '(`name`, `address`, `city`, `state_province`, `postal_code`, `phone`) '
		 . 'VALUES (:name, :address, :city, :stateProvince, :postCode, :phone)';

	// prepare
	$stmt = $pdo->prepare($sql);

	// execute
	$result = $stmt->execute($data);

	echo '<br />RESULT: ', $result;

	// closes the database connection
	$pdo = NULL;
	
} else {
	// if no data, redisplay form
	include 'web-forms_capturing_4.html';
}
