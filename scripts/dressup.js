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

function changeImage(ev, imageId) {
	ev.preventDefault()
	
	document.getElementById(imageId).style.visibility = "visible"
    
	/* THIS ONLY WORKS IN FIREFOX */
	var data = ev.dataTransfer.getData('text')
	document.getElementById(data).style.display = "none"
}