/*
 * PROY/MOD:	SIROPA / VALIDACIONES JAVASCRIPT
 * ARCHIVO:	esAlfa.js
 * AUTOR ORIG:  Juan Carlos Molina
 * AUTOR MOD:	Karla A. Fonseca Márquez
 * OBJETIVO:	Solamente se pueden introducir letras, letras acentuadas, 
		y los siguientes símbolos: _ . , - así como espacios en blanco
 * FECHA ACT:	26/02/2004
 * INVOCA A:	revisarExpReg()
 */

function esAlfa(obj)
{
	var strValue = obj.value;
	var regExAlfa = /^([a-zA-Z_]|\s|[ÁÉÍÚÓÑáéíóúñÑ.,-\/])+$/; // regular expression alfabéticos

	if (revisarExpReg(strValue, regExAlfa, 1)){
		return true;
	}
	else{
		obj.value = "";
		obj.focus();
		return false;
	}
}
