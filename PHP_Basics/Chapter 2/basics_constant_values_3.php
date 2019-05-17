<?php
// Understanding the Basics: Assigning Constant Values

// the value of a magic constant is defined when your PHP program starts running
// magic constants start and end with "__"

// some examples:

// current filename
echo __FILE__;

echo '<br />';

// current directory
// allows you to write code which can be "moved" to another web server directory
// makes your code more flexible and avoids "hard coding" directory path information
echo __DIR__;

// for more info: http://php.net/manual/en/language.constants.predefined.php
$reference = 'http://php.net/manual/en/language.constants.predefined.php';
echo "<br/><a href='$reference'>More Info</a>";
