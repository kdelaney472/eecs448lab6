function validate(){
	let pw1 = document.getElementById('pw0').value;
	let pw2 = document.getElementById('pw1').value;
	if ( pw1 != pw2 ){
		alert("Passwords do not match. Please try again.");}
	else if( (pw1.length<8) || (pw2.length<8) ){
		alert("Password must be at least 8 characters long. Please try again.");}
	else{
		alert("Password changed successfully.");}
}


