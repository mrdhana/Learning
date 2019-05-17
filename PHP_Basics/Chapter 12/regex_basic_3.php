<?php
// Using Regular Expressions: Defining Basic Patterns

include './regex_test.php';
$testArray = array('M5K 1A1', 'AB11 6EW', '14609-1234', 'H2Y 1Z7', '10001');

$banner = 'searching for letters and numbers <br />use "[0-9]" or "\d" to search for a number <br />use "[A-Z]" or "\w" to search for letters <br />note that "\w" also includes numbers'
	    . '<br /><br />Canadian postal codes are letter-number-letter <space> number-letter-number <br />pattern to validate a Canadian postal code';
$pattern = '/[A-Z][0-9][A-Z] [0-9][A-Z][0-9]/i';
echo test($banner, $pattern, $testArray);

echo '<br /><a href="regex_basic_2.php"><</a><a href="regex_basic_4.php">></a>', PHP_EOL;
