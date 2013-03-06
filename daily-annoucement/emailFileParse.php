<?php

$filePath = "normal-email-exampleformatting.txt"; 		//file path, format is c:\\folder\freeMoney.txt.bat
								
$rawData = file_get_contents($filePath); 				//sets the var $rawData to ALL of the data in $filePath
														//can also be used to grab links like http://www.exe.ru/lol.html

$rawData = trim($rawData);								//takes whitespace out from before+after string


$rawDataArray = explode("\n",$rawData);					//makes an array with each col a new line

for($arrayColNum = 0; $arrayColNum <= count($rawDataArray); $arrayColNum++) //for how long $rawDataArray is, do {stuff}
{																			//and add 1 to $arrayColNum
		
		if(strpos($rawDataArray($arrayColNum),"Content-Type: ") == true)	// if you find "Content-Type: " in the (1 thru N)
		{																	// then (...)
		
			for($i = 0; $i <= $rawDataArray($arrayColNum); $i++)		//from 0 to where the useless string is, do {stuff}
			{															//and then plus 1 to $arrayColNum
				array_fill($arrayColNum, 1, "");							//fill with blankness from $arrayColNum and do it 1x
			}
		
		}
}



?>