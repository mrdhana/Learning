<?php
// Managing Web Operations: Displaying Binary Files
// displaying a JPG

if (isset($_GET['filename'])) {
	// never use directory info from the outside
	// use basename() to strip off directory info
	// use strip_tags() to remove unwanted tags
	// build your own directory path
	$filename = './' . basename(strip_tags($_GET['filename']));
}
// protect against bogus filenames
if (!file_exists($filename)) {
	$filename = './furball_santa_rosa_433px.JPG';
}

$jpg = file_get_contents($filename);

// sets content type
header('Content-Type: image/jpeg');

// sets length
header('Content-Length: ' . strlen($jpg));

// sets disposition
header('Content-Disposition: inline; filename="' . $filename . '"');

// display graphic
echo $jpg;

