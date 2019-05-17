<?php
// Managing the Code -- OOP: Determining the Visibility Level

class Test
{
	// private property
	private $value;
	
	// public methods allow controlled access to private property
	public function setValue($newValue)
	{
		// use "strip_tags()" as security measure to safeguard incoming data
		$this->value = strip_tags($newValue);		
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
// use "htmlspecialchars()" as security measure to safeguard output
echo '<br />', htmlspecialchars($test->getValue());		
echo '<br />', htmlspecialchars('<script>alert("UNSAFE!");</script>');		

