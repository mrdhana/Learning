<?php
// Understanding the Basics: Working with Strings
// use strpos() or stripos() to search a string

// assign a value
$text = 'The quick brown fox jumped over the fence.  Quick as a wink he was gone.';

// get the length
$length = strlen($text);

// find the location of 'Quick'
// remember: PHP strings start at position 0
// if the string is not found a boolean FALSE is returned from strpos()
$pos = strpos($text, 'Quick');

// uncomment the line below to see the result using stripos()
//$pos = stripos($text, 'Quick');

// display the results:
echo '<table border="1">';
printf('<tr><th>String  </th><td>%s</td></tr>', $text);
printf('<tr><th>Length  </th><td>%d</td></tr>', $length);
printf('<tr><th>Position</th><td>%d</td></tr>', $pos);
echo '</table>';
