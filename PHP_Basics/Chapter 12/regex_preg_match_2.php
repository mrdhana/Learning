<?php
// Using Regular Expressions: Using "preg_match()" for Form Validation
// boolean preg_match(pattern, string)
// validating a Canadian postal code

// this pattern look for letter-number-letter <space> number-letter-number
$pattern = '/^[A-Z][0-9][A-Z]\s[0-9][A-Z][0-9]$/i';

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
