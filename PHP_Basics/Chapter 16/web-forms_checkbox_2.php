<?php
// Building Web Forms: Defining Checkboxes and Radio Buttons
// builds a breakfast menu of checkboxes and radio buttons from a database table
// you can use a database to build radio buttons and checkboxes
// ... but only if there is not too much information!

// initialize $menu
$menu = '<div class="aRow">' . PHP_EOL;
// database username
$user = 'class';
// database password
$pass = 'password';
// data source = mysql driver, localhost, database = class
$dsn = 'mysql:host=localhost;dbname=class';
// PDO class represents the connection
$pdo = new PDO($dsn, $user, $pass, array(PDO::ATTR_ERRMODE => PDO::ERRMODE_WARNING));
// SQL statement
$sql = 'SELECT * FROM `breakfast` ORDER BY `option_id`;';
// prepare
$stmt = $pdo->prepare($sql);
// execute
$stmt->execute();
// PDO::FETCH_ASSOC = return results in the form of an associative array
while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
	// each $row = an associative array representing one row from the database query
	if ($row['category'] == 'breakfast') {
		$menu .= '</div><!-- row -->' . PHP_EOL;
		$menu .= '<div class="aRow">' . PHP_EOL;
		$class = 'menuLead';
	} else {
		$class = 'menuItem';
	}
	$menu .= '<div class="aCell formTd ' . $class . '">';
	$type = ($row['type'] == 'R') ? 'radio' : 'checkbox';
	$menu .= '<input type="' . $type  . '" '
		   . ' value="' . $row['key'] . '" '
		   . ' name="' . $row['category'] . '[]" '
		   . '">' 
		   . '<br />' . $row['label']
		   . PHP_EOL;
	$menu .= '</div>';
	$menu .= PHP_EOL;
}
$menu .= '</div><!-- row -->' . PHP_EOL;

// closes the database connection
$dbh = NULL;

// check to see if submit button was pressed
if (isset($_POST['submit'])) {
	phpinfo(INFO_VARIABLES);
	exit;
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Building Web Forms</title>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css" >
	<link href="images/favicon.ico?v=2" rel="shortcut icon" type="image/vnd.microsoft.icon" >
</head>
<body topmargin="0" leftmargin="0">
    <div class="container">
      	<div class="theFormAbove">
		<h4 style="text-align: center;">Defining Radio Buttons and Checkboxes</h4>
		</div>
		<div class="theFormMiddle">
		<!-- action="#" means use this file to process the form -->
		<form name="purchases" action="#" method="POST" enctype="multipart/form-data">
			<div class="aTable">
				<div class="menu">
					<?php echo $menu; ?>
				</div>
				<div class="aRow">
					<div class="aCell label">&nbsp;</div>
					<div class="aCell formTd"><input type="submit" name="submit" value="Submit" /></div>
				</div>
			</div>
		</form>
		</div>
		<div class="theFormBelow">
		</div>
		<div style="clear: both;"></div>
      <div class="footer">
      	<hr>
        <p>&copy; 2012 by InfiniteSkills.com | All rights reserved</p>
      </div>
    </div> <!-- /container -->
  </body>
</html>

