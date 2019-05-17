<?php
// Working with Arrays: Assigning Values

// use range(start, end, step) to quickly populate an array
$array1 = range(0, 99, 10);
var_dump($array1);
echo '<br />';

// using array() to assign keys
$arrayAssoc = array('first' => 'Julia', 'last' => 'Roberts', 'age' => 37, 'occupation' => 'Actress');
var_dump($arrayAssoc);
echo '<br />';

// add to the end using $array[] = value
$arrayNumeric = array();	// initializes empty array
$arrayNumeric[1] = 22;
$arrayNumeric[] = 18;
$arrayNumeric[] = 197;
var_dump($arrayNumeric);
echo '<br />';

// keys can be assigned out of order
// to sort by use use ksort()
$arrayOutOfOrder = array();
$arrayOutOfOrder[33] = 'apples';
$arrayOutOfOrder[22] = 'bananas';
$arrayOutOfOrder[99] = 'cantalope';
$arrayOutOfOrder[] = 'dates';
var_dump($arrayOutOfOrder);
echo '<br />';
