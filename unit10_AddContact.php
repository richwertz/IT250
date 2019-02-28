<?php

session_start();
if(!isset($_SESSION['authuser']) || $_SESSION['authuser'] != 1) {
	include("inc_access.php");
	$NOACCESS;
	
} else {

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/IT250.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Rich Wertz || School Project Experience || IT250 Unit 10</title>
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
					<li> <a href="unit09.php"> Unit 9 </a></li>
					<li> <a class="active" href="final.php"> Final </a></li>
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
				<h2>Unit 10</h2>
				<ul>
					<li>Continue using security protocols added in unit 9</li>
					<li>Give the authorized user a way to modify OR delete the data in the Telephone Contact Application
						<ul>
							<li>Both functions are not required</li>
						</ul>
					</li>
					<li>Create a new php program that allows the user to specify which data item they want to modify or delete</li>
					<li>Use the data record's primary key to perform an update or delete</li>
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
				<h2>SECURE Contacts Database - Add Contact</h2>
				<div id="form">
					<?php

						if(isset($_POST['addcontact'])) {
							include("inc_db_conn.php");
							$TBName = 'contacts';
							
							//Below from AddContactProcess.php. That code has been merged with this application.
							$fnme = ucfirst(strtolower($_POST['fnme']));	//0 first name
							$lnme = ucfirst(strtolower($_POST['lnme']));	//1 last name
							$adrs = ($_POST['adrs']);	//2 address
							$city = ($_POST['city']);	//3 city
							$stat = ($_POST['stat']);	//4 state
							$zipc = ($_POST['zipc']);	//5 zip code
							$arac = ($_POST['arac']);	//6 area code
							$fone = ($_POST['fone']);	//7 phone number
							$emil = ($_POST['emil']);	//8 email
							
							if (empty($fnme) || empty($lnme) || empty($emil) || empty($adrs) || empty($city) || empty($stat) || empty($zipc) || empty($arac) || empty($fone)) {
								echo "<p>Please fill in the form completely.<br /><br /><input class=\"btn-more\" type=\"submit\" onclick=\"history.go(-1);\" value=\"Back to Form\" /></p>";
							} else if (!is_numeric($zipc) || !is_numeric($arac) || !is_numeric($fone)) {
								echo "<p>Please make sure that the Zip Code, Area Code and Phone Number fields are numeric.<br /><br /><input class=\"btn-more\" type=\"submit\" onclick=\"history.go(-1);\" value=\"Back to Form\" /></p>";
							} else if (strlen($zipc) != 5 || strlen($arac) != 3 || strlen($fone) != 7) {
								echo "<p>Please make sure that the Zip Code field contains five (5) numbers,<br />the Area Code field contains three (3) numbers,<br />and the Phone Number field contains seven (7) numbers.<br /><br /><input class=\"btn-more\" type=\"submit\" onclick=\"history.go(-1);\" value=\"Back to Form\" /></p>";
		
							} else {
//								$DBConn = @mysql($DBHost, $DBUser, $DBPass, $DBName);	//Connect to the database
								$DBConn OR DIE ("Unable to connect to database! Please try again later.");
								mysql_select_db($DBName);
								$QYStrg = "INSERT INTO $TBName Values (NULL,'".$fnme."','".$lnme."','".$adrs."','".$city."','".$stat."','".$zipc."','".$arac."','".$fone."','".$emil."')";
								$QYRslt = mysql_query($QYStrg);//Query Result
									
									if ($QYRslt === FALSE)
										echo "<p>Sorry, the form was unable to insert the information submitted into the database.</p>" . "<p>Error Code " . mysql_errno($DBConn) . "</p>";
									else {
										echo "<p>The following information has been added to the contact database:<br /><br />";
										echo $fnme . " " . $lnme . "<br />";
										echo $adrs . "<br />";
										echo $city . ", " . $stat . " " . $zipc . "<br />";
										echo "(" . $arac . ") " . $fone . "<br />";
										echo $emil . "</p>";
										echo "<p><form action=\"unit10_AddContact.php\"><input class=\"btn-more\" type=\"submit\" value=\"Add Another Contact\" /></form></p>";
									}
			
								}
							} else {
					?>
					<table>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
							<tr>
								<th colspan="2">Add Contact</th>
							</tr>
							<tr>
								<td>First Name:</td>
								<td><input type="text" name="fnme" /></td>
							</tr>
							<tr>
								<td>Last Name:</td>
								<td><input type="text" name="lnme" /></td>
							</tr>
							<tr>
								<td>Street Address:</td>
								<td><input type="text" name="adrs" /></td>
							</tr>
							<tr>
								<td>City:</td>
								<td><input type="text" name="city" /></td>
							</tr>
							<tr>
								<td>State:</td>
								<td><label>
										<select name="stat">
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
										</select>
									</label></td>
							</tr>
							<tr>
								<td>Zip Code:</td>
								<td><input type="text" name="zipc" /></td>
							</tr>
							<tr>
								<td>Area Code:</td>
								<td><input type="text" name="arac" /></td>
							</tr>
							<tr>
								<td>Phone Number:</td>
								<td><input type="text" name="fone" /></td>
							</tr>
							<tr>
								<td>Email Address:</td>
								<td><input type="text" name="emil" /></td>
							</tr>
							<tr>
								<td colspan="2"><input class="btn-more" type="Submit" value="Add to Contact List" name="addcontact" /></td>
							</tr>
						</form>
					</table>
					<?php
					
						}
					?>
					</table>
					</td>
					</tr>
					<tr>
					<td class="whole" colspan="2">
					<table class="nav">
					<tr><th><h3>SECURE Database Area Navigation</h3></th></tr>
					<tr><th>
					<form action="unit10_Admin.php" method="post"><input class="btn-more-nav" type="submit" value="Admin Tasks" /></form><br /><br />
					<form action="unit10_ViewContactList.php" method="post"><input class="btn-more-nav" type="submit" value="View Contact List" /></form><br /><br />
					<form action="unit10_EditContact.php" method="post"><input class="btn-more-nav" type="submit" value="Edit Contact" /></form><br /><br />
					<form action="unit10_DeleteContact.php" method="post"><input class="btn-more-nav" type="submit" value="Delete Contact" /></form><br /><br />
					<form action="unit10_AddUser.php" method="post"><input class="btn-more-nav" type="submit" value="Add Admin User" /></form><br /><br />
					<form action="unit10_Logout.php" method="post"><input class="btn-more-nav" type="submit" value="Log Out" /></form>
					</th></tr>
					</table>
					</td>
					</tr>
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