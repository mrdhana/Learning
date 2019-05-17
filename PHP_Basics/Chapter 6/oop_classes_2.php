<?php
// Managing the Code -- OOP: Defining Classes

class UserProfile {
	// properties
	public $name;
	public $address;
	// methods
	public function showPreferences($id)
	{
		// some code;
	}
	public function generateAddressTable($name, $address)
	{
		// some code;
	}
}

// use the class by "instantiating" it
$profile = new UserProfile();

var_dump($profile);

