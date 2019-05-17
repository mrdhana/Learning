<?php
// Understanding the Basics: Using printf() commands to format a string
// a format string includes text and placeholders which start with "%"

// complex output

/*
 * Desired HTML:
 * <table border="1">
 * <tr><th>Name</th><th>Account Number</th><th>Balance</th></tr>
 * <tr><td>Doug</td><td>123456</td><td>$1443.22</td></tr>
 * </table>
 */

// variable assignments
$name = 'Alexandria';
$accountNumber = 1234;
$balance = 1443.22;

echo '<table border="1" cellpadding="5">';
echo '<tr><th>Name</th><th>Account Number</th><th>Balance</th></tr>';
echo '<tr>';
// %s = string  %d = digits  %.2f = floating point with 2 decimal places
// try adding a number after the "%" sign
printf('<td><pre>%20s</pre></td><td><pre>%08d</pre></td><td><pre>%.2f</pre></td>', $name, $accountNumber, $balance);
echo '</tr>';
echo '</table>';
