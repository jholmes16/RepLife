<?php
	include_once('db.php');
	
	$lasname = $_POST['lastname'];
	
	$query = "SELECT * FROM user WHERE first_name = '$lasname'";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)) {
		if($row['first_name'] == ''){
			echo "None". " - " . $row['first_name'];
			echo "<br />";
		}
		else{
			echo $row['first_name'];
			echo "<br />";
		}
	}
	
?>