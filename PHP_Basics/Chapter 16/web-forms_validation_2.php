<?php
// Building Web Forms: Securing Form Data: Form Data Validation
// you can also use preg_match() for any type of validation!
// using regular expressions gives you more flexibility, 
// but there is a slight performance cost because the PHP engine has to analyze the pattern as the program is compiled

// check to see if submit button was pressed
if (isset($_POST['submit'])) {
	$error = array();
	$data 	 = $_POST['data'];
	// sanitize data using filter_var()
	foreach ($data as $key => $value) {
		// strips tags + encode special characters
		$data[$key] = filter_var($value, FILTER_SANITIZE_STRING);
	}
	// validate each field
	if (isset($data['title'])) {
		if (!in_array($data['title'], array('','Mr','Mrs'), TRUE)) {
			$error['title'] = '<span class="error">Title must be "Mr", "Mrs" or none</span>';
		}
	}
	if (isset($data['name'])) {
		$error['name'] = '<span class="error">You MUST enter a name!!!</span>';
	}
	if (isset($data['email'])) {
		// pattern reads: starts with alpha, then 1 or more (alpha, number, _ . or -), then @
		//                then 1 or more (alpha-numeric + .) ending with 1 or more alpha
		if (!preg_match('/^[a-z][a-z0-9_.-]+@(\w+\.)+[a-z]+$/i', $data['email'])) {
			$error['email'] = '<span class="error">Bad email address</span>';
		}
	}
	if (isset($data['postCode'])) {
		// pattern reads: 1 or more alpha-numeric + optional space + 1 or more alpha-numeric
		if (!preg_match('/^\w+( )?\w+$/', $data['postCode'])) {
			$error['postCode'] = '<span class="error">Postal Code must only contain letters, numbers, <br />optionally separated by 1 space</span>';
		}
	}
	if (isset($data['age'])) {
		// pattern reads: 1 or more digits
		if (!preg_match('/^\d+$/', $data['age'])) {
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
