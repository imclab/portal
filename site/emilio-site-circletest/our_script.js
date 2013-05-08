var range = 1;//how long the object is set t be on the wall x date to y date
var clicks = 1;//how manytimes the circle has been clicked
var time = 1;// how long the object has been on the wall
var AR = 1;//how important the admistater ranked it


window.onload = function() {

    var paper = new Raphael(document.getElementById('canvas_container'), 500, 500);//sets canvas size
    var circle = paper.circle(100, 100, 80);//creates a circle (x location, y location, radius in pixles)
    var circle2 = paper.circle(250, 250, 100);//creates a circle (x location, y location, radius in pixles)

    //The code below sets attributes to the elements/variables we created
    circle.attr(
    {
    		gradient: '90-#fff-#64a0c1', // Determins the inner color
            stroke: '#3b4449', //determines the outline color
            'stroke-width': 5, //determines the lenght of the outline thickness  
            'stroke-linejoin': 'round', 
            //rotation: -90,//rotates the shape, not nessecary since its a circle but good to have for notes.
        }
        ); 

    circle.animate({rotation: 360}, 2000, 'bounce');//Calls the circle, tells it to animate. (what function, how long, final state)

}  

//The code below needs to be place back in the brackets if it comes out of retiremnt.

//The line below is a test of using a path emulater to move the mouse and create ashape based on the mouses predetermined path.
//var tetronimo = paper.path("M 250 250 l 0 -50 l -50 0 l 0 -50 l -50 0 l 0 50 l -50 0 l 0 50 z");  //M dictates where mouse goes, l starts the paper point z ends the mouses movement
    

//This code below shows the manipulation that can be brought to the elements. Takes a cirlce moves it to the right and shrinks it.
/*
    for(var i = 0; i < 5; i+=1) {  
        var multiplier = i*5;  
        paper.circle(250 + (2*multiplier), 100 + multiplier, 50 - multiplier)  
    }  
    

    window.onload = addListeners();

    function addListeners(){
    	document.getElementById('dxy').addEventListener('mousedown', mouseDown, false);
    	window.addEventListener('mouseup', mouseUp, false);
    }

    function mouseUp(){
    	window.removeEventListener('mousemove', divMove, true);
    }

    function mouseDown(e){
    	window.addEventListener('mousemove', divMove, true);
    }

    function divMove(e){
    	var div = document.getElementById('dxy');
    	div.style.position = 'absolute';
    	div.style.top = e.clientY + 'px';
    	div.style.left = e.clientX + 'px';
    }​
*/