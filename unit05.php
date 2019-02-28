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
				<h2>Add Contact</h2>
				<div id="form">
				
					<p>Please enter the information requested below.</p>
					<p>Zip code and phone number fields require numbers only.</p>
					
					<table>
			<form action="unit05_AddContactProcess.php" method="post">
			
			<tr><td>First Name:</td><td><input type="text" name="fnme" /></td></tr>
			<tr><td>Last Name:</td><td><input type="text" name="lnme" /></td></tr>
			<tr><td>Street Address:</td><td><input type="text" name="adrs" /></td></tr>
			<tr><td>City:</td><td><input type="text" name="city" /></td></tr>
			<tr><td>State:</td><td><select name="stat">
			<option value="" selected="selected">Select a state</option>
			<option value="AL">AL</option>
			<option value="AK">AK</option>
			<option value="AS">AS</option>
			<option value="AZ">AZ</option>
			<option value="AR">AR</option>
			<option value="CA">CA</option>
			<option value="CO">CO</option>
			<option value="CT">CT</option>
			<option value="DE">DE</option>
			<option value="DC">DC</option>
			<option value="FM">FM</option>
			<option value="FL">FL</option>
			<option value="GA">GA</option>
			<option value="GU">GU</option>
			<option value="HI">HI</option>
			<option value="ID">ID</option>
			<option value="IL">IL</option>
			<option value="IN">IN</option>
			<option value="IA">IA</option>
			<option value="KS">KS</option>
			<option value="KY">KY</option>
			<option value="LA">LA</option>
			<option value="ME">ME</option>
			<option value="MH">MH</option>
			<option value="MD">MD</option>
			<option value="MA">MA</option>
			<option value="MI">MI</option>
			<option value="MN">MN</option>
			<option value="MS">MS</option>
			<option value="MO">MO</option>
			<option value="MT">MT</option>
			<option value="NE">NE</option>
			<option value="NV">NV</option>
			<option value="NH">NH</option>
			<option value="NJ">NJ</option>
			<option value="NM">NM</option>
			<option value="NY">NY</option>
			<option value="NC">NC</option>
			<option value="ND">ND</option>
			<option value="MP">MP</option>
			<option value="OH">OH</option>
			<option value="OK">OK</option>
			<option value="OR">OR</option>
			<option value="PW">PW</option>
			<option value="PA">PA</option>
			<option value="PR">PR</option>
			<option value="RI">RI</option>
			<option value="SC">SC</option>
			<option value="SD">SD</option>
			<option value="TN">TN</option>
			<option value="TX">TX</option>
			<option value="UT">UT</option>
			<option value="VT">VT</option>
			<option value="VI">VI</option>
			<option value="VA">VA</option>
			<option value="WA">WA</option>
			<option value="WV">WV</option>
			<option value="WI">WI</option>
			<option value="WY">WY</option>
			</select></td></tr>
			<tr><td>Zip Code:</td><td><input type="text" name="zipc" /></td></tr>
			<tr><td>Area Code:</td><td><input type="text" name="arac" /></td></tr>
			<tr><td>Phone Number:</td><td><input type="text" name="fone" /></td></tr>
			<tr><td>Email Address:</td><td><input type="text" name="emil" /></td></tr>
			<tr><th colspan="2"><input class="btn-more" type="submit" value="Add to Contact List" /></th></tr>
					</form>
					<form action="unit05_ViewContactList.php">
						<tr><th colspan="3"><input class="btn-more" type="submit" value="View Contact List" /></th></tr>
					</form>
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