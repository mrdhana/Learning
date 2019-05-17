<?php
// Managing the Code -- Functions: Using Parameters by Reference

// preface the parameter with "&"
function ucNames(&$fname, &$mname = '', &$lname = '')
{
	$fname = ucfirst($fname);
	$mname = ucfirst($mname);
	$lname = ucfirst($lname);
	// NOTE: it's a good idea to return *something*!
	return TRUE;
}

$first = 'alfred';
$middle = 'e';
$last = 'neuman';

printf('<br />NAME BEFORE: %s %s %s', $first, $middle, $last);

ucNames($first, $middle, $last);

printf('<br />NAME AFTER: %s %s %s', $first, $middle, $last);
