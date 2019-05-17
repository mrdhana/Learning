<?php
// Working with Date and Time: Understanding Timestamps
// strtotime(date_string) returns the equivalent timestamp

// you can use a fixed date ...
// timestamp for 1 January 2013
$timeStamp1 = strtotime('2013-01-01');
echo '<br />Timestamp for 2013-01-01: ', $timeStamp1;
$timeStamp2 = strtotime('01 Jan 2013');
echo '<br />Timestamp for 01 Jan 2013: ', $timeStamp2;
echo '<br />';

// or you can use a *relative* date ...
// for more info on relative time formats see: 
// http://www.php.net/manual/en/datetime.formats.relative.php
// generates a timestamp for the 1st Monday in January 2013
$timeStamp = strtotime('first Monday January 2013');
echo '<br />Timestamp for the 1st Monday in 2013: ', $timeStamp;
echo '<br />Date for the timestamp: ', date('l, F jS, Y', $timeStamp);
echo '<br />';

// generates a timestamp for yesterday
$timeStamp = strtotime('yesterday');
echo '<br />Timestamp for yesterday: ', $timeStamp;
echo '<br />Date for the timestamp: ', date('l, F jS, Y', $timeStamp);
echo '<br />';

// generates a timestamp for the third thursdays for the year 2013
echo '<br />Third Thursday of Each Month in 2013:';
for($x = 1; $x <= 12; $x++) {
	$dateString = sprintf('third thu 2013-%02d-01', $x);
	$timeStamp = strtotime($dateString);
	echo '<br />', date('l, F jS, Y', $timeStamp);
}


