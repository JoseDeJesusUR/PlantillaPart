<?
session_start();

  include("seguridad.php");  
  include("cnx.php"); 


    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];
	$nombre_final =$_SESSION['nom']; 

/////////////VARIABLES session mes//////////////

	
	$_SESSION['mes_b']=$_REQUEST['mes'];  
	$mes_btw=$_SESSION['mes_b']; 
	
	$concateno1= '/01/2015';
	$rango1= $mes_btw.$concateno1;
   
    $concateno2= '/31/2015';
	$rango2= $mes_btw.$concateno2;

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/estructura.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Cronograma Actividades</title>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
    
    
<link href="../SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<link rel="stylesheet" type="text/css" href="css/estilos.css">
<link rel="stylesheet" type="text/css" href="css/calendario.css">
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
  <div id="body_stc"><!-- InstanceBeginEditable name="body" --><table width="974" border="0" cellpadding="0" cellspacing="0">
    <tr>
      <td width="78" height="20">&nbsp;</td>
      <td width="201"><span class="usuario">DO: </span><? echo "<span class='usuarioBold'> $dop_final </span>" ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td width="67">&nbsp;</td>
      <td colspan="2" align="right">&nbsp;</td>
      </tr>
    <tr>
      <td>&nbsp;</td>
      <td><span class="usuario">USUARIO: </span><? echo "<span class='usuarioBold'> $usuario </span>" ?></td>
      <td width="99">&nbsp;</td>
      <td width="105">&nbsp;</td>
      <td width="70">&nbsp;</td>
      <td width="108">&nbsp;</td>
      <td>&nbsp;</td>
      <td width="136">&nbsp;</td>
      <td width="110">&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td colspan="5"><span class="usuario">NOMBRE: </span><? echo "<span class='usuarioBold'> $nombre_final  </span>" ?></td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td height="19" colspan="9" align="center">CRONOGRAMA DE VISITAS</td>
    </tr>
    <tr>
      <td height="19" colspan="9" align="center">MES </td>
    </tr>
    <tr>
      <td height="19" colspan="9" align="center">&nbsp;</td>
    </tr>
  </table>
    <table width=92%  border="1" cellpadding="0" cellspacing="0" align="center">
      <tr>  
     
    <td width=13% align="center" bgcolor="#7DB1FF" class="titulos_tablas">FECHA VISITA</td>					
    <td width=36% align="center" bgcolor="#7DB1FF"><span class="titulos_tablas">TIPO DE VISITA</span>
    <td width=12% align="center" bgcolor="#7DB1FF"><span class="titulos_tablas">ESCUELA </span>
    <td width=39% align="center" bgcolor="#7DB1FF"><span class="titulos_tablas">OBSERVACION</span>
   </tr>

  <?
  /*

	/*Consulta datos visita por cct y asignatura, ordenado por folio*/
	$query="SELECT *
           FROM crono_vis
           WHERE fecha_vis BETWEEN '$rango1' AND '$rango2' and id_usuario ='$usuario' order by fecha_vis;";
          
		 
		   
    $result= mysql_query($query) or die (mysql_error());
    while ($row = @mysql_fetch_array($result)){
	
      ///Datos query RESULT 
		 
		  ///fecha visita
		  $fecha_vis=$row['fecha_vis'];
		  $_SESSION['fecha']=$fecha_vis;
	      $fecha_row=$_SESSION['fecha'];
		  ////fecha cap
		  $fecha_cap=$row['fecha_cap'];
		  
		 
		 
		  ///Tipo de visita
		  $vis_tipo=$row['tipo_vis'];
		  $_SESSION['tp']=$vis_tipo;
		  $tipo_row=$_SESSION['tp'];
		  
		  ///////////////// Cambiamos los valore de la consulta de numerico al texto del tipo de visita

 if($tipo_row==1)
 {
    $_SESSION['$VA']='Visita Ordinaria';
	$VA_row=$_SESSION['$VA'];
 }
 if($tipo_row==2)
 {
    $_SESSION['$VA']='Visita Extraordinaria';
	$VA_row=$_SESSION['$VA'];
 }
 //////////////////Si en el valor es 4 realica consulta para mostra el tipo de visita
  if($tipo_row==4)
{
$query2="SELECT *
           FROM crono_vis
           WHERE fecha_vis ='$fecha_row' and fecha_cap='$fecha_cap' and id_usuario ='$usuario' ;";
          	 
		   
    $result2= mysql_query($query2) or die (mysql_error());
    while ($row2 = @mysql_fetch_array($result2)){
	
      ///Datos query2 RESULT 

		  $VA_row=$row['otro_vis'];

	}
}
/////////////
 
		  	  
		  ///Escuela que visita
		  $num_cct=$row['cct_vis'];
		  $_SESSION['vis']=$num_cct;
	      $cctvis_row=$_SESSION['vis'];

          ///Observaciones  
		  $observa=$row['obser_vis'];
		  $_SESSION['obser']=$observa;
	      $observacion_row=$_SESSION['obser'];

		 
?>


  <tr> 
    
    <td align="center"><? echo $fecha_row ?></td>
    <td align="center"><? echo $VA_row ?></td>
    <td align="center"><? echo $cctvis_row ?></td>
    <td align=left><? echo $observacion_row ?></td>
    <tr>
<?   
	 }
 	
?>

  </tr>
  
</table>
    <p>&nbsp;</p>


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