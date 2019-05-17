<?php
// Managing Web Operations: Managing Output Buffering
// use ob_start() or set "output_buffering" in the php.ini file
// alternatively, as in this example, 
// use ini_set('output_buffering', xxxx) to override the php.ini setting

// this function produces a random string of 100,000 letters, numbers and spaces
function obTest($test)
{
	// string from which letters and numbers are drawn
	$string = 'ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789 ';
	$len = strlen($string) - 1;
	// capture the microtime into $sec = seconds and $msec = microseconds
	list($sec, $msec) = explode(' ', microtime());
	// starting time
	$time1 = $sec + $msec;
	$space = rand(1,64);
	echo $test;
	echo '<br /><hr />';
	// 100,000 random letters, numbers and spaces
	for ($x = 0; $x < 100000; $x++) {
		if ($space--) {
			$pos = rand(0, $len);
			echo substr($string, $pos, 1);
		} else {
			echo ' ';
			$space = rand(1,64);
		}
	}
	// ending time
	list($sec, $msec) = explode(' ', microtime());
	$time2 = $sec + $msec;
	echo '<br /><hr />';
	return '<br /><hr />' . $test . '<hr /><br />Start: ' . $time1 . '<br />Stop:  ' . $time2 . '<br />Difference: ' . ($time2 - $time1);
}

// speed test -- no output buffering
// use ini_set() to override the php.ini setting
ini_set('output_buffering', 0);
$result1 = obTest('NO OUTPUT BUFFER');

// speed test -- output buffering set to 4096
ini_set('output_buffering', 4096);
$result2 = obTest('OUTPUT BUFFER = 4096');

echo '<br /><hr />';
echo $result1;
echo $result2;
echo '<br /><hr />';
echo '<br /><br /><br />';



