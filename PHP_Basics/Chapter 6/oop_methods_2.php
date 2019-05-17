<?php
// Managing the Code -- OOP: Creating Methods

// build the class with a series of functions which are logically related
// in this example: functions to generate HTML
class MakeHtml
{
	// a method is a function defined inside a class
	// parameters are defined inside parentheses
	public function makeH1($content)
	{
		return "<h1>$content</h1><hr />\n";
	}
	// creates a <ul><li> list from an array $items
	public function makeUL($items)
	{
		$output = '<ul>' . PHP_EOL;
		foreach ($items as $li) {
			$output .= "<li>$li</li>\n";
		}
		$output .= '</ul>' . PHP_EOL;
		return $output;
	}
}

// use any public method by creating the object and using "->"
$html = new MakeHtml();
echo $html->makeH1('FRUITS');
echo $html->makeUL(array('Apples', 'Oranges', 'Bananas', 'Cherries', 'Peaches'));
