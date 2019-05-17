<?php
// Building Web Forms: Working with Select Tags
// you can use an array to store a list of select options

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
	
$airports = array(
	'ATL' => 'Hartsfield-Jackson Atlanta International Airport',
	'ORD' => 'O\'Hare International Airport',
	'LHR' => 'London Heathrow Airport',
	'HND' => 'Tokyo International Airport',
	'LAX' => 'Los Angeles International Airport',
	'FRA' => 'Frankfurt International Airport',
	'CDG' => 'Charles De Gaulle International Airport',
	'AMS' => 'Schiphol Airport',
	'MAD' => 'Barajas International Airport',
	'HKG' => 'Hong Kong International Airport',
	'DMK' => 'Don Muang International Airport',
	'SFO' => 'San Francisco International Airport',
	'JFK' => 'John F. Kennedy International Airport',
	'LGW' => 'London Gatwick Airport',
	'PEK' => 'Beijing Capital International Airport',
	'YYZ' => 'Toronto Pearson International Airport',
);

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
					<div class="aCell label">Airport</div>
					<div class="aCell formTd">
						<select name="data[airport1]" >
							<?php echo buildOptions($airports); ?>
						</select>
					</div>
				</div>
				<div class="aRow">&nbsp;</div>
				<div class="aRow">
					<div class="aCell label">Multiple Airports</div>
					<div class="aCell formTd">
						<select multiple name="data[airport2][]" >
							<?php echo buildOptions($airports); ?>
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
