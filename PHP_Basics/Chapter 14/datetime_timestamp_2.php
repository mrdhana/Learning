<?php
// Working with Date and Time: Understanding Timestamps
// mktime(hour, min, sec, month, day, year) returns the equivalent timestamp

// generates a timestamp for 10 January 2013 at midnight
$timeStamp = mktime(0, 0, 0, 1, 10, 2013);
echo '<br />Timestamp for 10 January 2013 at midnight: ', $timeStamp;

// date(format_string, timestamp)
// format_string:
// l = full name of the day of the week
// d = 2 digit day of the month
// F = full name of the month
// Y = 4 digit year
echo '<br />Date of Timestamp: ', date('l, d F Y', $timeStamp);

