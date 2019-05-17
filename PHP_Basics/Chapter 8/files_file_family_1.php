<?php 
// Managing Files: Using the "*file*" family

// reading the contents of a remote website
$contents = file_get_contents('http://google.com');
echo '<pre>';
echo htmlspecialchars($contents);
echo '</pre>';
