<?php
	$connection = mysql_connect('127.0.0.1', 'username', 'password');
	$database = mysql_select_db('database', $connection);
	$sql = "SELECT * FROM answers";
	$result = mysql_query($sql);
	
	while ($row = mysql_fetch_assoc($result)) {
		printf("<li>%s</li>", $row['answer']);
	}
?>

