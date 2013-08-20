<?php
	include_once('db.php');
	
	$lasname = $_POST['lastname'];
	
	$query = "SELECT * FROM  tv_listings";
	$result = mysql_query($query) or die(mysql_error());
	while($row = mysql_fetch_array($result)) {
		if($row['show'] == ''){
			echo "None". " - " . $row['show'];
			echo "<br /><hr /><br />";
		}
		else{
			echo $row['show']. "-".$row['time'];
			echo "<br /><hr /><br />";
		}
	}
	
?>