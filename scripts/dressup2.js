function allowDrop(ev) {
	ev.preventDefault()
}
function drag(ev) {
	ev.dataTransfer.setData('text', ev.target.id)

}
function drop(ev) {
	ev.preventDefault()
	var data = ev.dataTransfer.getData('text')
	ev.target.removeChild(document.getElementById(data))
}

function changeImage(ev, imageUrl) {
	ev.preventDefault()
	
	var img = document.createElement("img")
	img.src = imageUrl

	var src = document.getElementById("frog");
	src.appendChild(img);
	
	img.style.position = "absolute"
	img.style.bottom = "5px"
	
	/* THIS ONLY WORKS IN FIREFOX */
	var data = ev.dataTransfer.getData('text')
	document.getElementById(data).style.display = "none"
}

