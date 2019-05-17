<?php
// Managing Web Operations: Displaying Binary Files
// displays PDF file

if (isset($_GET['filename'])) {
	// never use directory info from the outside
	// use basename() to strip off directory info
	// use strip_tags() to remove unwanted tags
	// build your own directory path
	$filename = './' . basename(strip_tags($_GET['filename']));
}
// protect against bogus filenames
if (!file_exists($filename)) {
	$filename = './test.pdf';
}

// reads file into $pdf
$pdf = file_get_contents($filename);

// sets content type
header('Content-Type: application/pdf');

// sets length
header('Content-Length: ' . strlen($pdf));

// sets disposition
header('Content-Disposition: attachment; filename="' . $filename . '"');

// display graphic
echo $pdf;
