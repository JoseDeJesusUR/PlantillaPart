<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/carpeta-unica.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />


<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
   color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>


<?
session_start();

header('Content-Type: text/html; charset=UTF-8');



  include("seguridad.php");  
  include("cnx.php"); 
 

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];
	$nombre_final =$_SESSION['nom']; 

  

	      ///consulta informacion del usuario////
	
	  
	    $query="SELECT * FROM cct_part WHERE cct='$usuario'; "; 
        $result= mysql_query($query) or die (mysql_error());
		while ($row = @mysql_fetch_array($result)){
			
		     ///Regreso valores del la consulta/// 
        $nombre=$row['nom_esc'];
	  
	    $do_log=$row['do']; 
		 /*
	    $nombre=$row['nombre'];
		$paterno=$row['paterno'];
		$materno=$row['materno'];
		$cargo=$row['cargo'];
		$espacio=" ";	
		$inspector="$nombre$espacio$paterno$espacio$materno";	
		*/
}
	/////////////////Genero variables de session ////////////// 
	
	   $_SESSION['no_esc']=$nombre;
	   $nombre_final=$_SESSION['no_esc'];
	   
	   $_SESSION['do_esc']=$do_log;
	   $do_final=$_SESSION['do_esc'];
	   	   
	   
	/// cierro la consulta

//mysql_close($query);


?>

<!-- InstanceBeginEditable name="doctitle" -->
<title>CSES</title>

<?

////////////////// Importamos variables y se genera su session ///////////

//import_request_variables ("P","f_");

	
	$cct_cam=$_SESSION['cct_g'];
	$grado_cam=$_SESSION['grado_g'];
	$curp_cam=$_SESSION['curp_g'];
	$paterno_cam=$_SESSION['paterno_g'];
	$materno_cam=$_SESSION['materno_g'];
	$nombre_cam=$_SESSION['nombre_g'];
	

///consulta informacion del CCT////
	    $query="SELECT * FROM datos_cct WHERE cct='$cct_cam'; "; 
        $result= mysql_query($query) or die (mysql_error());

		while ($row = @mysql_fetch_array($result)){
			
		     ///Regreso valores del la consulta/// 
        $do=$row['do']; 
	    $nombre_esc=$row['nombre'];
		$domicilio_esc=$row['domicilio'];	
		$turno_esc=$row['turno'];	
		
		
		/////////////////// cambio el valor numerico de turno a descripcion del turno
		if ($turno_esc==100)  $turno_nom="MATUTINO";
		if ($turno_esc==200)  $turno_nom="VESPERTINO";
		if ($turno_esc==0)    $turno_nom="N/D";
		if ($turno_esc==700)  $turno_nom="TIEMPO COMPLETO SIN INGESTA";
		if ($turno_esc==500) $turno_nom="TIEMPO COMPLETO CON INGESTA";
		
		/////////////////// cambio el valor numerico de grado a descripcion del grado
		if ($grado_cam==2)  $gr_nom="SEGUNDO";
		if ($grado_cam==3)  $gr_nom="TERCER";
		
		
		
		
		
		
}

///consulta informacion del usuario////

	    $query2="SELECT * FROM usuarios_registro WHERE cct='$usuario'; "; 
        $result2= mysql_query($query2) or die (mysql_error());

		while ($row = @mysql_fetch_array($result2)){
			
		     ///Regreso valores del la consulta/// 
        $nom_z=$row['nombre_zona']; 

		}
	
///consulta informacion del alumno de cambio////

	    $query2="SELECT * FROM cambios WHERE curp='$curp_cam'; "; 
        $result2= mysql_query($query2) or die (mysql_error());

		while ($row = @mysql_fetch_array($result2)){
			
		     ///Regreso valores del la consulta/// 
        $fol_cam=$row['folio_cam']; 

		}	
		
		
/////////////////Genero variables de session ////////////// 

       $_SESSION['camfol']=$fol_cam;
	   $folio_cambio=$_SESSION['camfol'];


       $_SESSION['zon_n']=$nom_z;
	   $zona_nombre=$_SESSION['zon_n'];

       $_SESSION['usu_fis']=$usuario;
	   $usuario_fis=$_SESSION['usu_fis'];

       $_SESSION['descrip_gr']=$gr_nom;
	   $descrip_grado=$_SESSION['descrip_gr'];


       $_SESSION['descrip_tur']=$turno_nom;
	   $descrip_turno=$_SESSION['descrip_tur'];

	
	   $_SESSION['nom_esc']=$nombre_esc;
	   $nombre_escuela=$_SESSION['nom_esc'];
	  
	   $_SESSION['dom_esc']=$domicilio_esc;
	   $domicilio_escuela=$_SESSION['dom_esc'];
	   
	   $_SESSION['tur_esc']=$turno_esc;
	   $turno_escuela=$_SESSION['tur_esc'];		

	

?>


<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../css/desing.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<link href="../fuentes.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body bgcolor="#EFEFEF" class="fondo">
<div id="container_stc">
  <div class="header" id="header_stc"></div>
  <div class="login" id="login">
    <table width="976" height="30" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="78">&nbsp;</td>
        <td width="78">&nbsp;</td>
        <td width="78">&nbsp;</td>
        <td colspan="2" align="right"><i class="fa fa-user-circle-o" style="font-size:24px;color:red"></i><? echo "<span class='usuarioBold'> DO$do_final </span>" ?><? echo "<span class='usuarioBold'>| $usuario </span>" ?><? echo "<span class='usuarioBold'>| $nombre_final  </span>" ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="622">&nbsp; </td>  
      </tr>
    </table>
  </div>
<div id="menu_stc">
 
  <ul>
  <!--
  <li><a href="../particulares/menu-carpeta.php">INICIO</a></li>
  -->
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ACTUALIZAR</a>
    <div class="dropdown-content">
      <a href="modi_docente.php">DOCENTE</a>
      <a href="modi_adm.php">ADMINISTRATIVO</a>
      <a href="modi_dir.php">DIRECTIVO</a>
   
   <!-----------------MENÚ------------------>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">PLANTILLA</a>
    <div class="dropdown-content">
      <a href="result_docente.php">DOCENTE</a>
      <a href="result_adm.php">ADMINISTRATIVO</a>
      <a href="result_dir.php">DIRECTIVO</a>
      <a href="historial.php">HISTORIAL</a> 
  
  
    <!-----------------MENÚ------------------>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">CAPTURA PERSONAL</a>
    <div class="dropdown-content">
      <a href="captura.php">DOCENTE</a>
      <a href="captura_adm.php">ADMINISTRATIVO</a> 
      <a href="captura_dir.php">DIRECTIVO</a>
    
    
     <!-----------------MENÚ------------------>
  
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-cog fa-spin" style="font-size:18px"></i></a>
    <div class="dropdown-content">
      <a href="menu-carpeta.php">INICIO</a>
      <a href="salir.php">SALIR</a>
     
    
    </div>
  </li>
</ul> 



</div>
  <div id="body_stc"><!-- InstanceBeginEditable name="body" -->
  
  <form name="general" method="post" target="_blank" action="reporte/reporte.php">
    <p>&nbsp;</p>
    <table width="661" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="4" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="4" align="center"><p class="titlebig"> SU CAPTURA FUE EXITOSA</p></td>
        </tr>
      <tr>
        <td height="27"><span class="textbody">CCT:</span></td>
        <td><? echo "<span class='titulos_tablas'> $cct_cam </span>" ?></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td width="181"><span class="titulos_tablas"><span class="textbody">RFC:</span></span></td>
        <td width="112"><? echo "<span class='titulos_tablas'>   $grado_cam </span>" ?></td>
        <td width="175">&nbsp;</td>
        <td width="166">&nbsp;</td>
        </tr>
      <tr>
        <td colspan="4" class="letra_tablas">&nbsp;</td>
      </tr>
      <tr>
        <td class="textbody">APELLIDO PATERNO:</td>
        <td colspan="3"><? echo "<span class='titulos_tablas'> $paterno_cam </span>" ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td class="textbody">APELLIDO MATERNO:</td>
        <td colspan="3"><? echo  "<span class='titulos_tablas'>  $materno_cam </span>" ?></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td class="textbody">NOMBRE (S) :</td>
        <td colspan="3"><?  echo  "<span class='titulos_tablas'> $nombre_cam </span>" ?></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="3">&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="2" align="center"><input type="submit" name="enviar" id="enviar" value="Imprimir Comprobante" /></td>
        <td>&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><p>&nbsp;</p>
          <p>&nbsp;</p></td>
        <td>&nbsp;</td>
        </tr>
    </table>
    
   </form>
    
  <!-- InstanceEndEditable --></div>
  <div class="footer" id="footer_stc"></div>
</div>

</body>
<!-- InstanceEnd --></html>
