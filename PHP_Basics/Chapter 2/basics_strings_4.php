<?php
// Understanding the Basics: Working with Strings
// use strtolower(), strtoupper(), or ucwords() to change case

// assign a value
$text = 'The quick brown fox jumped over the fence.  Quick as a wink he was gone.';

// make lowercase
$textLower = strtolower($text);

// make UPPERCASE
$textUpper = strtoupper($text);

// make 1st letter Uppercase
$textFirstWords = ucwords($text);

// display the results:
echo '<table border="1">';
printf('<tr><th>lowercase  </th><td>%s</td></tr>', $textLower);
printf('<tr><th>UPPERCASE  </th><td>%s</td></tr>', $textUpper);
printf('<tr><th>1st Letter </th><td>%s</td></tr>', $textFirstWords);
echo '</table>';

// NOTE: sometimes it is more convenient to store a string as all UPPER or all lowercase strings
