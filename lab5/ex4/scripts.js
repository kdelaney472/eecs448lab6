

function change(){
	let bo_r = document.getElementById('bo_r').value;
	let bo_g = document.getElementById('bo_g').value;
	let bo_b = document.getElementById('bo_b').value;
	let bo_wth = document.getElementById('bo_wth').value;
	let bg_r = document.getElementById('bg_r').value;
	let bg_g = document.getElementById('bg_g').value;
	let bg_b = document.getElementById('bg_b').value;
	
	let dest = document.getElementById('e4text');
	dest.style.borderColor = "rgb(" + bo_r + ", " + bo_g + ", " + bo_b + ")";
	dest.style.borderWidth = bo_wth;
	dest.style.backgroundColor = "rgb(" + bg_r + ", " + bg_g + ", " + bg_b + ")";
}
