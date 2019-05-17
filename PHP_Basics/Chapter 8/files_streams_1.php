<?php 
// Managing Files: Understanding Streams
// wrappers: http://php.net/manual/en/wrappers.php

// syntax for opening a stream to an FTP website
$server = 'ftp.unlikelysource.com';
$user = 'u47957963-test';
$password = 'password';
$ftp = fopen("ftp://$user:$password@$server/gettysburg.txt", 'r');

// syntax for using sftp = secure FTP
// NOTE: requires the SSH2 extension to be installed
// $sftp = fopen('ssh2.sftp://user:pass@example.com:22/path/to/filename', 'w');

if ($ftp) {
	$contents = '';
	// loop while not end of file
	while (!feof($ftp)) {
		// read 1024 bytes at a time
		$contents .= fread($ftp, 1024);
	}
	// close the file handle
	fclose($ftp);
} else {
	$contents = 'ERROR: unable to open FTP server';
}
// display results -- use htmlspecialchars() to display output safely
echo htmlspecialchars($contents);

// use phpinfo() to find out what streams wrappers and transports are available on your server
phpinfo();
