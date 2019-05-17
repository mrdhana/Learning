<?php
// Understanding the Basics: Performing Arithmetic Operations

// addition
$addValue1 = 2 + 2;
$addValue2 = $addValue1 + 22.8;
$addValue3 = $addValue1 + $addValue2;

// subtraction
$subValue1 = $addValue3 - 10;

// multiplication
$mulValue1 = 2 * 2;

// division
$divValue1 = 22/7;

// combination using ()
$comboValue1 = (($addValue1 + $addValue2) * 22) / 18;

// display results
echo "<br />Addition:";
echo "<br />Value 1: $addValue1";
echo "<br />Value 2: $addValue2";
echo "<br />Value 3: $addValue3";
echo "<br />Subtraction:";
echo "<br />Value 1: $subValue1";
echo "<br />Division:";
echo "<br />Value 1: $divValue1";
echo "<br />Combo:";
echo "<br />Value 1: $comboValue1";
