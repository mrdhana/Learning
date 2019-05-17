<?php
// Understanding the Basics: Understanding the substr() command
// last part of a string: start < 0

// syntax substr($string, $start, $length)
$filename = __FILE__;						// using a magic constant
$extension = substr($filename, -3);
printf('<br />File Name: %s', $filename);
printf('<br />Extension: %s', $extension);

// NOTE: the "pathinfo()" command can be used to obtain information from a filename
// See: http://php.net/manual/en/function.pathinfo.php for more details
// Beyond the scope of this lesson!
