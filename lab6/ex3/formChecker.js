window.onload = function(){
	document.getElementById("sForm").addEventListener("submit",
		function validate(e){
			let i1 = document.getElementById("forest").value;
			let i2 = document.getElementById("cliff").value;
			let i3 = document.getElementById("serene").value;
			let u = document.getElementById("username").value;
			let pw = document.getElementById("pw").value;
			let sh = [
				document.getElementById("free").checked,
				document.getElementById("night").checked,
				document.getElementById("3day").checked	
			];
			let emailForm = /^\w+@[a-zA-Z_]+?\.[a-zA-Z]{2,3}$/; //using regex for checking that username is an email
			
			let eTally = 0; //tally of errors so that all errors can print in one alert
			let errors = "Invalid inputs:\n\n";
			
			
			if(i1.length==0 || i2.length==0 || i3.length==0){
				eTally++;
				errors+="- Quantities cannot be blank.\n";
			}
			
			if(i1<0 || i2<0 || i3<0){
				eTally++;
				errors+="- Quantities cannot be negative.\n";
			}
			
			if(!u.match(emailForm)){
				eTally++;
				errors+="- Username must be in email format.\n";
			}
			
			if(pw.length==0){
				eTally++;
				errors+="- Password field cannot be blank.\n";
			}			
			
			if(!(sh[0] || sh[1] || sh[2])){
				eTally++;
				errors+="- Shipping option must be selected.\n";
			}
				
			
			if(eTally!=0){
				e.preventDefault();
				alert(errors+="\n\nPlease try again.");
			}			
		}
	);
}