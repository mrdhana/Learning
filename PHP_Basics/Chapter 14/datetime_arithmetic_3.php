<?php
// Working with Date and Time: Performing Date Arithmetic
// getting the day out of a given date

// create the date
$date = new DateTime('28 March 2013');

// display using "l" (lower case L) as a format parameter
echo '<br />Using DateTime:';
echo '<br />Day of Week for 28 March 2013: ', $date->format('l');

// here's the same thing using date()
$timeStamp = strtotime('28 March 2013');
echo '<br />Using date():';
echo '<br />Day of Week for 28 March 2013: ', date('l', $timeStamp);
