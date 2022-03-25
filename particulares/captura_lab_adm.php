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

    $_SESSION['nivel_estx']=$f_nivel_est_adm;
	$nivel_est_doc_adm=$_SESSION['nivel_estx'];
	
	$_SESSION['status_estx']=$f_status_est_adm;
	$status_est_doc_adm=$_SESSION['status_estx'];
	
	$_SESSION['egresadox']=$f_egresado_adm;
	$egresado_doc_adm=$_SESSION['egresadox'];		

    $_SESSION['perfilx']=$f_perfil_adm;
	$perfil_doc_adm=$_SESSION['perfilx'];
	
	$_SESSION['otros_estx']=$f_otros_est_adm;
	$otros_est_doc_adm=$_SESSION['otros_estx'];

	$_SESSION['cursosx']=$f_cursos_adm;
	$cursos_doc_adm=$_SESSION['cursosx'];

	
	
	
/////////////////
	/*
	 $_SESSION['des_egresadox']=$f_des_egresado_adm;
	$des_egresado_doc=$_SESSION['des_egresadox'];	
	
	$_SESSION['profesionx']=$f_profesion_adm;
	$profesion_doc_adm=$_SESSION['profesionx'];		
	
	$_SESSION['cedulax']=$f_cedula;
	$cedula_doc=$_SESSION['cedulax'];
    
	*/
//////////////////////////////	




?>

<script language="JavaScript"> 
function pregunta(){ 
    if (confirm('¿Estás seguro que la información capturada es correcta?')){ 
       document.visita.submit() 
    } 
} 
</script>
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
  
  <form name="general" method="post" action="control_adm.php">  
    <p>&nbsp;</p>
    <table width="657" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="5" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td height="37" colspan="5" align="center"><p class="vinculo_error">INFORMACIÓN LABORAL<br>
          (PERSONAL ADMINISTRATIVO Y DE APOYO)</p></td>
      </tr>
      <tr>
        <td colspan="5" align="center" ><span class="titulos2">Ingresar la información sin acentos</span></td>
      </tr>
      <tr>
        <td colspan="5" align="center"><p class="letra_folio">&nbsp;</p>
          <p class="letra_folio">Campos obligatorios *</p></td>
      </tr>
      <tr>
        <td colspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td width="164"><span class="letra_folio">*</span> FECHA DE INGRESO</td>
        <td colspan="4" valign="top"><input name="fecha_ing_adm" type="date" class="color_fondo_azul_left" id="fecha_ing_adm" required="required"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> FUNCIÓN</td>
        <td colspan="4"><select name="funcion_adm" size="1" class="color_fondo_azul_left" id="grado2" required="required">
         <option selected="selected" disabled="disabled"  value="" >--Seleccione--</option>
          <option value="PERSONAL DE APOYO">PERSONAL DE APOYO</option>
          <option value="PERSONAL ADMINISTRATIVO">PERSONAL ADMINISTRATIVO</option>
        </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> ACTIVIDAD QUE REALIZA</td>
        <td colspan="4"><input required="required"  name="especifique_adm" type="text" class="color_fondo_azul_left" id="especifique_adm" size="40" maxlength="150" placeholder="  DESCRIBA SU ACTIVIDAD " onkeyup="this.value=this.value.toUpperCase()"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="5" align="center"><strong>HORARIO POR DÍA</strong></td>
        </tr>
      <tr>
        <td height="29" colspan="5" align="left"><span class="letra_folio">* Ingresar horario sólo donde aplique </span></td>
        </tr>
      <tr>
        <td height="29" align="center">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">LUNES</td>
        <td colspan="4">ENTRADA
          <input name="lunes_e_adm" type="time" class="color_fondo_azul_left" id="lunes_e_adm" /> 
          SALIDA
        <input name="lunes_s_adm" type="time" class="color_fondo_azul_left" id="lunes_s_adm" /></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">MARTES</td>
        <td colspan="4">ENTRADA
          <input name="martes_e_adm" type="time" class="color_fondo_azul_left" id="martes_e_adm" />
SALIDA
<input name="martes_s_adm" type="time" class="color_fondo_azul_left" id="martes_s_adm" /></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">MIERCOLES</td>
        <td colspan="4">ENTRADA
          <input name="miercoles_e_adm" type="time" class="color_fondo_azul_left" id="miercoles_e_adm" />
SALIDA
<input name="miercoles_s_adm" type="time" class="color_fondo_azul_left" id="miercoles_s_adm" /></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">JUEVES</td>
        <td colspan="4">ENTRADA
          <input name="jueves_e_adm" type="time" class="color_fondo_azul_left" id="jueves_e_adm" />
SALIDA
<input name="jueves_s_adm" type="time" class="color_fondo_azul_left" id="jueves_s_adm" /></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">VIERNES </td>
        <td colspan="4">ENTRADA
          <input name="viernes_e_adm" type="time" class="color_fondo_azul_left" id="viernes_e_adm" />
SALIDA
<input name="viernes_s_adm" type="time" class="color_fondo_azul_left" id="viernes_s_adm" /></td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td width="64">&nbsp;</td>
        <td width="80">&nbsp;</td>
        <td width="53">&nbsp;</td>
        <td width="296">&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td><input type="submit" name="guardar" id="guardar" value="SIGUIENTE" onclick="pregunta()"/></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td><p>&nbsp;</p>
          <p>&nbsp;</p></td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
    </table>
   
   
   </form>
    
    
  <!-- InstanceEndEditable --></div>
  <div class="footer" id="footer_stc"></div>
</div>

</body>
<!-- InstanceEnd --></html>
