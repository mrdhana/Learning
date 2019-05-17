<?php
// Using Regular Expressions: Defining Basic Patterns
// you can use the "?" quantifier to represent an option

include './regex_test.php';

$banner = 'quantifiers include: <br />* = 0 or more <br />+ = 1 or more <br />? = 0 or 1 (optional) <br />{N} = exactly N <br />{N,M} = from N to M characters'
		. '<br /><br />this pattern validates usernames which are alpha numeric and 6 to 8 characters in length';
$pattern = '/^\w{6,8}$/';
$testArray = array('username', 'a1', 'db2248', 'thisnameisway2long');
echo test($banner, $pattern, $testArray);

$banner = 'US postal codes are in this form: nnnnn or nnnnn-nnnn <br />the last "-nnnn" is optional';
$pattern = '/^\d{5}(-\d{4})?$/';
$testArray = array('M5K 1A1', 'AB11 6EW', '14609-1234', 'H2Y 1Z7', '10001');
echo test($banner, $pattern, $testArray);

echo '<br /><a href="regex_basic_3.php"><</a><a href="regex_basic_5.php">></a>', PHP_EOL;
