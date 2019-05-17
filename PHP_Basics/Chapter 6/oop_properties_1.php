<?php
// Managing the Code -- OOP: Adding Properties

class User
{
	// properties can be assigned initial values
	// properties can be of any data type
	public $firstName = '';
	public $lastName = '';
	public $accountNumber = 0;
	public $balance = 0;
	public $isMember = FALSE;
	public $preferences = array();
}

// assigning values outside of the class
// create an instance of the class
$user = new User();

// assign values directly if public
$user->firstName = 'Winston';
$user->lastName = 'Churchill';
$user->accountNumber = 998877;
$user->balance = 1230467.88;
$user->isMember = TRUE;
$user->preferences = array('Cigars', 'Conservative Party', 'Polo');

// display results
echo '<pre>', var_dump($user), '</pre>';
