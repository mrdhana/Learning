<?php 
// Managing Files: Parsing Directory Structures

// set path
//$path = __DIR__;

// uncomment the line below to set the path to the parent and see the difference!
$path = realpath(__DIR__ . '/..');

// using glob()
$listGlob = glob($path . '/*');

// using scandir()
$listScan = scandir($path);

// using the SPL RecursiveDirectoryIterator
// NOTE: remove the 2nd argument SELF_FIRST if you do not want to include directories in the iteration
$listRecursive = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), 
												   RecursiveIteratorIterator::SELF_FIRST);

// display results
echo '<br />Path: ', $path;
echo '<br /><br />glob()<hr />';
echo implode('<br />', $listGlob);	
echo '<br /><br />scandir()<hr />';
echo implode('<br />', $listScan);	
echo '<br /><br />RecursiveDirectoryIterator<hr />';
echo implode('<br />', iterator_to_array($listRecursive));	
