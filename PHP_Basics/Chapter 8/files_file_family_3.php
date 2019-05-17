<?php 
// Managing Files: Using the "*file*" family
// using "f*" family commands to write to a file

// filename
$filename = 'website_access.log';

// file() command returns an array
$entries = file($filename);

echo '<pre>', var_dump($entries), '</pre>';
