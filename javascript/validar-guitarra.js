
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
  	var precio=madera;
  	document.getElementById('lbResultado').innerHTML = valor;

 }
 function clavijero(valor){
 	/**
	*@param{int} valor - se le asigna un valor al clavijero
	*/
   var precio=madera;
   document.getElementById('lbResultado2').innerHTML = valor;
 
 }
    var madera=400;
    var madera2=399;
    var madera3=200;
    var clavijero1=599;
    var clavijero2=700;
    var clavijero3=2500;