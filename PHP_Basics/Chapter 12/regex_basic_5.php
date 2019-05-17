<?php
// Using Regular Expressions: Defining Basic Patterns

include './regex_test.php';

$patternCaseSensitive = '/Doug|Douglas/';
$patternCaseInsensitive = '/Doug|Douglas/i';
$patternUTF8 = '/ดักลาส/u';
$name = array('fred flintstone', 'doug bierer', 'kirk douglas', 'barney rubble','ชื่อของฉันคือดักลาส');

echo '<!DOCTYPE HTML>' . PHP_EOL;
echo '<head><meta http-equiv="content-type" content="text/html;charset=utf-8" /></head>' . PHP_EOL;
echo '</head><body>' . PHP_EOL;
$banner = 'This pattern searches for "Doug" or "Douglas"';
echo test($banner, $patternCaseSensitive, $name);

$banner = 'use the "i" modifier to indicate case insensitive search';
echo test($banner, $patternCaseInsensitive, $name);

$banner = 'use the "u" modifier to search UTF-8 encoded multi-byte international characters';
echo test($banner, $patternUTF8, $name);

echo '<br /><a href="regex_basic_4.php"><</a><a href="regex_basic_1.php">></a>', PHP_EOL;
echo '</body></html>' . PHP_EOL;
