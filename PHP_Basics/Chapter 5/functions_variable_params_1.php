<?php
// Managing the Code -- Functions: Handling a Variable Number of Parameters
// building a row of 10 <td> columns with a variable number of items
function preferencesRow()
{
	// initialize $output
	$output = '';
	// use "func_get_args()" to collect all parameters into an array
	$params = func_get_args();
	// used to make sure 10 columns are filled
	$maxCols = 10;
	// loop through the parameters
	foreach ($params as $item) {
		$output .= "<td width='80px' align='center'>$item</td>\n";
		$maxCols--;
	}
	// fill in the rest of the row with empty columns
	for ($x = 0; $x < $maxCols; $x++) {
		$output .= "<td width='80px'>&nbsp;</td>\n";
	}
	return $output;
}
	
// NOTE: you can use "." or "," with echo
echo '<h1>Preferences</h1><hr />' . PHP_EOL;	
echo '<table border=1>' . PHP_EOL;
echo '<tr><th>Tarzan</th>';
echo preferencesRow('Africa', 'jungles', 'tantor', 'mangani', 'cabin in the woods', 
				    'hunting', 'swinging in trees', 'Jane');
echo '</tr>';
echo '<tr><th>Jane</th>';
echo preferencesRow('London', 'parties', 'dancing', 'social events', 'lavish estates');
echo '</tr>';
echo '</table>' . PHP_EOL;
