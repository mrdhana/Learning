<?php
// Using Regular Expressions: Using "preg_match()" for Form Validation
// boolean preg_match(pattern, string)
// validating a house number

// this pattern checks for 1 to 16 letters, numbers or spaces
$pattern = '/^(\w|\s){1,16}$/';

// test data
$testArray = array('1100', '<bad>House Number</bad>', 'Basement Left', '39 Top Right');

// display results
echo "<pre><br /><b>$pattern</b><br />\n";
foreach ($testArray as $item) {
	echo htmlspecialchars($item), ' [';
	// checks to see if house number is from 1 to 16 letters, numbers or spaces
	if (preg_match($pattern, $item)) {
		echo 'OK';
	} else {
		echo 'NOT OK';
	}
	echo ']', PHP_EOL;
}
echo "</pre>\n";
