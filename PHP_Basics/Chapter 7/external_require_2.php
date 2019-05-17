<?php
// Managing the Code -- External Libraries: Loading Code with "require"

ini_set('display_errors', 0);
//include './includes/constants.php.wrong';
//require './includes/Library.php.wrong';
require './includes/Library.php';
include './includes/constants.php';

// build the website
$title = titleTag(SITE_HEADER);
$meta = metaTag(array('http-equiv' => 'content-type', 'content' => 'text/html;charset=utf-8'));
$content = 
$body[] = '<div style="width: 635px; height: 650px;">';
$body[] = '<h1>' . CONTENT_HEADER . '</h1>';
$body[] = '<hr />';
$body[] = '<div style="width: 110px; height: 600px; float: left;">';
$body[] = include './includes/ad_block.php';
$body[] = include './includes/ad_block.php';
$body[] = '</div>';
$body[] = '<div style="border: solid blue 1px; width: 500px; height: 410px; float: left; font:12px arial,sans-serif; padding: 5px; margin: 5px;">';
$body[] = '<h3>' . CONTENT_HEADER . '</h3>';
$body[] = '<p>Donec velit felis, ultricies ut feugiat sit amet, bibendum vitae dolor. Suspendisse potenti. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Donec egestas eros pretium mauris tincidunt venenatis. Donec vestibulum, urna at convallis dapibus, mauris ligula volutpat velit, et eleifend augue est egestas erat. Cras sed elementum tellus. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed nec mi quis nisl tristique varius.</p>';
$body[] = '<p>Proin sed libero a nulla gravida sagittis. Proin ut dui metus, vel rutrum sem. Aliquam erat volutpat. Mauris porttitor sollicitudin venenatis. Curabitur felis diam, posuere ut elementum a, ultricies eget tellus. Proin vitae risus in neque imperdiet rutrum ut ut magna. Nam molestie, enim eu laoreet cursus, neque diam cursus ipsum, quis dignissim velit libero eu purus. Sed egestas, diam sit amet mollis venenatis, justo nunc feugiat mi, et sodales mi eros vel nisi.</p>';
$body[] = '<p>Donec vitae orci nec magna ultrices cursus. Curabitur dictum, dolor non faucibus suscipit, neque enim laoreet quam, eu iaculis nunc lacus non nibh. Vivamus eleifend ornare nibh nec auctor. Mauris posuere, ipsum non tempor placerat, augue odio euismod metus, et eleifend ante mauris sed augue. Vestibulum congue, tellus sit amet tincidunt scelerisque, tellus sem fermentum nibh, at ornare mi diam vitae ante. Nulla nisi magna, tempor in adipiscing non, placerat nec nisl. Donec ut nunc eget massa gravida tempus in eget sapien. Vestibulum pulvinar, ipsum sed ullamcorper fringilla, diam ante consectetur mi, quis placerat sem dolor in urna. Curabitur consequat tincidunt eros id luctus. Duis tristique, erat vitae placerat hendrerit, lorem nisi dapibus sem, vel iaculis mauris lectus in mi. Duis blandit est commodo nibh rutrum convallis. Fusce a odio varius purus porttitor porta at non orci.</p>';
$body[] = '</div>';
$body[] = '</div>';
echo render(docType(5), headTag($title, $meta), bodyTag($body));
