<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<style>
/** form field **/
form {
  display: block;
  margin: 30px;
  overflow: hidden;
  background: #fff;
  border: 1px solid #e4e4e4;
  border-radius: 5px;
  font-size: 0;
}

form > div > label {
  display: block;
  padding: 20px 20px 10px;
  vertical-align: top;
  font-size: 13px;
  font-weight: bold;
  text-transform: uppercase;
  color: #939393;
  cursor: pointer;
}
form > div.switch > label {
  padding: 16px 20px 13px;
}

.col-2, .col-3, .col-4 { 
  border-bottom: 1px solid #e4e4e4;
}

form > div > .col-4 {
  height: 86px;
}

label > input {
  display: inline-block;
  position: relative;
  width: 100%;
  height: 27px;
  line-height: 27px;
  margin: 5px -5px 0;
  padding: 7px 5px 3px;
  border: none;
  outline: none;
  color: #555;
  font-family: 'Helvetica Neue', Arial, sans-serif;
  font-weight: bold;
  font-size: 14px;
  opacity: .6;
  transition: all linear .3s;
}

.col-submit {
  text-align: center;
  padding: 20px;
}

label > select {
  display: block;
  width: 100%;
  padding: 0;
  color: #555;
  margin: 16px 0 6px;
  font-weight: 500;
  background: transparent;
  border: none;
  outline: none;
  font-family: 'Helvetica Neue', Arial, sans-serif;
  font-size: 14px;
  opacity: .4;
  transition: all linear .3s;
}

label > input:focus, label > select:focus {
  opacity: 1;
}



/** button design based on http://codepen.io/guvootes/pen/eyDAb **/
button {
  width: 100%;
  height: 35px;
  border: none;
  border-radius: 4px;
  margin: 0 0 15px 0;
  font-size: 14px;
  color: #fff;
  font-weight: bold;
  text-shadow: 1px 1px 0 rgba(0,0,0,0.3);
  overflow: hidden;
  outline: none;
}

button.submitbtn {
  background-image: -moz-linear-gradient(#97c16b, #8ab959);
  background-image: -webkit-linear-gradient(#97c16b, #8ab959);
  background-image: linear-gradient(#97c16b, #8ab959);
  border-bottom: 1px solid #648c3a;
  cursor: pointer;
  color: #fff;
}
button.submitbtn:hover {
  background-image: -moz-linear-gradient(#8ab959, #7eaf4a);
  background-image: -webkit-linear-gradient(#8ab959, #7eaf4a);
  background-image: linear-gradient(#8ab959, #7eaf4a);
}
button.submitbtn:active {
  height: 34px;
  border-bottom: 0;
  margin: 1px 0 0 0;
  background-image: -moz-linear-gradient(#7eaf4a, #8ab959);
  background-image: -webkit-linear-gradient(#7eaf4a, #8ab959);
  background-image: linear-gradient(#7eaf4a, #8ab959);
  -moz-box-shadow: inset 0 1px 3px 1px rgba(0, 0, 0, 0.3);
  -webkit-box-shadow: inset 0 1px 3px 1px rgba(0, 0, 0, 0.3);
  box-shadow: inset 0 1px 3px 1px rgba(0, 0, 0, 0.3);
}



/** responsive design **/
@media(min-width: 850px){
  form > div { display: inline-block; }
  .col-submit { display: block; }
  
  .col-2, .col-3, .col-4 { box-shadow: 1px 1px #e4e4e4; border: none; }
  
  .col-2 { width: 50% }
  .col-3 { width: 33.3333333333% }
  .col-4 { width: 25% }
  
  .col-submit button { width: 30%; margin: 0 auto; }
}

</style>
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



<?

////////////////// Importamos variables y se genera su session ///////////

//import_request_variables ("P","f_");

////////////////// Inicio variabale session id_crono

	$_SESSION['rfc_do1']=$_REQUEST['rfc_do']; 
	$rfc_row=$_SESSION['rfc_do1']; 

?>
<?


	
	     ///consulta datos labores 
	    $query3="SELECT * FROM datos_lab WHERE rfc='$rfc_row'"; 
        $result3= mysql_query($query3) or die (mysql_error());

		
		while ($row3 = @mysql_fetch_array($result3)){

	
         ///datos academicos array
        //$id_niv_est2=$row3['niv_max_est'];
	    $id_ing_plantel=$row3['ing_plantel'];
		$id_estatus=$row3['estatus'];
		$id_tipo_empleado=$row3['tipo_docente'];
		$id_funcion=$row3['funcion'];
		$asigantura1=$row3['asignatura1'];
		$asigantura2=$row3['asignatura2'];
		$asigantura3=$row3['asignatura3'];
		$asigantura4=$row3['asignatura4'];
		$id_hrs_gpo=$row3['hrs_gpo'];
		$id_hrs_serv=$row3['hrs_serv'];
		$id_hrs_sin_gpo=$row3['hrs_sin_gpo'];
		
		$id_hr_lun_e=$row3['hr_lun_e'];
		$id_hr_lun_s=$row3['hr_lun_s'];
		$id_hr_mar_e=$row3['hr_mar_e'];
		$id_hr_mar_s=$row3['hr_mar_s'];
		$id_hr_mie_e=$row3['hr_mie_e'];
		$id_hr_mie_s=$row3['hr_mie_s'];
		$id_hr_jue_e=$row3['hr_jue_e'];
		$id_hr_jue_s=$row3['hr_jue_s'];
		$id_hr_vie_e=$row3['hr_vie_e'];
		$id_hr_vie_s=$row3['hr_vie_s'];
		
		$id_cct1=$row3['cct1'];
		$id_cct2=$row3['cct2'];
		$id_cct3=$row3['cct3'];
		$id_hr1=$row3['hr1'];
		$id_hr2=$row3['hr2'];
		$id_hr3=$row3['hr3'];
		$otro_empleo=$row3['otro_empleo'];
		$des_empleo=$row3['des_empleo'];
	

		}
	    



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
    <form name="general" method="post" action="update_doc_lab.php">
    <form onsubmit="return false">
      <div class="col-2">
    <label>
      FECHA INGRESO AL PLANTEL
      <input  id="fecha_ing" name="fecha_ing" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_ing_plantel ?>">
    </label>
  </div>
  <div class="col-2">
 
     <label>
      FUNCIÓN
        <select tabindex="5"  id="funcion" name="funcion" >
        <option ><? echo $id_tipo_empleado ?></option>
        <option value="DOCENTE">DOCENTE</option>
          <option value="PROF. ACTIVIDAD ARTISTICA">PROF. ACTIVIDAD ARTISTICA</option>
          <option value="PROF. ACTIVIDAD TECNOLOGICA">PROF. ACTIVIDAD TECNOLÓGICA</option>
          <option value="PROF. EDUCACION FISICA">PROF. EDUCACIÓN FÍSICA</option>
          <option value="DOCENTE ADICIONAL">DOCENTE ADICIONAL</option>
          <option value="OTRO">OTRO</option>
         </select>
    </label>
    
  </div>
 <form onsubmit="return false">
      <div class="col-2">
    <label>
      ASIGNATURA 1
      <input  id="asignatura1" name="asignatura1" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $asigantura1 ?>">
    </label>
  </div>
  <div class="col-2">
    <label>
    ASIGNATURA 2
      <input  id="asignatura2" name="asignatura2" tabindex="2" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $asigantura2 ?>">
    </label>
  </div>
   <form onsubmit="return false">
      <div class="col-2">
    <label>
    ASIGNATURA 3
      <input  id="asignatura3" name="asignatura3" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $asigantura3 ?>">
    </label>
  </div>
  <div class="col-2">
    <label>
      ASIGNATURA 4
      <input  id="asignatura4" name="asignatura4" tabindex="2" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $asigantura4 ?>">
    </label>
  </div>
   <div class="col-3">
    <label>
       HR FRENTE A GRUPO
      <input  id="hr_grupo" name="hr_grupo" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo $id_hrs_gpo ?>">
    </label>
  </div>
  <div class="col-3">
    <label>
     HR DE SERVICIO
      <input  id="hr_servi" name="hr_servi" tabindex="2" onkeyup="this.value=this.value.toUpperCase()" value="<? echo $id_hrs_serv ?>">
    </label>
  </div>
      
   <div class="col-3">
    <label>
      HR SIN GRUPO
      <input  id="hr_sin" name="hr_sin" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hrs_sin_gpo ?>">
    </label>
  </div>
 
  <div class="col-2">
    <label>
        LUNES ENTRADA
      <input  id="id_hr_lun_e" name="id_hr_lun_e" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hr_lun_e ?>">
    </label>
  </div>

<div class="col-2">
    <label>
      LUNES SALIDA
      <input  id="id_hr_lun_s" name="id_hr_lun_s" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hr_lun_s ?>">
    </label>
  </div>

  
  <div class="col-2">
    <label>
      MARTES ENTRADA
      <input  id="id_hr_mar_e" name="id_hr_mar_e" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hr_mar_e ?>">
    </label>
  </div>
  <div class="col-2">
    <label>
      MARTES SALIDA
      <input  id="id_hr_mar_s" name="id_hr_mar_s" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hr_mar_s?>">
          </label>
  </div>
  
 <div class="col-2">
    <label>
      MIÉRCOLES ENTRADA
      <input  id="id_hr_mie_e" name="id_hr_mie_e" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hr_mie_e ?>">
    </label>
  </div>
  <div class="col-2">
    <label>
      MIÉRCOLES SALIDA
      <input  id="id_hr_mie_s" name="id_hr_mie_s" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hr_mie_s ?>">
          </label>
  </div>
  
  <div class="col-2">
    <label>
      JUEVES ENTRADA
      <input  id="id_hr_jue_e" name="id_hr_jue_e" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hr_jue_e  ?>">
    </label>
  </div>
  <div class="col-2">
    <label>
      JUEVES SALIDA
      <input  id="id_hr_jue_s" name="id_hr_jue_s" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hr_jue_s ?>">
          </label>
  </div>
  
  <div class="col-2">
    <label>
      VIERNES ENTRADA
      <input  id="id_hr_vie_e" name="id_hr_vie_e" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hr_vie_e ?>">
    </label>
  </div>
  <div class="col-2">
    <label>
      VIERNES SALIDA
      <input  id="id_hr_vie_s" name="id_hr_vie_s" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo $id_hr_vie_s ?>">
          </label>
  </div>
  <div class="col-2">
    <label>
      OTRO EMPLEO
      <input  id="otro_empleo" name="otro_empleo" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $otro_empleo ?>">
    </label>
  </div>
  <div class="col-2">
    <label>
      DESCRIPCION OTRO EMPLEO
      <input  id="des_empleo" name="des_empleo" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo $des_empleo ?>">
          </label>
  </div>
  
  <div class="col-3">
    <label>
       CCT1
      <input  id="cct_otro1" name="cct_otro1" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo $id_cct1 ?>">
    </label>
  </div>
  <div class="col-3">
    <label>
     CCT2
      <input  id="cct_otro2" name="cct_otro2" tabindex="2" onkeyup="this.value=this.value.toUpperCase()" value="<? echo $id_cct2 ?>">
    </label>
  </div>
      
   <div class="col-3">
    <label>
      CCT3
      <input  id="cct_otro3" name="cct_otro3" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_cct3 ?>">
    </label>
  </div>
  <div class="col-3">
    <label>
       HORAS CCT 1
      <input  id="hr_otro1" name="hr_otro1" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo $id_hr1 ?>">
    </label>
  </div>
  <div class="col-3">
    <label>
     HORAS CCT 2
      <input  id="hr_otro2" name="hr_otro2" tabindex="2" onkeyup="this.value=this.value.toUpperCase()" value="<? echo $id_hr2 ?>">
    </label>
  </div>
      
   <div class="col-3">
    <label>
      HORAS CCT 3
      <input  id="hr_otro3" name="hr_otro3" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_hr3 ?>">
    </label>
  </div>
  
 <!-- 
  <div class="col-4">
    <label>
      Skills
      <input placeholder="List a few of your primary skills" id="skills" name="skills" tabindex="6">
    </label>
  </div>
  <div class="col-4">
    <label>
      Yrs Experience
      <input placeholder="How many years of experience?" id="experience" name="experience" tabindex="7">
    </label>
  </div>
  <div class="col-4">
    <label>Contact References?</label>
    <center style="position:relative; margin-bottom:8px;"><input type="checkbox" class="js-switch"></center>
  </div>
  <div class="col-4 switch">
    <label>E-mail Updates?</label>
    <center style="position:relative;margin-bottom:8px;"><input type="checkbox" class="js-switch"></center>
  </div>
  -->
  <div class="col-submit">
    <button class="submitbtn">ACTUALIZAR</button>
  </div>
  
</form>



    
  <!-- InstanceEndEditable --></div>
  <div class="footer" id="footer_stc"></div>
</div>

</body>
<!-- InstanceEnd --></html>
