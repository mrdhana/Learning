<?php
// Working with Arrays: Creating a Multidimensional Array
// array(array(), array(), etc.) can be used for initial creation

// creating a numeric 10 x 10 matrix
$matrix = array(range(0, 9), range(0, 9), range(0, 9), range(0, 9), range(0, 9),
				range(0, 9), range(0, 9), range(0, 9), range(0, 9), range(0, 9),  // NOTE: the last comma is optional
		  );

// creating an associative multidimensional array
$multiAssoc = array('a' => array('aa' => 1, 'ab' => 2, 'ac' => 3),
					'b' => array('ba' => 1, 'bb' => 2, 'bc' => 3, 'bd' => 4),
					'c' => array('ca' => 1, 'cb' => 2),
					'd' => array('da' => 1, 'db' => 2, 'dc' => 3)
			  );

// creating a 3D array
$array3D = array(array(array(1, 2, 3), array(1, 2, 3), array(1, 2, 3)),
			 	 array(array(1, 2, 3), array(1, 2, 3), array(1, 2, 3)),
				 array(array(1, 2, 3), array(1, 2, 3), array(1, 2, 3))
		   );

// display results
echo '<table>',
	 '<tr>',
	 '<th>Numeric 10 x 10 Matrix</th>',
	 '<td style="width: 100px;">&nbsp;</td>',
	 '<th>Associative Multidimensional</th>',
	 '<td style="width: 100px;">&nbsp;</td>',
	 '<th>3D Array 3 x 3 x 3</th>',
	 '</tr>',
	 '<tr>',
	 '<td>',
	 '<pre>';

// NOTE: "print_r" is similar to "var_dump"
print_r($matrix);

echo '</pre></td>',
	 '<td style="width: 100px;">&nbsp;</td>',
	 '<td valign="top"><pre>';

print_r($multiAssoc);

echo '</pre>',
	 '</td>',
	 '<td style="width: 100px;">&nbsp;</td>',
	 '<td valign="top"><pre>';

print_r($array3D);

echo '</pre>',
	 '</td>',
	 '</tr>',
	 '</table>';
