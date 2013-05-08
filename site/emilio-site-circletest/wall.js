window.onload = function () {

        var height = 500;
        var width = 500;
        var circleRadius = 50;
        var click = .1;
        //var clicks = new Array()
       // circle[1] = 

        //var circleRadius = setInterval(function(){circleRadiusOriginal - .01}, 3000);

        var R = Raphael(0, 0, "100%", "100%");
        //creating the circles all same size
        var circle1 = R.circle(100, 100, circleRadius+click).attr({
            fill: "hsb(0, 1, 1)",
            stroke: '#3b4449', 
            'stroke-width': 5, 
            'stroke-linejoin': 'round', 
            opacity: 1
            });

        var circle2 = R.circle(210, 100, circleRadius+click).attr({
            fill: "hsb(.3, 1, 1)",
            stroke: '#3b4449', 
            'stroke-width': 5, 
            'stroke-linejoin': 'round', 
            opacity: 1
        });

        var b = R.circle(320, 100, circleRadius+click).attr({
            fill: "hsb(.6, 1, 1)", 
            stroke: '#3b4449', 
            'stroke-width': 5, 
            'stroke-linejoin': 'round', 
            opacity: 1,
        });

        var p = R.circle(430, 100, circleRadius+click).attr({
            fill: "hsb(.8, 1, 1)", 
            stroke: '#3b4449', 
            'stroke-width': 5, 
            'stroke-linejoin': 'round', 
            opacity: 1
        });
        
        //Start, Move and Up all work to move any elemeny

        //The moment you click on the element
        var start = function () {
            
            this.ox = this.attr("cx");//marks the present location on the x axis as the variable cx
            this.oy = this.attr("cy");// marks the present location on the y axis as the variable cy
            //this.animate({r: 70, opacity: 1}, 500, ">");
            var starttime = new Date().getMilliseconds();
        };

        //What the element does when being clicked on
        var move = function (dx, dy) {
            this.attr({cx: this.ox + dx, cy: this.oy + dy}); //classifies cx and cy by saying it is at the moved point
        };

        //What element does after clicking is done
        var up = function () {
            //this.animate({r: 100, opacity: 1}, 500, ">");
            //click = click + .1;
            var endtime = new Date().getMilliseconds();
        };

        var dragvclick = function(endtime, starttime) {
                     
            var time = endtime - starttime;

            //if (time < 500){
                this.animate({r: 100, opacity: 1}, 500, ">");
                click = click + .1;
                alert("timer "+ time);
           // };

        }

        //this function adds the event of shrinking the circle and is implemented below at dblclick
        var dbclick = function() {
            this.animate({r: circleRadius+click, opacity: 1}, 500, ">");
        };

        //Allows for collisoions
        var collision = function(cx, cy) {
            
        };
        //sets elements that can be manipulated by the following functions up move and start
        R.set(circle1, circle2, b, p).drag(move, start, dragvclick);
       
       //allows the circle to shrink once clicked twice
        R.set(circle2, circle1, b, p).dblclick(dbclick);

        };
