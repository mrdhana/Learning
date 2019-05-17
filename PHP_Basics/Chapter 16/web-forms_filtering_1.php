<?php
// Building Web Forms: Securing Form Data: Inbound Filtering
// NOTE: this PHP script is vulnerable to XSS attacks!

// check to see if submit button was pressed
if (isset($_POST['submit'])) {
	$data 	 = $_POST['data'];
	$message = '';
} else {
	// set $data[] values to ''
	$data['title'] 		= '';
	$data['name'] 		= 'NAME';
	$data['address'] 	= 'ADDRESS';
	$data['city'] 		= 'CITY';
	$data['postCode']	= 'POSTCODE';
	$data['age'] 		= '18';
	$data['email'] 		= 'EMAIL@COMPANY.COM';
	$values				= '';
	$message			= 'Try entering: &quot;/>&lt;script>alert(&quot;HACKED!!!&quot;);&lt;/script> <br />in Name field and notice how an attack can be launched!';
}

include 'web-forms_filtering_include.php';
