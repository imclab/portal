<?php

$filePath = "normal-email-exampleformatting.txt"; 		//file path, format is c:\\folder\freeMoney.txt.bat
								
$rawData = file_get_contents($filePath); 				//sets the var $rawData to ALL of the data in $filePath

$rawData = trim($rawData); 								//takes whitespace out from before+after string


?>