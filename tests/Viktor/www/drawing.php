<html>
<body>
<canvas id="myCanvas" width=100></canvas> <!-- This is a canvas, which I'll use
for drawing all sorts of stuff-->

<script type="text/javascript">
var c = document.getElementById("myCanvas"); //get the canvas element
var ctx = c.getContext("2d"); 
c.width  = window.innerWidth - 20;
c.height = window.innerHeight - 20;
var canvasW = c.width;
var canvasH = c.height;

//Draws stuff
	var x = 10;
	var y = 50;
	var width = 300;
	var height = 100;
	ctx.beginPath();
	ctx.rect(x, y, width, height);
	ctx.fillStyle = 'yellow';
	ctx.fill();
	ctx.lineWidth = 2;
	ctx.strokeStyle = 'black';
	ctx.stroke();
	ctx.fillStyle = "black";
	ctx.font = "16px Arial";
	ctx.fillText("Test", x + 5, y + height/2);

</script>

</body>
</html>