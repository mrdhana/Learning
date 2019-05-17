<?php
// Understanding the Basics: Understanding the substr() command
// middle part of a string: start > 0

// syntax substr($string, $start, $length)
$name = 'Mr. George Clooney';
printf('<br />Formal Name: %s', $name);

// pull out the first name
printf('<br />First Name: %s', substr($name, 4, 6));

// leave off the length and the remainder is returned
printf('<br />Name without Title: %s', substr($name, 4));

// NOTE: if you don't know the exact position, you can
//       combine substr() with strpos() (discussed in another lesson)

