<?php
// Working with Date and Time: Understanding Timestamps
// time() returns the number of seconds since 1-1-1970

// echos current timestamp
echo '<br />Current Timestamp: ', time();

// date(format_string, timestamp)
// format_string:
// l = full name of the day of the week
// d = 2 digit day of the month
// F = full name of the month
// Y = 4 digit year
echo '<br />Date of Timestamp 1: ', date('l, d F Y', 1);
echo '<br />Today\'s Date: ', date('l, d F Y', time());

