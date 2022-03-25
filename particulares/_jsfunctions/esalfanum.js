/*
 * PROY/MOD:	SIROPA / VALIDACIONES JAVASCRIPT
 * ARCHIVO:	esAlfaNum.js
 * AUTOR ORIG:  Juan Carlos Molina 
 * AUTOR MOD:	Karla A. Fonseca Márquez
 * OBJETIVO:	Solamente se pueden introducir números, letras, letras acentuadas, 
		y los siguientes símbolos: #ºª.,-/, así como espacios en blanco.
 * FECHA ACT:	26/02/2004
 * INVOCA A:    revisarExpReg()
 */

function esAlfaNum(obj){
		
	var strValue = obj.value;
	var regExAlfaNum = /^(\w|\d|[ÁÉÍÚÓÑáéíóúñ#ºª()@:.,-\/ ])+$/; // regular expression alfanumericos

	if (revisarExpReg(strValue, regExAlfaNum, 2)){
		return true;
	}
	else{
		obj.value = "";
		obj.focus();
		return false;
	}
	
}
