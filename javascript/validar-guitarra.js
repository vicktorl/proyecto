
var madera1=400;
var madera2=3499;
var madera3=200;
var clavijero1=599;
var clavijero2=700;
var clavijero3=2500;
var tipomadera1='fresno';
var tipomadera2='fresno swamp';
var tipomadera3='aliso';
var tipoclavijero1='fender';
var tipoclavijero2='guipson';
var tipoclavijero3='jackson';
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
function suma(value1, value2){
	var value1f = parseInt(value1, 10);
	var value2f = parseInt(value2, 10);
	var result = value1f + value2f;
	return result;
}
function tipoMadera(valor){
document.getElementById('madera').innerHTML = valor;
	
}
function tipoClavijero(valor){
document.getElementById('clavijeros').innerHTML = valor;
	
}

