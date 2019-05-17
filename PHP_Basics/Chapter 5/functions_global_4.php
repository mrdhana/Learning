<?php
// Managing the Code -- Functions: Understanding Global Variables

$thisIsGlobal1 = 'GLOBAL';
$someValue = 22.47;
$someBoolean = TRUE;

function test()
{
	echo '<br />', 'Output from Function test()';
	$thisIsLocal = 'LOCAL';
	// use "global" to identify a global variable
	global $thisIsGlobal1;
	echo '<br />', $thisIsGlobal1;
	// works OK
	echo '<br />', $thisIsLocal;
	return TRUE;
}

test();

// $GLOBALS is an associate array of *all* global variables
echo '<br />', '$GLOBALS', '<br />';
var_dump($GLOBALS);
