<?php
// Managing the Code -- External Libraries

// library of functions
function docType($htmlVersion = 5)
{
	if ($htmlVersion == 4) {
		return 	'<!DOCTYPE html "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd"> '
				. PHP_EOL
				. '<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">' . PHP_EOL;
	} else {
		return '<!DOCTYPE html>' . PHP_EOL;
	}
}
function headTag($title, $meta)
{
	// use "$property" to refer to a property of this object
	return '<head>' . PHP_EOL . $title . $meta . '</head>' . PHP_EOL;
}
function titleTag($title)
{
	return "<title>$title</title>\n";
}
function metaTag($tags, $meta = '')
{
	$meta .= '<meta ';
	foreach ($tags as $key => $value) {
		$meta .=  $key . '="' . $value . '" ';
	}
	$meta .= '/>' . PHP_EOL;
	return $meta;
}
function bodyTag($contents)
{
	$body = '<body>' . PHP_EOL;
	foreach ($contents as $line) {
		$body .=  $line;
	}
	$body .= '</body>' . PHP_EOL;
	return $body;
}
function render($docType, $head, $body)
{
	$output = '';
	$output .= $docType;
	$output .= $head;
	$output .= $body;
	$output .= '</html>' . PHP_EOL;
	return $output;
}
