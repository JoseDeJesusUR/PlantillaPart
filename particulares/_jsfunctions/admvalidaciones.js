/*
 *      PROY/MOD:               SISTEMA DE VOTACIONES ELECTRONICAS - ADMON. DEL SISTEMA
 *      ARCHIVO:                admValidaciones.js
 *      AUTOR:                  Janitzie Grano
 *      OBJETIVO:               Validaciones Javascript del Modulo de Administracion del Sistema
 *      FECHA DE CREACIÓN:      26/08/2004
 *      FECHA DE ULTIMA MOD:    26/08/2004
 */


function admPagina(pagina,opcion)
{
	if(pagina==0)
    	{
                document.forms[0].action="Form.html";
                document.forms[0].submit();
    	}
	if(pagina==1)
 	{ 
  		document.forms[0].action="Form.html?strData=admVotacion&x='+x+'";
  		document.forms[0].submit();
 	}
}

 

