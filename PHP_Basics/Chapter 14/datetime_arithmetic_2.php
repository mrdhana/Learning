<?php
// Working with Date and Time: Performing Date Arithmetic
// For info on intervals: http://php.net/manual/en/dateinterval.construct.php
// you can also use DateTime::add() and sub()

echo '<table width=60%>';

// create date
$date = new DateTime();
echo '<tr><th>Today</th><td>', $date->format('l, d F Y h:i A'), '</td></tr>';

// create "intervals" and add 1 week
// P = period; W = week
$interval = new DateInterval('P1W');
$date->add($interval);
echo '<tr><th>+1 Week</th><td>', $date->format('l, d F Y h:i A'), '</td></tr>';

// subtract 3 months and 2 days
// P = period; M = month; D = day
$interval = new DateInterval('P3M2D');
$date->sub($interval);
echo '<tr><th>-3 months 2 days</th><td>', $date->format('l, d F Y h:i A'), '</td></tr>';

echo '</table>';
