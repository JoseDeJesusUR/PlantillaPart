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

    $_SESSION['nivel_estx']=$f_nivel_est;
	$nivel_est_doc=$_SESSION['nivel_estx'];
	
	$_SESSION['status_estx']=$f_status_est;
	$status_est_doc=$_SESSION['status_estx'];
	
	$_SESSION['egresadox']=$f_egresado;
	$egresado_doc=$_SESSION['egresadox'];		

    $_SESSION['des_egresadox']=$f_des_egresado;
	$des_egresado_doc=$_SESSION['des_egresadox'];	
	
		
    $_SESSION['perfilx']=$f_perfil;
	$perfil_doc=$_SESSION['perfilx'];
	
	
	
	$_SESSION['profesionx']=$f_profesion;
	$profesion_doc=$_SESSION['profesionx'];	

	$_SESSION['cedulax']=$f_cedula;
	$cedula_doc=$_SESSION['cedulax'];
	
	$_SESSION['otros_estx']=$f_otros_est;
	$otros_est_doc=$_SESSION['otros_estx'];

	$_SESSION['cursosx']=$f_cursos;
	$cursos_doc=$_SESSION['cursosx'];




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

if(elemento.docente_tipo.options[elemento.docente_tipo.selectedIndex].value=="OTRO")
  {
    var textfield = document.createElement('Input');

    document.getElementById("aparece").style.display = "inline";
  }
else
  {
     document.getElementById("aparece").style.display = "none";}
  }

</script>

<script laguage="javascript">

function activar2(elemento)
{

if(elemento.otro_empleo.options[elemento.otro_empleo.selectedIndex].value=="SI")
  {
    var textfield = document.createElement('Input');

    document.getElementById("aparece2").style.display = "inline";
  }
else
  {
     document.getElementById("aparece2").style.display = "none";}
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
  
  <form name="general" method="post" action="control_docente.php">  
    <p>&nbsp;</p>
    <table width="657" border="0" align="center" cellpadding="0" cellspacing="0">
      <tr>
        <td colspan="5" align="center">&nbsp;</td>
      </tr>
      <tr>
        <td height="37" colspan="5" align="center"><p class="tituloAviso">información laboral<br>
          (personal docente)</p></td>
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
        <td colspan="4" valign="top"><input name="fecha_ing" type="date" class="color_fondo_azul_left" id="fecha_ing" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> FUNCIÓN</td>
        <td colspan="4"><select required="required" name="funcion" size="1" class="color_fondo_azul_left" id="docente_tipo" onChange="activar(this.form)">
         <option selected="selected" disabled="disabled"  value="" >--Seleccione--</option>
          <option value="DOCENTE">DOCENTE</option>
          <option value="PROF. ACTIVIDAD ARTISTICA">PROF. ACTIVIDAD ARTISTICA</option>
          <option value="PROF. ACTIVIDAD TECNOLOGICA">PROF. ACTIVIDAD TECNOLÓGICA</option>
          <option value="PROF. EDUCACION FISICA">PROF. EDUCACIÓN FÍSICA</option>
          <option value="DOCENTE ADICIONAL">DOCENTE ADICIONAL</option>
          <option value="OTRO">OTRO</option>
          
        </select></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="5" id="aparece" style="display:none">DESCRIBA:<input  name="des_funcion" type="text" class="color_fondo_azul_left" id="textfield3" size="40" maxlength="200" onkeyup="this.value=this.value.toUpperCase()"/>
          </td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td colspan="5"><span class="letra_folio">*Por lo menos deberá ingresar una asignatura en caso de ser docente frente a grupo.</span></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>  ASIGNATURA 1 <span class="letra_folio">*</span></td>
        <td colspan="4"><input  name="asignatura1" type="text" class="color_fondo_azul_left" id="asignatura1" size="40" maxlength="150" placeholder=" ESPECIFIQUE MATERIA QUE IMPARTE" onkeyup="this.value=this.value.toUpperCase()"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>ASIGNATURA 2</td>
        <td colspan="4"><input  name="asignatura2" type="text" class="color_fondo_azul_left" id="asignatura2" size="40" maxlength="150" placeholder=" ESPECIFIQUE MATERIA QUE IMPARTE" onkeyup="this.value=this.value.toUpperCase()"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td> ASIGNATURA 3</td>
        <td colspan="4"><input  name="asignatura3" type="text" class="color_fondo_azul_left" id="asignatura3" size="40" maxlength="150" placeholder=" ESPECIFIQUE MATERIA QUE IMPARTE" onkeyup="this.value=this.value.toUpperCase()"/></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td>ASIGNATURA 4</td>
        <td colspan="4">
		<!--
		< ?


echo"<select  name=especialida3 combo size=1 class='color_fondo_azul_left' >";
          echo "<option selected disabled value=''>--Seleccione--</option>";
	
	$query = mysql_query("SELECT  esp_doc FROM especial  ORDER BY esp_doc"); 
	
        while($row = mysql_fetch_array($query))
            {
            //$row=utf8_decode $alguno=utf8_decode($alguno
			 
			 echo utf8_decode.("<option value=$row[esp_doc]>$row[esp_doc] </option>");
            }
			
        echo"</select>";

?>-->
          <input   name="asignatura4" type="text" class="color_fondo_azul_left" id="asignatura4" size="40" maxlength="150" placeholder=" ESPECIFIQUE MATERIA QUE IMPARTE" onkeyup="this.value=this.value.toUpperCase()"/></td>
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
        <td colspan="5"><span class="letra_folio">* En caso de no contar con hrs. de servicio o sin grupo  debera ingresar el número (cero)</span></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> HORAS FRENTE A GRUPO</td>
        <td colspan="4"><input required  name="hr_grupo" type="number" class="color_fondo_azul_left" id="hr_grupo" size="2" maxlength="2" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> HORAS SERVICIO</td>
        <td colspan="4"><input required="required"  name="hr_servi" type="number" class="color_fondo_azul_left" id="hr_servi" size="2" maxlength="2" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td><span class="letra_folio">*</span> HORAS SIN GRUPO</td>
        <td colspan="4"><input required="required"  name="hr_sin" type="number" class="color_fondo_azul_left" id="hr_sin" size="2" maxlength="2" /></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td width="64">&nbsp;</td>
        <td width="80">&nbsp;</td>
        <td width="53">&nbsp;</td>
        <td width="296">&nbsp;</td>
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
        <td colspan="3">&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="31" align="right">ENTRADA</td>
        <td colspan="4"><select  name="hr_lunE" size="1" class="color_fondo_azul_left" >
          <option selected="selected" disabled="disabled"  value="" >--Horas--</option>
          <option value="5:">5 hr</option>
          <option value="6:">6 hr</option>
          <option value="7:">7 hr</option>
          <option value="8:">8 hr</option>
          <option value="9:">9 hr</option>
          <option value="10:">10 hr</option>
          <option value="11:">11 hr</option>
          <option value="12:">12 hr</option>
          <option value="13:">13 hr</option>
          <option value="14:">14 hr</option>
          <option value="15:">15 hr</option>
          <option value="16:">16 hr</option>
          <option value="17:">17 hr</option>
          <option value="18:">18 hr</option>
          <option value="19:">19 hr</option>
          <option value="20:">20 hr</option>
          <option value="21:">21 hr</option>
        </select>
&nbsp;
<select  name="min_lunE" size="1" class="color_fondo_azul_left" >
  <option selected="selected" disabled="disabled"  value="" >--Minutos--</option>
  <option value="00">00 min</option>
  <option value="05">5 min</option>
  <option value="10">10 min</option>
  <option value="15">15 min</option>
  <option value="20">20 min</option>
  <option value="25">25 min</option>
  <option value="30">30 min</option>
  <option value="35">35 min</option>
  <option value="40">40 min</option>
  <option value="45">45 min</option>
  <option value="50">50 min</option>
  <option value="55">55 min</option>
</select></td>
      </tr>
      <tr>
        <td align="right">SALIDA</td>
        <td colspan="4"><select  name="hr_lunS" size="1" class="color_fondo_azul_left" >
            <option selected="selected" disabled="disabled"  value="" >--Horas--</option>
            <option value="5:">5 hr</option>
            <option value="6:">6 hr</option>
            <option value="7:">7 hr</option>
            <option value="8:">8 hr</option>
            <option value="9:">9 hr</option>
            <option value="10:">10 hr</option>
            <option value="11:">11 hr</option>
            <option value="12:">12 hr</option>
            <option value="13:">13 hr</option>
            <option value="14:">14 hr</option>
            <option value="15:">15 hr</option>
            <option value="16:">16 hr</option>
            <option value="17:">17 hr</option>
            <option value="18:">18 hr</option>
            <option value="19:">19 hr</option>
            <option value="20:">20 hr</option>
            <option value="21:">21 hr</option>
          </select>
&nbsp;
<select  name="min_lunS" size="1" class="color_fondo_azul_left" >
  <option selected="selected" disabled="disabled"  value="" >--Minutos--</option>
  <option value="00">00 min</option>
  <option value="05">5 min</option>
  <option value="10">10 min</option>
  <option value="15">15 min</option>
  <option value="20">20 min</option>
  <option value="25">25 min</option>
  <option value="30">30 min</option>
  <option value="35">35 min</option>
  <option value="40">40 min</option>
  <option value="45">45 min</option>
  <option value="50">50 min</option>
  <option value="55">55 min</option>
</select></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">MARTES</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="38" align="right">ENTRADA</td>
        <td colspan="4"><select  name="hr_marE" size="1" class="color_fondo_azul_left" id="hr_marE" >
          <option selected="selected" disabled="disabled"  value="" >--Horas--</option>
          <option value="5:">5 hr</option>
          <option value="6:">6 hr</option>
          <option value="7:">7 hr</option>
          <option value="8:">8 hr</option>
          <option value="9:">9 hr</option>
          <option value="10:">10 hr</option>
          <option value="11:">11 hr</option>
          <option value="12:">12 hr</option>
          <option value="13:">13 hr</option>
          <option value="14:">14 hr</option>
          <option value="15:">15 hr</option>
          <option value="16:">16 hr</option>
          <option value="17:">17 hr</option>
          <option value="18:">18 hr</option>
          <option value="19:">19 hr</option>
          <option value="20:">20 hr</option>
          <option value="21:">21 hr</option>
        </select>
&nbsp;
<select  name="min_marE" size="1" class="color_fondo_azul_left" id="min_marE" >
  <option selected="selected" disabled="disabled"  value="" >--Minutos--</option>
  <option value="00">00 min</option>
  <option value="05">5 min</option>
  <option value="10">10 min</option>
  <option value="15">15 min</option>
  <option value="20">20 min</option>
  <option value="25">25 min</option>
  <option value="30">30 min</option>
  <option value="35">35 min</option>
  <option value="40">40 min</option>
  <option value="45">45 min</option>
  <option value="50">50 min</option>
  <option value="55">55 min</option>
</select></td>
      </tr>
      <tr>
        <td align="right">SALIDA</td>
        <td colspan="4"><select  name="hr_marS" size="1" class="color_fondo_azul_left" id="hr_marS" >
          <option selected="selected" disabled="disabled"  value="" >--Horas--</option>
          <option value="5:">5 hr</option>
          <option value="6:">6 hr</option>
          <option value="7:">7 hr</option>
          <option value="8:">8 hr</option>
          <option value="9:">9 hr</option>
          <option value="10:">10 hr</option>
          <option value="11:">11 hr</option>
          <option value="12:">12 hr</option>
          <option value="13:">13 hr</option>
          <option value="14:">14 hr</option>
          <option value="15:">15 hr</option>
          <option value="16:">16 hr</option>
          <option value="17:">17 hr</option>
          <option value="18:">18 hr</option>
          <option value="19:">19 hr</option>
          <option value="20:">20 hr</option>
          <option value="21:">21 hr</option>
        </select>
&nbsp;
<select  name="min_marS" size="1" class="color_fondo_azul_left" id="min_marS" >
  <option selected="selected" disabled="disabled"  value="" >--Minutos--</option>
  <option value="00">00 min</option>
  <option value="05">5 min</option>
  <option value="10">10 min</option>
  <option value="15">15 min</option>
  <option value="20">20 min</option>
  <option value="25">25 min</option>
  <option value="30">30 min</option>
  <option value="35">35 min</option>
  <option value="40">40 min</option>
  <option value="45">45 min</option>
  <option value="50">50 min</option>
  <option value="55">55 min</option>
</select></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">MIERCOLES</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="34" align="right">ENTRADA</td>
        <td colspan="4"><select  name="hr_mieE" size="1" class="color_fondo_azul_left" id="hr_mieE" >
          <option selected="selected" disabled="disabled"  value="" >--Horas--</option>
          <option value="5:">5 hr</option>
          <option value="6:">6 hr</option>
          <option value="7:">7 hr</option>
          <option value="8:">8 hr</option>
          <option value="9:">9 hr</option>
          <option value="10:">10 hr</option>
          <option value="11:">11 hr</option>
          <option value="12:">12 hr</option>
          <option value="13:">13 hr</option>
          <option value="14:">14 hr</option>
          <option value="15:">15 hr</option>
          <option value="16:">16 hr</option>
          <option value="17:">17 hr</option>
          <option value="18:">18 hr</option>
          <option value="19:">19 hr</option>
          <option value="20:">20 hr</option>
          <option value="21:">21 hr</option>
        </select>
&nbsp;
<select  name="min_mieE" size="1" class="color_fondo_azul_left" id="min_mieE" >
  <option selected="selected" disabled="disabled"  value="" >--Minutos--</option>
  <option value="00">00 min</option>
  <option value="05">5 min</option>
  <option value="10">10 min</option>
  <option value="15">15 min</option>
  <option value="20">20 min</option>
  <option value="25">25 min</option>
  <option value="30">30 min</option>
  <option value="35">35 min</option>
  <option value="40">40 min</option>
  <option value="45">45 min</option>
  <option value="50">50 min</option>
  <option value="55">55 min</option>
</select></td>
      </tr>
      <tr>
        <td align="right">SALIDA</td>
        <td colspan="4"><select  name="hr_mieS" size="1" class="color_fondo_azul_left" id="hr_mieS" >
          <option selected="selected" disabled="disabled"  value="" >--Horas--</option>
          <option value="5:">5 hr</option>
          <option value="6:">6 hr</option>
          <option value="7:">7 hr</option>
          <option value="8:">8 hr</option>
          <option value="9:">9 hr</option>
          <option value="10:">10 hr</option>
          <option value="11:">11 hr</option>
          <option value="12:">12 hr</option>
          <option value="13:">13 hr</option>
          <option value="14:">14 hr</option>
          <option value="15:">15 hr</option>
          <option value="16:">16 hr</option>
          <option value="17:">17 hr</option>
          <option value="18:">18 hr</option>
          <option value="19:">19 hr</option>
          <option value="20:">20 hr</option>
          <option value="21:">21 hr</option>
        </select>
&nbsp;
<select  name="min_mieS" size="1" class="color_fondo_azul_left" id="min_mieS" >
  <option selected="selected" disabled="disabled"  value="" >--Minutos--</option>
  <option value="00">00 min</option>
  <option value="05">5 min</option>
  <option value="10">10 min</option>
  <option value="15">15 min</option>
  <option value="20">20 min</option>
  <option value="25">25 min</option>
  <option value="30">30 min</option>
  <option value="35">35 min</option>
  <option value="40">40 min</option>
  <option value="45">45 min</option>
  <option value="50">50 min</option>
  <option value="55">55 min</option>
</select></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">JUEVES</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="37" align="right">ENTRADA</td>
        <td colspan="4"><select  name="hr_jueE" size="1" class="color_fondo_azul_left" id="hr_jueE" >
          <option selected="selected" disabled="disabled"  value="" >--Horas--</option>
          <option value="5:">5 hr</option>
          <option value="6:">6 hr</option>
          <option value="7:">7 hr</option>
          <option value="8:">8 hr</option>
          <option value="9:">9 hr</option>
          <option value="10:">10 hr</option>
          <option value="11:">11 hr</option>
          <option value="12:">12 hr</option>
          <option value="13:">13 hr</option>
          <option value="14:">14 hr</option>
          <option value="15:">15 hr</option>
          <option value="16:">16 hr</option>
          <option value="17:">17 hr</option>
          <option value="18:">18 hr</option>
          <option value="19:">19 hr</option>
          <option value="20:">20 hr</option>
          <option value="21:">21 hr</option>
        </select>
&nbsp;
<select  name="min_jueE" size="1" class="color_fondo_azul_left" id="min_jueE" >
  <option selected="selected" disabled="disabled"  value="" >--Minutos--</option>
  <option value="00">00 min</option>
  <option value="05">5 min</option>
  <option value="10">10 min</option>
  <option value="15">15 min</option>
  <option value="20">20 min</option>
  <option value="25">25 min</option>
  <option value="30">30 min</option>
  <option value="35">35 min</option>
  <option value="40">40 min</option>
  <option value="45">45 min</option>
  <option value="50">50 min</option>
  <option value="55">55 min</option>
</select></td>
      </tr>
      <tr>
        <td align="right">SALIDA</td>
        <td colspan="4"><select  name="hr_jueS" size="1" class="color_fondo_azul_left" id="hr_jueS" >
          <option selected="selected" disabled="disabled"  value="" >--Horas--</option>
          <option value="5:">5 hr</option>
          <option value="6:">6 hr</option>
          <option value="7:">7 hr</option>
          <option value="8:">8 hr</option>
          <option value="9:">9 hr</option>
          <option value="10:">10 hr</option>
          <option value="11:">11 hr</option>
          <option value="12:">12 hr</option>
          <option value="13:">13 hr</option>
          <option value="14:">14 hr</option>
          <option value="15:">15 hr</option>
          <option value="16:">16 hr</option>
          <option value="17:">17 hr</option>
          <option value="18:">18 hr</option>
          <option value="19:">19 hr</option>
          <option value="20:">20 hr</option>
          <option value="21:">21 hr</option>
        </select>
&nbsp;
<select  name="min_jueS" size="1" class="color_fondo_azul_left" id="min_jueS" >
  <option selected="selected" disabled="disabled"  value="" >--Minutos--</option>
  <option value="00">00 min</option>
  <option value="05">5 min</option>
  <option value="10">10 min</option>
  <option value="15">15 min</option>
  <option value="20">20 min</option>
  <option value="25">25 min</option>
  <option value="30">30 min</option>
  <option value="35">35 min</option>
  <option value="40">40 min</option>
  <option value="45">45 min</option>
  <option value="50">50 min</option>
  <option value="55">55 min</option>
</select></td>
      </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td align="left">VIERNES </td>
        <td colspan="4">&nbsp;</td>
      </tr>
      <tr>
        <td height="37" align="right">ENTRADA</td>
        <td colspan="4"><select  name="hr_vieE" size="1" class="color_fondo_azul_left" id="hr_vieE" >
          <option selected="selected" disabled="disabled"  value="" >--Horas--</option>
          <option value="5:">5 hr</option>
          <option value="6:">6 hr</option>
          <option value="7:">7 hr</option>
          <option value="8:">8 hr</option>
          <option value="9:">9 hr</option>
          <option value="10:">10 hr</option>
          <option value="11:">11 hr</option>
          <option value="12:">12 hr</option>
          <option value="13:">13 hr</option>
          <option value="14:">14 hr</option>
          <option value="15:">15 hr</option>
          <option value="16:">16 hr</option>
          <option value="17:">17 hr</option>
          <option value="18:">18 hr</option>
          <option value="19:">19 hr</option>
          <option value="20:">20 hr</option>
          <option value="21:">21 hr</option>
        </select>
&nbsp;
<select  name="min_vieE" size="1" class="color_fondo_azul_left" id="min_vieE" >
  <option selected="selected" disabled="disabled"  value="" >--Minutos--</option>
  <option value="00">00 min</option>
  <option value="05">5 min</option>
  <option value="10">10 min</option>
  <option value="15">15 min</option>
  <option value="20">20 min</option>
  <option value="25">25 min</option>
  <option value="30">30 min</option>
  <option value="35">35 min</option>
  <option value="40">40 min</option>
  <option value="45">45 min</option>
  <option value="50">50 min</option>
  <option value="55">55 min</option>
</select></td>
        </tr>
      <tr>
        <td align="right"> SALIDA</td>
        <td colspan="4"><select  name="hr_vieS" size="1" class="color_fondo_azul_left" id="hr_vieS" >
          <option selected="selected" disabled="disabled"  value="" >--Horas--</option>
          <option value="5:">5 hr</option>
          <option value="6:">6 hr</option>
          <option value="7:">7 hr</option>
          <option value="8:">8 hr</option>
          <option value="9:">9 hr</option>
          <option value="10:">10 hr</option>
          <option value="11:">11 hr</option>
          <option value="12:">12 hr</option>
          <option value="13:">13 hr</option>
          <option value="14:">14 hr</option>
          <option value="15:">15 hr</option>
          <option value="16:">16 hr</option>
          <option value="17:">17 hr</option>
          <option value="18:">18 hr</option>
          <option value="19:">19 hr</option>
          <option value="20:">20 hr</option>
          <option value="21:">21 hr</option>
        </select>
&nbsp;
<select  name="min_vieS" size="1" class="color_fondo_azul_left" id="min_vieS" >
  <option selected="selected" disabled="disabled"  value="" >--Minutos--</option>
  <option value="00">00 min</option>
  <option value="05">5 min</option>
  <option value="10">10 min</option>
  <option value="15">15 min</option>
  <option value="20">20 min</option>
  <option value="25">25 min</option>
  <option value="30">30 min</option>
  <option value="35">35 min</option>
  <option value="40">40 min</option>
  <option value="45">45 min</option>
  <option value="50">50 min</option>
  <option value="55">55 min</option>
</select></td>
        </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="5" align="center"><strong>OTRO EMPLEO</strong></td>
        </tr>
      <tr>
        <td colspan="5" align="left">&nbsp;</td>
        </tr>
      <tr>
        <td align="center">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td align="left">OTRO EMPLEO</td>
        <td colspan="4"><select required="required" name="otro_empleo" size="1" class="color_fondo_azul_left" id="otro_empleo" onchange="activar2(this.form)">
          <option selected="selected" disabled="disabled"  value="" >--Seleccione--</option>   
          <option value="NO">NO</option>
          <option value="SI">SI</option>
        </select></td>
        </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td colspan="5" align="left" id="aparece2" style="display:none"><p>DESCRIBA EL NOMBRE DE LA INTITUCIÓN Y EL NIVEL EDUCATIVO:
            <textarea name="des_empleo" cols="40" class="color_fondo_azul_left" id="textfield3" onkeyup="this.value=this.value.toUpperCase()"></textarea>
        </p>
          <p>INGRESE EL CCT Y EL NÚMERO DE HORA FRENTE A GRUPO:          </p>
          <table width="75%" border="0" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <th width="51%" scope="row">CLAVE CCT 1
                <input  name="cct_otro1" type="text" class="color_fondo_azul_left" id="cct_otro1" size="10" maxlength="10" onkeyup="this.value=this.value.toUpperCase()"/>              </th>
              <td width="49%">HORAS
                <input   name="hr_otro1"  class="color_fondo_azul_left" id="hr_otro1" size="10" maxlength="2" /></td>
            </tr>
            <tr>
              <th align="left" scope="row">&nbsp;</th>
              <td align="right">&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">CLAVE CCT 2
                <input   name="cct_otro2" type="text" class="color_fondo_azul_left" id="cct_otro2" size="10" maxlength="10" onkeyup="this.value=this.value.toUpperCase()"/></th>
              <td><span class="celda">HORAS</span>
                <input   name="hr_otro2"  class="color_fondo_azul_left" id="hr_otro2" size="10" maxlength="2" /></td>
            </tr>
            <tr>
              <th scope="row">&nbsp;</th>
              <td>&nbsp;</td>
            </tr>
            <tr>
              <th scope="row">CLAVE CCT 3
                <input   name="cct_otro3" type="text" class="color_fondo_azul_left" id="cct_otro3" size="10" maxlength="10" onkeyup="this.value=this.value.toUpperCase()"/>              </th>
              <td>HORAS
                <input   name="hr_otro3"  class="color_fondo_azul_left" id="hr_otro3" size="10" maxlength="2" /></td>
            </tr>
      </table>
          <p>&nbsp;</p></td>
        </tr>
      <tr>
        <td align="left">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
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
