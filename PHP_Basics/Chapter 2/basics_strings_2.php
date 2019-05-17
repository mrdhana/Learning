<?php
// Understanding the Basics: Working with Strings
// trim() removes space from *both* beginning and end of a string

// assign values
$untrimmedString = '  This is a string with spaces on the ends.    ';

// use strlen() to get the length of the untrimmed string
$lengthUntrimmed = strlen($untrimmedString);

// now apply trim()
$trimmedString = trim($untrimmedString);

// get the length of the trimmed string
$lengthTrimmed = strlen($trimmedString);

// display the results:
printf('<br />String Before -->|%s|<--', $untrimmedString);
printf('<br />String After ---->|%s|<--', $trimmedString);
printf('<br />Length Before --> %d', $lengthUntrimmed);
printf('<br />Length After ---> %d', $lengthTrimmed);
