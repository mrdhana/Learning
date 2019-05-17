<?php
// Building Web Forms: Working with Select Tags
// you can do an SQL SELECT query to get a list of options

// function to produce a series of option tags:
// <option value="xxx">This</option> etc.
// <option value="yyy">That</option> etc.
function buildOptions($array)
{
	$output = '';
	// build the select field here using a foreach() loop
	foreach ($array as $key => $value) {
		// substitute values into the <option> tag
		// end with PHP_EOL so that it looks nice when you view the page source
		$output .= '<option value="' . $key . '">' . $value . '</option>' . PHP_EOL;
	}
	return $output;
}

// database username
$user = 'class';
// database password
$pass = 'password';
// data source = mysql driver, localhost, database = class
$dsn = 'mysql:host=localhost;dbname=class';
// PDO class represents the connection
$pdo = new PDO($dsn, $user, $pass);

// build array of countries
$list = array();
// SQL statement
$sql = 'SELECT `ISO2`, `country_name` FROM `country_codes`;';
// Use query() for "one-time" SQL requests
// PDO::FETCH_ASSOC = return results in the form of an associative array
foreach ($pdo->query($sql, PDO::FETCH_ASSOC) as $row) {
	// each $row = an associative array representing one row from the database query
	// the 'ISO2' column will be the array key
	// the 'country_name' column will be the array value
	$list[$row['ISO2']] = $row['country_name'];
}
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
		<h4 style="text-align: center;">Understanding Form Input Elements</h4>
		</div>
		<div class="theFormMiddle">
		<!-- action="#" means use this file to process the form -->
		<form name="purchases" action="#" method="POST" enctype="multipart/form-data">
			<div class="aTable">
				<div class="aRow">
					<div class="aCell label">Country</div>
					<div class="aCell formTd">
						<select name="data[country1]" >
							<!-- Use the output from database to build a list of options -->
							<?php echo buildOptions($list); ?>
						</select>
					</div>
				</div>
				<div class="aRow">&nbsp;</div>
				<div class="aRow">
					<div class="aCell label">Multiple Countries</div>
					<div class="aCell formTd">
						<select multiple name="data[country2][]" >
							<!-- Use the output from database to build a list of options -->
							<?php echo buildOptions($list); ?>
						</select>
					</div>
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
