<?php
// Managing the Code -- OOP: Creating Methods

class MakeHtml
{
	// a method is a function defined inside a class
	// methods follow the same rules as any PHP function
	// parameters are defined inside parentheses
	public function makeH1($content)
	{
		return "<h1>$content</h1>\n";
	}
}

// use any public method by creating the object and using "->"
$html = new MakeHtml();
echo $html->makeH1('TEST');
