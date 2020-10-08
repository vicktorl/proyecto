/** Esta funcion toma la imagen de fondo */ 
function fondo(id_img){
	/**
	*@param{image} id_img - la imagen que esta de fondo
	*/
	return document.getElementById(id_img);
}
function setSrc(id_img, src){
	/**
	*@param{image} id_img - la imagen que esta de fondo
	*@param{image} src - la imagen que selecciono el usuario
	*/
	var element = fondo(id_img);
	element.src = src;                             		
}
function cuerpo(valor){
	/**
	*@param{int} valor - se le asigna un valor a la madera
	*/
	document.getElementById('lbResultado').innerHTML = valor;

}
function clavijero(valor){
 	/**
	*@param{int} valor - se le asigna un valor al clavijero
	*/
	document.getElementById('lbResultado2').innerHTML = valor;

}
exports.addTest=function suma(value1, value2)
{
	try
	{
		if (isNaN(value1)||isNaN(value2)) {
			throw "no haz seleccionado un valor valido";
		}
		var value1f = parseInt(value1, 10);
		var value2f = parseInt(value2, 10);
		var result = value1f + value2f;
	}
	catch(error)
	{
		alert("Error:"+error);
	}

	return result;
}