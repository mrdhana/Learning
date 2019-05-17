<?php
// Building Web Forms: Securing Form Data: Inbound Filtering
// use filter_var() and (int) for more specific filtering
// see: http://php.net/manual/en/function.filter-var.php
// see: http://php.net/manual/en/filter.filters.sanitize.php

// check to see if submit button was pressed
if (isset($_POST['submit'])) {
	$data 	 = $_POST['data'];
	foreach ($data as $key => $value) {
		// strips tags + encode special characters
		$data[$key] = filter_var($value, FILTER_SANITIZE_STRING);
	}
	// filter email specifically
	if (isset($data['email'])) {
		$data['email'] = filter_var($data['email'], FILTER_SANITIZE_EMAIL);
	}
	// use (int) to force age field to an integer, which automatically removes any characters other than digits
	if (isset($data['age'])) {
		$data['age'] = (int) $data['age'];
	}
	$message = '';
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
	$message			= 'Try entering: &quot;/>&lt;script>alert(&quot;HACKED!!!&quot;);&lt;/script> '
						. '<br />in Name field and notice how values are "sanitized".'
						. '<br />Also notice how the email and age fields are treated.';
}

include 'web-forms_filtering_include.php';
