<?php
// Understanding the Basics: Debugging an Application
// reading error messages

// generates a "notice"
echo $undefinedVariable;

// generates a "warning"
$text = 'Test';
echo strpos($text, 'Test', 5);		// 3rd parameter represents an "offset"

// generates a "warning"
echo 22/0;							// divide by zero is not allowed

// generates a "parse" error
//$error = 'This is a string which doesn't have the ' escaped properly!';

// generates both a warning and a fatal error
// NOTE: "require" and a related command "include" is discussed in another lesson

require 'some_file.txt';
