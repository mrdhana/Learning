<?php
// Building Web Forms: Defining Checkboxes and Radio Buttons
// you can use an array to build a series of radio buttons or checkboxes

// this function takes an array and produces a <ul><li> list of radio buttons or checkboxes
function buildRadioCheck($type, $name, $array)
{
	$output = '<ul>' . PHP_EOL;
	// build the radio button or checkbox here using a foreach() loop
	foreach ($array as $key => $value) {
		$output .= '<li class="text">'
				 . '<input type="' . $type  . '" '
				 . ' value="' . $key . '" '
				 . ' name="' . $name . '[]" '
				 . '">' . $value 
				 . '</li>' 
				 . PHP_EOL;
	}
	$output .= '</ul>' . PHP_EOL;
	return $output;
}

$gender = array(
	'M' => 'Male',
	'F' => 'Female',
	'N' => 'Neutral',
);

// try expanding the array and see what happens!
$sources = array(
	'AAR' => 'AARP Magazine',
	'RDI' => 'Reader\'s Digest',
	'DEV' => 'Devputra',
	'WDA' => 'Woman\'s Day',
	'CLI' => 'Canadian Living',
	'INT' => 'The Internet',
	'TVA' => 'TV Advertisement',
	'FRE' => 'Friend or relative',
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
		<h4 style="text-align: center;">Defining Radio Buttons and Checkboxes</h4>
		</div>
		<div class="theFormMiddle">
		<!-- action="#" means use this file to process the form -->
		<form name="purchases" action="#" method="POST" enctype="multipart/form-data">
			<div class="aTable">
				<div class="aRow">
					<div class="aCell label">Gender</div>
					<div class="aCell formTd">
						<?php echo buildRadioCheck('radio', 'data[gender]', $gender); ?>
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">How Did You <br />Hear About Us?</div>
					<div class="aCell formTd">
						<span class="text">Check all that apply</span>
						<?php echo buildRadioCheck('checkbox', 'data[hear_about]', $sources); ?>
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

