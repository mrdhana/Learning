<?php
// Managing the Code -- Functions: Using Built-in Functions
// part of the core
// use get_defined_functions() and function_exists() to check

$function = 'str_replace';
if (function_exists($function)) {
	echo 'str_replace exists!';
} else {
	echo 'str_replace exists!';
}

echo '<br />', var_dump(get_defined_functions());

// use phpinfo() to see info on extensions available on your server

echo '<br />';
phpinfo();

