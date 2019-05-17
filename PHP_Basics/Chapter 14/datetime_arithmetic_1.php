<?php
// Working with Date and Time</th><td>Performing Date Arithmetic
// you can work directly with timestamps, but you'll have to calculate the seconds!

echo '<table width=60%>';

// calculate number of seconds in an hour
$secondsInHour = 60 * 60;	// 60 secs x 60 minutes
echo '<tr><th>Today</th><td>', 	  date('l, d F Y h:i A'), '</td></tr>';
echo '<tr><th>+1 Hour</th><td>',  date('l, d F Y h:i A', time() + $secondsInHour), '</td></tr>';
echo '<tr><th>+6 Hours</th><td>', date('l, d F Y h:i A', time() + $secondsInHour * 6), '</td></tr>';
echo '<tr><th>-4 Hours</th><td>', date('l, d F Y h:i A', time() - $secondsInHour * 4), '</td></tr>';
echo '<tr><td colspan=2><hr /></td></tr>';

// calculate number of seconds in a day
$secondsInDay = 60 * 60 * 24;	// 60 secs x 60 minutes x 24 hours
echo '<tr><th>Today</th><td>', 	 date('l, d F Y h:i A'), '</td></tr>';
echo '<tr><th>+1 Day</th><td>',  date('l, d F Y h:i A', time() + $secondsInDay), '</td></tr>';
echo '<tr><th>+6 Days</th><td>', date('l, d F Y h:i A', time() + $secondsInDay * 6), '</td></tr>';
echo '<tr><th>-4 Days</th><td>', date('l, d F Y h:i A', time() - $secondsInDay * 4), '</td></tr>';
echo '<tr><td colspan=2><hr /></td></tr>';

// calculate number of seconds in a week
$secondsInWeek = 60 * 60 * 24 * 7;	// 60 secs x 60 minutes x 24 hours x 7 days = seconds in a week
echo '<tr><th>Today</th><td>', 	  date('l, d F Y h:i A'), '</td></tr>';
echo '<tr><th>+1 Week</th><td>',  date('l, d F Y h:i A', time() + $secondsInWeek), '</td></tr>';
echo '<tr><th>+6 Weeks</th><td>', date('l, d F Y h:i A', time() + $secondsInWeek * 6), '</td></tr>';
echo '<tr><th>-4 Weeks</th><td>', date('l, d F Y h:i A', time() - $secondsInWeek * 4), '</td></tr>';

echo '</table>';
