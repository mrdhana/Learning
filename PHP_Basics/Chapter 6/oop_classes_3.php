<?php
// Managing the Code -- OOP: Defining Classes

/* EXAMPLES:
 *
 * The SPL has "low level" classes which do different things
 * SPL: php.net/manual/en/book.spl.php
 *
 * The Imagick extension provides classes which give you advanced image processing abilities
 *
 * The PDO (PHP Data Object) extension provides classes for database processing
 * 
 */
 
// example using SPL "directory iterator"

// build a path to the parent directory
$path = realpath(__DIR__ . '/../');

// create a RecursiveDirectoryIterator object
// use the keyword "new" to "instantiate" a class into an object
$rdi = new RecursiveDirectoryIterator($path);

// loop through $rdi creating a RecursiveIteratorIterator object on each pass
foreach (new RecursiveIteratorIterator($rdi) as $filename => $item) {
	// use the "getSize()" method
	// NOTE: use the "->" operator to access properties or methods of an object
    $filesize = $item->getSize();
    // display the results
    echo "<br />$filename ($filesize)\n";
}
