<?php
// Managing the Code -- External Libraries

// require includes a critical external file
require './includes/Library.php';

// build the website
$title = titleTag('Hello World');
$meta = metaTag(array('http-equiv' => 'content-type', 'content' => 'text/html;charset=utf-8'));
$content = 
$body[] = '<h1>Test Website</h1>';
$body[] = '<hr />';
$body[] = 'Constructed using a library of functions';
echo render(docType(5), headTag($title, $meta), bodyTag($body));
