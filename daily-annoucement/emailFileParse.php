<?php

$filePath = "normal-email-exampleformatting.txt"; 		//file path, format is c:\\folder\freeMoney.txt.bat
								
$rawData = file_get_contents($filePath); 				//sets the var $rawData to ALL of the data in $filePath
														//can also be used to grab links like http://www.exe.ru/

$rawData = trim($rawData);								//takes whitespace out from before+after string


$rawDataArray = explode("\n",$rawData);					//makes an array with each col a new line

for($arrayColNum = 0; $arrayColNum <= count($rawDataArray); $arrayColNum++) //for how long $rawDataArray is, do {stuff}
{
		if(strpos($rawDataArray($arrayColNum),"Content-Type: ") == true)	// if you find "Content-Type: " in the (1 thru N)
		{																	// then (...)
		
			for($i = 0; $i <= $rawDataArray($arrayColNum); $i++)		//from 0 to where in the
			{															//found useless string,
																		//do {stuff}
			}
			
		}
}



?>