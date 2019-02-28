<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us"><!-- InstanceBegin template="/Templates/Main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="Title" -->
<title>Project Rich Wertz .: PHP Projects :. Filter Database Records</title>
<link href="php_styles.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
<meta http-equiv="content-type" content="application/xhtml+xml; charset=UTF-8" />
<meta name="author" content="Richard R. Wertz" />


<meta name="copyright" content="2011-2013" />
	<script src="../../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
	<script type='text/javascript' src='http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js?ver=1.3.2'></script>
	<script type="text/javascript">
        $(function() {
            var offset = $("#righty").offset();
            var topPadding = 5;
            $(window).scroll(function() {
                if ($(window).scrollTop() > offset.top) {
                    $("#righty").stop().animate(
				{ marginTop: $(window).scrollTop() - offset.top + topPadding },
				{ queue: true, duration: 0, easing: 'linear' }
				);
                } else {
                    $("#righty").stop().animate(
				{ marginTop: 0 },
				{ queue: true, duration: 0, easing: 'linear' }
				);
                };
            });
        });
    </script>
<link href="../../SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css" />
<link href="../../bamboo.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="page" class="alpha60">

 <div id="header">
  <h1>[ <a href="http://www.richwertzonline.com">Project Rich Wertz</a> ]</h1>
  <h2>Everything I ever wanted to put online, but couldn't find a spot for</h2>
 </div>

<div id="main"><!-- InstanceBeginEditable name="Main Content" -->
	<div id="content" class="content2">
		<h2>IT250 Unit 7</h2>
		<p>Filter Database Records</p>
		<h2>Contacts Database</h2>
		<div id="formarea">
			<?php
				include("inc_db_conn.php");
			?>
			
			<table><tr><td>
			<table>
			
			<form action="Unit07_AddContactProcess.php" method="post">
			
			<tr><th colspan="2">Add Contact</th></tr>
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
			<tr><td colspan="2"><input type="Submit" value="Add to Contact List" name="Submit" /></td></tr>
			</form>
			</table>
			</td><td class="whole">
			<table>
			<form action="Unit07_ViewContactList.php" method="post">
			<tr><th colspan="2">View Contact List</th></tr>
			<tr><td>View all contacts<br />or sort by state:</td><td><br />
			<select name="stat">
			<option value="View All">View All</option>
			
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
			</td></tr>
			<tr><td colspan="2"><input type="submit" name="submit" value="View Contacts" /></td></tr>
			
			</form>
			
			</table>
			</td></tr></table>
			
		</div>
		<h2>Directions</h2>
		<p>Create a List request form. This form should allow the user to request to see ‘all records’ or ‘only records from __ state’. When the request from is submitted a PHP program will go thru the following steps:</p>
		<ol>
			<li>Connect to the Database and Table</li>
			<li>Form the Query Request string</li>
			<li> Execute the Query</li>
			<li>If data is returned, retrieve the records into an array</li>
			<li>Loop thru the array and display the following data
				<ol>
					<li>Last Name</li>
					<li>First Name</li>
					<li>Area Code</li>
					<li>Phone Number</li>
				</ol>
			</li>
			<li>Close the DB connection</li>
			<li>Provide a link back to the List Request form and to the
				Telephone Contact Entry form</li>
		</ol>
<p>The request and response page should share the color, font, background and
						link colors with other pages in this application. </p>
						
			</p>
	</div>
<!-- InstanceEndEditable -->
<div id="righty">
	<h2>Hello</h2>
		<p>Hi there!<br />
		The last time I updated this page was: <script type="text/javascript" language="javascript">
		<!-- hide script
		//begin
		var m = document.lastModified;
		var p = m.length-8;
		document.write(m.substring(p, 0));
		// End -->
		</script>
		</p>
	<h2>Navigation</h2>
		<div id="nav">
		<ul id="MainNav" class="MenuBarVertical">
			<li><a href="../../index.html">Home</a></li>
			<li><a href="../main.html" class="MenuBarItemSubmenu">School</a>
				<ul>
					<li><a href="../projects-webdesign.html">Web Design Projects</a></li>
					<li><a href="../projects-programing.html">Programming Projects</a></li>
					<li><a href="../academic-progress.htm">Academic Progress</a></li>
				</ul>
			</li>
		</ul>

</div><!-- #righty -->

</div>
	<div class="content" id="content">
		<h2>Feed Back</h2>
		<p>Questions? Comments? Rants? Raves?<br/>
			My email address forwards everything into the trash bin (just kidding), so don't hold back and be honest. Also don't send spam: <a href="mailto:rich@richwertzonline.com?subject=Project Rich Wertz">My email</a>.</p>
	</div>
</div>

<div id="footer">
Copyright &copy; 2011-2013 Richard R. Wertz
</div>

</div>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MainNav", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>

</body>
<!-- InstanceEnd --></html>