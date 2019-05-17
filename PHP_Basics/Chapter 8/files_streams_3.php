<?php 
// Managing Files: Understanding Streams
// applying filters

// filename
$filename = 'gettysburg.txt';
// create file handle
$fh = fopen($filename, 'r');
// test to see if OK
if ($fh) {
	// use stream_filter_register() to make PHP aware of the filter when not enabled by default
	// use stream_filter_append() to add a filter to your stream
	// you can add as many as you want in a chain
	stream_filter_append($fh, 'string.tolower');
	// display contents all at once
	fpassthru($fh);
	// rewind
	rewind($fh);
	echo '<br /><hr />';
	// add another filter
	stream_filter_append($fh, 'string.toupper');
	// display contents all at once
	fpassthru($fh);
	// close the file handle
	fclose($fh);
} else {
	echo 'ERROR: unable to open file ' . $filename;
}

echo '<br /><hr />';
// use phpinfo() to find out what filters are available on your server
phpinfo();
