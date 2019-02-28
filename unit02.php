<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/IT250.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Rich Wertz || School Project Experience || IT250 Unit 2</title>
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
					<li> <a class="active" href="unit02.php"> Unit 2 </a></li>
					<li> <a href="unit03.php"> Unit 3 </a></li>
					<li> <a href="unit04.php"> Unit 4 </a></li>
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
				<h2>Unit 2</h2>
<ul>
					<li>Modify a nested if statement so it instead uses a compound conditional expression.				</li>
					<li>Use logical operators such as || (or) and && (and) to execute a conditional or looping statement based on multiple criteria.</li>
					<li>This assignment is based on Chapter 2, Exercise 2-4 on page 118-119 of PHP Programming With MySQL (2nd Edition)</li>
					</ul>
				</p>
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
				<h2>Gas Prices</h2>
				
				<div id="form">
					<p>Please enter a gas price below.</p>
					<p>The input must contain no letters, but a decimal point is acceptable.</p>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="get">
					Enter Gas Price:
					<input type="text" name="priceGas" />
					<input type="submit" class="btn-more" value="Submit" />
					<p>&nbsp; </p>
					</form>
					
						<?php
						
						if (!isset($_GET['priceGas']) || !is_numeric($_GET['priceGas'])) {
						echo "<p>Make sure that the input is a number.</p>";
						} else {
						$GasPrice = $_GET['priceGas'];
						if ($GasPrice >= 2 && $GasPrice <= 3) {
						echo "<p>$" . $GasPrice . " is probably a reasonable gas price.<br />&nbsp; </p>";
						} elseif ($GasPrice < 2) {
						echo "<p>$" . $GasPrice . " is crazy cheap!<br />Tell me where this gas station is!!</p>";
						} else {
						echo "<p>$" . $GasPrice . " is crazy expensive!<br />Have you thought about getting a hybrid, or perhaps switching to Ethanol?</p>";
						}
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
<!-- InstanceEnd --></html>