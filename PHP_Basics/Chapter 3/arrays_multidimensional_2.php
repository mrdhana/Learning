<?php
// Working with Arrays: Single Assignment
// $array[][] = new assignment

echo '<pre>';
// create a 3 x 3 matrix
$matrix = array(range(0, 2), range(0, 2), range(0, 2));

// assign a value to the middle element
$matrix[1][1] = 'MIDDLE';

// assign a value to the end of the row 0
$matrix[0][] = 'END ROW 0';

var_dump($matrix);

// create a 2 x 2 array
$array2x2 = array('above' => array('left' => 'a', 'right' => 'b'),
				  'below' => array('left' => 'c', 'right' => 'd'));

// assign a value to above right
$array2x2['above']['right'] = 'TOP RIGHT';

var_dump($array2x2);

// add a new layer to the 2x2 array
$array2x2['sub'] = array('left' => 'e', 'right' => 'f');

var_dump($array2x2);

echo '</pre>';
