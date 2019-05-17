<?php
// Building Web Forms: Securing Form Data: Inbound Filtering
// Notice how using strip_tags() makes data safe 
// Quotes make your display look strange, but this will not harm your website
// This type of attack is generally not dangerous except for the following:
//	1. The attacker can use this vulnerability to probe your website for weaknesses
//	2. Unfiltered data when re-displayed can trigger errors, which the attacker can read, and
//  3. If the input becomes part of your website it represents a danger to people visiting the website
//	   (i.e. when displaying an "infected" user profile, javascript can let the attacker read information from visitors)

// check to see if submit button was pressed
if (isset($_POST['submit'])) {
	$data 	 = $_POST['data'];
	foreach ($data as $key => $value) {
		$data[$key] = strip_tags($value);
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
						. '<br />in Name field and notice how javascript does not execute.';
}

include 'web-forms_filtering_include.php';
