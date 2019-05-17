<?php
// Working with Date and Time: Using the date() Command
// see: http://php.net/manual/en/function.date.php
// syntax: date(format_string [,timestamp])
// if no timestamp, uses current time (i.e. time())

// open table
echo '<table width=60%>';

// parts of dates/times
printf('<tr><th>Day</th><td>%s</td>', 	date('l'));
printf('<tr><th>Month</th><td>%s</td>', date('F (M)'));
printf('<tr><th>Year</th><td>%s</td>', 	date('Y'));
printf('<tr><th>h:i A</th><td>%s</td>', date('h:i A'));

// various date formats
printf('<tr><th>m/d/y</th><td>%s</td>', 		date('m/d/y'));
printf('<tr><th>d M Y</th><td>%s</td>', 		date('d M Y'));
printf('<tr><th>Y-m-d H:i:s</th><td>%s</td>', 	date('Y-m-d H:i:s'));
printf('<tr><th>l, d F Y h:i A</th><td>%s</td>',date('l, d F Y h:i A'));

// close table
echo '</table>';
