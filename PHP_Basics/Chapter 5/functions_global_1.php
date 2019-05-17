<?php
// Managing the Code -- Functions: Understanding Global Variables

$thisIsGlobal = 'GLOBAL';

function test()
{
	echo '<br />', 'Output from Function test()';
	$thisIsLocal = 'LOCAL';
	// doesn't work
	echo '<br />', $thisIsGlobal;
	// works OK
	echo '<br />', $thisIsLocal;
	return TRUE;
}

test();

echo '<br />', 'Output from Calling Program';
// works OK
echo '<br />', $thisIsGlobal;
// doesn't work
echo '<br />', $thisIsLocal;

