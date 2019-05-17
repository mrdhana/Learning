<?php
// Building Web Forms: Securing Form Data: Output Escaping
// look at the file web-forms_escaping_include.php and note the use of htmlspecialchars()
// do a view page source to see what is actually produced
// see: http://php.net/manual/en/function.htmlspecialchars.php
// NOTE: even though attacks are blocked by output escaping ... the data is NOT SAFE!!

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
	$message			= 'Try entering: &quot;/>&lt;script>alert(&quot;HACKED!!!&quot;);&lt;/script> <br />in Name field and notice how an attack is blocked! <br />NOTE: even though attacks are blocked by output escaping <br />... the data is NOT SAFE!!';
}

include 'web-forms_escaping_include_1.php';
