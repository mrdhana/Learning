<?php
// Managing the Code -- OOP: Determining the Visibility Level

class Test
{
	// private property
	private $privateVar = 'PRIVATE PROPERTY';
	
	// private method
	private function privateMethod()
	{
		return 'PRIVATE METHOD';
	}
	
	// public method allows controlled access to private properties and methods
	public function getValue()
	{
		return $this->privateVar . '<br />' . $this->privateMethod();
	}	
}

// instantiate class
$test = new Test();

// access to private property and method allowed via public "getValue()"
echo '<br />', $test->getValue();
