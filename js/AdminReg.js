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
        setTimeout(image, 2500);
    }
 
 var y = 0;
 image1();
function image1() {
var j;
var z = document.getElementsByClassName("Slide2");
for (i = 0; j < z.length; i++) {
                y[j].style.display = "none";
            }
            y++;
            if (y > z.length) { y = 1 }
            z[y - 1].style.display = "block";
            setTimeout(image1, 2500);
        }  



function correctPassword(){
	if(document.getElementById("pwd").value!=document.getElementById("cnfmpwd").value){
	alert("Password are mismatched!!!");
	return false;}
	else{
	alert("Password are matched");
	return true;}
}

function tickButton(){
	if(document.getElementById("policy").checked){
		document.getElementById("submit1").disabled=false;
	}
	else{
		document.getElementById("submit1").disabled=true;	
	}
}	
