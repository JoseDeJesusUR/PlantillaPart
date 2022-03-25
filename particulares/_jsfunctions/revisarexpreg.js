/*
 * PROY/MOD:    SIROPA / VALIDACIONES JAVASCRIPT    
 * ARCHIVO:     revisarExpReg.js       
 * AUTOR:       Karla A. Fonseca Márquez   
 * OBJETIVO:    Validar valores por medio de expresiones regulares (regExp). En caso de que el valor no
 *		concuerde con la expresion regular se alerta el mensaje intAlert.
 * FECHA ACT:   26/02/2004
 * INVOCA:	muestraMensaje()
 */

function revisarExpReg(strValue, regExp, intAlert)
{
        if (strValue != '') //la validacion de campos vacios se debera hacer aparte
        {
                if (!regExp.test(strValue))
                {
                        muestraMensaje(intAlert);       
                        return false; 
                }
        }
                
	return true;
}

