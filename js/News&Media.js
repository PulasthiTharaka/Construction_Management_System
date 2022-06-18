var j = 0;
var txt1 = 'This SLCA(Sri Lanka Constructors  Association approved condominium project has come to life as a joint venture between Green Garden Residencies (Pvt) Ltd and Evergreen  Engineering, the leading construction company in the country.';
var speed = 50;

function type1() {
    document.getElementById("onclick3").style.display='none';
  if (j < txt1.length) {
    document.getElementById("p1").innerHTML += txt1.charAt(j);
    j++;
    setTimeout(type1, speed);
  }
}

var k = 0;
var txt2 = 'Construction teams worked on surface regulation, drainage and shoulder construction, culvert construction repairs or extensions, bridge construction, and repairs to bridges and other structures.';
var speed = 50;

function type2() {
    document.getElementById("onclick4").style.display='none';
  if (k < txt2.length) {
    document.getElementById("p2").innerHTML += txt2.charAt(k);
    k++;
    setTimeout(type2, speed);
  }
}

var l = 0;
var txt = 'Kaluthara,at the National Construction Association Awards ceremony held on 13 th November at Sea Coat Hotel Chillaw.';
var speed = 50;

function type3() {
    document.getElementById("onclick5").style.display='none';
  if (l < txt.length) {
    document.getElementById("p3").innerHTML += txt.charAt(l);
    l++;
    setTimeout(type3, speed);
  }
}


var x = 0;
    image1();
    function image1() {
    var i;
    var y = document.getElementsByClassName("Slide1");
    for (i = 0; i < y.length; i++) {
                y[i].style.display = "none";
            }
            x++;
            if (x > y.length) { x = 1 }
            y[x - 1].style.display = "block";
            setTimeout(image1, 2500);
        }

        
    var x = 0;
    image2();
    function image2() {
    var i;
    var y = document.getElementsByClassName("Slide2");
    for (i = 0; i < y.length; i++) {
                y[i].style.display = "none";
            }
            x++;
            if (x > y.length) { x = 1 }
            y[x - 1].style.display = "block";
            setTimeout(image2, 2500);
        }