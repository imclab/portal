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

function pushToValue(whatPush,whatID)
{
	document.getElementById(whatID).value = whatPush;
}

/*

function trimTailing(input,numTrim) //3 - 2
{
	
	var len = input.length - numTrim
	var out = "";
	
	return out;
}

*/