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
<title>Documento sin t??tulo</title>
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
      <a href="#">ADMINISTRATIVO</a>
      <a href="#">DIRECTIVO</a>
   
   <!-----------------MEN??------------------>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">PLANTILLA</a>
    <div class="dropdown-content">
      <a href="result_docente.php">DOCENTE</a>
      <a href="result_adm.php">ADMINISTRATIVO</a>
      <a href="result_dir.php">DIRECTIVO</a>
  
  
    <!-----------------MEN??------------------>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">CAPTURA PERSONAL</a>
    <div class="dropdown-content">
      <a href="captura.php">DOCENTE</a>
      <a href="captura_adm.php">ADMINISTRATIVO</a>
      <a href="captura_dir.php">DIRECTIVO</a>
    
    
     <!-----------------MEN??------------------>
  
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
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <table width="574" border="1" align="center" cellpadding="0" cellspacing="0">
    <tr class="titulos_menu">
      <td align="center" bgcolor="#00958F">ASIGNATURA</td>
      <td align="center" bgcolor="#00958F">NOMBRE</td>
    </tr>
    <tr>
      <td rowspan="6" align="center"><strong>Espa??ol</strong></td>
      <td align="left">&bull; Gu??a Espa??ol I</td>
    </tr>
    <tr>
      <td align="left">&bull; Gu??a Espa??ol II</td>
    </tr>
    <tr>
      <td align="left">&bull; Gu??a Espa??ol III</td>
    </tr>
    <tr>
      <td align="left">&bull; Tabla de Espa??ol I</td>
    </tr>
    <tr>
      <td align="left">&bull; Tabla de Espa??ol II</td>
    </tr>
    <tr>
      <td height="22" align="left">&bull; Tabla de Espa??ol II</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#133D8D" class="titulos_menu">ASIGNATURA</td>
      <td align="center" bgcolor="#133D8D" class="titulos_menu">NOMBRE</td>
    </tr>
    <tr>
      <td rowspan="14" align="center"><strong>Segunda Lengua</strong></td>
      <td align="left">INGLES</td>
    </tr>
    <tr>
      <td align="left">&bull; Gu??a de Ingl??s I</td>
    </tr>
    <tr>
      <td align="left">&bull; Gu??a de Ingl??s II</td>
    </tr>
    <tr>
      <td align="left">&bull; Gu??a de Ingl??s III</td>
    </tr>
    <tr>
      <td align="left">&bull; Tabla de Ingl??s I</td>
    </tr>
    <tr>
      <td align="left">&bull; Tabla de Ingl??s II</td>
    </tr>
    <tr>
      <td align="left">&bull; Tabla de Ingl??s III</td>
    </tr>
    <tr>
      <td align="left">FRANCES</td>
    </tr>
    <tr>
      <td align="left">&bull; Gu??a de Franc??s I</td>
    </tr>
    <tr>
      <td align="left">&bull; Gu??a de Franc??s II</td>
    </tr>
    <tr>
      <td align="left">&bull; Gu??a de Franc??s III</td>
    </tr>
    <tr>
      <td align="left">&bull; Tabla de Franc??s I</td>
    </tr>
    <tr>
      <td align="left">&bull; Tabla de Franc??s II</td>
    </tr>
    <tr>
      <td align="left">&bull; Tabla de Franc??s III</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#7AC143" class="titulos_menu">ASIGNATURA</td>
      <td align="center" bgcolor="#7AC143" class="titulos_menu">NOMBRE</td>
    </tr>
    <tr>
      <td rowspan="3" align="center"><strong>Matem??ticas</strong></td>
      <td align="left">Gu??a de Matem??ticas I</td>
    </tr>
    <tr>
      <td align="left">Gu??a de Matem??ticas II</td>
    </tr>
    <tr>
      <td align="left">Gu??a de Matem??ticas III</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#F8971D" class="titulos_menu">ASIGNATURA</td>
      <td align="center" bgcolor="#F8971D" class="titulos_menu">NOMBRE</td>
    </tr>
    <tr>
      <td rowspan="9" align="center"><strong>Ciencias</strong></td>
      <td align="left">BIOLOGIA</td>
    </tr>
    <tr>
      <td align="left">Guia  Biolog??a</td>
    </tr>
    <tr>
      <td align="left">Tabla Biolog??a</td>
    </tr>
    <tr>
      <td align="left">FISICA</td>
    </tr>
    <tr>
      <td align="left">Gu??a de F??sica II</td>
    </tr>
    <tr>
      <td align="left">Tabla de F??sica II</td>
    </tr>
    <tr>
      <td align="left">QUIMICA</td>
    </tr>
    <tr>
      <td align="left">Gu??a Qu??mica III</td>
    </tr>
    <tr>
      <td align="left">Tabla Qu??mica III</td>
    </tr>
    <tr>
      <td align="center" bgcolor="#0079C1" class="titulos_menu">ASIGNATURA</td>
      <td align="center" bgcolor="#0079C1" class="titulos_menu">NOMBRE</td>
    </tr>
    <tr>
      <td align="center" class="titulos_menu">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="left">&nbsp;</td>
    </tr>
    <tr>
      <td align="center">&nbsp;</td>
      <td align="left"><p>&nbsp;</p></td>
    </tr>
    <tr>
      <td width="242" align="center" bgcolor="#FFFF00" class="titulos_menu">ASIGNATURA</td>
      <td width="326" align="center" bgcolor="#FFFF00" class="titulos_menu">NOMBRE</td>
    </tr>
    <tr>
      <td rowspan="6" align="center"><strong>Artes Visuales</strong></td>
      <td align="left"><li>Artes  Visuales I </li></td>
    </tr>
    <tr>
      <td align="left"><li>Artes Visuales II</li></td>
    </tr>
    <tr>
      <td align="left"><li>Artes Visuales III</li></td>
    </tr>
    <tr>
      <td align="left"><li>Tabla  Artes  Visuales I</li></td>
    </tr>
    <tr>
      <td align="left"><li>Tabla  Artes  Visuales II</li></td>
    </tr>
    <tr>
      <td align="left"><li>Tabla  Artes Visuales III</li></td>
    </tr>
    <tr>
      <td align="center" bgcolor="#FFFF00">ASIGNATURA</td>
      <td align="center" bgcolor="#FFFF00">NOMBRE</td>
    </tr>
    <tr>
      <td rowspan="6" align="center"><strong>Danza</strong></td>
      <td><li>Gu??a Danza I</li></td>
    </tr>
    <tr>
      <td><li>Gu??a Danza  II</li></td>
    </tr>
    <tr>
      <td><li>Gu??a Danza  III</li></td>
    </tr>
    <tr>
      <td><li>Tabla Danza  I</li></td>
    </tr>
    <tr>
      <td><li>Tabla Danza  II</li></td>
    </tr>
    <tr>
      <td><li>Tabla Danza  III</li></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td>&nbsp;</td>
    </tr>
  </table>
  <p class="titulos2">&nbsp;</p>
  <p class="titulos2">&nbsp;</p>
  <p class="titulos2">&nbsp;</p>
  <p class="titulos2">&nbsp;</p>
  <p>&nbsp;</p>
    
    
  <!-- InstanceEndEditable --></div>
  <div class="footer" id="footer_stc"></div>
</div>

</body>
<!-- InstanceEnd --></html>
