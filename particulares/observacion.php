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
function MM_preloadImages() { //v3.0
  var d=document; if(d.images){ if(!d.MM_p) d.MM_p=new Array();
    var i,j=d.MM_p.length,a=MM_preloadImages.arguments; for(i=0; i<a.length; i++)
    if (a[i].indexOf("#")!=0){ d.MM_p[j]=new Image; d.MM_p[j++].src=a[i];}}
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
<body class="fondo">
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
   <form name="visita" action="instantanea1.php"  method="POST">
     <table width="974" border="0" cellspacing="0" cellpadding="0">
     <tr>
       <td colspan="9" align="center"><table width="974" border="0" cellspacing="0" cellpadding="0">
         <tr>
           <td width="108">&nbsp;</td>
           <td><span class="usuario">DO: </span><? echo "<span class='usuarioBold'> $do </span>" ?></td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td width="67">&nbsp;</td>
           <td width="136">&nbsp;</td>
           <td width="110"><a href="salir.php" class="menu_salir">SALIR</a></td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td><span class="usuario">USUARIO: </span><? echo "<span class='usuarioBold'> $usuario </span>" ?></td>
           <td width="99">&nbsp;</td>
           <td width="105">&nbsp;</td>
           <td width="70">&nbsp;</td>
           <td width="108">&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td>&nbsp;</td>
           <td colspan="5"><span class="usuario">NOMBRE: </span><? echo "<span class='usuarioBold'> $nombre  </span>" ?></td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
           <td>&nbsp;</td>
         </tr>
         <tr>
           <td height="19" colspan="9" align="center"><table width="600" border="0" cellspacing="0" cellpadding="0">
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td colspan="6" align="center">OBSERVACION DEL DESEMPEÑO DOCENTE EN EL AULA</td>
               </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>CATEGORIA</td>
               <td>REFERENTE</td>
               <td>ESTANDAR</td>
               <td colspan="2">&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
             <tr>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
               <td>&nbsp;</td>
             </tr>
           </table></td>
         </tr>
  </table></td>
     </tr>
     </table>
     <table width="974" border="0" cellspacing="0" cellpadding="0">
     </table>
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
