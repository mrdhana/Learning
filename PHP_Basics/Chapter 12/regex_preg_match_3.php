<?php
// Using Regular Expressions: Using "preg_match()" for Form Validation
// boolean preg_match(pattern, string)
// validating a US postal code: 

// this pattern validates nnnnn-nnnn (where the last "-nnnn" is optional)
$pattern = '/^\d{5}(-\d{4})?$/i';

// test data
$testArray = array('M5K 1A1', 'AB11 6EW', '14609-1234', 'H2Y 1Z7', '10001');

// display results
echo "<pre><br /><b>$pattern</b><br />\n";
foreach ($testArray as $item) {
	echo $item, ' [';
	// checks to see if postal code follows Canadian format
	if (preg_match($pattern, $item)) {
		echo 'OK';
	} else {
		echo 'NOT OK';
	}
	echo ']', PHP_EOL;
}
echo "</pre>\n";
