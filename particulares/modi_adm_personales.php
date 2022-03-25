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


	
	    ///consulta datos personales 
	    $query="SELECT * FROM datos_per WHERE rfc='$rfc_row'"; 
        $result= mysql_query($query) or die (mysql_error());

		
		while ($row = @mysql_fetch_array($result)){

	
         ///datos personales array
        $id_curp=$row['curp'];
		$id_rfc=$row['rfc'];
		$id_pat=$row['ap_pat'];
		$id_mat=$row['ap_mat'];
		$id_nom=$row['nombre'];
		$id_nacim=$row['fech_nac'];
		
		
		
		$esp_blanco='&nbsp;';
		$id_nombre=$id_pat.$esp_blanco.$id_mat.$esp_blanco.$id_nom;
		
		$id_sexo=$row['sexo'];	
	    $id_fnac=$row['fech_nac'];
		$id_enac=$row['enti_nac'];
		$id_edoc=$row['edo_civ'];
		$id_entidom=$row['enti_domi'];
		$id_delega=$row['delega'];
		$id_col=$row['colonia'];
		$id_domi=$row['domicilio'];
		$id_cp=$row['cp'];
		$id_telef=$row['telefono'];
		
		

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
    <form name="general" method="post" action="update_doc_perso.php">
      <div class="col-3">
    <label>
      NOMBRE(S)
      <input  id="nombre" name="nombre" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_nom ?>">
    </label>
  </div>
  <div class="col-3">
    <label>
      PATERNO
      <input  id="paterno" name="paterno" tabindex="2" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_pat ?>">
    </label>
  </div>
  <div class="col-3">
    <label>
      MATERNO
      <input  id="materno" name="materno" tabindex="2" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_mat ?>">
    </label>
  </div>
  
   <div class="col-2">
    <label>
      CURP
      <input  id="curp" name="curp" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_curp ?>">
    </label>
  </div>
  <!--
  <div class="col-3">
    <label>
      RFC
      <input  id="rfc" name="rfc" tabindex="2" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_rfc ?>">
    </label>
  </div>
   -->   
   <div class="col-2">
    <label>
      FECHA NACIMIENTO
      <input  id="fecha_nac" name="fecha_nac" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_nacim ?>">
    </label>
  </div>
  
   <div class="col-2">
    <label>
      ACTUALIZAR SEXO
      
      <select tabindex="5"  name="sexo" >
        <option ><? echo $id_sexo ?></option>
        <option value="F">FEMENINO</option>
        <option value="M">MASCULINO</option>
         </select>
    </label>
  </div>
  
  <div class="col-2">
    <label>
      ACTUALIZAR ESTADO CIVIL
      <select tabindex="5" name="estado_c">
         <option><? echo $id_edoc ?></option>
          <option value="CASADO(A)">CASADO(A)</option>
          <option value="SOLTERO(A)">SOLTERO(A)</option>
          <option value="DIVORCIADO(A)">DIVORCIADO(A)</option>
          <option value="VIUDO(A)">VIUDO(A)</option>
          <option value="CONCUBINATO(A)">CONCUBINATO(A)</option> 
      </select>
    </label>
  </div>
  
  <div class="col-2">
    <label>
      ENTIDAD NACIMIENTO
      <select tabindex="5" name="entidad_nac">
          <option><? echo $id_enac ?></option>
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
      </select>
    </label>
  </div>

<div class="col-2">
    <label>
     ENTIDAD DOMICILIO
      <select tabindex="5"  name="entidad" >
        <option ><? echo  $id_entidom ?></option>
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
      </select>
    </label>
    
    
  </div>
  <div class="col-3">
    <label>
      DELEGACIÓN / MUNICIPIO
      <input  id="delegacion" name="delegacion" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_delega ?>">
    </label>
  </div>
  <div class="col-3">
    <label>
      COLONIA
      <input  id="colonia" name="colonia" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_col ?>">
    </label>
  </div>

<div class="col-3">
    <label>
      CALLE Y N°
      <input  id="domicilio" name="domicilio" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_domi ?>">
    </label>
  </div>
  
  
  
  <div class="col-2">
    <label>
      CP
      <input  id="cp" name="cp" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_cp ?>">
    </label>
  </div>
  <div class="col-2">
    <label>
      TELEFÓNO LOCAL
      <input  id="telefono" name="telefono" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_telef ?>">
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
