<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/estructura.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>SISUE</title>
<?
session_start();
include("seguridad.php");  
include("cnx.php"); 
	
	
///// GENERAMOS LA VARIABLE DE SESSION DE USUARIO( A partir del $user del login )/////////
	$usuario=$_SESSION['user'];	
	
	//// GENERAMOS LA VARIABLE DATE (Fecha captura)
	$fecha_cap =date ("d-m-Y");
     
	
	?>
 
      <?
	   
	      ///Consulta informacion del usuario////
	    $query="SELECT * FROM usuarios_registro WHERE cct='$usuario'; "; 
        $result= mysql_query($query) or die (mysql_error());
		while ($row = @mysql_fetch_array($result)){
			
		     ///Regreso valores del la consulta/// 
        $do=$row['do']; 
	    $nombre=$row['nombre'];
		$paterno=$row['paterno'];
		$materno=$row['materno'];
		$cargo=$row['cargo'];
		$espacio=" ";	
		$nombre="$nombre$espacio$paterno$espacio$materno";	
		
}


	/////////////////Genero variables de session ////////////// 
	
	   $_SESSION['dop']=$do;
	   $dop_final=$_SESSION['dop'];
	   
	   $_SESSION['car']=$cargo;
	   $cargo_final=$_SESSION['car'];

	   $_SESSION['nom']=$nombre;
	   $nombre_final =$_SESSION['nom'];	   
	 
	  ?>
      
             
        
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<script type="text/javascript">
function MM_swapImgRestore() { //v3.0
  var i,x,a=document.MM_sr; for(i=0;a&&i<a.length&&(x=a[i])&&x.oSrc;i++) x.src=x.oSrc;
}
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
}

function MM_findObj(n, d) { //v4.01
  var p,i,x;  if(!d) d=document; if((p=n.indexOf("?"))>0&&parent.frames.length) {
    d=parent.frames[n.substring(p+1)].document; n=n.substring(0,p);}
  if(!(x=d[n])&&d.all) x=d.all[n]; for (i=0;!x&&i<d.forms.length;i++) x=d.forms[i][n];
  for(i=0;!x&&d.layers&&i<d.layers.length;i++) x=MM_findObj(n,d.layers[i].document);
  if(!x && d.getElementById) x=d.getElementById(n); return x;
}

function MM_swapImage() { //v3.0
  var i,j=0,x,a=MM_swapImage.arguments; document.MM_sr=new Array; for(i=0;i<(a.length-2);i+=3)
   if ((x=MM_findObj(a[i]))!=null){document.MM_sr[j++]=x; if(!x.oSrc) x.oSrc=x.src; x.src=a[i+2];}
}
</script>
<!-- InstanceEndEditable -->
<link href="../css/desing.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<link href="../fuentes.css" rel="stylesheet" type="text/css" />

<script src="../SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryEffects.js" type="text/javascript"></script>

</head>
<body class="fondo" onload="MM_preloadImages('img/2_2.png','img/3_3.png','img/4_4.png','img/5_5.png','img/6_6.png')">
<div id="container_stc">
  <div class="header" id="header_stc"></div>
  <div id="login"> login
  </div>
  <div id="menu_stc">
  
  <ul id="MenuBar1" class="MenuBarHorizontal">
  <li><a class="MenuBarItemSubmenu" href="#">NORMALIDAD MÍNIMA</a>
    <ul>
      <li><a href="" target="_self">Menu 1</a></li>
      <li><a href="" target="_self">Menu 2</a></li>
      <li><a href="" target="_self" class="links_last">Menu 3</a></li>

    </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">DATOS E INFORMES</a>
    <ul>
      <li><a href="" target="_self">Menu 1</a></li>
      <li><a href="" target="_self">Menu 2</a></li>
      <li><a href="" target="_self" class="links_last">Menu 3</a></li>
    </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">PORTAFOLIO DIGITAL</a>
    <ul>
      <li><a href="" target="_self">Menu 1</a></li>
      <li><a href="" target="_self">Menu 2</a></li>
      <li><a href="" target="_self" class="links_last">Menu 3</a></li>
    </ul>
  </li>
  <li><a href="#" class="MenuBarItemSubmenu">DATOS GENERALES
  
  </a>
    <ul>
      <li><a href="" target="_self">Menu 1</a></li>
      <li><a href="" target="_self">Menu 2</a></li>
      <li><a href="" target="_self" class="links_last">Menu 3</a></li>
    </ul>
   </li>
   <li><a href="#" class="MenuBarItemSubmenu">Comunicación</a>
     <ul>
      <li><a href="" target="_self">Menu 1</a></li>
      <li><a href="" target="_self">Menu 2</a></li>
      <li><a href="" target="_self" class="links_last">Menu 3</a></li>
     </ul>
   </li>
   <li><a class="MenuBarItemSubmenu" href="#">Intranet</a>
    <ul>
     <li><a href="" target="_self">Menu 1</a></li>
     <li><a href="" target="_self">Menu 2</a></li>
     <li><a href="" target="_self" class="links_last">Menu 3</a></li>
    </ul>
  </li>
  
</ul>
  
  </div>
  <div id="body_stc"><!-- InstanceBeginEditable name="body" -->
    <table width="974" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="9">&nbsp;</td>
      </tr>
      <tr>
        <td width="201">&nbsp;</td>
        <td width="527" colspan="6" align="center"><p><a href="crono.php">CRONOGRAMA ACTIVIDADES</a></p>
          <p><a href="vis_super.php">VISITAS DE SUPERVISION</a></p>
          <p><a href="observacion.php">OBSERVACION AULA</a></p>
          <p><a href="vis_ruta.php">RUTA MEJORA</a></p>
        <p><a href="vis_ruta_reg2.php">RUTA MEJORA 2</a></p>
        <p>&nbsp;</p></td>
        <td width="136">&nbsp;</td>
        <td width="110">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="6" align="center"><a href="result.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('boton2','','img/2_2.png',1)"><img src="img/2.png" width="201" height="34" id="boton2" /></a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="6" align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="6" align="center"><a href="cct_zona.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('boton3','','img/3_3.png',1)"><img src="img/3.png" width="201" height="34" id="boton3" /></a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="6" align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="6" align="center"><a href="usuarios.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('boton4','','img/4_4.png',1)"><img src="img/4.png" width="201" height="34" id="boton4" /></a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="6" align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="6" align="center"><a href="sugerencias_zona.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('sugerencia','','img/5_5.png',1)"><img src="img/5.png" width="201" height="34" id="sugerencia" /></a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="6" align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="6" align="center"><a href="menu_bus.php" onmouseout="MM_swapImgRestore()" onmouseover="MM_swapImage('busqueda','','img/6_6.png',1)"><img src="img/6.png" width="201" height="34" id="busqueda" /></a></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="6" align="center"><p>&nbsp;</p></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
<form name="visita" action="instantanea1.php"  method="POST">
</form>
  <!-- InstanceEndEditable --></div>
  <div class="footer" id="footer_stc"></div>
</div>
<script type="text/javascript">
<!--
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"../SpryAssets/SpryMenuBarDownHover.gif", imgRight:"../SpryAssets/SpryMenuBarRightHover.gif"});
//-->
</script>
</body>
<!-- InstanceEnd --></html>
