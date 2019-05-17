<?php
// Using Regular Expressions: Defining Basic Patterns
// one use for regular expressions is to pick out words
// e.g. you might want to scan user input for certain keywords

include './regex_test.php';

$testArray = array('This website rocks!', 
				   'This site is totally awesome!',
				   'Some people really like this blog.',
				   'Awesome is a word I would use to describe this article!');

$banner = 'how to find a word in a sentence <br />this pattern looks for the word "awesome"';
$pattern = '/awesome/';
echo test($banner, $pattern, $testArray);

$banner = 'how to find a word regardless of UPPER or lowercase <br />this pattern is the same as above, but uses the "i" modifier';
$pattern = '/awesome/i';
echo test($banner, $pattern, $testArray);

$banner = 'how to find a list of words in a sentence <br />this pattern looks for the occurrence of two words: "awesome" and/or "rocks" <br />"|" = logical or';
$pattern = '/awesome|rocks/i';
echo test($banner, $pattern, $testArray);

echo '<br /><a href="regex_basic_5.php"><</a><a href="regex_basic_2.php">></a>', PHP_EOL;

