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

/////////////// RFC que seleccionamos ////////

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
       
	   
	   
	     ///consulta datos academicos 
	    $query2="SELECT * FROM datos_aca_dire WHERE rfc='$rfc_row'"; 
        $result2= mysql_query($query2) or die (mysql_error());

		
		while ($row2 = @mysql_fetch_array($result2)){

	
         ///datos academicos array
        $id_niv_est=$row2['niv_max_est'];
		$id_status_est=$row2['est_niv_est'];
		$id_egresado=$row2['egresado'];
		$id_des_egre=$row2['des_egresado'];
		$id_perfil=$row2['perfil_aca'];
		$id_otros_est=$row2['otros_est'];
		$id_cursos=$row2['cursos'];
			

		}
	   
	   
	     
	     ///consulta datos labores 
	    $query3="SELECT * FROM datos_lab_dire WHERE rfc='$rfc_row'"; 
        $result3= mysql_query($query3) or die (mysql_error());

		
		while ($row3 = @mysql_fetch_array($result3)){

	
         ///datos academicos array
        //$id_niv_est2=$row3['niv_max_est'];
	    $id_ing_plantel=$row3['ing_plantel'];
		$id_estatus=$row3['estatus'];
		$id_tip_empleado=$row3['tip_empleado'];
		$id_funcion=$row3['funcion'];
		$id_especifique=$row3['especifique'];
		$id_espe_1=$row3['espe_1'];
		$id_espe_2=$row3['espe_2'];
		$id_espe_3=$row3['espe_3'];
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
	

		}
	    
	   
/*
		
		///consulta instantanea 1
		$query1="SELECT * FROM inst_1 WHERE cct='$id_cct' 
		                                       AND fecha_cap='$id_fcap' 
		                                       AND docente='$id_docente' 
		                                       AND observador='$id_observador'
		                                       AND cargo='$id_cargo'
		                                       AND asignatura='$id_asignatura' "; 
        $result1= mysql_query($query1) or die (mysql_error());
		///consulta instantanea 2
		$query2="SELECT * FROM inst_2 WHERE cct='$id_cct' 
		                                       AND fecha_cap='$id_fcap' 
		                                       AND docente='$id_docente' 
		                                       AND observador='$id_observador'
		                                       AND cargo='$id_cargo'
		                                       AND asignatura='$id_asignatura' "; 
        $result2= mysql_query($query2) or die (mysql_error());
		///consulta instantanea 3 
		$query3="SELECT * FROM inst_3 WHERE cct='$id_cct' 
		                                       AND fecha_cap='$id_fcap' 
		                                       AND docente='$id_docente' 
		                                       AND observador='$id_observador'
		                                       AND cargo='$id_cargo'
		                                       AND asignatura='$id_asignatura' "; 
        $result3= mysql_query($query3) or die (mysql_error());
		///consulta instantanea 4
		$query4="SELECT * FROM inst_4 WHERE cct='$id_cct' 
		                                       AND fecha_cap='$id_fcap' 
		                                       AND docente='$id_docente' 
		                                       AND observador='$id_observador'
		                                       AND cargo='$id_cargo'
		                                       AND asignatura='$id_asignatura' "; 
        $result4= mysql_query($query4) or die (mysql_error());
	    ///consulta instantanea 5
		$query5="SELECT * FROM inst_5 WHERE cct='$id_cct' 
		                                       AND fecha_cap='$id_fcap' 
		                                       AND docente='$id_docente' 
		                                       AND observador='$id_observador'
		                                       AND cargo='$id_cargo'
		                                       AND asignatura='$id_asignatura' "; 
        $result5= mysql_query($query5) or die (mysql_error());
	    ///consulta instantanea 6
		$query6="SELECT * FROM inst_6 WHERE cct='$id_cct' 
		                                       AND fecha_cap='$id_fcap' 
		                                       AND docente='$id_docente' 
		                                       AND observador='$id_observador'
		                                       AND cargo='$id_cargo'
		                                       AND asignatura='$id_asignatura' "; 
        $result6= mysql_query($query6) or die (mysql_error());
		///consulta instantanea 7
		$query7="SELECT * FROM inst_7 WHERE cct='$id_cct' 
		                                       AND fecha_cap='$id_fcap' 
		                                       AND docente='$id_docente' 
		                                       AND observador='$id_observador'
		                                       AND cargo='$id_cargo'
		                                       AND asignatura='$id_asignatura' "; 
        $result7= mysql_query($query7) or die (mysql_error());
		///consulta instantanea 8
		$query8="SELECT * FROM inst_8 WHERE cct='$id_cct' 
		                                       AND fecha_cap='$id_fcap' 
		                                       AND docente='$id_docente' 
		                                       AND observador='$id_observador'
		                                       AND cargo='$id_cargo'
		                                       AND asignatura='$id_asignatura' ";
        $result8= mysql_query($query8) or die (mysql_error());
		///consulta instantanea 9
		$query9="SELECT * FROM inst_9 WHERE cct='$id_cct' 
		                                       AND fecha_cap='$id_fcap' 
		                                       AND docente='$id_docente' 
		                                       AND observador='$id_observador'
		                                       AND cargo='$id_cargo'
		                                       AND asignatura='$id_asignatura' "; 
        $result9= mysql_query($query9) or die (mysql_error());
        ///consulta instantanea 10
		$query10="SELECT * FROM inst_10 WHERE cct='$id_cct' 
		                                       AND fecha_cap='$id_fcap' 
		                                       AND docente='$id_docente' 
		                                       AND observador='$id_observador'
		                                       AND cargo='$id_cargo'
		                                       AND asignatura='$id_asignatura' "; 
        $result10= mysql_query($query10) or die (mysql_error());
		

		
		while ($row1 = @mysql_fetch_array($result1)){	
		
		///datos instantanea 1
        $doc_act_1=$row1['doc_act_1'];
		$doc_mat_1=$row1['doc_mat_1'];
		$doc_tg_1=$row1['doc_tg_1'];
	    
		$alum_act_1_1=$row1['alum_act_1_1'];
		$alum_mat_1_1=$row1['alum_mat_1_1']; 
		$alum_tg_1_1=$row1['alum_tg_1_1'];
		
		$alum_act_2_1=$row1['alum_act_2_1'];
		$alum_mat_2_1=$row1['alum_mat_2_1']; 
		$alum_tg_2_1=$row1['alum_tg_2_1'];
		
	    $alum_act_3_1=$row1['alum_act_3_1'];
		$alum_mat_3_1=$row1['alum_mat_3_1']; 
		$alum_tg_3_1=$row1['alum_tg_3_1'];
		 
		
		while ($row2 = @mysql_fetch_array($result2)){	
		
	    ///datos instantanea 2 
        $doc_act_2=$row2['doc_act_2'];
		$doc_mat_2=$row2['doc_mat_2'];
		$doc_tg_2=$row2['doc_tg_2'];
	    
		$alum_act_1_2=$row2['alum_act_1_2'];
		$alum_mat_1_2=$row2['alum_mat_1_2']; 
		$alum_tg_1_2=$row2['alum_tg_1_2'];
		
		$alum_act_2_2=$row2['alum_act_2_2'];
		$alum_mat_2_2=$row2['alum_mat_2_2']; 
		$alum_tg_2_2=$row2['alum_tg_2_2'];
		
	    $alum_act_3_2=$row2['alum_act_3_2'];
		$alum_mat_3_2=$row2['alum_mat_3_2']; 
		$alum_tg_3_2=$row2['alum_tg_3_2'];
		
		while ($row3 = @mysql_fetch_array($result3)){		
		///datos instantanea 3 
        $doc_act_3=$row3['doc_act_3'];
		$doc_mat_3=$row3['doc_mat_3'];
		$doc_tg_3=$row3['doc_tg_3'];
	    
		$alum_act_1_3=$row3['alum_act_1_3'];
		$alum_mat_1_3=$row3['alum_mat_1_3']; 
		$alum_tg_1_3=$row3['alum_tg_1_3'];
		
		$alum_act_2_3=$row3['alum_act_2_3'];
		$alum_mat_2_3=$row3['alum_mat_2_3']; 
		$alum_tg_2_3=$row3['alum_tg_2_3'];
		
	    $alum_act_3_3=$row3['alum_act_3_3'];
		$alum_mat_3_3=$row3['alum_mat_3_3']; 
		$alum_tg_3_3=$row3['alum_tg_3_3'];
		  
		while ($row4 = @mysql_fetch_array($result4)){
		///datos instantanea 4
        $doc_act_4=$row4['doc_act_4'];
		$doc_mat_4=$row4['doc_mat_4'];
		$doc_tg_4=$row4['doc_tg_4'];
	    
		$alum_act_1_4=$row4['alum_act_1_4'];
		$alum_mat_1_4=$row4['alum_mat_1_4']; 
		$alum_tg_1_4=$row4['alum_tg_1_4'];
		
		$alum_act_2_4=$row4['alum_act_2_4'];
		$alum_mat_2_4=$row4['alum_mat_2_4']; 
		$alum_tg_2_4=$row4['alum_tg_2_4'];
		
	    $alum_act_3_4=$row4['alum_act_3_4'];
		$alum_mat_3_4=$row4['alum_mat_3_4']; 
		$alum_tg_3_4=$row4['alum_tg_3_4'];
		  
		while ($row5 = @mysql_fetch_array($result5)){
		///datos instantanea 5
        $doc_act_5=$row5['doc_act_5'];
		$doc_mat_5=$row5['doc_mat_5'];
		$doc_tg_5=$row5['doc_tg_5'];
	    
		$alum_act_1_5=$row5['alum_act_1_5'];

		$alum_mat_1_5=$row5['alum_mat_1_5']; 
		$alum_tg_1_5=$row5['alum_tg_1_5'];
		
		$alum_act_2_5=$row5['alum_act_2_5'];
		$alum_mat_2_5=$row5['alum_mat_2_5']; 
		$alum_tg_2_5=$row5['alum_tg_2_5'];
		
	    $alum_act_3_5=$row5['alum_act_3_5'];
		$alum_mat_3_5=$row5['alum_mat_3_5']; 
		$alum_tg_3_5=$row5['alum_tg_3_5'];
		  
		while ($row6 = @mysql_fetch_array($result6)){	
		///datos instantanea 6
        $doc_act_6=$row6['doc_act_6'];
		$doc_mat_6=$row6['doc_mat_6'];
		$doc_tg_6=$row6['doc_tg_6'];
	    
		$alum_act_1_6=$row6['alum_act_1_6'];
		$alum_mat_1_6=$row6['alum_mat_1_6']; 
		$alum_tg_1_6=$row6['alum_tg_1_6'];
		
		$alum_act_2_6=$row6['alum_act_2_6'];
		$alum_mat_2_6=$row6['alum_mat_2_6']; 
		$alum_tg_2_6=$row6['alum_tg_2_6'];
		
	    $alum_act_3_6=$row6['alum_act_3_6'];
		$alum_mat_3_6=$row6['alum_mat_3_6']; 
		$alum_tg_3_6=$row6['alum_tg_3_6'];		
		  
		while ($row7 = @mysql_fetch_array($result7)){
		///datos instantanea 7
        $doc_act_7=$row7['doc_act_7'];
		$doc_mat_7=$row7['doc_mat_7'];
		$doc_tg_7=$row7['doc_tg_7'];
	    
		$alum_act_1_7=$row7['alum_act_1_7'];
		$alum_mat_1_7=$row7['alum_mat_1_7']; 
		$alum_tg_1_7=$row7['alum_tg_1_7'];
		
		$alum_act_2_7=$row7['alum_act_2_7'];
		$alum_mat_2_7=$row7['alum_mat_2_7']; 
		$alum_tg_2_7=$row7['alum_tg_2_7'];
		
	    $alum_act_3_7=$row7['alum_act_3_7'];
		$alum_mat_3_7=$row7['alum_mat_3_7']; 
		$alum_tg_3_7=$row7['alum_tg_3_7'];
		  
		while ($row8 = @mysql_fetch_array($result8)){
		///datos instantanea 8 
        $doc_act_8=$row8['doc_act_8'];
		$doc_mat_8=$row8['doc_mat_8'];
		$doc_tg_8=$row8['doc_tg_8'];
	    
		$alum_act_1_8=$row8['alum_act_1_8'];
		$alum_mat_1_8=$row8['alum_mat_1_8']; 
		$alum_tg_1_8=$row8['alum_tg_1_8'];
		
		$alum_act_2_8=$row8['alum_act_2_8'];
		$alum_mat_2_8=$row8['alum_mat_2_8']; 
		$alum_tg_2_8=$row8['alum_tg_2_8'];
		
	    $alum_act_3_8=$row8['alum_act_3_8'];
		$alum_mat_3_8=$row8['alum_mat_3_8']; 
		$alum_tg_3_8=$row8['alum_tg_3_8'];
		  
		while ($row9 = @mysql_fetch_array($result9)){
		///datos instantanea 9
        $doc_act_9=$row9['doc_act_9'];
		$doc_mat_9=$row9['doc_mat_9'];
		$doc_tg_9=$row9['doc_tg_9'];
	    
		$alum_act_1_9=$row9['alum_act_1_9'];
		$alum_mat_1_9=$row9['alum_mat_1_9']; 
		$alum_tg_1_9=$row9['alum_tg_1_9'];
		
		$alum_act_2_9=$row9['alum_act_2_9'];
		$alum_mat_2_9=$row9['alum_mat_2_9']; 
		$alum_tg_2_9=$row9['alum_tg_2_9'];
		
	    $alum_act_3_9=$row9['alum_act_3_9'];
		$alum_mat_3_9=$row9['alum_mat_3_9']; 
		$alum_tg_3_9=$row8['alum_tg_3_9'];
		  
		  
		while ($row10 = @mysql_fetch_array($result10)){	 	
        ///datos instantanea 10
        $doc_act_10=$row10['doc_act_10'];
		$doc_mat_10=$row10['doc_mat_10'];
		$doc_tg_10=$row10['doc_tg_10'];
	    
		$alum_act_1_10=$row10['alum_act_1_10'];
		$alum_mat_1_10=$row10['alum_mat_1_10']; 
		$alum_tg_1_10=$row10['alum_tg_1_10'];
		
		$alum_act_2_10=$row10['alum_act_2_10'];
		$alum_mat_2_10=$row10['alum_mat_2_10']; 
		$alum_tg_2_10=$row10['alum_tg_2_10'];
		
	    $alum_act_3_10=$row10['alum_act_3_10'];
		$alum_mat_3_10=$row10['alum_mat_3_10']; 
		$alum_tg_3_10=$row10['alum_tg_3_10'];
		  
	

 
		}
		}
		}
		}
		}
		}
		}
		}
		}
		}
		
 */
 
?>	



<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<link href="../SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />
<script src="../SpryAssets/SpryAccordion.js" type="text/javascript"></script>
<link href="../SpryAssets/SpryAccordion.css" rel="stylesheet" type="text/css" />

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
    <p>&nbsp;</p>
    <p>&nbsp;</p>
    <div id="Accordion1" class="Accordion" tabindex="0">
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">DATOS PERSONALES</div>
        <div class="AccordionPanelContent">
        <br />
        <br />

                 <table width="850" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="6" align="center" bgcolor="#999999"><span class="titulos2">PERSONALES</span></td>
              </tr>
            <tr>
              <td width="155" align="center" bgcolor="#CCCCCC">CURP</td>
              <td colspan="2" align="center" bgcolor="#CCCCCC">RFC</td>
              <td colspan="3" align="center" bgcolor="#CCCCCC">NOMBRE</td>
              </tr>
            <tr>
              <td height="28" align="center" valign="middle" bgcolor="#DAE4FE"  class="letra_tablas"><span class="titulos"><? echo  $id_curp ?></span></td>
              <td height="28" colspan="2" align="center" valign="middle" bgcolor="#DAE4FE"><span class="titulos"><? echo  $id_rfc ?></span></td>
              <td height="28" colspan="3" align="center" valign="middle" bgcolor="#DAE4FE"><span class="titulos"><? echo  $id_nombre ?></span></td>
            </tr>
            <tr>
              <td height="21" align="center" valign="top" bgcolor="#CCCCCC">FECHA NACIMIENTO</td>
              <td height="21" colspan="3" align="center" valign="top" bgcolor="#CCCCCC">ENTIDAD NACIMIENTO</td>
              <td width="212" height="21" align="center" valign="top" bgcolor="#CCCCCC">SEXO</td>
              <td width="131" align="center" valign="top" bgcolor="#CCCCCC">EDO CIVIL</td>
            </tr>
            <tr>
              <td height="31" align="center" valign="middle" bgcolor="#DAE4FE"><span class="titulos"><? echo  $id_fnac ?></span></td>
              <td height="31" colspan="3" align="center" valign="middle" bgcolor="#DAE4FE"><span class="titulos"><? echo  $id_enac ?></span></td>
              <td height="31" align="center" valign="middle" bgcolor="#DAE4FE"><span class="titulos"><? echo  $id_sexo ?></span></td>
              <td height="31" align="center" valign="middle" bgcolor="#DAE4FE" ><span class="titulos"><? echo  $id_edoc ?></span></td>
            </tr>
            <tr>
              <td height="21" colspan="6" align="center" bgcolor="#999999" ><span class="titulos2">DOMICILIO</span></td>
              </tr>
            <tr>
              <td height="21" colspan="2" align="center" valign="top" bgcolor="#CCCCCC">ENTIDAD</td>
              <td height="21" colspan="2" align="center" valign="top" bgcolor="#CCCCCC">DELEGACION</td>
              <td height="21" colspan="2" align="center" valign="top" bgcolor="#CCCCCC">COLONIA</td>
              </tr>
            <tr>
              <td height="27" colspan="2" align="center" valign="middle" bgcolor="#DAE4FE" class="titulos"><? echo  $id_enac ?></td>
              <td height="27" colspan="2" align="center" valign="middle" bgcolor="#DAE4FE" class="titulos"><? echo  $id_delega ?></td>
              <td height="27" colspan="2" align="center" valign="middle" bgcolor="#DAE4FE" class="titulos"><? echo  $id_col ?></td>
              </tr>
            <tr>
              <td height="21" colspan="4" align="center" valign="top" bgcolor="#CCCCCC">DOMICILIO</td>
              <td height="21" align="center" valign="top" bgcolor="#CCCCCC">CP</td>
              <td height="21" align="center" valign="top" bgcolor="#CCCCCC">TELEFONO</td>
              </tr>
            <tr>
              <td height="28" colspan="4" align="center" valign="middle" bgcolor="#DAE4FE"><span class="titulos"><? echo  $id_domi ?></span></td>
              <td height="28" align="center" valign="middle" bgcolor="#DAE4FE"  class="titulos"><? echo  $id_cp ?></td>
              <td height="28" align="center" valign="middle" bgcolor="#DAE4FE"  class="titulos"><? echo $id_telef ?></td>
              </tr>
            </table>
            
            
            
            
          </div>
        </div>
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">PREPARACION PROFESIONAL</div>
        <div class="AccordionPanelContent">
          <br />
          <br />
          <table width="850" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="7" align="center" bgcolor="#999999"><span class="titulos2">INFORMACION PREPARACION PROFESIONAL </span></td>
              </tr>
            <tr>
              <td width="224" align="center" bgcolor="#CCCCCC">NIVEL MAX. ESTUDIOS</td>
              <td colspan="2" align="center" bgcolor="#CCCCCC">STATUS ESTUDIOS</td>
              <td colspan="4" align="center" bgcolor="#CCCCCC">EGRESADO</td>
              </tr>
            <tr>
              <td height="36" align="justify" valign="top" bgcolor="#DAE4FE"  class="letra_tablas"><span class="titulos"><? echo  $id_niv_est ?></span></td>
              <td height="36" colspan="2" align="center" valign="top" bgcolor="#DAE4FE"  class="letra_tablas"><span class="titulos"><? echo  $id_status_est ?></span></td>
              <td height="36" colspan="4" align="justify" valign="top" bgcolor="#DAE4FE"  class="letra_tablas"><span class="titulos"><? echo  $id_egresado ?><br /><? echo  $id_des_egre ?></span></td>
            </tr>
            <tr>
              <td height="21" colspan="5" align="center" valign="top" bgcolor="#CCCCCC">OTROS ESTUDIOS</td>
              <td width="323" height="21" colspan="2" align="center" valign="top" bgcolor="#CCCCCC">CURSOS</td>
            </tr>
            <tr>
              <td height="30" colspan="5" align="justify" valign="top" bgcolor="#DAE4FE"  class="letra_tablas"><span class="titulos"><? echo $id_otros_est ?></span></td>
              <td height="30" colspan="2" align="justify" valign="top" bgcolor="#DAE4FE"  class="letra_tablas"><span class="titulos"><? echo $id_cursos ?></span></td>
            </tr>
            </table>
          </div>
        </div>
      <div class="AccordionPanel">
        <div class="AccordionPanelTab">INFORMACION LABORAL</div>
        <div class="AccordionPanelContent">
        <br />
        <br />
          <table width="850" border="1" align="center" cellpadding="0" cellspacing="0">
            <tr>
              <td colspan="4" align="center" bgcolor="#999999"><span class="titulos2">LABORAL</span></td>
            </tr>
            <tr>
              <td width="430" align="center" bgcolor="#CCCCCC">FECHA INGRESO</td>
              <td width="414" colspan="3" align="center" bgcolor="#CCCCCC">FUNCION</td>
              </tr>
            <tr>
              <td height="28" align="center" valign="middle" bgcolor="#DAE4FE"><span class="titulos"><? echo  $id_ing_plantel ?></span></td>
              <td height="28" colspan="3" align="center" valign="middle" bgcolor="#DAE4FE"><span class="titulos"><? echo  $id_funcion ?><br /><? echo  $id_especifique ?></span></td>
            </tr>
            </table>
          <p>&nbsp;</p>
        </div>
        </div>
</div>
    <p>&nbsp;</p>
  </form>
    
    
  <script type="text/javascript">
var Accordion1 = new Spry.Widget.Accordion("Accordion1");
  </script>
  <!-- InstanceEndEditable --></div>
  <div class="footer" id="footer_stc"></div>
</div>

</body>
<!-- InstanceEnd --></html>
