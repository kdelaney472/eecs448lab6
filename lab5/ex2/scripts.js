let counter = 0; //used to switch between images

const pic = [
	"1.jpg", 
	"2.jfif", 
	"3.jpg", 
	"4.jpg", 
	"5.jfif"]; //array of all pictures
	
let size = pic.length;

function prev(){
	counter--; //decrements the counter to go to the previous image in our array
	if (counter==-1)
		counter=size-1; //when counter goes negative from hitting prev button too much, the counter jumps to the last index of the array which is the other end of it, so this keeps the loop functional
	document.getElementById('myImgId').src = pic[counter%(size)]; //overwrites the src attribute of the img tag with the picture with name from pic array. 
}

function next(){
	counter++; //increments the counter to go to the next pic
	document.getElementById('myImgId').src = pic[counter%(size)]; //counter mod size lets the counter go up for an infinite number of next() presses, because it will convert it to the finite number of array indices to select one of the images from the array
}