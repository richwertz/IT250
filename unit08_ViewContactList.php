<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/IT250.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Rich Wertz || School Project Experience || IT250 Unit 8</title>
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
					<li> <a class="active" href="unit08.php"> Unit 8 </a></li>
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
				<h2>Unit 8</h2>
				<ul>
					<li>Part I
						<ul>
							<li>Create a page with an administrative function menu that requires the user to login</li>
							<li>This  will be called the &ldquo;admin menu&rdquo; and should be saved as admin.php</li>
							<li>Create  another page named login.html that will have two forms on the same page							</li>
							<li>The first form is a simple login form with fields for username and password. The password field should be masked</li>
							<li>Once the user name and password match an entry in the database, the user is taken to admin.php, where the second form is located</li>
							<li>The second form allows for users to be entered into the users database</li>
							<li>Submitting the form triggers the application on adduser.php, which enters the data into the table</li>
						</ul>
					</li>
					<li>Part II
						<ul>
							<li>The contact form is used after a successful login to insert, modify and delete records in the contacts database</li>
						</ul>
					</li>
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
				<h2>Contacts Database - View Contacts</h2>
				<div id="form">
					<?php
						include("inc_db_conn.php");
					?>

					<table>
					<tr><td class="whole">
					<table>
					<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
					<tr><th colspan="2">View Contact List</th></tr>
					<tr><td>View all contacts<br />or sort by state:</td><td><br />
					<label>
					<select name="stat">
					<option value="View All" selected="selected">View All</option>
					
					<?php
					
						$TBName = "contacts";
						//$yourfield = "stat";
						
						//Fetching from your database table.
						$DBConn OR DIE ("Unable to connect to database! Please try again later.");
						mysql_select_db($DBName);
						$QYStrg = "SELECT DISTINCT stat FROM $TBName ORDER BY stat";
						$QYRslt = mysql_query($QYStrg);
						
						if ($QYRslt) {
							while($TBLrow = mysql_fetch_array($QYRslt)) {
								//$name = $row[$yourfield];
								$ROWval = $TBLrow["stat"];
								echo "<option value=\"" . $ROWval . "\">" . $ROWval . "</option>";
							}
						}
						mysql_close($DBConn);
					
					?>
					
					</select>
					</label>
					</td></tr>
					<tr><th colspan="2"><input name="submit" type="submit" class="btn-more" value="View Contacts" /></th></tr>
					
					</form>
					</table>
					
					</td>
					<td class="whole">
					
					<table>

					<?php
					
					if(isset($_POST['submit'])) {
						
					include("inc_db_conn.php");
						
					$TBName = "contacts";

					
					$DBConn OR DIE ("Unable to connect to database! Please try again later.");
					mysql_select_db($DBName);
					
					$sort = ($_POST['stat']);				
					
					$dc = '</td><td>';
					$hc = '</th><th>';
					
					$THStrg = '<tr><th>Name' . $hc . 'Street Address' . $hc . 'City' . $hc . 'State' . $hc . 'ZIP Code' . $hc . 'Phone Number' . $hc . 'Email Address</th></tr>';
				
					if ($sort == "View All") {
						$head = "<tr><th colspan=\"7\"><h3>All Contacts</h3></th></tr>";
						$SQLstr = "SELECT * FROM $TBName ORDER BY lnme";
						//For some reason, it didn't like the $TBName definition. I've been_
						//just writing in the table name, but I might try it with quotes if_
						//it doens't work. It might also require parens around the defined name.
						//I don't know how, but it fixed itself.
						} else {
							$head = "<tr><th colspan=\"7\"><h3>Sorted By " . $sort . "</h3></th></tr>";
							$SQLstr = "SELECT * FROM $TBName WHERE stat = '$sort' ORDER BY lnme";
					}
					
					$PGHead = ($head);
					
					echo $PGHead;
					echo $THStrg;
					
					$QYRslt = mysql_query($SQLstr);
					while ($row = mysql_fetch_row($QYRslt)) {
						$lnme = $row[2];
						$fnme = $row[1];
						$adrs = $row[3];
						$city = $row[4];
						$stat = $row[5];
						$zipc = $row[6];
						$arac = $row[7];
						$fone = $row[8];
						$emil = $row[9];
						
						echo "<tr><td>" . $lnme . ", " . $fnme . $dc . $adrs . $dc . $city . $dc . $stat . $dc . $zipc . $dc . "(" . $arac . ") " . $fone . $dc . $emil . "</td></tr>";
					}
					
					mysql_close($DBConn);
					
					} else {
						
						echo"<tr><td colspan=\"7\">&nbsp;</td></tr>";
					}
						
					?>


					</table>
					
					</td></tr>
					
					<tr><td class="whole" colspan="2">
					
					<table class="nav">
					
					<tr>
						<th colspan="7">
						
						<h3>Navigation</h3>
						
						</th></tr>
						
						<tr><th colspan="7">

					
					<form action="unit08_Admin.php"><input class="btn-more-nav" type="submit" value="Admin Tasks" /></form><br /><br />
					<form action="unit08_AddContact.php"><input class="btn-more-nav" type="submit" value="Add Contact" /></form><br /><br />
					<form action="unit08_AddUser.php"><input class="btn-more-nav" type="submit" value="Add User" /></form><br /><br />
					<form action="unit08.php"><input class="btn-more-nav" type="submit" value="Log Out" /></form>
					
					</th></tr>
					
					</table>
					
					</td></tr>
					
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