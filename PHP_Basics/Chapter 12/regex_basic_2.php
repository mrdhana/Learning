<?php
// Using Regular Expressions: Defining Basic Patterns

include './regex_test.php';

$banner = 'use "^" to search at the beginning <br />this pattern = starts with a number -- /^\d/ also works';
$pattern = '/^[0-9]/';
$testArray = array('December 1', '1 December', 'February 22', '22 February');
echo test($banner, $pattern, $testArray);

$banner = 'use "$" to search at the end <br />searches for filenames ending with *.jpg or *.JPG <br />note the letter "i" following the ending delimiter which makes the search case insensitive';
$pattern = '/jpg$/i';
$testArray = array('file.txt', 'word.doc', 'photo.jpg', 'scotland.JPG');
echo test($banner, $pattern, $testArray);

$banner = 'use "^xxx$" to tell PHP to find *only* "xxx" <br />searches for the word "man" by itself';
$pattern = '/^man$/';
$testArray = array('man', 'woman', 'manual', 'romantic');
echo test($banner, $pattern, $testArray);

echo '<br /><a href="regex_basic_1.php"><</a><a href="regex_basic_3.php">></a>', PHP_EOL;
