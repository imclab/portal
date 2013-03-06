<html>
	<head>
		<title>Hoofbeat Articles</title>
	</head> 
	<body>
		<?php
			//Grab the login credentials and database info
			require_once 'login.php';
			$db_server = mysql_connect($db_hostname, $db_username, $db_password);

			//If connection fails
			if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());

			//Select database
			mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());

			//SQL Query to select everything from wp_posts
			$query = "SELECT post_title, post_content FROM wp_posts 
					  WHERE post_status='publish' ORDER BY post_date DESC LIMIT 10";
			$result = mysql_query($query);

			//If query fails
			if (!$result) die ("Database access failed: " . mysql_error());

			$rows = mysql_num_rows($result);

			//Traverses 
			for ($i = 0 ; $i < $rows ; ++$i)
			{
				//Grab next row of data and store in array
				$row = mysql_fetch_row($result);
				echo 'TITLE: ' . $row[0] . '<br />';
				echo 'ARTICLE: ' . $row[1] . '<br /><br />';
			}

			//Close SQL connection
			mysql_close($db_server);
		?>


	</body>
</html>