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

////mysql_close($query);


?>

<!-- InstanceBeginEditable name="doctitle" -->
<title>CSES</title>

<?

////////////////// Importamos variables y se genera su session ///////////

////import_request_variables ("P","f_");

	$_SESSION['tri']=$f_trimestre1;
	$trimestre=$_SESSION['tri'];

?>

<script language="JavaScript"> 
function pregunta(){ 
    if (confirm('¿Estás seguro que la información capturada es correcta?')){ 
       document.visita.submit() 
    } 
} 
</script>

<script laguage="javascript"> 

function activar(elemento)
{

if(elemento.entidad_nac.options[elemento.entidad_nac.selectedIndex].value=="EXTRANJERO")
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
  
  <form name="general" method="post" action="captura_dom.php">
    <p>&nbsp;</p>
    <table width="553" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="5" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td height="37" colspan="5" align="center"><p class="tituloAviso">DATOS PERSONALES<br>
          (personal docente)</p></td>
      </tr>
      <tr>
        <td colspan="5" align="center" class="titulos2" >Ingresar la información sin acentos</td>
      </tr>
      <tr>
        <td colspan="5" align="center" class="letra_folio" ><p>&nbsp;</p>
          <p>Campos obligatorios *</p></td>
      </tr>
      <tr>
        <td colspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td width="208"><span class="letra_folio">*</span> CURP </td>
        <td colspan="4"><input required="required"   name="curp" type="text" class="color_fondo_azul_left" id="textfield" size="40" maxlength="18" onkeyup="this.value=this.value.toUpperCase()"/></td>
        </tr>
      <tr>
        <td colspan="5">&nbsp;</td>
      </tr>
      <tr>
        <td> <span class="letra_folio">*</span> RFC </td>
        <td colspan="4"><input required="required"  name="rfc" type="text" class="color_fondo_azul_left" id="textfield2" size="40" maxlength="13" onkeyup="this.value=this.value.toUpperCase()"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> APELLIDO PATERNO</td>
        <td colspan="4"><input required  name="paterno" type="text" class="color_fondo_azul_left" id="paterno" size="40" maxlength="60" onkeyup="this.value=this.value.toUpperCase()"/></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="4">&nbsp;</td>
        <td width="127">&nbsp;</td>
        <td width="120">&nbsp;</td>
        <td width="94">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> APELLIDO MATERNO</td>
        <td colspan="4"><input required  name="materno" type="text" class="color_fondo_azul_left" id="materno" size="40" maxlength="60" onkeyup="this.value=this.value.toUpperCase()"/></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> NOMBRE (S) </td>
        <td colspan="4"><input required  name="nombre" type="text" class="color_fondo_azul_left" id="nombre" size="40" maxlength="80" onkeyup="this.value=this.value.toUpperCase()"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> SEXO </td>
        <td colspan="4"><select required="required" name="sexo" size="1" class="color_fondo_azul_left" id="grado" onchange="activar(this.form)">
         <option selected="selected" disabled="disabled"  value="" >--Seleccione--</option>
          <option value="F">FEMENINO</option>
          <option value="M">MASCULINO</option>
        </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> FECHA NACIMIENTO</td>
        <td colspan="4"><input name="fecha_nac" type="date" class="color_fondo_azul_left" id="fecha_nac" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> ENTIDAD NACIMIENTO</td>
        <td colspan="4" valign="top">
        <select required="required" name="entidad_nac" size="1" class="color_fondo_azul_left"  id="entidad_nac" onChange="activar(this.form)">
          <option selected="selected" disabled="disabled"  value="" >--Seleccione--</option>
                   <option value="EXTRANJERO"> EXTRANJERO </option>
          <option value="CIUDAD DE MEXICO"> CIUDAD DE MÉXICO</option>
          <option value="NUEVO LEON"> NUEVO LEON</option>
          <option value="BAJA CALIFORNIA SUR"> BAJA CALIFORNIA SUR</option>          
          <option value="BAJA CALIFORNIA"> BAJA CALIFORNIA</option> 
          <option value="SONORA"> SONORA</option>
          <option value="COAUHUILA"> COAUHUILA</option>
          <option value="COLIMA"> COLIMA</option>
          <option value="AGUASCALIENTES"> AGUASCALIENTES</option> 
          <option value="SINALOA"> SINALOA</option>
          <option value="QUINTANA ROO"> QUINTANA ROO </option>
          <option value="TAMAULIPAS"> TAMAULIPAS</option>
          <option value="QUERETARO"> QUERETARO</option>
          <option value="MORELOS"> MORELOS</option>
          <option value="MEXICO"> MÉXICO</option>
          <option value="JALISCO"> JALISCO</option>
          <option value="NAYARIT"> NAYARIT</option>
          <option value="CHIHUAHUA"> CHIHUAHUA</option>
          <option value="CAMPECHE"> CAMPECHE</option>
          <option value="TABASCO"> TABASCO</option>
          <option value="YUCATAN"> YUCATAN</option>
          <option value="DURANGO"> DURANGO</option>
          <option value="TLAXCALA"> TLAXCALA</option>
          <option value="SAN LUIS POTOSI"> SAN LUIS POTOSI</option>
          <option value="HIDALGO"> HIDALGO</option>
          <option value="PUEBLA"> PUEBLA</option>
          <option value="GUANAJUATO"> GUANAJUATO</option>
          <option value="ZACATECAS"> ZACATECAS</option>
          <option value="VERACRUZ"> VERACRUZ</option>
          <option value="MICHOACAN"> MICHOACAN</option>
          <option value="GUERRERO"> GUERRERO</option>
          <option value="OAXACA"> OAXACA</option>
          <option value="CHIAPAS"> CHIAPAS</option>
        </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="5"  id="aparece" style="display:none"><p>INFORMACIÓN DE ESTANCIA EN MÉXICO:</p>
          <span class="letra_folio">*</span> N° DE PERMISO
          <input  name="permiso" type="text" class="color_fondo_azul_left" id="textfield3" size="40" maxlength="13" onkeyup="this.value=this.value.toUpperCase()"/>
            <br />
          <p><span class="letra_folio">*</span> VIGENCIA 
            <br />
          <input name="vigencia" type="date" class="color_fondo_azul_left" id="vigencia" />
          </td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> ESTADO CIVIL </td>
        <td colspan="4"><select required="required" name="estado_c" size="1" class="color_fondo_azul_left" >
           <option value="CASADO(A)">CASADO(A)</option>
          <option value="SOLTERO(A)">SOLTERO(A)</option>
          <option value="DIVORCIADO(A)">DIVORCIADO(A)</option>
          <option value="VIUDO(A)">VIUDO(A)</option>
          <option value="CONCUBINATO(A)">CONCUBINATO(A)</option>  
        </select></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
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
