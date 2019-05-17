<?php 
// Managing Files: Understanding Streams
// writing and then reading a compressed file

// NOTE: __DIR__ magic constant only works on PHP 5.3 and greater
// TIP: if your web hosting provider uses PHP 5.2 use "dirname(__FILE__)" instead
$sourceFile = __DIR__ . '/gettysburg.txt';
$destFile = __DIR__ . '/gettysburg.bz2';
if (file_exists($sourceFile)) {
    // reads a text file gettysburg.txt into $contents
    $contents = file_get_contents($sourceFile);
    // write file out as gzip compressed using 'compress.zlib' stream
    file_put_contents('compress.bzip2://' . $destFile, $contents);
    // read zipped file
    $contents = file_get_contents($destFile);
    // display zipped contents
    echo $contents;
    // read zipped file using zip stream
    $contents = file_get_contents('compress.bzip2://' . $destFile);
    // display unzipped contents
    echo '<br /><hr />';
    echo $contents;
} else {
    // display message if source file not found
    echo "SORRY: unable to open source file $sourceFile!";
}
