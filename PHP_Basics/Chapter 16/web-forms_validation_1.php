<?php
// Building Web Forms: Securing Form Data: Form Data Validation
// use validation if you don't want to alter the original user input
// it is still a good idea to "sanitize" the data using a general filter
// such as strip_tags() or filter_var($value, FILTER_SANITIZE_STRING) first!
//
// To perform validation:
// use filter_var() with "validate" filters
// see: http://php.net/manual/en/filter.filters.validate.php
// use ctype_* to check for things like non-alphabetical characters, etc.

// check to see if submit button was pressed
if (isset($_POST['submit'])) {
	$error = array();
	$data 	 = $_POST['data'];
	// sanitize data using filter_var()
	foreach ($data as $key => $value) {
		// strips tags + encode special characters
		$data[$key] = filter_var($value, FILTER_SANITIZE_STRING);
	}
	// validate title by checking to see if it's in an array
	// even though title is a drop-down list, it can still be hacked!
	if (isset($data['title'])) {
		if (!in_array($data['title'], array('','Mr','Mrs'), TRUE)) {
			$error['title'] = '<span class="error">Title must be "Mr", "Mrs" or none</span>';
		}
	}
	// checks to see if name field is blank
	if (isset($data['name'])) {
		$error['name'] = '<span class="error">You MUST enter a name!!!</span>';
	}
	// use filter_var() with a "validate" filter
	if (isset($data['email'])) {
		if (!filter_var($data['email'], FILTER_VALIDATE_EMAIL)) {
			$error['email'] = '<span class="error">Bad email address</span>';
		}
	}
	// use ctype_alnum()
	if (isset($data['postCode'])) {
		if (!ctype_alnum($data['postCode'])) {
			$error['postCode'] = '<span class="error">Postal Code can only contain letters and numbers</span>';
		}
	}
	// use ctype_digit()
	if (isset($data['age'])) {
		if (!ctype_digit($data['age'])) {
			$error['age'] = '<span class="error">Age field can only contain numbers</span>';
		}
	}
	if (count($error) > 0) {
		$message = 'Validation Failed!';
	} else {
		$message = 'All Data Validated OK!';
	}
} else {
	// initialize $data[] values to ''
	$data['title'] 		= '';
	$data['name'] 		= 'NAME';
	$data['address'] 	= 'ADDRESS';
	$data['city'] 		= 'CITY';
	$data['postCode']	= 'POSTCODE';
	$data['age'] 		= '18';
	$data['email'] 		= 'EMAIL@COMPANY.COM';
	$values				= '';
	$message			= 'Try entering improper data into each field and see the results.';
}

include 'web-forms_validation_include.php';
