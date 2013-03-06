<html>
	<head>
		<title>Hoofbeat Articles</title>
		<link href="css/hoofbeat.css" type="text/css" rel="stylesheet" />
	</head>
	<body>
		<div class="wrapper">
			<header>
				<h1>Hoofbeat Articles</h1>
				<nav>
					<ul>
						<li>Home</li>
					</ul>
				</nav>
			</header>
			<section class="articles">
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
						echo '<article>';
						echo '<hgroup><h3>' . $row[0] . '</h3></hgroup>';
						echo $row[1] . '<br /><br />';
						echo '</article>';
					}

					//Close SQL connection
					mysql_close($db_server);
				?>
			</section>
			<footer>
				Copyright: me.
			</footer>
		</div><!-- .wrapper -->
	</body>
</html>