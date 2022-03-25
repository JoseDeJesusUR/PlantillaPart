/*
        Autor:          D.S.A,/ J.P.G,/  
	Modifico:	R.C.F
        Creada:         Mayo 1 2003
        Modificada:     Agosto 19 2004
        Objetivo:       Valida que los objetos con campo requerido
                        en la base de datos no esten vacíos
*/

function validarCampos(dat)
{
        var intForms, intElements, intLong, strName, strId;
        intForms = document.forms.length;

        for (intFormIndex = 0; intFormIndex < intForms; intFormIndex++)
        {
                intElements = document.forms[intFormIndex].elements.length;
                for (intElementIndex = 0; intElementIndex < intElements; intElementIndex++)
                {
                        if (document.forms[intFormIndex].elements[intElementIndex].value == '')
                        {
                                strName = document.forms[intFormIndex].elements[intElementIndex].name;
                                intLong = strName.length;
                                strId = strName.substring(intLong -2,intLong)
                                if (strId == '00')
                                {
                                        muestraMensaje(7);
                                        document.forms[intFormIndex].elements[intElementIndex].focus();
                                        return 0;
                                }
                        }
                }
        }



	if(dat==1) //VALIDACION JANI
	{
		if(confirm("\n\277Está seguro que desea eliminar el proceso electoral?\n"))
		{
			quitarIdentificador();
			document.forms[intFormIndex-1].submit();
		}
		else
			return;
	}
	else if(dat==2) //PIDE CONFIRMACION
	{

		if(confirm("\n\277Confirma el env\355o de los datos?\n"))
		{
			quitarIdentificador();
			document.forms[intFormIndex-1].submit();
		}
		else
		{
			return false;
		}
	}
        else if(dat==3) //PIDE CONFIRMACION
        {
                                        
		if(confirm("\n\277Está seguro que desea limpiar las Bases de Datos?\n"))
                {
                        quitarIdentificador();
                        document.forms[intFormIndex-1].submit();
                }
                else
                {
                        return false;
                }
        }
	else 
	{
		quitarIdentificador();
		document.forms[intFormIndex-1].submit();
	}
}


/*	
	Autor:          David Solis Alcantar
	Creada:         Mayo 1 2003
	Objetivo:       Quita los identificadores de los controles con información requerida.
*/

function quitarIdentificador()   
{ 
	var intForms, intElements, intLong, strName, strId;
	intForms = document.forms.length;
	for (intFormIndex = 0; intFormIndex < intForms; intFormIndex++)
	{
		intElements = document.forms[intFormIndex].elements.length;
		for (intElementIndex = 0; intElementIndex < intElements; intElementIndex++)
		{
			strName = document.forms[intFormIndex].elements[intElementIndex].name;
			intLong = strName.length;
			strId = strName.substring(intLong -2,intLong)
			if (strId == '00' || strId == 'zz')
				document.forms[intFormIndex].elements[intElementIndex].name=strName.substring(0,intLong -2);
		}
	}
}

