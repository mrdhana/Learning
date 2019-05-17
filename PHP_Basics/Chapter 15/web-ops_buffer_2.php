<?php
// Managing Web Operations: Managing Output Buffering
// demonstrates using ob_start(), ob_get_contents(), and ob_flush()

ob_start();
echo '<h3>Output Buffer Test</h3>', '<hr />', PHP_EOL;
echo '<br />Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed id augue diam. Praesent mollis augue eu nulla suscipit a aliquam felis feugiat. Fusce nec elit odio. In luctus ornare libero nec porta. Proin porta ligula a urna tristique et rutrum tortor posuere. Nulla nec leo id sapien commodo congue. In nunc erat, tristique eu laoreet et, commodo eget sem. Aliquam faucibus elit eu magna vehicula vitae sollicitudin arcu aliquet. Donec suscipit augue eget nunc tristique et ultrices felis aliquam. Fusce adipiscing suscipit quam, sed sollicitudin lectus tempus in. Proin ante purus, vehicula at vulputate eget, aliquam vitae lacus. Mauris faucibus velit sed purus auctor eu fringilla orci posuere. Curabitur vestibulum pretium libero fermentum dictum.', PHP_EOL;

// get contents of buffer
$contents = ob_get_contents();

// flush the buffer
ob_flush();

echo '<h3>Contents from Buffer</h3>', '<hr />', PHP_EOL;
echo $contents;

// flush the buffer
ob_flush();

