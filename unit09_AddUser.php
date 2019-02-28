<?php

session_start();
if(!isset($_SESSION['authuser']) || $_SESSION['authuser'] != 1) {
	include("inc_access.php");
	$NOACCESS;
	
//	header('Location:unit09_403.php');
	
} else {

?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<!-- InstanceBegin template="/Templates/IT250.dwt" codeOutsideHTMLIsLocked="false" -->
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
				<h2>SECURE Contacts Database - Add Authorized User</h2>
				<div id="form">
					<?php

						if(isset($_POST['adduser'])) {
							include("inc_db_conn.php");
							$TBName = 'users';
							
							$UNName = ($_POST['username']);	//username field
							$P1Name = ($_POST['pasword1']);	//password 1 field
							$P2Name = ($_POST['pasword2']);	//password 2 field
							
							if (empty($UNName) || empty($P1Name) || empty($P2Name)) {
								echo "<p>Please fill in the form completely.<br /><br /><input class=\"btn-more\" type=\"submit\" onclick=\"history.go(-1);\" value=\"Back to Form\" /></p>";
							} else if ($P1Name != $P2Name) {
								echo "<p>Please make sure the two passwords match each other.<br /><br /><input class=\"btn-more\" type=\"submit\" onclick=\"history.go(-1);\" value=\"Back to Form\" /></p>";
							} else {
//								$DBConn = @mysql($DBHost, $DBUser, $DBPass, $DBName);	//Connect to the database
								$DBConn OR DIE ("Unable to connect to database! Please try again later.");
								mysql_select_db($DBName);
								$QYStrg = "SELECT * FROM $TBName WHERE username = '$UNName'";
								$QYRslt = mysql_query($QYStrg);//Query Result
								$QYRRow = mysql_fetch_row($QYRslt);
								
								if (!empty($QYRRow)) {
									echo "<p>The username entered: <strong>" . $UNName . "</strong> already exists in the database. Please choose a different username.<br /><br /><input class=\"btn-more\" type=\"submit\" onclick=\"history.go(-1);\" value=\"Back to Form\" /></p>";
									
								} else {
								
								$QYStrg = "INSERT INTO $TBName VALUES ('".$UNName."','".$P1Name."')";
								$QYRslt = mysql_query($QYStrg);//Query Result
									
									if ($QYRslt === FALSE)
										echo "<p>Sorry, the form was unable to insert the information submitted into the database.</p>" . "<p>Error Code " . mysql_errno($DBConn) . "</p>";
									else {
										echo "<p>The authorized user has been added with the following credentials:<br /><br />";
										echo "Username: <strong>" .  $UNName . "</strong><br />Password: <strong>" . $P1Name . "</strong><br /><br />";
										echo "<p><form action=\"unit08_AddUser.php\"><input class=\"btn-more\" type=\"submit\" value=\"Add Another User\" /></form></p>";
									}
									
								}
							}

								} else {
					?>
					<table>
						<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
						<tr><th colspan="2">Add Authorized User</th></tr>
						<tr><td>Desired Username:</td><td><input type="text" name="username" maxlength="10" id="username" /></td></tr>
						<tr><td>Password:</td><td><input type="text" name="pasword1" maxlength="10" id="pasword1" /></td></tr>
						<tr><td>Verify Password:</td><td><input type="text" name="pasword2" maxlength="10" id="pasword2" /></td></tr>
						<tr><td colspan="2"><input type="Submit" class="btn-more" value="Add Authorized User" name="adduser" /></td></tr>
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
					<form action="unit09_Admin.php" method="post"><input class="btn-more-nav" type="submit" value="Admin Tasks" /></form><br /><br />
					<form action="unit09_ViewContactList.php" method="post"><input class="btn-more-nav" type="submit" value="View Contact List" /></form><br /><br />
					<form action="unit09_AddContact.php" method="post"><input class="btn-more-nav" type="submit" value="Add Contact" /></form><br /><br />
					<form action="unit09_Logout.php" method="post"><input class="btn-more-nav" type="submit" value="Log Out" /></form>
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