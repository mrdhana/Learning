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
		<h4 style="text-align: center;">Form Data Validation</h4>
		</div>
		<div class="theFormMiddle">
		<form name="purchases" action="#" method="POST">
			<div class="aTable">
				<div class="aRow">
					<div class="aCell label">Title</div>
					<div class="aCell formTd text">
						<input type="radio" name="data[title]" value="" <?php echo ($data['title'] == '') ? 'checked' : '' ; ?> />None
						<input type="radio" name="data[title]" value="Mr" <?php echo ($data['title'] == 'Mr') ? 'checked' : '' ; ?>/>Mr
						<input type="radio" name="data[title]" value="Mrs" <?php echo ($data['title'] == 'Mrs') ? 'checked' : '' ; ?>/>Mrs
						<!-- validation error only shows up if set -->
						<?php echo (isset($error['title'])) ? '<br />' . $error['title'] : '' ?>
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">Name</div>
					<div class="aCell formTd">
						<input type="text" name="data[name]" size=50 maxlength=255 value="<?php echo $data['name']; ?>"/>
						<?php echo (isset($error['name'])) ? '<br />' . $error['name'] : '' ?>
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">Street Address</div>
					<div class="aCell formTd">
						<textarea name="data[address]" rows=4 cols=44><?php echo ($data['address']); ?></textarea>
						<?php echo (isset($error['address'])) ? '<br />' . $error['address'] : '' ?>
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">City</div>
					<div class="aCell formTd">
						<input type="text" name="data[city]" size=60 maxlength=255 value="<?php echo $data['city']; ?>"/>
						<?php echo (isset($error['city'])) ? '<br />' . $error['city'] : '' ?>
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">Postal Code</div>
					<div class="aCell formTd">
						<input type="text" name="data[postCode]" size=9 maxlength=9 value="<?php echo $data['postCode']; ?>"/>
						<?php echo (isset($error['postCode'])) ? '<br />' . $error['postCode'] : '' ?>
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">Age</div>
					<div class="aCell formTd">
						<input type="text" name="data[age]" size=3 maxlength=3 value="<?php echo $data['age']; ?>"/>
						<?php echo (isset($error['age'])) ? '<br />' . $error['age'] : '' ?>
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">Email Address</div>
					<div class="aCell formTd">
						<input type="text" name="data[email]" size=50 maxlength=255 value="<?php echo $data['email']; ?>"/>
						<?php echo (isset($error['email'])) ? '<br />' . $error['email'] : '' ?>
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">Password</div>
					<div class="aCell formTd">
						<input type="password" name="data[password]" size=20 maxlength=255 />
					</div>				
				</div>
				<div class="aRow">
					<div class="aCell label">&nbsp;</div>
					<div class="aCell formTd">
						<input type="submit" name="submit" value="Submit" />
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">Message</div>
					<div class="aCell formTd"><?php echo $message; ?></div>
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
