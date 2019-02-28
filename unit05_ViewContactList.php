<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/IT250.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Rich Wertz || School Project Experience || IT250 Unit 5</title>
<!-- InstanceEndEditable -->
<meta name="keywords" content="IT373" />
<meta name="description" content="Project website for the IT250 Enhancing Web Sites with PHP course." />
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />

<!--[if IE 6]>
	<link rel="stylesheet" href="css/ie.css" type="text/css" media="all" />
	<![endif]-->

<script type="text/javascript" src="js/jquery-1.4.2.min.js"></script>
<script type="text/javascript" src="js/jquery.jcarousel.js"></script>
<script type="text/javascript" src="js/cufon-yui.js"></script>
<script type="text/javascript" src="js/MyriadPro-Semibold.font.js"></script>
<script type="text/javascript" src="js/jquery-func.js"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>
<body>
<div id="wrapper">
	<div id="top-stripes">&nbsp;</div>
	
	<!-- Header -->
	<div id="header">
		<div class="shell"> 
			
			<!-- Logo -->
			<h1 id="logo"><img src="css/images/HomeLogo.png" width="190" height="40" /></h1>
			<!-- /Logo --> 
			
			<!-- Navigation --><!-- InstanceBeginEditable name="Nav" -->
			<div id="navigation">
				<ul>
					<li> <a href="index.html"> Home </a></li>
					<li> <a href="unit01.php"> Unit 1 </a></li>
					<li> <a href="unit02.php"> Unit 2 </a></li>
					<li> <a href="unit03.php"> Unit 3 </a></li>
					<li> <a href="unit04.php"> Unit 4 </a></li>
					<li> <a class="active" href="unit05.php"> Unit 5 </a></li>
					<li> <a href="unit06.php"> Unit 6 </a></li>
					<li> <a href="unit07.php"> Unit 7 </a></li>
					<li> <a href="unit08.php"> Unit 8 </a></li>
					<li> <a href="unit09.php"> Unit 9 </a></li>
					<li> <a href="final.php"> Final </a></li>
				</ul>
			</div>
			<!-- InstanceEndEditable --><!-- /Navigation --> 
		</div>
	</div>
	<!-- /Header --> 
	
	<!-- Slider -->
	<div id="slider"><!-- InstanceBeginEditable name="GrayArea" -->
		<div class="shell"> 
			<!-- Intro -->
			<div id="intro">
				<h2>Unit 5</h2>
				<ul>
					<li>Put a link or button on the telephone directory entry page to execute this new program.</li>
					<li>Create a PHP program to open the file to read the data.</li>
					<li>Create an array that contains the name and the phone number. The name should be constructed so that the last name is first, followed by a comma, and then the first name. Example: Smith, John</li>
					<li>The phone number should contain the area code concatenated to the phone number. Example: 212-398-0987.</li>
					<li>The array will then be sorted in (last) name order using an appropriate PHP function.</li>
					<li>The PHP program will present the data in an HTML table with two columns. Column headings will label the columns “name” and “phone number.” The data will be presented in alphabetical order.</li>
					<li> The response page will also contain a link or button to go back to the HTML form to add additional phone directory entries. All pages in this application should have consistent color, headings, titles, and formatting.</li>
				</ul>
			</div>
			<!-- /Intro -->
			<div class="cl">&nbsp;</div>
		</div>
		<!-- InstanceEndEditable --></div>
	<!-- /Slider --> 
	
	<!-- InstanceBeginEditable name="MainArea" --> 
	<!-- Main -->
	<div id="main">
		<div class="shell"> 
			<!-- Box - Welcome -->
			<div class="box">
				<h2>Contact List</h2>
				<div id="form">
				<table>
					<?php
					
					if (!file_exists('unit05_contactlist.txt')) {
						echo "<tr><td><p>Well, in order to see the contact list, you may need to add a contact first.<br />";
						echo "Please return to the form and add a contact.<br />&nbsp;<br />";
						echo "<form action=\"unit05.php\"><input class=\"btn-more\" type=\"submit\" value=\"Return to Form\" /></form></p></td></tr>";
					} else {
						$contFile = file('unit05_contactlist.txt');
						sort($contFile);
						$hc = "</th><th>";
						$dc = "</td><td>";
						echo "<tr><th>Name".$hc."Street Address".$hc."City".$hc."State".$hc."ZIP Code".$hc."Phone Number".$hc."Email Address</th></tr>";
							for ($i = 0; $i < count($contFile); ++$i) {
							$cont = explode(",",$contFile[$i]);
							
							//$area and $fone hold a concatenation of user entered telephone number data.
							//There could have been another concatenation that combined $ara and $fone and _
							//then inserted in the echo string, but I didn't want to be overly complicated _
							//for such a simple assignment.
							
						$area = "(" . $cont[6] . ") ";
						$fone = substr($cont[7],0,3) . "-" . substr($cont[7],3,4);
						echo "<tr><td>" . $cont[1] . " " . $cont[0] . $dc . $cont[2] . $dc . $cont[3] . $dc .  $cont[4] . $dc . $cont[5] . $dc . "(" . $cont[6] . ") " . $cont[7] . $dc . $cont[8] . "</td></tr>";
							}
					echo "<tr><th colspan=\"7\"><form action=\"unit05.php\"><input class=\"btn-more\" type=\"submit\" value=\"Return to Form\" /></form></th></tr>";
					
					}
					
					?>
					
					</table>
						
				</div>
				<div class="cl">&nbsp;</div>
			</div>
		</div>
	</div>
	<!-- /Main --> 
	<!-- InstanceEndEditable -->
	<div class="footer-pusher">&nbsp;</div>
</div>

<!-- Footer -->
<div id="footer">
	<div class="shell">
		<div class="cl">&nbsp;</div>
		<!-- Footer navigation -->
		<ul>
			<li><a href="index.html">Home</a></li>
			<li><a href="unit01.php">Unit 1</a></li>
			<li><a href="unit02.php">Unit 2</a></li>
			<li><a href="unit03.php">Unit 3</a></li>
			<li><a href="unit04.php">Unit 4</a></li>
			<li><a href="unit05.php">Unit 5</a></li>
			<li><a href="unit06.php">Unit 6</a></li>
			<li><a href="unit07.php">Unit 7</a></li>
			<li><a href="unit08.php">Unit 8</a></li>
			<li><a href="unit09.php">Unit 9</a></li>
			<li class="last"><a href="Final.php">Final</a></li>
		</ul>
		<!-- /Footer navigation --> 
		
		<!-- Copyrights --> 
		<p class="copy">Copyright 2014 | Richard Wertz - <a href="http://www.richwertzonline.com">Project Rich Wertz</a></p>
		<!-- /Copyrights --> 
	</div>
</div>
<!-- /Footer --> 
<script type="text/javascript" charset="utf-8">
	htmlLoaded();
</script>
</body>
<!-- InstanceEnd -->
</html>