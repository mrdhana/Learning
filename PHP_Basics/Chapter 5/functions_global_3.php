<?php
// Managing the Code -- Functions: Understanding Global Variables

$thisIsGlobal = 'GLOBAL';

// TIP: use parameters rather than relying on global variables
function test($global)
{
	echo '<br />', 'Output from Function test()';
	// works OK
	echo '<br />', $global;
	return TRUE;
}

test($thisIsGlobal);

echo '<br />', 'Output from Calling Program';
// works OK
echo '<br />', $thisIsGlobal;

