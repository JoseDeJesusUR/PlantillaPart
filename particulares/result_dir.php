<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">


<link href="css/tables.css" rel="stylesheet" type="text/css" />


<!-- InstanceBegin template="/Templates/carpeta-unica.dwt.php" codeOutsideHTMLIsLocked="false" -->
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
   <p>&nbsp;</p>
   <form name="general" method="post" action="#">
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <table width="79%" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td width="33%">&nbsp;</td>
        <td width="47%" align="right"><span class="titulos_tablas">PLANTILLA DIRECTIVA</span></td>
        <td width="20%" rowspan="3" align="center"><a href="pdf/reporte_dir.php?rfc_do=<?=$usuario?>" target="_blank"><img src="img/pdf.png" width="150" height="53" /></a></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td align="right" valign="bottom" class="titulos_tablas">&nbsp;</td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        </tr>
    </table>
    
    
    <table width="80%"  border="1" cellpadding="0" cellspacing="0" align="center" class="paleBlueRows">
      <tr>
       <td width="10%" align="center" bgcolor="#FF9B79" class="titulos_tablas">RFC</td>
       <td width="50%" align="center" bgcolor="#FF9B79"><span class="titulos_tablas">ADMINISTRATIVO Y APOYO</span></td>
       <td width="23%" align="center" bgcolor="#FF9B79"><span class="titulos_tablas">FECHA ACTUALIZACION </span></td>
       <td width="17%" align="center" bgcolor="#FF9B79"><span class="titulos_tablas">CONSULTAR</span></td>
      </tr>
      <?
  /*

	/*Consulta datos personales por RFC ordenado por fecha RFC*/
	$query="SELECT *
           FROM datos_per
           WHERE cct ='$usuario' AND tipo_personal='DIRECTIVO' AND status_captura='1' order by rfc;";
          
		 
		   
    $result= mysql_query($query) or die (mysql_error());
    while ($row = @mysql_fetch_array($result)){
	
      ///Datos query RESULT 
		  $rfc_co=$row['rfc'];
		  $_SESSION['dv']=$rfc_co;
		  $rfc_result=$_SESSION['dv'];
		  
		  
		  $actu_doc=$row['actualizacion'];
		  $_SESSION['actua']=$actu_doc;
	      $actualiza_doc=$_SESSION['actua'];

		  
		  
		  $docente=$row['docente'];
		  $_SESSION['docen']=$docente;
	      $docente_row=$_SESSION['docen'];

		  $observador=$row['observador'];
		  $_SESSION['obser']=$observador;
	      $observador_row=$_SESSION['obser'];
		 
		  $paterno_doc=$row['ap_pat'];
		  $materno_doc=$row['ap_mat'];
		  $nombre_doc=$row['nombre'];
		  $esp_blanco='&nbsp;';
		  $nombre_completo=$paterno_doc.$esp_blanco.$materno_doc.$esp_blanco.$nombre_doc;
	  
		 
		  $cct_ok=$_POST['cct'];
  

///////////////////////Cambiar cargo a texto
 if($cargo_row==1)
 {
    $_SESSION['$cargo_ok']='INSPECTOR';
	$cargo_final=$_SESSION['$cargo_ok'];
 }
 
 if($cargo_row==2)
 {
    $_SESSION['$cargo_ok']='INSPECTOR E. FISICA';
	$cargo_final=$_SESSION['$cargo_ok'];
   
 }
 if($cargo_row==3)
 {
    $_SESSION['$cargo_ok']='DIRECTOR';
	$cargo_final=$_SESSION['$cargo_ok'];
 } 

	   

		 
?>
      <tr>
        <td align="center"><? echo $rfc_result ?></td>
        <td align="left"><? echo $nombre_completo ?></td>
        <td align="center"><? echo $actualiza_doc ?></td>
        <td align="center"><i style="font-size:24px" class="fa">&#xf06e;</i><a href="detallado_dir.php?rfc_do=<?=$row["rfc"]?>" target="_parent"> VER</a></td>
      </tr>
      <tr>
        <?   
	 }
 	
?>
      </tr>
</table>
    <p>&nbsp;</p>
  </form>
    
  <!-- InstanceEndEditable --></div>
  <div class="footer" id="footer_stc"></div>
</div>

</body>
<!-- InstanceEnd --></html>
