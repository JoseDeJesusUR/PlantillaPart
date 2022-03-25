/*
 * PROY/MOD:    SIROPA / VALIDACIONES JAVASCRIPT
 * ARCHIVO:     jsWindows.js
 * OBJETIVO:  	Abre una nueva ventana 
 */

function nuevaVentana(mypage, w, h, scroll, name)
{
	var winl = (screen.width - w) / 2;
	var wint = (screen.height - h) / 2;
	winprops ='height='+h+',width='+w+',top='+wint+',left='+winl+',scrollbars='+scroll+',resizable';
	win = window.open(mypage, name, winprops);
}
                
function refrescarPagina()
{
	location.reload();
}

function refrescarPaginaPadre(strAlert)
{
        window.opener.refrescarPagina();
        alert(strAlert);
        window.close();
}

