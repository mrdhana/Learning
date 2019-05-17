<?php
// Managing the Code -- OOP: Determining the Visibility Level
// NOTE: there is another level "protected" which is not covered here
//       see: http://www.php.net/manual/en/language.oop5.visibility.php

class Test
{
	// define properties at 2 different visibility levels
	public $publicVar = 'PUBLIC';
	private $privateVar = 'PRIVATE';
	
	// define methods at 2 different visibility levels
	public function publicMethod()
	{
		return 'PUBLIC';
	}
	private function privateMethod()
	{
		return 'PRIVATE';
	}
	
}

// instantiate class
$test = new Test();

// public property and method
echo '<br />', $test->publicVar;
echo '<br />', $test->publicMethod();

// private property and method
//echo '<br />', $test->privateVar;
echo '<br />', $test->privateMethod();
