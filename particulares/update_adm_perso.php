<?php
include("cnx.php"); 

session_start(); 


/////////////////// INICIAMOS VARIABLES DE SESSION DE USUARIO ///////////////

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];///// Incorrecto
	$do_final=$_SESSION['do_esc'];
	
	$rfc_row=$_SESSION['rfc_do1']; 

////////////// Variable status



//import_request_variables ("P","f_");

			
	$do_final=$_SESSION['do_esc'];
	
	
		

	//// GENERAMOS LA VARIABLE DATE (Fecha captura)
	$fecha_cap =date ("Y/m/d");

	$tipo_empleado="DOCENTE";
    $_SESSION['$tipo_empleadox']=$tipo_empleado;
	$tipo_empleado_doc=$_SESSION['$tipo_empleadox'];
	
	$status_captura="1";


///////////////////////  Actualizar Datos Personales 


    mysql_select_db("plantilla_part", $conexion);
 
    
	$linea1="UPDATE datos_per SET 
	
	
	 actualizacion='$fecha_cap', 
     curp='$f_curp',
	 ap_pat='$f_paterno',
	 ap_mat='$f_materno',
	 nombre='$f_nombre',
	 sexo='$f_sexo',
	 fech_nac='$f_fecha_nac',
	 enti_nac='$f_entidad_nac',
	 edo_civ='$f_estado_c',
	 enti_domi='$f_entidad',
	 delega='$f_delegacion',
	 colonia='$f_colonia',
	 domicilio='$f_domicilio',
	 cp='$f_cp',
	 telefono='$f_telefono'
	
	
	
	 
	 
	
	WHERE rfc='$rfc_row'";
	
 

$consulta=$linea1;


$result=mysql_query($consulta,$conexion);



if ($result==1)  {
 
 

 
 header("Location:update_result.php"); 

} 

else {
header("location:error_update.php?errorusuario=1"); 
}

/// cierro la consulta

mysql_close($link);




		?>     

      
		 <?
		 echo "<BR>";
		
		?>
   



        <?
		
		
		echo 
		$f_curp;
		echo 
		"<br>";
		echo 
		$rfc_row;
		
		/*
		$rfc_doc."<br>".
	    $usuario."<br>".
		$do_final."<br>".
	    $fecha_cap."<br>".
	    $paterno_doc."<br>".
	    $materno_doc."<br>".
	    $nombre_doc."<br>".
		$sexo_doc."<br>".
	    $fecha_nac_doc."<br>".
	    $entidad_nac_doc."<br>".
		$permiso_doc1."<br>".
	    $vigencia_doc1."<br>".
		$estado_c_doc."<br>".
	 	$entidad_doc."<br>".
	    $delegacion_doc."<br>".
	    $colonia_doc."<br>".
	    $domicilio_doc."<br>".
	    $cp_doc."<br>".
	    $telefono_doc."<br>".
		$tipo_empleado_doc."<br>".
		$funcion_doc."<br>".
		$otro_doc."<br><BR>".
	
	  ////////////
$desmpleok."<br>ACADEMICOS<br><BR>".
	   
	   $rfc_doc."<br>".
	   $usuario."<br>".
	   $fecha_cap."<br>".  	  
	   $nivel_est_doc."<br>".
	   $status_est_doc."<br>".
	   $egresado_doc."<br>".
	   $des_egresado_doc."<br>".
	   $profesion_doc."<br>".
	   $cedula_doc."<br>".
	   $otros_est_doc."<br>".
	   $cursos_doc."<br>".
		
	$desmpleok."<br>LABORALES<br><BR>".
	    
		
	    $rfc_doc."<br>".
	    $usuario."<br>".
		$fecha_cap."<br>".
		$fecha_ing_doc."<br>".
		$tipo_empleado_doc."<br>".
		$funcion_doc."<br>".
		$asignatura1_doc."<br>".
		$asignatura2_doc."<br>".
		$asignatura3_doc."<br>".
		$asignatura4_doc."<br>".
		
		$hr_grupo_doc."<br>".
		$hr_servi_doc."<br>".
		$hr_sin_doc."<br>".
		
		$lunes_e_doc."<br>".
		$lunes_s_doc."<br>".
		
		$martes_e_doc."<br>".
		$martes_s_doc."<br>".
		
		$miercoles_e_doc."<br>".
		$miercoles_s_doc."<br>".
		
		$jueves_e_doc."<br>".
		$jueves_s_doc."<br>".
		
		$viernes_e_doc."<br>".
		$viernes_s_doc."<br>"."<br>".
		
		$cct_otro1_doc."<br>".
		$cct_otro2_doc."<br>".
		$cct_otro3_doc."<br>".
		
		
		$hr_otro1_doc."<br>".
		$hr_otro2_doc."<br>".
		$hr_otro3_doc."<br>".

$status_captura."<br>".

		$cct_empleo_doc."<br>".
        $des_empleok;
		
*/
		?>
        
        
         
                  