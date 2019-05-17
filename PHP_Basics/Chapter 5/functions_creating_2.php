<?php
// Managing the Code -- Functions: Creating Your Own Functions

// function which produces a <ul><li> HTML from an array
// syntax: function nameOfYourFunction($parameter) { // code; }
// $label = label at top of the list; not used outside the function
// $array = array of values to render; not used outside the function

function ulLiHtml($label, $array) 
{
	// the same block of code using $output
	$output =  "<br />$label:<hr />";
	// NOTE the use of the ".=" (concatenate equals) combined operator
	$output .= '<ul>' . PHP_EOL;
	foreach ($array as $li) { $output .= "<li>$li</li>"; }
	$output .= '</ul>' . PHP_EOL;
	return $output;
}

$fruits = array('Apples', 'Bananas', 'Pears', 'Oranges', 'Peaches', 'Strawberries');
$vegetables = array('Peas', 'Carrots', 'Lettuce', 'Artichokes', 'Beans');
$meats = array('Beef', 'Pork', 'Veal', 'Chicken', 'Turkey');

// $fruits is assigned to $array which is then used in the function
echo ulLiHtml('FRUITS', $fruits);

// $vegetables is assigned to $array which is then used in the function
echo ulLiHtml('VEGETABLES', $vegetables);

// $meats is assigned to $array which is then used in the function
echo ulLiHtml('MEATS', $meats);
