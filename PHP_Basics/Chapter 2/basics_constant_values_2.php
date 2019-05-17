<?php
// Understanding the Basics: Assigning Constant Values

// predefined constants are assigned when PHP is installed
// some examples:

// version of PHP
echo '<br />Version: ';
echo PHP_VERSION;

// translates to newline on Linux and Mac, carriage return/linefeed on Windows
// NOTE: this is only visible when you view the page source
// In Internet Explorer and Firefox: View - Page / Source
// On a Mac: hold down CTRL, click, and select "View Source"
echo '<br />End of Line: ';
echo PHP_EOL;

// maximum size of an integer
echo '<br />Max Int: ';
echo PHP_INT_MAX;
echo PHP_EOL;

// for more info: http://php.net/manual/en/reserved.constants.php
$reference = 'http://php.net/manual/en/reserved.constants.php';
echo "<br /><a href='$reference'>More Info</a>";
