window.onload = function () {
 var height = 500;
 var width = 500;
 var circleSize = 50;
 var R = Raphael("canvas", height, width);

  // Build ircle

  var circle = R.circle((width / 2) - (circleSize/2), 0, circleSize).attr({
    fill: "hsb(.8, 1, 1)",
    stroke: "none",
    opacity: 1,
    cursor: "move"
  });
  var circle2 = R.circle((width / 2) - (circleSize/2), 0, circleSize).attr({
    fill: "hsb(.8, 1, 1)",
    stroke: "none",
    opacity: 1,
    cursor: "move"
  });

  // start, move, and end are the drag functions
  var start = function () {
    // storing original coordinates
    this.ox = this.attr("x");
    this.oy = this.attr("y");
    this.attr({ opacity: 1 });
  };
  var move = function (dx, dy) {
    // keeps circle in boarder
    var rangeX = Math.max(0, this.ox + dx)
    var rangeY = Math.max(0, this.oy + dy)
    var rangeX = Math.min(width - circleSize, rangeX)
    var rangeY = Math.min(height - circleSize, rangeY)

    // Check collison                                                           
    var collide = circle_collision(circle2.attr("x"), circle2.attr("y"), circleSize, circle1.attr("x"), circle1.attr("y"), circleSize);
      if (collide == "top") {
        rangeY = Math.min(circle1.attr("y"), this.oy + dy);
      } else if (collide == "bottom"){
        rangeY = Math.max(circle1.attr("y"), this.oy + dy);
      } else if (collide == "left"){
        rangeX = Math.min(circle1.attr("x"), this.ox + dx);
      } else if (collide == "right"){
        rangeX = Math.max(circle1.attr("x"), this.ox + dx);
      }

    this.attr({ x: rangeX, y: rangeY });
  };

  var end = function () {
    this.attr({ opacity: .5 });
  };

    // make circle Dragable
    circle1.drag(move, start, end);
};


