<?php
// Understanding the Basics: Understanding the substr() command
// first part of a string = start with 0

// syntax substr($string, $start, $length)
$firstName = 'Doug';
$lastName = 'Bierer';

// print the name
printf('<br />Full Name: %s %s', $firstName, $lastName);

// use substr to get the 1st initials
// NOTE: strings start with 0, not 1!
printf('<br />Initials: %s%s', substr($firstName, 0, 1), substr($lastName, 0, 1));
