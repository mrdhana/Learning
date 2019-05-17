<?php
// Building Web Forms: Capturing <form> Data
// using a class to build the form
// NOTE: data comes back in the form of an array $_POST['data']['key']

// include the "Form" class definition file
ini_set('display_errors', 1);
require 'web-forms_capturing_3_class.php';

// init variables
$header = 'Capturing Form Data';
$title = 'Building Web Forms';

// check to see if there's any input
if (isset($_POST['data'])) {
	// because all form elements have name = data[key]
	// we can pull all data from the one key in $_POST
	// NOTE: use var_export($data, TRUE) to produce output of var_dump() without directly outputting right here!
	$postData = var_export($_POST['data'], TRUE);
} else {
	$postData = '';
}

// load class
$form = new Form();

// build form contents
$formContents = $form->input('ID', 'text', 'id', 6, 8);
$formContents .= $form->input('Name', 'text', 'name', 60, 255);
$formContents .= $form->textarea('Address', 'address', 4, 40);
$formContents .= $form->input('City', 'text', 'city', 50, 255);
$formContents .= $form->input('Postal Code', 'text', 'postcode', 16, 16);
$formContents .= $form->input('Phone', 'text', 'phone', 20, 20);
$formContents .= $form->submit('submit', 'Update');

// put form contents into form tag
$formHeader = $form->h(4, $header);
$formTable  = $form->buildForm('userInfo', $_SERVER['REQUEST_URI'], $form->div('aTable', $formContents));
$formDiv	= $form->div('theForm', $formHeader . $formTable);
$dataDiv	= $form->div('data', $postData);
$formFooter = $form->footer('&copy; 2012 by InfiniteSkills.com | All rights reserved');

// echo HTML
echo $form->html($title, $form->div('container', $formDiv . $dataDiv . $formFooter));
