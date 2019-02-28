<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
    "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en-us"><!-- InstanceBegin template="/Templates/Main.dwt" codeOutsideHTMLIsLocked="false" -->
<head>
<!-- InstanceBeginEditable name="Title" -->
<title>Project Rich Wertz .: PHP Projects :. File-based System to Database System</title>
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
		<h2>IT250 Unit 6</h2>
		<p>Create a set of SQL statements that creates a table and necessary fields.</p>
		<h2>Create Table Process</h2>
		<div id="formarea">
			<?php
				include("inc_db_conn.php");

				$CreateTBLcon = 'CREATE TABLE IF NOT EXISTS contacts (
								contactid INT(3) NOT NULL AUTO_INCREMENT,
								fnme VARCHAR(25) NOT NULL,
								lnme VARCHAR(25) NOT NULL,
								adrs VARCHAR(50) NOT NULL,
								city VARCHAR(25) NOT NULL,
								stat VARCHAR(2) NOT NULL,
								zipc INT(5) NOT NULL,
								arac INT(3) NOT NULL,
								fone VARCHAR(8) NOT NULL,
								emil VARCHAR(30) NOT NULL,
								PRIMARY KEY (contactid))';

				$CreateTBLdat = 'INSERT INTO contacts (contactid, fnme, lnme, adrs, city, stat, zipc, arac, fone, emil)
								VALUES (NULL, "Rich", "Wertz", "123 Main", "Pittsburgh", "PA", 15218, 412, 5551212, "rich@richisgreat.com")';

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

				
				// Create table
				$CreateTBLcon = $DBConn->query($CreateTBLcon);
				if ($CreateTBLcon) {
					echo "Table has been created.<br />";
				} else {
					echo "error!!" . mysql_error($DBConn);  
				}
				
				// Insert info into table
				$CreateTBLdat = $DBConn->query($CreateTBLdat);
				if ($CreateTBLdat) {
					echo "Data has been entered into the table successfully.<br />";
				} else {
					echo "error!!" . mysql_error($DBConn);  
				}
				
				mysql_close($DBConn);
				
			?>
		</div>
		<h2>Directions</h2>
		<p>Create a table and populate it with fields and initial values.</p>
		
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