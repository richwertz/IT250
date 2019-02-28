<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/IT250.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Rich Wertz || School Project Experience || IT250 Unit 4</title>
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
					<li> <a class="active" href="unit04.php"> Unit 4 </a></li>
					<li> <a href="unit05.php"> Unit 5 </a></li>
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
				<h2>Unit 4</h2>
				<ul>
					<li>Create a Telephone Directory Application to save entries into a single text file.</li>
					<li>The PHP program will take the data submitted by the form, using string functions, and assemble one record that is written to the file for each Telephone Directory entry that is submitted.
						<ul>
							<li>Data will be written in a comma delimited line of information terminated by a new line character and will be appended to the telephone data file.</li>
							<li>When multiple entries have been made to the form, the file should contain all the stored items on separate lines.</li>
							<li>Be sure to ‘close’ the file when the data has been written.</li>
						</ul>
					</li>
					<li>In a new process, the file will be opened to ‘read the data’ and list all the items currently in the file.</li>
					<li>The PHP program will present the data in a format that is easily readable, not in the manner it was ‘stored’.</li>
					<li>Provide a link or button to ‘run’ this program on the HTML form page.</li>
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
					
					if (!file_exists('unit04_contactlist.txt')) {
						echo "<tr><td><p>Well, in order to see the contact list, you may need to add a contact first.<br />";
						echo "Please return to the form and add a contact.<br />&nbsp;<br />";
						echo "<form action=\"unit04.php\"><input class=\"btn-more\" type=\"submit\" value=\"Return to Form\" /></form></p></td></tr>";
					} else {
						$contFile = file('unit04_contactlist.txt');
						$dc = "</td><td>";
						echo "<tr><th>Name</th><th>Street Address</th><th>City</th><th>State</th><th>ZIP Code</th><th>Phone Number</th><th>Email Address</th></tr>";
							for ($i = 0; $i < count($contFile); ++$i) {
							$cont = explode(",",$contFile[$i]);
							
							//To simplify the amount of code that needed to be written for the following echo, I took a couple shortcuts._
							//Each time we see $dc, the server is writing out end and beginning cell html markup._
							//It is quite easy to do this, however, if you loose track of What the original markup is supposed to be, it can get confussing.
							
							echo "<tr><td>" . $cont[1] . " " . $cont[0] . $dc . $cont[2] . $dc . $cont[3] . $dc .  $cont[4] . $dc . $cont[5] . $dc . "(" . $cont[6] . ") " . $cont[7] . $dc . $cont[8] . "</td></tr>";
							}
					echo "<tr><th colspan=\"7\"><form action=\"unit04.php\"><input class=\"btn-more\" type=\"submit\" value=\"Return to Form\" /></form></th></tr>";
					
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