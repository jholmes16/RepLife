<?php
	$conn = mysql_connect('localhost', 'root', 'root') or die(mysql_error());
	echo "Connected to MYSQL<br /><hr />";
	$db	= mysql_select_db('replife') or die(mysql_error());
	echo "Connected to test<br /><hr />";
?>