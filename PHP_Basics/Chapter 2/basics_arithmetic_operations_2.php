<?php
// Understanding the Basics: Performing Arithmetic Operations
// combination operators: "+"  "-"  "*"  or  "/"  plus  "="
// advantage: represents a shorter way of representing a simple arithmetic operation

// using addition to add a value to an existing variable
$intValue = 39;
$intValue = $intValue + 3;	// add original value + 3
echo $intValue;				// returns 42

echo '<br />';

// same thing using combination operator +=
$intValue = 39;
$intValue += 3;		// adds original value + 3
echo $intValue;		// returns 42

echo '<br />';

// other examples
$intValue *= 2;		// multiplies original value times 2
echo $intValue;		// returns 84
echo '<br />';
$intValue -= 20;	// subtracts 20 from original value
echo $intValue;		// returns 64
echo '<br />';
$intValue /= 10;	// original value divided by 10
echo $intValue;		// returns 6.4
