<!-- This is just a comment, the browser ignores it -->

<!-- Specifies that we are have an HTML page here -->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01//EN"
   "http://www.w3.org/TR/html4/strict.dtd">

<!-- Specifies that everything inside here is our content -->
<html lang="en">

	<!-- The head contains 'meta' information about the page -->
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	
		<!-- Let's set a title! -->
		<title>index</title>

		<!-- Here we are telling the page to load a style sheet -->
		<link rel="stylesheet" href="style.css" type="text/css" media="screen" />
		
	</head>
	
	<!-- The body is where the real meat is -->
	<body>
	
		<h1>Oooh, databases, now we&apos;re cooking</h1>

		<p class="blink">How are you finding Edds presentation?</p>
		
		<!-- Let's show the answers in the database -->
		<?php
			$connection = mysql_connect('127.0.0.1', 'username', 'password');
			$database = mysql_select_db('database', $connection);
			$sql = "SELECT * FROM answers";
			$result = mysql_query($sql);
		?>
		<ul>
			<?php
				while ($row = mysql_fetch_assoc($result)) {
					printf("<li>%s</li>", $row['answer']);
				}
			?>
		</ul>
		
		<a href="/webtech101">Back to the index</a>
		<a href="/webtech101/index-database-javascript.php">Next up</a>
	</body>
	
</html>
