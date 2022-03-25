/*
 * PROY/MOD:    SIROPA / VALIDACIONES JAVASCRIPT
 * ARCHIVO:     muestraMensaje.js
 * AUTOR:       Jorge Pérez García
 * AUTOR MOD:	Karla A. Fonseca Márquez, Gustavo A. Cortez Aguilar
 * OBJETIVO:    Lista de Mensajes utilizados en el sistema
 *		La función recibe el numero asociado a un mensaje
 *		y ejecuta un alert con el texto del mensaje requerido.
 */
function muestraMensaje(numMensaje)
{
	var arrMsg = new Array();

	/* MENSAJES GENERALES: RANGO 1- 50 */
	arrMsg[1] =  "El campo sólo admite letras, por favor ingréselo nuevamente.";
	arrMsg[2] =  "El campo sólo admite letras y números, por favor ingréselo nuevamente.";
	arrMsg[3] =  "El año es incorrecto, por favor ingréselo nuevamente. (Formato: aaaa)";
	arrMsg[4] =  "La hora es incorrecta, por favor ingrésela nuevamente. Ejemplo: 09:00 ó 20:30 (Formato: hh:mm)";
	arrMsg[5] =  "El campo sólo admite números enteros y decimales, por favor ingréselo nuevamente.";
	arrMsg[6] =  "El campo sólo admite números enteros, por favor ingréselo nuevamente.";
	arrMsg[7] =  "El campo es necesario, por favor ingréselo.";
	arrMsg[8] =  "El número de día no existe para este mes, por favor ingrese uno válido.";
	arrMsg[9] =  "La fecha inicial no puede ser igual ni mayor a la fecha final, por favor ingrese los datos nuevamente.";
	arrMsg[10] = "La dirección de correo electrónico es incorrecta, por favor ingrésela nuevamente.";
	arrMsg[11] = "El formato de fecha es incorrecto, por favor ingrésela nuevamente. (Formato dd/mm/aaaa)";
	arrMsg[12] = "Es necesario introducir al menos un criterio de búsqueda, por favor ingréselo.";
	arrMsg[13] = "Se capturaron caracteres no válidos en este campo, favor de verificarlo.";
	arrMsg[14] = "Excedió el límite de caracteres permitidos para este campo.";
	arrMsg[15] = "Este campo no admite espacios en blanco, favor de verificarlo.";

	arrMsg[16] = "Es necesario introducir al menos un dato, por favor ingréselo.";
	arrMsg[17] = "No se puede seleccionar dos veces la misma opción, favor de verificarlo.";
	arrMsg[18] = "Debe seleccionar por lo menos una especie, favor de corregirlo.";
	arrMsg[19] = "Es necesario que antes escoja una opción.";
	arrMsg[20] = "El número de folio no corresponde al tipo de aviso, favor de corregirlo.";	
	arrMsg[21] = "Todas las casillas válidas han sido llenadas.";
	arrMsg[22] = "La fecha inicial no puede ser mayor a la fecha final, favor de corregirlo.";
	arrMsg[23] = "El valor del año es incorrecto, por favor ingréselo nuevamente. (1930 - 2100)";
	arrMsg[24] = "El campo sólo admite números y guiones (-), por favor ingréselo nuevamente.";
	arrMsg[25] = "El teléfono o fax es incorrecto, por favor ingréselo nuevamente. \n(El valor no debe contener separadores y debe ser mayor a 4 dígitos)";
	arrMsg[26] = "El día es incorrecto, por favor ingréselo nuevamente.";
	arrMsg[27] = "El mes es incorrecto, por favor ingréselo nuevamente.";
	arrMsg[28] = "El valor debe ser mayor a 0 (cero), por favor ingréselo nuevamente.";

	/* MENSAJES ESPECIFICOS DE MÓDULOS: KAR y NIDIA DEL 50 AL 75*/
	arrMsg[50] = "La fecha de la votación debe ser mayor a la fecha de hoy, por favor ingrese los datos nuevamente.";
	arrMsg[51] = "Para usuarios generales es necesario indicar la Votación, por favor seleccione una opción.";
	arrMsg[52] = "La contraseña no coincide con el dato de confirmación, por favor ingréselo nuevamente.";
	arrMsg[53] = "El Proceso Electoral seleccionado tiene un estatus diferente al de configuración (No será posible agregarle una Entidad).";
	arrMsg[54] = "El número de votaciones no pueden ser menor al actual, por favor ingréselo nuevamente.";
	arrMsg[55] = "La hora de inicio debe ser menor a la hora de término, por favor ingrese los datos nuevamente.";
	arrMsg[56] = "La longitud mínima debe ser menor a la longitud máxima, por favor ingrese los datos nuevamente.";
	arrMsg[57] = "El nombre corto del Proceso Electoral ya existe, por favor ingréselo nuevamente.";
	arrMsg[58] = "El nombre corto de la Entidad ya existe, por favor ingréselo nuevamente.";
	arrMsg[59] = "El nombre corto de la votación ya existe, por favor ingréselo nuevamente.";
	arrMsg[60] = "La dirección de la página web es incorrecta. Por favor, verifique que la dirección comience con http://, https:// o ftp://. Estas deberán proporcionarse en minúsculas";
	arrMsg[61] = "La fecha de votación debe ser hasta un año posterior a la fecha actual, por favor ingrese los datos nuevamente.";
	arrMsg[62] = "El nombre de la base de datos ya existe, por favor ingréselo nuevamente.";
	arrMsg[63] = "La ruta del archivo es incorrecta, por favor bórrela antes de ingrésarla nuevamente. Recuerde que sólo acepta archivos con extensión txt (aviso legal, formulas, padrones) y png o jpg (imágenes).";




	alert(arrMsg[numMensaje]);
}
