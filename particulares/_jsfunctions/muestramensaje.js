/*
 * PROY/MOD:    SIROPA / VALIDACIONES JAVASCRIPT
 * ARCHIVO:     muestraMensaje.js
 * AUTOR:       Jorge P�rez Garc�a
 * AUTOR MOD:	Karla A. Fonseca M�rquez, Gustavo A. Cortez Aguilar
 * OBJETIVO:    Lista de Mensajes utilizados en el sistema
 *		La funci�n recibe el numero asociado a un mensaje
 *		y ejecuta un alert con el texto del mensaje requerido.
 */
function muestraMensaje(numMensaje)
{
	var arrMsg = new Array();

	/* MENSAJES GENERALES: RANGO 1- 50 */
	arrMsg[1] =  "El campo s�lo admite letras, por favor ingr�selo nuevamente.";
	arrMsg[2] =  "El campo s�lo admite letras y n�meros, por favor ingr�selo nuevamente.";
	arrMsg[3] =  "El a�o es incorrecto, por favor ingr�selo nuevamente. (Formato: aaaa)";
	arrMsg[4] =  "La hora es incorrecta, por favor ingr�sela nuevamente. Ejemplo: 09:00 � 20:30 (Formato: hh:mm)";
	arrMsg[5] =  "El campo s�lo admite n�meros enteros y decimales, por favor ingr�selo nuevamente.";
	arrMsg[6] =  "El campo s�lo admite n�meros enteros, por favor ingr�selo nuevamente.";
	arrMsg[7] =  "El campo es necesario, por favor ingr�selo.";
	arrMsg[8] =  "El n�mero de d�a no existe para este mes, por favor ingrese uno v�lido.";
	arrMsg[9] =  "La fecha inicial no puede ser igual ni mayor a la fecha final, por favor ingrese los datos nuevamente.";
	arrMsg[10] = "La direcci�n de correo electr�nico es incorrecta, por favor ingr�sela nuevamente.";
	arrMsg[11] = "El formato de fecha es incorrecto, por favor ingr�sela nuevamente. (Formato dd/mm/aaaa)";
	arrMsg[12] = "Es necesario introducir al menos un criterio de b�squeda, por favor ingr�selo.";
	arrMsg[13] = "Se capturaron caracteres no v�lidos en este campo, favor de verificarlo.";
	arrMsg[14] = "Excedi� el l�mite de caracteres permitidos para este campo.";
	arrMsg[15] = "Este campo no admite espacios en blanco, favor de verificarlo.";

	arrMsg[16] = "Es necesario introducir al menos un dato, por favor ingr�selo.";
	arrMsg[17] = "No se puede seleccionar dos veces la misma opci�n, favor de verificarlo.";
	arrMsg[18] = "Debe seleccionar por lo menos una especie, favor de corregirlo.";
	arrMsg[19] = "Es necesario que antes escoja una opci�n.";
	arrMsg[20] = "El n�mero de folio no corresponde al tipo de aviso, favor de corregirlo.";	
	arrMsg[21] = "Todas las casillas v�lidas han sido llenadas.";
	arrMsg[22] = "La fecha inicial no puede ser mayor a la fecha final, favor de corregirlo.";
	arrMsg[23] = "El valor del a�o es incorrecto, por favor ingr�selo nuevamente. (1930 - 2100)";
	arrMsg[24] = "El campo s�lo admite n�meros y guiones (-), por favor ingr�selo nuevamente.";
	arrMsg[25] = "El tel�fono o fax es incorrecto, por favor ingr�selo nuevamente. \n(El valor no debe contener separadores y debe ser mayor a 4 d�gitos)";
	arrMsg[26] = "El d�a es incorrecto, por favor ingr�selo nuevamente.";
	arrMsg[27] = "El mes es incorrecto, por favor ingr�selo nuevamente.";
	arrMsg[28] = "El valor debe ser mayor a 0 (cero), por favor ingr�selo nuevamente.";

	/* MENSAJES ESPECIFICOS DE M�DULOS: KAR y NIDIA DEL 50 AL 75*/
	arrMsg[50] = "La fecha de la votaci�n debe ser mayor a la fecha de hoy, por favor ingrese los datos nuevamente.";
	arrMsg[51] = "Para usuarios generales es necesario indicar la Votaci�n, por favor seleccione una opci�n.";
	arrMsg[52] = "La contrase�a no coincide con el dato de confirmaci�n, por favor ingr�selo nuevamente.";
	arrMsg[53] = "El Proceso Electoral seleccionado tiene un estatus diferente al de configuraci�n (No ser� posible agregarle una Entidad).";
	arrMsg[54] = "El n�mero de votaciones no pueden ser menor al actual, por favor ingr�selo nuevamente.";
	arrMsg[55] = "La hora de inicio debe ser menor a la hora de t�rmino, por favor ingrese los datos nuevamente.";
	arrMsg[56] = "La longitud m�nima debe ser menor a la longitud m�xima, por favor ingrese los datos nuevamente.";
	arrMsg[57] = "El nombre corto del Proceso Electoral ya existe, por favor ingr�selo nuevamente.";
	arrMsg[58] = "El nombre corto de la Entidad ya existe, por favor ingr�selo nuevamente.";
	arrMsg[59] = "El nombre corto de la votaci�n ya existe, por favor ingr�selo nuevamente.";
	arrMsg[60] = "La direcci�n de la p�gina web es incorrecta. Por favor, verifique que la direcci�n comience con http://, https:// o ftp://. Estas deber�n proporcionarse en min�sculas";
	arrMsg[61] = "La fecha de votaci�n debe ser hasta un a�o posterior a la fecha actual, por favor ingrese los datos nuevamente.";
	arrMsg[62] = "El nombre de la base de datos ya existe, por favor ingr�selo nuevamente.";
	arrMsg[63] = "La ruta del archivo es incorrecta, por favor b�rrela antes de ingr�sarla nuevamente. Recuerde que s�lo acepta archivos con extensi�n txt (aviso legal, formulas, padrones) y png o jpg (im�genes).";




	alert(arrMsg[numMensaje]);
}
