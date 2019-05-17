<?php
// Working with Arrays: Working with Associative Arrays

// associative arrays use a string as a key
$name['first'] = 'Julia';
$name['last'] = 'Roberts';
$name['age'] = 37;
$name['occupation'] = 'Actress';

var_dump($name);

// you can then access elements by key
printf('<br />Full Name: %s %s', $name['first'], $name['last']); 
