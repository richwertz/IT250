<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/IT250.dwt" codeOutsideHTMLIsLocked="false" -->
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
				<h2>Process List</h2>
				<div id="form">
					<?php
					
					$fnme = ucfirst(strtolower($_POST['fnme']));	//0 first name
					$lnme = ucfirst(strtolower($_POST['lnme']));	//1 last name
					$adrs = ($_POST['adrs']);	//2 address
					$city = ($_POST['city']);	//3 city
					$stat = ($_POST['stat']);	//4 state
					$zipc = ($_POST['zipc']);	//5 zip code
					$arac = ($_POST['arac']);	//6 area code
					$fone = ($_POST['fone']);	//7 phone number
					$emil = ($_POST['emil']);	//8 email
					
					//The variables are in a four-letter format so that they line up nicely.
					
					if (empty($fnme) || empty($lnme) || empty($emil) || empty($adrs) || empty($city) || empty($stat) || empty($zipc) || empty($arac) || empty($fone)) {
						echo "<p>Please fill in the form completely.<br />&nbsp;<br /><form action=\"unit05.php\"><input class=\"btn-more\" type=\"submit\" value=\"Return to Form\" /></form></p>";
					} else if (!is_numeric($zipc) || !is_numeric($arac) || !is_numeric($fone)) {
						echo "<p>Please make sure that the Zip Code, Area Code and Phone Number fields are numeric.<br />&nbsp;<br /><form action=\"unit05.php\"><input class=\"btn-more\" type=\"submit\" value=\"Return to Form\" /></form></p>";
					} else if (strlen($zipc) != 5 || strlen($arac) != 3 || strlen($fone) != 7) {
						echo "<p>Please make sure that the Zip Code field contains five (5) numbers,<br />the Area Code field contains three (3) numbers,<br />and the Phone Number field contains seven (7) numbers.<br />&nbsp;<br /><form action=\"unit05.php\"><input class=\"btn-more\" type=\"submit\" value=\"Return to Form\" /></form></p>";
						
					} else {
						$contInfo = $lnme . "," . $fnme . "," . $adrs . "," . $city . "," . $stat . "," . $zipc . "," . $arac . "," . $fone . "," . $emil . "\n";
						$contFile = fopen('unit05_contactlist.txt', 'a');
						fwrite($contFile, $contInfo);
						fclose($contFile);
						echo "<p>The following information has been added to the contact list:<br /><br />";
						echo $fnme . " " . $lnme . "<br />";
						echo $adrs . "<br />";
						echo $city . ", " . $stat . " " . $zipc . "<br />";
						echo "(" . $arac . ") " . $fone . "<br />";
						echo $emil . "</p>";
						
						echo "<table><tr><th><form action=\"unit05_ViewContactList.php\"><input class=\"btn-more\" type=\"submit\" value=\"View Contact List\" /></form><br />&nbsp;<br /><form action=\"unit05.php\"><input class=\"btn-more\" type=\"submit\" value=\"Return to Form\" /></form></th></tr></table>";

					}
				
					?>
				</div>

			</div>

			<div class="cl">&nbsp;</div>
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