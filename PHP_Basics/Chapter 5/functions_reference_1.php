<?php
// Managing the Code -- Functions: Using Parameters by Reference

// over-simplified, a reference is a pointer to a memory location
$name1 = 'Tarzan';
$name2 = $name1;

echo '<br />', 'Simple Assignment:';
echo '<br />', $name1;
echo '<br />', $name2;

// has no effect on $name1
$name2 = 'Jane';

echo '<br />', 'After Re-assignment:';
echo '<br />', $name1;
echo '<br />', $name2;

// same thing by reference
$name1 = 'Tarzan';
$name2 = &$name1;

echo '<br />', 'Assignment by Reference:';
echo '<br />', $name1;
echo '<br />', $name2;

// notice the effect on $name1
$name2 = 'Jane';

echo '<br />', 'After Re-assignment:';
echo '<br />', $name1;
echo '<br />', $name2;
