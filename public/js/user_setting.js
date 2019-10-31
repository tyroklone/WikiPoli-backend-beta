function toggleOn(obj) {
	obj.style.display="none";
	obj.nextElementSibling.style.display = "inline";
}

function toggleOff(obj) {
	obj.style.display= "none";
	obj.previousElementSibling.style.display ="inline";
}