<?php

$filePath = "normal-email-exampleformatting.txt"; 		//file path, format is c:\\folder\freeMoney.txt.bat
								
$rawData = file_get_contents($filePath); 				//sets the var $rawData to ALL of the data in $filePath
														//can also be used to grab links like http://www.exe.ru/lol.html

$rawData = trim($rawData);								//takes whitespace out from before+after string


$rawDataArray = explode("\n",$rawData);					//makes an array with each col a new line


/*///
|	So, the below function will:
|	1) 	Take in an array with the column of 1 then 2 (up until the length of $array)
|		and find where the first instance of the $string is
|
|	2)	Where that is, 
|	
*////

function arrayDelBefore($array,$string)
{
	for($arCol = 0; $arCol <= count($array); $arCol++)	//for how long $rawDataArray is, do {stuff}
	{													//and add 1 to $arCol
	
		if(strpos($array($arCol),$string) == true)	// if you find $string in the (1 thru N)
		{											// then (...)
		
			for($i = 0; $i <= $array($arCol); $i++)		//from 0 to where the useless string is, do {stuff}
			{														//and then plus 1 to $arCol
				array_fill($arCol, 1, "");							//fill with blankness from $arCol and do it 1x
			}
			
		}

	}

}






?>