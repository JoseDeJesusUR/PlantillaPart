/*
 * PROY/MOD:	SIROPA / VALIDACIONES JAVASCRIPT
 * ARCHIVO:	esNumero.js
 * AUTOR ORIG:  Juan Carlos Molina 
 * AUTOR MOD:	Karla A. Fonseca Márquez
 * OBJETIVO:	Solamente se pueden introducir números enteros positivos (sin puntos ni comas
		ni espacios en blanco).
		Si acepta el valor 0.
 * FECHA ACT:	26/02/2004
 * INVOCA A:    revisarExpReg()
 */

function esNumero(obj)
{
	var strValue = obj.value;
	var regExNumPosInt = /^(\d)+$/; // regular expression numericos

	if (revisarExpReg(strValue, regExNumPosInt, "6")){
		return true;
	}
	else{
		obj.value = "";
		obj.focus();
		return false;
	}
	
}
