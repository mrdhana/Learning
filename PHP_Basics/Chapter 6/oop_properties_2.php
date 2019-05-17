<?php
// Managing the Code -- OOP: Adding Properties

class User
{
	public $firstName = '';
	public $lastName = '';
	public $accountNumber = 0;
	public $balance = 0;
	public $isMember = FALSE;
	public $preferences = array();

	// properties can be assigned values in methods
	public function setupUser($fname, $lname, $acctNo, $balance, $isMemb, $prefs)
	{
		$this->firstName = $fname;
		$this->lastName = $lname;
		$this->accountNumber = $acctNo;
		$this->balance = $balance;
		$this->isMember = $isMemb;
		$this->preferences = $prefs;
	}
}

// create an instance of the class
$user = new User();

// assign values using a method
$user->setupUser('Amelia', 'Earhart', 887766, 234567.89, TRUE, array('Airplanes', 'GP', 'Flying'));

// display results
printf('<br />Name: %s %s', $user->firstName, $user->lastName);
printf('<br />Account Number: %d', $user->accountNumber);
printf('<br />Balance: $%8.2f', $user->balance);

