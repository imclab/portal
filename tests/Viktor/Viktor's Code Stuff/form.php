<html>
<body>
<?php
$text = $_POST["textIn"];


$link = mysqli_connect('localhost','root', '', 'boarddata'); 

if (!$link) 
{ 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 
//echo 'Connection OK'; //So the connection works. Now lets do stuff

mysqli_query($link,"INSERT INTO data (Title) VALUES ('$text')");

echo "You entered the text <br/>" . $text . "<br/>This text has been submitted!<br/>";
?>
</body>
</html>