<?php

//see http://php.net/manual/en/ for info

$filePath = "c:\\children\tommy.exe"; 		//file path, format is c:\\folder\freeMoney.txt.bat
$rawDataDelimiter = "\n";					//what to use to cut one string out from another into diff. rows
											//i.e. if we see the string HELLO.I.AM.SEXY and
											//we use "." as the delimiter, the array will be
											//["HELLO","I","AM","SEXY"]	

$rawData = file_get_contents($filePath); 	//sets the var $rawData to ALL of the data in $filePath

$rawDataRows = explode($rawDataDelimiter,$rawData); //format is (what to use for a new row,what string)



?>