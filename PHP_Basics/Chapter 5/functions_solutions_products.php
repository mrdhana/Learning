<?php
include 'arrays_project_titles.php';
include 'looping-branching_project_products.php';
$maxProducts = count($products);
$page = 4;
$itemsPerPage = 6;

function displayProducts($page, $linesPerPage, $products)
{
	$offset = $page * $linesPerPage;
	if ($offset > count($products)) {
		$offset = 0;
	}
	$output = '';
	for($x = 0; $x < $linesPerPage; $x++) {
		$output .= '<li>';
		$output .= '<div class="image">';
		$output .= '<a href="detail.html">';
		$output .= '<img src="images/' 
				 . $products[$x + $offset]['link'] 
				 . '.scale_20.JPG" alt="'
				 . $products[$x + $offset]['title']
				 . '" width="190" height="130"/>';
		$output .= '</a>';
		$output .= '</div>';
		$output .= '<div class="detail">';
		$output .= '<p class="name"><a href="detail.html">'
				 . $products[$x + $offset]['title']
				 . '</a></p>';
		$output .= '<p class="view"><a href="detail.html">purchase</a> | <a href="detail.html">view details >></a></p>';
		$output .= '</div>';
		$output .= '</li>';
	}	//close the for() loop
	return $output;
}

?>
<!DOCTYPE HTML>
<html>
<head>
<title>Sweets Complete | Products</title>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name ="description" content ="Sweets Complete">
<meta name="keywords" content="">
<link rel="stylesheet" href="css/main.css" type="text/css">
<link rel="shortcut icon" href="images/favicon.ico?v=2" type="image/x-icon" />
</head>
<body>
<div id="wrapper">
	<div id="maincontent">
		
	<div id="header">
		<div id="logo" class="left">
			<a href="index.php"><img src="images/logo.png" alt="SweetsComplete.Com"/></a>
		</div>
		<div class="right marT10">
			<b>
			<a href="login.html" >Login</a> |<a href="members.html" >Our Members</a> |<a href="cart.html" >Shopping Cart</a>
			</b>
			<br />
			Welcome Guest		</div>
		<ul class="topmenu">
		<li><a href="home.html">Home</a></li>
		<li><a href="about.html">About Us</a></li>
		<li><a href="specials.html">Specials</a></li>
		<li><a href="contact.html">Contact Us</a></li>
		</ul>
		<br>
		<div class="banner"><p></p></div>
		<br class="clear"/>
	</div> <!-- header -->
		
	<div class="content">

<div id="leftnav">
	<div class="search">

		<form name="search" method="get" action="search" id="search">
		<input type="text" value="keywords" name="keyword" class="s0" />
		<br />
		<select name="products">
			<?php
				sort($titles, SORT_STRING);
				foreach ($titles as $item) {
					printf('<option>%s</option>', $item);
				}
			?>
		</select>
		<br />
		<input type="submit" name="search" value="Search Products" class="button marT5" />
		<input type="hidden" name="page" value="search" />
		</form>
		<br /><br />
		
		<h3>About Us</h3><br/>
		<p class="width180">Lorem ipsum dolor sit amet consectetuer. Lorem ipsum dolor sit amet consectetuer, Lorem ipsum dolor sit amet consectetuer
	  Lorem ipsum dolor sit amet consectetuer. Lorem ipsum dolor sit amet consectetuer. Lorem ipsum dolor sit amet consectetuer.  <a href="about.html">Read More >> </a></p>
	</div>
</div><!-- leftnav -->


<div id="rightnav">

	<div class="product-list">
		<h2>Our Products</h2>
		<a class="pages" href="products.html">&lt;prev</a>
		&nbsp;|&nbsp;
		<a class="pages" href="products.html">next&gt;</a>
		<ul>
			<?php echo displayProducts($page, $itemsPerPage, $products); ?>
		</ul>
	</div><!-- product-list -->
	
	
</div><!-- rightnav -->

<br class="clear-all"/>
</div><!-- content -->
	
	</div><!-- maincontent -->

	<div id="footer">
		<div class="footer">
			Copyright &copy; 2012 sweetscomplete.com. All rights reserved. <br/>
		<a href="home.html">Home</a> | <a href="about.html">About Us</a> | <a href="specials.html">Specials</a> | <a href="contact.html">Contact Us</a> 		<br />
			<span class="contact">Tel: +44-1234567890&nbsp;
			Fax: +44-1234567891&nbsp;
			Email:sales@sweetscomplete.com</span>
		</div>
	div><!-- footer -->
	
</div><!-- wrapper -->

</body>
</html>

