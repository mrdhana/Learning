<?php
// Building Web Forms: Capturing <form> Data

// capture any input data
if (isset($_POST['submit'])) {
	// captures data from web-forms_capturing_1.html
	$data = var_export($_POST, TRUE) . PHP_EOL;
} else {
	$data = '';
}

// read form into a variable
$form = file_get_contents('web-forms_capturing_2.html');

// replace action="#ACTION#" using str_ireplace()
$form = str_ireplace('#ACTION#', strip_tags($_SERVER['SCRIPT_NAME']), $form);

// replace action="#DATA#" using str_ireplace()
$form = str_ireplace('#DATA#', htmlspecialchars($data), $form);

// echo header HTML
echo '<!DOCTYPE html>';
echo '<!-- Building Web Forms: Capturing <form> Data -->';
echo '<head>';
echo '<meta charset="utf-8">';
echo '<title>Building Web Forms</title>';
echo '<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" >';
echo '<link href="images/favicon.ico?v=2" rel="shortcut icon" type="image/vnd.microsoft.icon" >';
echo '</head>';
echo '<body topmargin="0" leftmargin="0">';

// echo form
echo $form;

// echo closing HTML
echo '</body>';
echo '</html>';
