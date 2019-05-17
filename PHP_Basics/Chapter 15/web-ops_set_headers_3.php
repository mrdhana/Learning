<?php
// Managing Web Operations: Setting Headers and Performing Redirection

// reads file into $pdf
$filename = './test.pdf';
$pdf = file_get_contents($filename);

// sets content type
header('Content-Type: application/pdf');

// sets length
header('Content-Length: ' . strlen($pdf));

// sets disposition
header('Content-Disposition: attachment; filename="' . $filename . '"');

// display graphic
echo $pdf;
