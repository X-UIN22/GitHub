function rumus_dom()
{
	var template = document.formraga.template.value;
	if(template=="template1"){
	document.getElementById("tulisan").style.fontFamily="Arial";
	document.getElementById("tulisan").style.fontSize="12";
	document.getElementById("tulisan").style.color="gray";
}

	else if(template=="template2"){
	document.getElementById("tulisan").style.fontFamily="Calibri";
	document.getElementById("tulisan").style.fontSize="13";
	document.getElementById("tulisan").style.color="green";
}

	else if(template=="template3"){

	document.getElementById("tulisan").style.fontFamily="Georgia";
	document.getElementById("tulisan").style.fontSize="14";
	document.getElementById("tulisan").style.color="red";
}

	else if(template=="template4"){
	document.getElementById("tulisan").style.fontFamily="Tahoma";
	document.getElementById("tulisan").style.fontSize="15";
	document.getElementById("tulisan").style.color="blue";

}
	else if(template=="template5"){
	document.getElementById("tulisan").style.fontFamily="Verdana";
	document.getElementById("tulisan").style.fontSize="16";
	document.getElementById("tulisan").style.color="yellow";
}


}