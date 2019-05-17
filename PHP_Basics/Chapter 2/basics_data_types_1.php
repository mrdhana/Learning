<?php
// Understanding the Basics: Creating Variables in PHP
// numeric data types include integer and float

// whole number up to 2,147,483,647
// some servers allow a larger size
// also "int"
$intValue = 9982;
echo $intValue;

// echo an HTML line break <br /> to make the output more readable
echo '<br />';

// float = number with a decimal portion
// Also: "floating point," "double," or "real numbers"
$floatValue = 3227.95; 
echo $floatValue;
echo '<br />';

// use the PHP var_dump() function to determine the type and value of a variable
echo var_dump($floatValue);
echo '<br />';

// "type casting"
// notice that the decimal portion is dropped when going from float to int
$intValue2 = (int) $floatValue;
echo var_dump($intValue2);
