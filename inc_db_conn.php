<?php

//DBHost is localhost only while locally testing._
//While these files are hosted on richwertzonline.com,_
//The hose name is this: wertz.db.10874874.hostedresource.com

//User is root only on localhost and there is no password.

//While online, the username is: wertz
//Password is: W31ch3nx1!

$DBHost = "wertz.db.10874874.hostedresource.com";
$DBUser = "wertz";
$DBPass = "W31ch3nx1!";
$DBName = "wertz";

//$DBConn = new mysqli($DBHost, $DBUser, $DBPass, $DBName);


//$DBConn = new mysqli($DBHost, $DBUser, $DBPass);
//$DBConn = mysql_connect($DBHost, $DBUser, $DBPass);
$DBConn = mysql_connect($DBHost, $DBUser, $DBPass);
$DBTest = "derp";

//$DBHost = "localhost";
//$DBUser = "root";
//$DBPass = "";
//$DBName = "wertz";

//This file is only kept to easily switch between local database connection _
//and server database connection.

?>