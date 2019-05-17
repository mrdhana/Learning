<?php
// Working with Arrays: Access Single Cell
// echo $array[key][key]

echo '<pre>';
// create a 3 x 3 matrix
$matrix = array(array(1, 2, 3), array(4, 5, 6), array(7, 8, 9));

var_dump($matrix);

echo '</pre>';

echo "<br />Middle Element: {$matrix[1][1]}";

