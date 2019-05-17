<?php
// Managing the Code -- OOP: Determining the Visibility Level
// visibility level is just a way for the website developer to
// distinguish between properties and methods which are supposed
// to be "internal" to the class -- has no impact on security!

class Test
{
	// private property
	private $value;
	
	// public methods allow controlled access to private property
	public function setValue($newValue)
	{
		$this->value = $newValue;
	}	
	public function getValue()
	{
		return $this->value;
	}	
}

// instantiate class
$test = new Test();

// store value to private property using public method "setValue()"
$test->setValue('<script>alert("UNSAFE!");</script>');

// access to private property and method allowed via public "getValue()"
// NOTE: a private property or method has no impact on website security!!!
echo '<br />', $test->getValue();
