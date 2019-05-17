<?php
// Building Web Forms: Understanding Form Input Elements
// demonstrates different types of form elements

// check to see if submit button was pressed
if (isset($_POST['submit'])) {
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
		<h4 style="text-align: center;">Understanding Form Input Elements</h4>
		</div>
		<div class="theFormMiddle">
		<!-- action="#" means use this file to process the form -->
		<form name="purchases" action="#" method="POST" enctype="multipart/form-data">
			<div class="aTable">
				<div class="aRow">
					<div class="aCell label">Name</div>
					<div class="aCell formTd"><input type="text" name="data[name]" size=60 maxlength=255 value="NAME"/></div>
				</div>
				<div class="aRow">
					<div class="aCell label">Address</div>
					<div class="aCell formTd"><textarea name="data[address]" rows=4 cols=44>ADDRESS</textarea></div>
				</div>
				<div class="aRow">
					<div class="aCell label">Gender</div>
					<div class="aCell formTd text">
						<input type="radio" name="data[gender]" value="M" />Male
						<input type="radio" name="data[gender]" value="F" />Female
						<input type="radio" name="data[gender]" value="N" />Neutral
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">Airport</div>
					<div class="aCell formTd">
						<select name="data[airport]" >
							<option value="ATL">Hartsfield-Jackson Atlanta International Airport</option>
							<option value="ORD">O'Hare International Airport</option>
							<option value="LHR">London Heathrow Airport</option>
							<option value="HND">Tokyo International Airport</option>
							<option value="LAX">Los Angeles International Airport</option>
							<option value="FRA">Frankfurt International Airport</option>
							<option value="CDG">Charles De Gaulle International Airport</option>
							<option value="AMS">Schiphol Airport</option>
							<option value="MAD">Barajas International Airport</option>
							<option value="HKG">Hong Kong International Airport</option>
							<option value="DMK">Don Muang International Airport</option>
							<option value="SFO">San Francisco International Airport</option>
							<option value="JFK">John F. Kennedy International Airport</option>
							<option value="LGW">London Gatwick Airport</option>
							<option value="PEK">Beijing Capital International Airport</option>
							<option value="YYZ">Toronto Pearson International Airport</option>
						</select>
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">How Did You <br />Hear About Us?</div>
					<div class="aCell formTd">
						<span class="text">Check all that apply</span>
						<ul>
						<li class="text"><input type="checkbox" name="data[hear_about][]" value="AAR">AARP Magazine</li>
						<li class="text"><input type="checkbox" name="data[hear_about][]" value="RDI">Reader's Digest</li>
						<li class="text"><input type="checkbox" name="data[hear_about][]" value="DEV">Devputra</li>
						<li class="text"><input type="checkbox" name="data[hear_about][]" value="WDA">Woman's Day</li>
						<li class="text"><input type="checkbox" name="data[hear_about][]" value="CLI">Canadian Living</li>
						<li class="text"><input type="checkbox" name="data[hear_about][]" value="INT">The Internet</li>
						<li class="text"><input type="checkbox" name="data[hear_about][]" value="TVA">TV Advertisement</li>
						<li class="text"><input type="checkbox" name="data[hear_about][]" value="FRE">Friend or relative</li>
						</ul>
					</div>
				</div>
				<div class="aRow">
					<div class="aCell label">Password</div>
					<div class="aCell formTd"><input type="password" name="data[password]" size=20 maxlength=255 /></div>				</div>
				<div class="aRow">
					<div class="aCell label">Upload Your Photo</div>
					<div class="aCell formTd"><input type="file" name="file_upload" size=20 maxlength=255 /></div>
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
