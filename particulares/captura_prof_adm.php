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

    $_SESSION['entidadx']=$f_entidad_adm;
	$entidad_doc_adm=$_SESSION['entidadx'];
	
	$_SESSION['delegacionx']=$f_delegacion_adm;
	$delegacion_doc_adm=$_SESSION['delegacionx'];
	
	$_SESSION['coloniax']=$f_colonia_adm;
	$colonia_doc_adm=$_SESSION['coloniax'];		

    $_SESSION['domiciliox']=$f_domicilio_adm;
	$domicilio_doc_adm=$_SESSION['domiciliox'];		
    
	$_SESSION['cpx']=$f_cp_adm;
	$cp_doc_adm=$_SESSION['cpx'];	

	$_SESSION['telefonox']=$f_telefono_adm;
	$telefono_doc_adm=$_SESSION['telefonox'];




?>

<script language="JavaScript"> 
function pregunta(){ 
    if (confirm('??Est??s seguro que la informaci??n capturada es correcta?')){ 
       document.visita.submit() 
    } 
} 
</script>

<script laguage="javascript">

function activar(elemento)
{

if(elemento.egresado.options[elemento.egresado.selectedIndex].value=="1")
  {
    var textfield = document.createElement('Input');

    document.getElementById("aparece").style.display = "inline";
  }
else
  {
     document.getElementById("aparece").style.display = "none";}
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
   
   <!-----------------MEN??------------------>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">PLANTILLA</a>
    <div class="dropdown-content">
      <a href="result_docente.php">DOCENTE</a>
      <a href="result_adm.php">ADMINISTRATIVO</a>
      <a href="result_dir.php">DIRECTIVO</a>
      <a href="historial.php">HISTORIAL</a> 
  
  
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
  
  <form name="general" method="post" action="captura_lab_adm.php">
    <p>&nbsp;</p>
    <table width="621" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="5" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td height="37" colspan="5" align="center"><p class="vinculo_error">PREPARACI??N ACADEMICA<br>
          (PERSONAL ADMINISTRATIVO Y DE APOYO)</p></td>
      </tr>
      <tr>
        <td colspan="5" align="center" ><span class="titulos2">Ingresar la informaci??n sin acentos</span></td>
      </tr>
      <tr>
        <td colspan="5" align="center"><p class="letra_folio">&nbsp;</p>
          <p class="letra_folio">Campos obligatorios *</p></td>
      </tr>
      <tr>
        <td colspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td width="170"><span class="letra_folio">*</span> NIVEL MAX. ESTUDIOS??</td>
        <td colspan="4" valign="top"><select required="required" name="nivel_est_adm" size="1" class="color_fondo_azul_left" id="grado2" onchange="activar(this.form)">
          <option selected="selected" disabled="disabled"  value="" >--Seleccione--</option>
          <option value="PRIMARIA">PRIMARIA</option>
          <option value="SECUNDARIA">SECUNDARIA</option>
          <option value="MEDIA SUPERIOR">PREPARATORIA O EQUIVALENTE</option>
          <option value="LICENCIATURA">LICENCIATURA</option>
        </select></td>
        </tr>
      <tr>
        <td colspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> ESTATUS NIV. ESTUDIOS</td>
        <td colspan="4" valign="top"><select required="required" name="status_est_adm" size="1" class="color_fondo_azul_left" id="status_est_adm" onchange="activar(this.form)">
          <option selected="selected" disabled="disabled"  value="" >--Seleccione--</option>
          <option value="TITULADO">TITULADO</option>
          <option value="PASANTE">PASANTE</option>
          <option value="CERTIFICADO">CERTIFICADO</option>
          <option value="DIPLOMA">DIPLOMA</option>
           <option value="TRAMITE">EN TR??MITE</option>
          
        </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> EGRESADO DE</td>
        <td colspan="4"><input required="required"  name="egresado_adm" type="text" class="color_fondo_azul_left" id="egresado_adm" size="50" maxlength="100" onkeyup="this.value=this.value.toUpperCase()" placeholder=" ESCRIBA LA INSTITUCION EDUCATIVA DE EGRESO "/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> PERFIL</td>
        <td colspan="4"><input required="required"  name="perfil_adm" type="text" class="color_fondo_azul_left" id="perfil_adm" size="50" maxlength="100" onkeyup="this.value=this.value.toUpperCase()" placeholder=" ESCRIBA EL NOMBRE DEL PERFIL ACADEMICO "/></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="123">&nbsp;</td>
        <td width="175">&nbsp;</td>
        <td width="4">&nbsp;</td>
        <td width="149">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>OTROS ESTUDIOS</td>
        <td colspan="4"><textarea name="otros_est_adm" class="color_fondo_azul_left"   cols="50" rows="5" id="otros_est_adm" placeholder=" DESCRIBA OTROS ESTUDIOS CON LOS QUE CUENTE" onkeyup="this.value=this.value.toUpperCase()"></textarea></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td>CURSOS </td>
        <td colspan="4"><label for="cursos_adm"></label>
          <textarea name="cursos_adm" class="color_fondo_azul_left"   cols="50" rows="5" id="cursos_adm" Placeholder=" DESCRIBA CURSOS" onkeyup="this.value=this.value.toUpperCase()"></textarea></td>
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
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
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
