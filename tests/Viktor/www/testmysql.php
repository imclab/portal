<html>
<body>
<canvas id="myCanvas" width=100></canvas> <!-- This is a canvas, which I'll use
for drawing all sorts of stuff-->


<?php 
//$link = mysql_connect('hostname','dbuser','dbpassword', 'boarddata'); 
$link = mysqli_connect('localhost','root', '', 'boarddata'); 

if (!$link) 
{ 
	die('Could not connect to MySQL: ' . mysql_error()); 
} 	
//echo 'Connection OK'; //So the connection works. Now lets do stuff

$result = mysqli_query($link, "SELECT * FROM data");
$itemNum = 0;
$titles = array();
$importances = array();
$squareNum = 0; //is increased every squared drawing

while($row = mysqli_fetch_array($result))
{
	$titles[$itemNum]  = $row['Title'] ;
	$importances[$itemNum] = $row['Importance'];
	//echo $titles[$itemNum];
	$itemNum = $itemNum + 1;
	//echo $row['Title'] ;
	//echo "<br />";
}
  
//echo $itemNum;

mysqli_close($link); 
?> 

<script type="text/javascript">
//This script generates the rectangles out of the database data
//A few requirements:
//The whole canvas must be filled
//There must not be overlaps or gaps

var itemNum = <?php echo $itemNum ?>;
var importanceArray = <?php echo json_encode($importances); ?>;
var importanceSum = 0; //The sum of the importance values
for(var u = 0; u < itemNum; u++)
{
	importanceSum = importanceSum + parseInt(importanceArray[u]);
}
var c = document.getElementById("myCanvas"); //get the canvas element
var ctx = c.getContext("2d"); 
c.width  = window.innerWidth - 20;
c.height = window.innerHeight - 20;
var canvasW = c.width;
var canvasH = c.height;
ctx.rect(0,0, canvasW, canvasH);
ctx.fillStyle = 'lightgrey';
ctx.fill();
//figure out the number of rows (columns depend on each row)
//Instead of using the number of items for this calculation, use the twice the sum
//of all of the importance values.

var valueToUse = importanceSum * 2;

var rows = Math.floor(Math.sqrt(itemNum)); //holds the number of rows
var numInRow = Math.floor(itemNum/rows); //holds the average number of items in a row
var extra = itemNum%rows; //holds the number of items that need to be added
var textArray = <?php echo json_encode($titles); ?>;
var currentItem = 0;
var currentRow = 0;




//iterates through each row
for(var i = 0; i < rows; i++)
{
		if(currentRow == rows - 1)//if it's 
		{
			for(var z = 0; z < numInRow + extra; z++)
			{
				var text = textArray[currentItem];
				var x = (canvasW/(numInRow + extra))*z;
				var y = (canvasH/rows) * currentRow;
				var width = (canvasW/(numInRow+extra));
				var height = (canvasH/rows);
				ctx.beginPath();
				ctx.rect(x, y, width, height);
				ctx.fillStyle = 'yellow';
				ctx.fill();
				ctx.lineWidth = 2;
				ctx.strokeStyle = 'black';
				ctx.stroke();
				ctx.fillStyle = "black";
				ctx.font = "16px Arial";
				ctx.fillText(text, x + 5, y + height/2);
				currentItem += 1;
			}
		}
		else
		{
			for(var y = 0; y < numInRow; y++)
			{
				var text = textArray[currentItem];
				var x2 = (canvasW/numInRow)*y;
				var y2 = (canvasH/rows)*currentRow;
				var width2 = canvasW/(numInRow);
				var height2 = (canvasH/rows);
				ctx.beginPath();
				ctx.rect(x2, y2, width2, height2);
				ctx.fillStyle = 'yellow';
				ctx.fill();
				ctx.lineWidth = 2;
				ctx.strokeStyle = 'black';
				ctx.stroke();
				ctx.strokeStyle = 'black';
				ctx.stroke();
				ctx.fillStyle = "black";
				ctx.font = "16px Arial";
				ctx.fillText(text, x2 + 5, y2 + height2/2);
				currentItem += 1;
			}
		}
		currentRow = currentRow + 1;
}


</script>

</body>
</html>