function crDisplay(id,state)
{
	document.getElementById(id).style.display = state;
}

/*
function pushArgsToArray(someArray)
{
	for(var i = 0; i < arguments.length; i++) 
	{
		someArray.push(arguments[i]);
	}
}
*/

function addArrayUp(numArrayName)
{
	var costValTotal = 0;
	
	for(var n = 0; n < numArrayName.length; n++)
	{
		costValTotal = costValTotal + parseInt(numArrayName[n],10);
	}
	
	return costValTotal;
}

function pushArgsAndAdd(multiplier) //push ALL the numeric string or int args you like, this'll add them all but the first
{
	var costArray = [0,0];
	
	for(var i = 1; i < arguments.length; i++)  //i is 1 instead of 0 so it takes all BUT the first one ( the id which is argument[0] ), still will take inf. args
	{
		costArray.push(arguments[i]);
	}
	
	var finalPrice = addArrayUp(costArray);
	
	return multiplier * finalPrice; 
	//pushArgsAndPrint('finalprice',intTest1.innerHTML,intTest2.innerHTML)
}
	
function graduateInt(int,percent) //this is percents, so for 170% of 20 you'd do graduateIntUp('20','170') to get 34 (20 and 14)
{
	var graduatedInt = 0;
	
	graduatedInt = int * (percent / 100);
	
	return graduatedInt;
}

function trimTailingNum(input,decimalPlaces)
{
	var strInput = input;	
	
	var arrayNum = new Array();
	
	var arrayNum = strInput.toString().split('.'); //makes an array (2 cols) of (i.e. 1.247 would be [1,247]
	var choppedNum = "0";
	
	choppedNum = arrayNum[1].substring(0, decimalPlaces); //makes 2nd array object into a substring starting from 0 to how many decimal places you want!
	
	choppedNum = arrayNum[0] + "." + choppedNum; //makes choppednum (now just 24) into 1.24
	
	return choppedNum; //duh
}

function pushToValue(whatPush,whatID)
{
	document.getElementById(whatID).value = whatPush;
}


