<?php

	$hostname = "wertz.db.10874874.hostedresource.com";//host name
	$dbname = "wertz";//database name
	$username = "wertz";//username you use to login to php my admin
	$password = "W31ch3nx1!";//password you use to login
	
	//CONNECTION OBJECT
	//This Keeps the Connection to the Databade
	$conn = new MySQLi($hostname, $username, $password, $dbname) or die('Can not connect to database')		
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Untitled Document</title>
</head>
<body>

<?php
	if(isset($_POST['Submit'])){//if the submit button is clicked
	
	
	$pubdate = $_POST['updatepubdate'];
	
	$title = $_POST['updatetitle'];
	
	$publisher = $_POST['updatepublisher'];
	
	$img = $_POST['updateimg'];
		
	$update = "UPDATE Books SET PublishDate='$pubdate', Title='$title', Publisher='$publisher', Image='$img' WHERE BookID = ".$bookid;

	$conn->query($update) or die("Cannot update");//update or error

	}
?>

<?php

//Create a query
$sql = "SELECT * FROM contacts WHERE BookID = '".$bookid."'";

//submit the query and capture the result
$result = $conn->query($sql) or die(mysql_error());

$query=getenv(QUERY_STRING);
parse_str($query);


//$ud_title = $_POST['Title'];
//$ud_pub = $_POST['Publisher'];
//$ud_pubdate = $_POST['PublishDate'];
//$ud_img = $_POST['Image'];

?>
<h2>Update Record <?php echo $bookid;?></h2>

<form action="" method="post">
<?php
	
	
	while ($row = $result->fetch_assoc()) {?>
    
<table border="0" cellspacing="10">
<tr>
<td>Title:</td> <td><input type="text" name="updatetitle" value="<?php echo $row['Title']; ?>"></td>
</tr>
<tr>
<td>Publisher:</td> <td><input type="text" name="updatepublisher" value="<?php echo $row['Publisher']; ?>"></td>
</tr>
<tr>
<td>Publish Date:</td> <td><input type="text" name="updatepubdate" value="<?php echo $row['PublishDate']; ?>"></td>
</tr>
<tr>
<td>Image URL:</td> <td><input type="text" name="updateimg" size="100" value="<?php echo $row['Image']; ?>"></td>
</tr>
<tr>
<td><INPUT TYPE="Submit" VALUE="Update the Record" NAME="Submit"></td>
</tr>
</table>
<?php	}
	?>
</form>





<?php
	if($update){//if the update worked
	
	echo "<b>Update successful!</b>";
	
	
		
}  

?>

</body>
</html>

</body>
</html>