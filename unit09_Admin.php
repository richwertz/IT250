<?php

session_start();
if(!isset($_SESSION['authuser']) || $_SESSION['authuser'] != 1) {
	include("inc_access.php");
	$NOACCESS;
	
//	header('Location:unit09_403.php');
	
} else {

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/IT250.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Rich Wertz || School Project Experience || IT250 Unit 9</title>
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
					<li> <a href="unit05.php"> Unit 5 </a></li>
					<li> <a href="unit06.php"> Unit 6 </a></li>
					<li> <a href="unit07.php"> Unit 7 </a></li>
					<li> <a href="unit08.php"> Unit 8 </a></li>
					<li> <a class="active" href="unit09.php"> Unit 9 </a></li>
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
				<h2>Unit 9</h2>
				<ul>
					<li>Add security to the Telephone Contact Application to prevent unauthorized users from accessing the protected data</li>
					<li>Apply security protocols to each page in the application</li>
					<li>Protocols are defined by session states, which fail with incorrect login credentials and present an error message</li>
					<li>Provide a logout option that will destroy the secure session state for the authorized user</li>
					<li>Modify cookies and session states before any other data or page format is written to the browser</li>
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
				<h2>Contacts Database - SECURE Administration</h2>
				<div id="form">
					<table>
					
					<tr><th><h3>SECURE Database Administration Tasks</h3></th></tr>
					
					<tr><th>
					<form action="unit09_ViewContactList.php" method="post"><input class="btn-more-nav" type="submit" value="View Contact List" /></form><br /><br />
					<form action="unit09_AddContact.php" method="post"><input class="btn-more-nav" type="submit" value="Add Contact" /></form><br /><br />
					<form action="unit09_AddUser.php" method="post"><input class="btn-more-nav" type="submit" value="Add Admin User" /></form><br /><br />
					<form action="unit09_Logout.php" method="post"><input class="btn-more-nav" type="submit" value="Log Out" /></form>
					</th></tr>
					
					</table>
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

<?php
}
?>