	
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
