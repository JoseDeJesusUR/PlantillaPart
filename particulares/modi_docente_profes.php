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


	
	   
	     ///consulta datos academicos 
	    $query2="SELECT * FROM datos_aca WHERE rfc='$rfc_row'"; 
        $result2= mysql_query($query2) or die (mysql_error());

		
		while ($row2 = @mysql_fetch_array($result2)){

	
         ///datos academicos array
        $id_niv_est=$row2['niv_max_est'];
		$id_status_est=$row2['est_niv_est'];
		$id_egresado=$row2['egresado'];
		$id_des_egre=$row2['des_egresado'];
		$id_profesi=$row2['profesion'];
		$id_perfil=$row2['perfil_aca'];
		$id_cedula=$row2['ced_prof'];
		$id_otros_est=$row2['otros_est'];
		$id_cursos=$row2['cursos'];
			

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
    <form name="general" method="post" action="update_doc_profe.php">
      <div class="col-3">
      <label>
      NIVEL MAX. ESTUDIO
      <select name="nivel_est" id="nivel_est" tabindex="5">
        <option><? echo  $id_niv_est ?></option>
           <option value="LICENCIATURA">LICENCIATURA</option>
          <option value="NORMAL">NORMAL</option>
          <option value="NORMAL SUPERIOR">NORMAL SUPERIOR</option>
          <option value="POSGRADO">POSGRADO</option>
          <option value="CERTIFICACION INGLES">CERTIFICACI??N EN INGL??S</option>
         
         
         </select>
    </label>
  </div>
  <div class="col-3">
  <label>
       STATUS ESTUDIOS
      <select name="status_est" id="status_est" tabindex="5">
        <option><? echo  $id_status_est ?></option>
           <option value="TITULADO">TITULADO</option>
          <option value="PASANTE">PASANTE</option>
          <option value="CERTIFICADO">CERTIFICADO</option>
          <option value="DIPLOMA">DIPLOMA</option>
          <option value="TRAMITE">EN TR??MITE</option>
         </select>
    </label>
  </div>
  <div class="col-3">
      <label>
      EGRESADO
      <select name="egresado" id="egresado" tabindex="5">
        <option><? echo  $id_egresado ?></option>
        <option value="UNAM">UNAM</option>
          <option value="IPN">IPN</option>
          <option value="NORMAL">NORMAL</option>
          <option value="NORMAL SUPERIOR">NORMAL SUPERIOR</option>
          <option value="UAM">UAM</option>
          <option value="UPN">UPN</option>
          <option value="UNIMEX">UNIMEX</option>
          <option value="ESEF">ESEF</option>
          <option value="INBA">INBA</option>
          <option value="1">OTRA</option>
         </select>
    </label>
  </div>
  
   <div class="col-2">
    <label>
      DESCRIPCI??N EGRESADO OTRA
      <input  id="des_egresado" name="des_egresado" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_des_egre ?>">
    </label>
  
  
  </div>
 
   <div class="col-2">
    <label>
      CARRERA
      <input  id="profesion" name="profesion" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_profesi ?>">
    </label>
  </div>
  
   <div class="col-3">
     <label>
      CEDULA PROFESIONAL
      <input  id="cedula" name="cedula" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_cedula ?>">
    </label>
     
  </div>
  
		
  <div class="col-3">
    <label>
      OTROS ESTUDIOS
      <input  id="otros_est" name="otros_est" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_otros_est  ?>">
    </label>
    </label>
  </div>
 
  <div class="col-3">
    <label>
     CURSOS ACTUALIZACI??N
      <input  id="cursos" name="cursos" tabindex="1" onkeyup="this.value=this.value.toUpperCase()" value="<? echo  $id_cursos  ?>">
    </label>
       
    </label>
  </div>

  <div class="col-submit">
    <button class="submitbtn">ACTUALIZAR</button>
  </div>
  
</form>



    
  <!-- InstanceEndEditable --></div>
  <div class="footer" id="footer_stc"></div>
</div>

</body>
<!-- InstanceEnd --></html>
