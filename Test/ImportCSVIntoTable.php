<?php
// to 
error_reporting(E_ERROR | E_PARSE);

//db
$dbname = "vender";
$username = "root";
$password = "";
$server = "localhost";

$con = mysql_connect($server, $username, $password);
mysql_select_db($dbname);

// if($con)
// echo "connected";
// else
// echo "not connected";

$dir    = 'C:\wamp\www\vendor';
//$files1 = scandir($dir);
//$files2 = scandir($dir, 1);
//print_r($files1);exit;

//print_r($files2);
$scanned_directory = array_diff(scandir($dir), array('..', '.','vender.php'));

//print_r($scanned_directory);

$count = 0;
foreach ($scanned_directory as $key => $value) {
	$filepath = $dir."/".$value;
	$filepath = str_replace("\\","/",$filepath);
	$LoadQry = "LOAD DATA INFILE '$filepath' INTO TABLE `temp` 
				FIELDS TERMINATED BY ',' ENCLOSED BY '\"' LINES TERMINATED BY '\n' 
				IGNORE 1 ROWS;";

	echo $LoadQry."<br>";

	mysql_query($LoadQry);

	$count++;

//	if($count>1)
//	exit;
}
echo "Count: ".$count;
exit;


?>
