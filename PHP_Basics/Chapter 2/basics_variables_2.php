<?php
// Understanding the Basics: Creating Variables in PHP
// variables are used to store values

// changing the value of the variable can make instant changes to a website
$company = 'My Own Company';
$link1 	 = 'Home';
$link2 	 = 'Consulting';
$link3 	 = 'Development';

?>
<!DOCTYPE html>
<head>
	<!-- displays the value back to the browser -->
	<title><?php echo $company; ?></title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<link href="css/style.css" media="screen" rel="stylesheet" type="text/css" >
	<link href="images/favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" >
</head>

<body lang=EN-US>

<div class='container'>
	
  <div class="horizontal_header_spacer">&nbsp;</div>
  
  <div class="header">
  <!-- displays the value back to the browser -->
  <?php echo $company; ?>
  </div>

  <div class="horizontal_spacer">&nbsp;</div>
  
  <div class="vertical_spacer">&nbsp;</div>

  <div class="col1">
  <p>&nbsp;</p>
  <!-- substitute "Link 1" with echo $linkHomePage inside PHP tags -->
  <a class="MsoNormal" href="#"><?php echo $link1; ?></a>
  <p>&nbsp;</p>
  <!-- substitute "Link 2" with echo $linkProducts inside PHP tags -->
  <a class="MsoNormal" href="#"><?php echo $link2; ?></a>
  <p>&nbsp;</p>
  <!-- substitute "Link 3" with echo $linkAboutUs inside PHP tags -->
  <a class="MsoNormal" href="#"><?php echo $link3; ?></a>
  <p>&nbsp;</p>
  </div>

  <div class="vertical_spacer">&nbsp;</div>
  
  <div class="col2">
  <p>Lorem ipsum dolor sit amet,
  consectetur adipiscing elit. Duis magna massa, blandit ac gravida eget,
  mollis id massa. Praesent nec ullamcorper nisi. Sed tincidunt eleifend
  luctus. Suspendisse sed turpis a magna vulputate suscipit quis non erat.
  Morbi vestibulum ipsum eget lorem lacinia pretium at ut ante. In congue
  mauris sed justo placerat dictum scelerisque neque vehicula. Suspendisse
  potenti. Mauris vulputate convallis tellus eget interdum. Vivamus in tempor
  turpis. Vestibulum dictum dui eu massa condimentum vel vulputate sem
  elementum. Etiam fermentum laoreet erat ac tincidunt.</p>
  <p>Duis eu neque eros, vitae
  ullamcorper dolor. In a turpis odio, in vestibulum quam. Etiam rutrum, risus
  ac pellentesque placerat, metus quam dapibus augue, ac tincidunt turpis est et
  libero. Maecenas tincidunt, augue a facilisis fermentum, ante neque tempor
  arcu, vel tincidunt justo diam vitae dolor. Aliquam vehicula, leo ut
  venenatis ultricies, nibh nisl tristique tellus, sed tincidunt enim sapien et
  sapien. Duis lorem ante, condimentum in porttitor sed, iaculis sit amet
  justo. Sed pretium arcu velit, vel fringilla neque. Suspendisse eros odio,
  ultricies eu commodo sit amet, ullamcorper id tortor. Mauris luctus, ante
  pulvinar varius sollicitudin, eros sapien molestie est, ut mattis enim arcu
  vitae neque. Fusce fringilla bibendum placerat. In sodales ligula in est
  eleifend sit amet ullamcorper magna venenatis. In congue posuere sem dictum
  semper. Duis mollis mi vitae augue rhoncus pellentesque. Nullam varius
  pharetra augue a consequat. Class aptent taciti sociosqu ad litora torquent
  per conubia nostra, per inceptos himenaeos. Donec consequat ligula eu odio
  mattis tincidunt ornare a risus.</p>
  <p>In hac habitasse platea dictumst. Curabitur adipiscing odio ut sapien congue ultrices. 
  Duis rhoncus elit at metus egestas vitae posuere tortor aliquet. Fusce non elit velit, 
  vel laoreet tortor. Praesent laoreet volutpat erat ut pulvinar. Phasellus nec molestie ante. 
  Praesent interdum, ligula eu blandit cursus, lorem nisl faucibus lorem, nec luctus tellus 
  dolor ac nulla. Nulla facilisi. In eu sapien nec elit sagittis vehicula. Quisque quis 
  velit at purus laoreet fermentum sollicitudin a eros. Nulla adipiscing semper leo quis 
  euismod. Nam ac blandit metus. Morbi mattis dictum molestie.</p>
  <p>&nbsp;</p>
  </div>
  
  <div class="vertical_spacer">&nbsp;</div>
  <div class="vertical_spacer">&nbsp;</div>
  
  <div class="col3">
  <p><img width=270 height=275 id="consultants" src="images/consultants.png" alt="consultants"></p>
  </div>
  <div class="footer">
  <!-- substitute "ABC Consulting" with "echo $company" inside php tags -->
  <p class="MsoNormal" align="center">Copyright ©2012 ABC Consulting, Inc.</p>
  </div>

</div>

</body>

</html>
