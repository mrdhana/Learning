<?php
// Understanding the Basics: Assigning Constant Values

// constants are like variables but never change
// constants are defined with the define() command
// as a convention, constants use UPPER_CASE
// constants can be assigned any of the 4 basic data types

// int
define('LEVEL_1', 1);

// float
define('PI', 22/7);

// string
define('FILE_ERROR', 'ERROR: unable to open a file!');

// boolean
define('VALID', TRUE);

// constants can be assigned to variables
$pi = PI;

// constants can be echoed
echo FILE_ERROR;
