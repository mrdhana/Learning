<?php
// Building Web Forms: Handling File Uploads
// demonstrates safe way to handle a file upload

$message = 'Attempting to upload file';
// check to see if submit button was pressed
if (isset($_POST['submit'])) {

	// Sets upload folder to current directory/uploads
	$dir = dirname(__FILE__) . DIRECTORY_SEPARATOR . 'uploads';

	// Check to see if upload parameter specified
	if (isset($_FILES['upload']) && $_FILES['upload']['error'] == UPLOAD_ERR_OK) {

		// Check to make sure file uploaded by upload process
		if (is_uploaded_file ($_FILES['upload']['tmp_name'])) {
			
			// Capture user supplied filename
			// use basename() to strip out any extraneous path info
			$fn = basename($_FILES['upload']['name']);

			// Move image to uploads folder
			$copyfile = $dir . DIRECTORY_SEPARATOR . $fn;
		
			// Move file
			if (move_uploaded_file ($_FILES['upload']['tmp_name'], $copyfile)) {
				// Give message to user
				$message .= "<br>Successfully uploaded file $copyfile\n";
			} else {
				// Record upload file handle errors
				$message .= "<br>Unable to upload file " . htmlspecialchars($fn);
			}
			
		} else {
			// Failed security check
			$message .= "<br>File Not Uploaded!\n";
		}
		
	} else {
		// No photo file; return blanks and zeros
		$message .= "<br>No Upload File Specified\n";
	}

	echo $message;
	
	// display info and exit
	phpinfo(INFO_VARIABLES);
	exit;
}
?>
<!DOCTYPE html>
<head>
    <meta charset="utf-8">
    <title>Building Web Forms</title>
    <link href="css/style.css" media="screen" rel="stylesheet" type="text/css" >
	<link href="images/favicon.ico?v=2" rel="shortcut icon" type="image/vnd.microsoft.icon" >
</head>
<body topmargin="0" leftmargin="0">
    <div class="container">
      	<div class="theFormAbove">
		<h4 style="text-align: center;">Handling File Uploads</h4>
		</div>
		<div class="theFormMiddle">
		<!-- action="#" means use this file to process the form -->
		<form name="purchases" action="#" method="POST" enctype="multipart/form-data">
			<div class="aTable">
				<div class="aRow">
					<div class="aCell label">Upload Your Photo</div>
					<div class="aCell formTd"><input type="file" name="upload" size=20 maxlength=255 /></div>
				</div>
				<div class="aRow">
					<div class="aCell label">&nbsp;</div>
					<div class="aCell formTd"><input type="submit" name="submit" value="Submit" /></div>
				</div>
			</div>
		</form>
		</div>
		<div class="theFormBelow">
		</div>
		<div style="clear: both;"></div>
      <div class="footer">
      	<hr>
        <p>&copy; 2012 by InfiniteSkills.com | All rights reserved</p>
      </div>
    </div> <!-- /container -->
  </body>
</html>
