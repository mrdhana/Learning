<?php
// Managing Web Operations: Reading Incoming Header Information
// Use $_SERVER['HTTP_HOST'] to make code portable

$url = 'http://' . $_SERVER['HTTP_HOST'] . '/WorkingFiles/Chapter15/web-ops_set_headers_2.php';
?>
<html>
<body>
<a href="<?php echo $url; ?>">Click Here to See Kitten</a>
</body>
</html>
