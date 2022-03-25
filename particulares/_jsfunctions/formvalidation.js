// VARIABLES GLOBALES
var msg = new Array();
msg[0] = "Este campo es necesario, por favor captúrelo.";
msg[1] = "Este campo no admite espacios en blanco.";
msg[2] = "Por favor introduzca una dirección de correo electrónico correcta.";
msg[3] = "Excedió el límite de caracteres permitidos para este campo.";
msg[4] = "Este campo sólo admite números, favor de corregirlo.";
msg[5] = "Este campo sólo admite letras, favor de corregirlo.";
msg[6] = "Este campo no admite caracteres especiales, favor de corregirlo.";
msg[7] = "Por favor introduzca un número de teléfono correcto.";
msg[8] = "El formato de fecha es incorrecto, favor de corregirlo.";
msg[9] = "El número de días no corresponde al mes, favor de corregirlo";
msg[10] = "El año es incorrecto, favor de corregirlo.";
msg[11] = "La fecha inicial no puede ser igual ni mayor a la fecha final.";
msg[12] = "La contraseña no coincide con el dato de confirmación, favor de corregirlo.";
msg[13] = "Debe seleccionar una opción.";
msg[14] = "Para clientes en México se debe seleccionar un estado";
msg[15] = "Debe introducir al menos un dato";
msg[16] = "La dirección de la página web es incorrecta. Verifique que la dirección comience con http://, https:// o ftp://";
msg[17] = "El límite inferior no puede ser igual ni mayor al limite superior";
msg[18] = "El Registro Federal de Contribuyentes (RFC) es incorrecto, favor de corregirlo";
msg[19] = "La Clave Única de Registro de Población (CURP) es incorrecta, favor de corregirla";
msg[20] = "El mes inicial no puede ser mayor al mes final.";
msg[21] = "Los años deben ser diferentes. Seleccione otro año.";
msg[22] = "El primer año debe ser mayor al segundo año, favor de corregir.";

var regExSpaces = /^\s+$/; //regular expression espacios en blanco
var regExPosInt = /^\s*\d+\s*$/; //regular expression enteros positivos
var regExNegInt = /^(\-|[0-9])[0-9]+$/; // regular expression enteros negativos
var regExPosFloat = /(^\s*\d*\.?\d*\s*$)|(^\s*\d*\.\d*\s*$)/; // regular expression flotantes positivos
var regExNegFloat = /(^-?\d*\.?\d*[1-9]+\d*$)|(^[1-9]+\d*\.\d*$)/; // regular expression flotantes negativos
//var regExAlfa = /^\w+$/; // regular expression caracteres
var regExAlfa = /^(\D|\s)+$/; // regular expression caracteres
var regExAlfaNum = /^(\w|\d)+$/; // regular expression alfanumericos
var regExPhone = /^[0-9]+(-?|[0-9]+)*[0-9]+$/; // regular expression phone number
var regExEmail = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z0-9]+$/; //regular expression email
var regExDate = /^\d{1,2}(\/)\d{1,2}\1\d{4}$/; // regular expression fechas dd/mm/aaaa
var regEx100 = /^(\w|\d|\s|\.|\-){0,100}$/; // regular expression limite de 100 caracteres
var regEx200 = /^([^']){0,200}$/; // regular expression limite de 200 caracteres
var regEx255 = /^([^']){0,255}$/; // regular expression limite de 255 caracteres
var regExUrl = /^(http|https|ftp)\:\/\/((([a-z_0-9\-]+)+(([\:]?)+([a-z_0-9\-]+))?)(\@+)?)?(((((([0-1])?([0-9])?[0-9])|(2[0-4][0-9])|(2[0-5][0-5])))\.(((([0-1])?([0-9])?[0-9])|(2[0-4][0-9])|(2[0-5][0-5])))\.(((([0-1])?([0-9])?[0-9])|(2[0-4][0-9])|(2[0-5][0-5])))\.(((([0-1])?([0-9])?[0-9])|(2[0-4][0-9])|(2[0-5][0-5]))))|((([a-z0-9\-])+\.)+([a-z]{2}\.[a-z]{2}|[a-z]{2,4})))(([\:])(([1-9]{1}[0-9]{1,3})|([1-5]{1}[0-9]{2,4})|(6[0-5]{2}[0-3][0-6])))?([a-zA-Z0-9_\.\/]*)?$/;
var regExRfc = /^([a-zA-Z]{3,4})(\d{6})(\w{0,3})$/; // regex RFC (con o sin homoclave), para personas fisicas o morales
var regExCurp = /^([a-zA-Z]{4})(\d{6})([a-zA-Z]{6})(\w{2})$/; // regex CURP

//FUNCIONES
function isEmpty(strValue, strAlert)
{
	if (strValue == '' || regExSpaces.test(strValue)) 
	{
		alert (strAlert);
		return true;
	}

	return false;
}

function checkRegExp(strValue, regExp, strAlert)
{
	if (strValue != '') //la validacion de campos vacios se debera hacer aparte
	{
		if (!regExp.test(strValue))
		{
			alert (strAlert);
			return true;
		}
	}
		return false;
}

function checkDate(strValue, regExp){
	if (strValue != '') //la validacion de campos vacios se debera hacer aparte
	{
		if (!regExp.test(strValue)){
			alert (msg[8]);
			return true;
		}
		else{
			var dia  = strValue.substring(0,2);
			var mes = strValue.substring(3,5);
			var anio = strValue.substring(6,10);

			//31: Ene, Mar, May Jul Ago Oct DIc
			//30: Abr Jun Sep Nov

	        	if (mes!=2){
	                	if ((mes==4 || mes==6 || mes==9 || mes==11) && dia > 30){ //Meses con 30 dias
        	                	alert(msg[9]);
	                	        return true;
        	        	}
				else{
					if(dia > 31){ //Meses con 31 dias
						alert(msg[9]);
                        			return true;
					}
				}
        		}
		        else{
        		        if (anio%4==0){
					if(dia>29){
                    				alert(msg[9]);
	                    			return true;
					}
        		        }
                		else{
                			if (dia>28){
                    				alert(msg[9]);
	                        		return true;
        	            		}
                		}
        		}
			
			if (anio < 1900 || anio > 2079){
				alert(msg[10]);
				return true;
				}
		} // primer else
	} // if vacio
}

function checkPassword(strPass1, strPass2)
{
	if(strPass1!=strPass2){
		alert(msg[12]);
		return true;
	}
}

function checkDateRange(strDate1, strDate2)
{
	var arrDate1 = new Array();
	var arrDate2 = new Array();

	arrDate1 = strDate1.split("/");
	arrDate2 = strDate2.split("/");

	date1 = new Date (arrDate1[2], arrDate1[1]-1, arrDate1[0]);
    	date2 = new Date (arrDate2[2], arrDate2[1]-1, arrDate2[0])
	
	if (date1.valueOf()>=date2.valueOf()){
    		alert(msg[11]);
        	return true;
    	}	
}

function checkNumRange(intNum1, intNum2)
{
	if (intNum1 >= intNum2){
		alert(msg[17]);
		return true;
	}
}

function checkNumRange2(intNum1, intNum2)
{
	if (intNum1 > intNum2){
		alert(msg[20]);
		return true;
	}
}

function checkNumDif(intNum1, intNum2)
{
	if (intNum1 == intNum2){
		alert(msg[21]);
		return true;
	}
	if (intNum1 < intNum2){
		alert(msg[22]);
		return true;
	}
}

function checkSelectCombo(strValue, strAlert)
{
	if (strValue == 0 || strValue == 'NULL' || strValue == ''){
		if (strAlert != 'NO')
			alert(strAlert);
		return true;
	}
}


function validateForm(strNameForm)
{
	var strFormName, intElements, strName, strValue, intFirstP, intLastP, strFunct, arrFunct, intNumFunct, intCondForm;
	var strFormName = document.forms[strNameForm.name];

	intCondForm = false;
	intElements = strFormName.elements.length;
	for (intElementIndex = 0; intElementIndex < intElements; intElementIndex++)
    	{
		if(intCondForm == true)
		{
			strFieldType = strFormName.elements[intElementIndex].type;
			switch(strFieldType){
				case "text":
						strValue = strFormName.elements[intElementIndex].value;
						if (strValue != '')
							intCondForm = false; //el campo no esta vacio				
						
						break;
				case "select-one":
						strValue = strFormName[intElementIndex][strFormName[intElementIndex].selectedIndex].value;
						if(!checkSelectCombo(strValue, 'NO')){
							intCondForm = false; // si se selecciono una opcion
							}					
						break;
				case "textarea":
						strValue = strFormName.elements[intElementIndex].value;
						if (strValue != '')
							intCondForm = false; //el campo no esta vacio				
						break;
				case "radio":
						$strcondradio = 0;
						for(i=0; i<strFormName.elements[intElementIndex].length;i++){
							if(strFormName.elements[intElementIndex][i].checked){
								$strcondradio = 1;
							}
						}
						if ($strcondradio ==1)
							intCondForm = false; //si se selecciono una opcion
						break;
			}
		}

 	    strName = strFormName.elements[intElementIndex].name;
 	    strValue = strFormName.elements[intElementIndex].value;
		intFirstP = strName.indexOf("(");
		intLastP = strName.indexOf(")");
		strFunct = strName.substring(intFirstP + 1, intLastP);
		arrFunct = strFunct.split(",");
		intNumFunct = arrFunct.length;
		//ESTA PARTE ES PARA QUE EN CASO DE QUE SEA NETSCAPE ENTRE AL CICLO
		if(intNumFunct==0){
			intNumFunct=1;
		}
		
		for(intNumFunctIndex = 0; intNumFunctIndex < intNumFunct; intNumFunctIndex++)
		{
			switch(arrFunct[intNumFunctIndex])
			{
				// CAMPO REQUERIDO, NO PUEDE QUEDAR VACIO
				case "1":
							if(isEmpty(strValue, msg[0])){
								strFormName.elements[intElementIndex].focus();
								return;
							}
							break;
							
				// CAMPO SOLO ADMITE NUMEROS ENTEROS
				case "2":
							if(checkRegExp(strValue, regExPosInt, msg[4])){
								strFormName.elements[intElementIndex].focus();
								return;
							}
							break;
							
				// CAMPO SOLO ADMIITE NUMEROS FLOTANTES
				case "3":
							if(checkRegExp(strValue, regExPosFloat, msg[4])){
								strFormName.elements[intElementIndex].focus();
								return;
							}
							break;
							
				// CAMPO DE CORREO ELECTRONICO
				case "4":
							if(checkRegExp(strValue, regExEmail, msg[2])){
								strFormName.elements[intElementIndex].focus();
								return;
							}
							break;
							
				// CAMPO(S) DE CONTRASEÑA
				// LA ESPECIFICACION DE LA VALIDACION SE DEBERÁ HACER EN EL CAMPO CONFIRMAR CONTRASEÑA				
				// EL ORDEN EN LA FORMA DEBERA SER: PRIMERO CONTRASEÑA Y 
				// ENSEGUIDA CONFIRMAR CONTRASEÑA
				case "5":
							strValue1 = strFormName.elements[intElementIndex-1].value;
							if(checkPassword(strValue1, strValue)){
								strFormName.elements[intElementIndex].focus();
								return;
							}
							break;
							
				// CAMPO DE TELEFONO
				case "6":
							if(checkRegExp(strValue, regExPhone, msg[7])){
								strFormName.elements[intElementIndex].focus();
								return;
							}
							break;
							
				// CAMPO DE FECHA (FORMATO dd/mm/aaaa)
				case "7":
							if(checkDate(strValue, regExDate)){
								strFormName.elements[intElementIndex].focus();
								return;
							}
							break;
							
				// CAMPO TIPO COMBO O DROP DOWN, QUE DEBERA TENER SELECCIONADO UN VALOR
				case "8":
						strFieldType = strFormName.elements[intElementIndex].type;
                        
						switch(strFieldType){
                                
							case "select-one":
								strValue = strFormName[intElementIndex][strFormName[intElementIndex].selectedIndex].value;
								if(checkSelectCombo(strValue, msg[13])){
									strFormName.elements[intElementIndex].focus();
									return;
								}					
								break
							case "select-multiple":
								var arrValues = new Array();
								for (var i = 0; i < strFormName[intElementIndex].options.length; i++){
									if (strFormName[intElementIndex].options[i].selected){
										if(strFormName[intElementIndex].options[i].value != 0)
											arrValues[arrValues.length] = strFormName[intElementIndex].options[i].value;
									}
								}

								if (arrValues.length == 0){
									alert(msg[13]);
									strFormName.elements[intElementIndex].focus();
                                                                        return;
								}
								break;
						}

						break;
						
				// VALIDACION DE RANGO DE FECHAS DE DOS CAJAS DE TEXTO (FORMATO dd/mm/aaaa)
				// LA ESPECIFICACION DE LA VALIDACION SE DEBERÁ HACER EN EL CAMPO FECHA FINAL
				// EL ORDEN EN LA FORMA DEBERA SER: PRIMERO FECHA INICIO Y ENSEGUIDA FECHA FINAL
				case "9":
				 	    strValue1 = strFormName.elements[intElementIndex-1].value;
						if(checkDateRange(strValue1, strValue)){
								strFormName.elements[intElementIndex-1].focus();
								return;
							}
						break;
				
				// VALIDACION DE CAMPOS CON LIMITE DE CARACTERES(100), ESPECIALMENTE
				// DE TIPO TEXTAREA
				case "10":
						if(checkRegExp(strValue, regEx100, msg[3])){
								strFormName.elements[intElementIndex].focus();
								return;
							}
							break;
				
				// VALIDACION DE CAMPOS CON LIMITE DE CARACTERES(255), ESPECIALMENTE
				// DE TIPO TEXTAREA
				case "11":
						if(checkRegExp(strValue, regEx255, msg[3])){
							strFormName.elements[intElementIndex].focus();
							return;
						}
						break;
						
				// VALIDACION DE SELECCION DE PAIS Y ESTADO
				// LA ESPECIFICACION DE LA VALIDACION SE DEBERÁ HACER EN EL CAMPO DE PAIS
				// EL ORDEN DEBERA SER: PRIMERO EL ESTADO Y ENSEGUIDA EL PAIS
				case "12":
						intState = strFormName[intElementIndex-1][strFormName[intElementIndex-1].selectedIndex].value;
						strCountry = strFormName[intElementIndex][strFormName[intElementIndex].selectedIndex].text;

					        if (strCountry == 'México' || strCountry == 'Mexico' || strCountry == 'méxico' || strCountry == 'mexico')
					        {
					                if(intState == "NULL"){
					                        alert(msg[14]);
        	                                                strFormName.elements[intElementIndex-1].focus();
                	                                        return;
					                }
			        		}
					        else{
							strFormName[intElementIndex-1].selectedIndex= 0;
					        }

						break;

				// VALIDACION DE CAMPOS CON LIMITE DE CARACTERES(200), ESPECIALMENTE
				// DE TIPO TEXTAREA
				case "13":
						if(checkRegExp(strValue, regEx200, msg[3])){
							strFormName.elements[intElementIndex].focus();
							return;
						}
						break;

				//CAMPOS URL
				case "14":
						if(checkRegExp(strValue, regExUrl, msg[16])){
							strFormName.elements[intElementIndex].focus();
							return;
						}
						break;
				//CAMPOS SOLO LETRAS
				case "15":
						if(checkRegExp(strValue, regExAlfa, msg[5])){
							strFormName.elements[intElementIndex].focus();
							return;
						}
						break;


                                // VALIDACION DE RANGO DE NUMEROS DE DOS CAJAS DE TEXTO
                                // LA ESPECIFICACION DE LA VALIDACION SE DEBERÁ HACER EN EL CAMPO NUMERO SUPERIOR
                                // EL ORDEN EN LA FORMA DEBERA SER: PRIMERO INFERIOR Y ENSEGUIDA FECHA SUPERIOR
                                case "16":
                                            strValue1 = strFormName.elements[intElementIndex-1].value;
                                                if(checkNumRange(strValue1, strValue)){
                                                                strFormName.elements[intElementIndex-1].focus();
                                                                return;
                                                        }
                                                break;


                                // CAMPO SOLO ADMITE ALFANUMERICOS
                                case "17":
                                                        if(checkRegExp(strValue, regExAlfaNum, msg[6])){
                                                                strFormName.elements[intElementIndex].focus();
                                                                return;
                                                        }
                                                        break;

                                // CAMPO RFC
                                case "18":
                                                        if(checkRegExp(strValue, regExRfc, msg[18])){
                                                                strFormName.elements[intElementIndex].focus();
                                                                return;
                                                        }
                                                        break;

                                // CAMPO CURP
                                case "19":
                                                        if(checkRegExp(strValue, regExCurp, msg[19])){
                                                                strFormName.elements[intElementIndex].focus();
                                                                return;
                                                        }
                                                        break;

                                // VALIDACION DE RANGO DE NUMEROS DE DOS COMBOS SELECT
                                // LA ESPECIFICACION DE LA VALIDACION SE DEBERÁ HACER EN EL CAMPO NUMERO SUPERIOR
                                // EL ORDEN EN LA FORMA DEBERA SER: PRIMERO INFERIOR Y ENSEGUIDA SUPERIOR
                                case "20":
					strValue = strFormName[intElementIndex][strFormName[intElementIndex].selectedIndex].value;
					strValue1 = strFormName.elements[intElementIndex-1].value;
                                                
						if(checkNumRange2(strValue1, strValue)){
							strFormName.elements[intElementIndex-1].focus();
							return;
						}
                                                break;

                                // VALIDACION DE RANGO DE NUMEROS DE DOS COMBOS SELECT
                                // LA ESPECIFICACION DE LA VALIDACION SE DEBERÁ HACER EN EL CAMPO NUMERO SUPERIOR
                                // EL ORDEN EN LA FORMA DEBERA SER: PRIMERO INFERIOR Y ENSEGUIDA SUPERIOR
                                case "21":

					strValue = strFormName[intElementIndex][strFormName[intElementIndex].selectedIndex].value;
					strValue1 = strFormName.elements[intElementIndex-1].value;
                                                
						if(checkNumDif(strValue1, strValue)){
							strFormName.elements[intElementIndex-1].focus();
							return;
						}
                                                break;
                         
				// ESTE CASO SIRVE PARA VALIDAR QUE EN LA FORMA SE INTRODUZCA AL MENOS UN CAMPO,
				// POR EL MOMENTO SOLAMENTE ESTA HABILITADA PARA TEXT, SELECT Y TEXTAREA
				// LA ESPECIFICACION DE LA VALIDACION SE DEBERA DAR EN EL PRIMER CAMPO DE LA FORMA
				case "99":
						if (strValue == '' || regExSpaces.test(strValue)) 
							intCondForm = true;			
						break;

				//default:
			}//for
		}//for funct
	}//for elements
	
	if (intCondForm == true){
		alert(msg[15]);
		return;
	}
	
		removeFunctionNumbers(strFormName);
		strFormName.submit();

} // FIN FUNCION

function removeFunctionNumbers(strFormName)
{
	var strFormName, intElements, strName, strValue, intFirstP, intLastP, strFunct, arrFunct, intNumFunct;
	intElements = strFormName.elements.length;
	for (intElementIndex = 0; intElementIndex < intElements; intElementIndex++)
    	{
 	    	strName = strFormName.elements[intElementIndex].name;
		intFirstP = strName.indexOf("(");
		if (intFirstP != -1) // hay que quitarle las funciones
		{
	 	    strFormName.elements[intElementIndex].name = strName.substring(0, intFirstP);
		}

	}
}


