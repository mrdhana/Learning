<?php
// Managing the Code -- OOP: Defining Classes

// include will is discussed in another lesson
include './classes/Website.php';

// build the website
$website = new Website();
$website->setTitle('Hello World');
$website->setMeta(array('http-equiv' => 'content-type', 'content' => 'text/html;charset=utf-8'));
$website->setBody('<h1>Hello World!</h1>');
echo $website->render();
