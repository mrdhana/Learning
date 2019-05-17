<?php
// Understanding the Basics: Working with Strings
// use the concatenate operator "." to join strings

// assign values
$street 	= 'Main Street';
$number 	= 248;
$city 		= 'Toronto';
$province 	= 'Ontario';

// concatenate on assignment
$address = $number . ' ' . $street . ', ' . $city . ', ' . $province;
echo "<br />Full Address Using '.'  :<br /> $address";

// also join strings using sprintf() (like printf() but returns a value)
$address = sprintf('%d %s, %s, %s', $number, $street, $city, $province);
echo "<br />Full Address Using sprintf  :<br /> $address";
