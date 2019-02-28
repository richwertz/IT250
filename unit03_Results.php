<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/IT250.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Rich Wertz || School Project Experience || IT250 Unit 3 Results</title>
<style type="text/css">
.ctr {
	text-align: center;
	font-family: Verdana, Geneva, sans-serif;
}
</style>

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
					<li> <a class="active" href="unit03.php"> Unit 3 </a></li>
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
				<h2>Unit 3</h2>
				<p>
					<ul>
						<li>Create a form that has four input fields named word1, word2, word3, and word4 (NOTE: recommend using all lower case), as well as Reset and Submit buttons.</li>
						<li>In the same file, create a script that validates the following					
							<ul>
								<li>All four words are entered</li>
								<li>All four words are between 4 and 7 characters long</li>
							</ul>
						</li>
						<li>Once all of the words have been validated, use the strtoupper() and str_shuffle() functions to produce four jumbled set of letters.</li>
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
				<h2>Jumble Maker - Results</h2>
				<div id="form">
				
			<?php
	
			function displayError($fieldName, $errorMsg) {
				global $errorCount;
				echo "<div class=\"ctr\">Error for \"$fieldName\": $errorMsg<br />\n</div>";
				++$errorCount;
			}
	
			function validateStr($data, $fieldName) {
				global $errorCount;
					if (empty($data)) {
					displayError($fieldName,"This field is required.");
					$retval = "";
					} else { 
					$retval = trim($data);
					$retval = stripslashes($retval);
						if ((strlen($retval)<4) || (strlen($retval)>7)) { //checks string for letter length.
							displayError($fieldName,"Words must contain at least four letters, but no more than seven letters.");
						}
						if (preg_match("/^[a-z]+$/i",$retval)==0) { //checks string for numbers.
							displayError($fieldName,"Words must contain <strong>only</strong> letters.");
						}
					}
				$retval = strtoupper($retval);
				$retval = str_shuffle($retval);
				return($retval);
			}
	
			$errorCount = 0;
			$words = array();
	
			$words[] = validateStr($_POST['Word1'], "Word 1");
			$words[] = validateStr($_POST['Word2'], "Word 2");
			$words[] = validateStr($_POST['Word3'], "Word 3");
			$words[] = validateStr($_POST['Word4'], "Word 4");
	
			if ($errorCount>0)
			echo "<br /><div class=\"ctr\"><form action=\"unit03.php\"><input class=\"btn-more\" type=\"submit\" value=\"Re-enter Data\" /></form><br />\n</div>";
	
			//I would like to restate the word that the user entered as well as the jumbled word. That requires calling the original word posted to the form in JumbleMaker.html.
	
			else {
			$wordnum = 0;
			//$numword = ++$wordnum;		This isn't right, but it's close.
			$numword = 0;	//a-ha! I need a new list of numbers starting from 0. If I use $wordnum, it will continue to count, instead of starting over again at 1.
			$wordpst = 'Word'.$numword;
			echo "<div class=\"ctr\">";
			foreach ($words as $word)
			//foreach ($wordpst as $wordnum)		This isn't right, and it's not even close. Just a stab in the dark first effort. I need more coffee.
	
			//echo "<span style=\"font-family:courier;\">Word ".++$numword."- Original: ".strtoupper($_POST[++$wordpst])."&nbsp;&nbsp;Jumbled: $word</span><br />\n";
			//I would rather not have to rely on a span tag, since it will be repeated for each word.
	
			echo "Word ".++$numword."- Original: ".strtoupper($_POST[++$wordpst])."&nbsp;&nbsp;Jumbled: $word<br />\n";
	
			//Well, it seems to have worked. I also wanted to get the entered words to display in uppercase, so I made that happen with the strtoupper method.
	
			echo "<br /><form><input type=\"submit\" class=\"btn-more\" onclick=\"javascript:history.back()\" value=\"Back to form\" /></form><br /></div>";
			}
	
			//I'm quite proud of the outcome. The coffee helped!
	
			echo "<p>Additions</p>";
			echo "<p>Some additional functionality was added that reveals the original word, capitalizes it and presents it for comparison against the jumbled word.</p>";
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