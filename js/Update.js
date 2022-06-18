var x = 0;
image();
function image() {
var i;
var y = document.getElementsByClassName("Slide1");
for (i = 0; i < y.length; i++) {
            y[i].style.display = "none";
        }
        x++;
        if (x > y.length) { x = 1 }
        y[x - 1].style.display = "block";
        setTimeout(image, 4500);
    }