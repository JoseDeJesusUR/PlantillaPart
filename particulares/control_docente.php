<?php
include("cnx.php"); 

session_start(); 


/////////////////// INICIAMOS VARIABLES DE SESSION DE USUARIO ///////////////

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];///// Incorrecto
	$do_final=$_SESSION['do_esc'];

////////////// Variable status


//import_request_variables ("P","f_");

			
	$do_final=$_SESSION['do_esc'];
	
	///////////// lunes
	$cont_hrlunE=$f_hr_lunE;
	$cont_minlunE=$f_min_lunE;
	$lunes_e=$cont_hrlunE.$cont_minlunE;
	////
	$cont_hrlunS=$f_hr_lunS;
	$cont_minlunS=$f_min_lunS;
	$lunes_s=$cont_hrlunS.$cont_minlunS;
	
	///////////// martes
	$cont_hrmarE=$f_hr_marE;
	$cont_minmarE=$f_min_marE;
	$martes_e=$cont_hrmarE.$cont_minmarE;
	////
	$cont_hrmarS=$f_hr_marS;
	$cont_minmarS=$f_min_marS;
	$martes_s=$cont_hrmarS.$cont_minmarS;
	
	///////////// miercoles
	$cont_hrmieE=$f_hr_mieE;
	$cont_minmieE=$f_min_mieE;
	$miercoles_e=$cont_hrmieE.$cont_minmieE;
	////
	$cont_hrmieS=$f_hr_mieS;
	$cont_minmieS=$f_min_mieS;
	$miercoles_s=$cont_hrmieS.$cont_minmieS;
	
	///////////// jueves
	$cont_hrjueE=$f_hr_jueE;
	$cont_minjueE=$f_min_jueE;
	$jueves_e=$cont_hrjueE.$cont_minjueE;
	////
	$cont_hrjueS=$f_hr_jueS;
	$cont_minjueS=$f_min_jueS;
	$jueves_s=$cont_hrjueS.$cont_minjueS;
	
	///////////// viernes
	$cont_hrvieE=$f_hr_vieE;
	$cont_minvieE=$f_min_vieE;
	$viernes_e=$cont_hrvieE.$cont_minvieE;
	////
	$cont_hrvieS=$f_hr_vieS;
	$cont_minvieS=$f_min_vieS;
	$viernes_s=$cont_hrvieS.$cont_minvieS;
	
		

	//// GENERAMOS LA VARIABLE DATE (Fecha captura)
	$fecha_cap =date ("Y/m/d");

	$tipo_empleado="DOCENTE";
    $_SESSION['$tipo_empleadox']=$tipo_empleado;
	$tipo_empleado_doc=$_SESSION['$tipo_empleadox'];
	
	$status_captura="1";



/////////////////////// Variables Datos Personales ////////////////////////////// 



	$curp_doc=$_SESSION['curpx'];
	$rfc_doc=$_SESSION['rfcx'];
	$paterno_doc=$_SESSION['paternox'];		
	$materno_doc=$_SESSION['maternox'];		
	$nombre_doc=$_SESSION['nombrex'];	
	$sexo_doc=$_SESSION['sexox'];	
	$fecha_nac_doc=$_SESSION['fecha_nacx'];
	$entidad_nac_doc=$_SESSION['entidad_nacx'];
	
	$permiso_doc=$_SESSION['permisox'];	
	$vigencia_doc=$_SESSION['vigenciax'];
	
	
	$estado_c_doc=$_SESSION['estado_cx'];	
	
	
			
/////// Domicilio///	

	$entidad_doc=$_SESSION['entidadx'];
	$delegacion_doc=$_SESSION['delegacionx'];
	$colonia_doc=$_SESSION['coloniax'];		
	$domicilio_doc=$_SESSION['domiciliox'];		
	$cp_doc=$_SESSION['cpx'];	
	$telefono_doc=$_SESSION['telefonox'];
	

/////////////////////// Preparación Profesional ////////////////////////////// 


	$nivel_est_doc=$_SESSION['nivel_estx'];
	$status_est_doc=$_SESSION['status_estx'];
	$egresado_doc=$_SESSION['egresadox'];		
	$des_egresado_doc=$_SESSION['des_egresadox'];	
	if ($des_egresado_doc==""){
	
	$des_egresado_doc='N/A';
}
	
	
	
	
	$perfil_doc=$_SESSION['perfilx'];
	$profesion_doc=$_SESSION['profesionx'];	
	$cedula_doc=$_SESSION['cedulax'];
	
	////////////////////////////////////////// Otro estudio y Curso
	$otros_est_doc=$_SESSION['otros_estx'];
	if ($otros_est_doc==""){
	
	$otros_est_doc='N/A';
}
	
	
	$cursos_doc=$_SESSION['cursosx'];
	
	if ($cursos_doc==""){
	
	$cursos_doc='N/A';
}
	
	

/////////////////////// Información Laboral ////////////////////////////// 


    $_SESSION['fecha_ingx']=$f_fecha_ing;
	$fecha_ing_doc=$_SESSION['fecha_ingx'];
	
	/*
	$_SESSION['estatus_labx']=$f_estatus_lab;
	$estatus_lab_doc=$_SESSION['estatus_labx'];
	*/
	
	
	$_SESSION['funcionx']=$f_funcion;
	$funcion_doc=$_SESSION['funcionx'];		
	
	
	$_SESSION['des_funcionx']=$f_des_funcion;
	$otro_doc=$_SESSION['des_funcionx'];	
	
	
	if ($otro_doc==""){
	
	$otro_doc='N/A';
}
	
	
///////////////////////////////////  	
   
    $_SESSION['asignatura1x']=$f_asignatura1;
	$asignatura1_doc=$_SESSION['asignatura1x'];
	
	if ($asignatura1_doc==""){
	
	$asignatura1_doc='N/A';
}
			
  
    $_SESSION['asignatura2x']=$f_asignatura2;
	$asignatura2_doc=$_SESSION['asignatura2x'];	
	
		if ($asignatura2_doc==""){
	
	$asignatura2_doc='N/A';
}

	
		
	
	    $_SESSION['asignatura3x']=$f_asignatura3;
	$asignatura3_doc=$_SESSION['asignatura3x'];	
	
		if ($asignatura3_doc==""){
	
	$asignatura3_doc='N/A';
}

	
	
    $_SESSION['asignatura4x']=$f_asignatura4;
	$asignatura4_doc=$_SESSION['asignatura4x'];	
	
		if ($asignatura4_doc==""){
	
	$asignatura4_doc='N/A';
}
	
	
//////////////////// Validación vacio 

     $permiso_doc=$_SESSION['permisox'];
	 
	 if ($permiso_doc==""){
	
	$permiso_doc1='N/A';
}
	 
	 	
	$vigencia_doc=$_SESSION['vigenciax'];
	
	
	if ($vigencia_doc==""){
	
	$vigencia_doc1='N/A';
}


	
	
/////////////
	$_SESSION['hr_grupox']=$f_hr_grupo;
	$hr_grupo_doc=$_SESSION['hr_grupox'];
	$_SESSION['hr_servix']=$f_hr_servi;
	$hr_servi_doc=$_SESSION['hr_servix'];
	$_SESSION['hr_sinx']=$f_hr_sin;
	$hr_sin_doc=$_SESSION['hr_sinx'];
///////////////	

	
 
 
 /////////////////Fin prueba
 
 
    $_SESSION['lunes_ex']=$lunes_e;
	$lunes_e_doc=$_SESSION['lunes_ex'];
	
		if ($lunes_e_doc==""){
	
	$lunes_e_doc='N/A';
    }	
	
	
	
	$_SESSION['lunes_sx']=$lunes_s;
	$lunes_s_doc=$_SESSION['lunes_sx'];
	
	if ($lunes_s_doc==""){
	
	$lunes_s_doc='N/A';
	}
	
	$_SESSION['martes_ex']=$martes_e;
	$martes_e_doc=$_SESSION['martes_ex'];
	
	if ($martes_e_doc==""){
	
	$martes_e_doc='N/A';
	}

	$_SESSION['martes_sx']=$martes_s;
	$martes_s_doc=$_SESSION['martes_sx'];
	
	if ($martes_s_doc==""){
	
	$martes_s_doc='N/A';
	}
	
	
	$_SESSION['miercoles_ex']=$miercoles_e;
	$miercoles_e_doc=$_SESSION['miercoles_ex'];
	
	if ($miercoles_e_doc==""){
	
	$miercoles_e_doc='N/A';
	}
	
	$_SESSION['miercoles_sx']=$miercoles_s;
	$miercoles_s_doc=$_SESSION['miercoles_sx'];
	
	if ($miercoles_s_doc==""){
	
	$miercoles_s_doc='N/A';
	}
	
	$_SESSION['jueves_ex']=$jueves_e;
	$jueves_e_doc=$_SESSION['jueves_ex'];
	
	if ($jueves_e_doc==""){
	
	$jueves_e_doc='N/A';
	}
	
	$_SESSION['jueves_sx']=$jueves_s;
	$jueves_s_doc=$_SESSION['jueves_sx'];
	
	if ($jueves_s_doc==""){
	
	$jueves_s_doc='N/A';
	}
	
	$_SESSION['viernes_ex']=$viernes_e;
	$viernes_e_doc=$_SESSION['viernes_ex'];
	
	if ($viernes_e_doc==""){
	
	$viernes_e_doc='N/A';
	}
	
	$_SESSION['viernes_sx']=$viernes_s;
	$viernes_s_doc=$_SESSION['viernes_sx'];
	
	if ($viernes_s_doc==""){
	
	$viernes_s_doc='N/A';
	}
	
//////////////	Otro empleo Si,No y descripción 
    
	$_SESSION['cct_empleox']=$f_otro_empleo;
	$cct_empleo_doc=$_SESSION['cct_empleox'];

    	if ($cct_empleo_doc==""){
	
	$cct_empleo_doc='N/A';
	}
	


    $_SESSION['des_empleox']=$f_des_empleo;
	$des_empleok=$_SESSION['des_empleox'];
	
		if ($des_empleok==""){

	$des_empleok='N/A';
	}
	
	//////////////	 CCT'S
	
    $_SESSION['cct_otro1x']=$f_cct_otro1;
	$cct_otro1_doc=$_SESSION['cct_otro1x'];
	
		if ($cct_otro1_doc==""){
	
	$cct_otro1_doc='N/A';
	}
	
	
	$_SESSION['cct_otro2x']=$f_cct_otro2;
	$cct_otro2_doc=$_SESSION['cct_otro2x'];
	
	if ($cct_otro2_doc==""){
	
	$cct_otro2_doc='N/A';
	}
	
	
	$_SESSION['cct_otro3x']=$f_cct_otro3;
	$cct_otro3_doc=$_SESSION['cct_otro3x'];
	
	if ($cct_otro3_doc==""){
	
	$cct_otro3_doc='N/A';
	}
	
	
////////// 	 Número de Hr 

    $_SESSION['hr_otro1x']=$f_hr_otro1;
	$hr_otro1_doc=$_SESSION['hr_otro1x'];
	
	if ($hr_otro1_doc==""){
	
	$hr_otro1_doc='N/A';
	}
	
	$_SESSION['hr_otro2x']=$f_hr_otro2;
	$hr_otro2_doc=$_SESSION['hr_otro2x'];
	
	if ($hr_otro2_doc==""){
	
	$hr_otro2_doc='N/A';
	}
	
	$_SESSION['hr_otro3x']=$f_hr_otro3;
	$hr_otro3_doc=$_SESSION['hr_otro3x'];
	
	if ($hr_otro3_doc==""){
	
	$hr_otro3_doc='N/A';
	}

  


	
	


  


///////////////////////   Inserción Datos Personales 


    mysql_select_db("plantilla_part", $conexion);
 
    
	$linea1="INSERT INTO datos_per(curp,
	      rfc,
		  cct,
		  do,
		  actualizacion,
		  ap_pat,
		  ap_mat,
		  nombre,
		  sexo,
		  fech_nac,
		  enti_nac,
		  permiso,
		  vigencia,
		  edo_civ,
		  enti_domi,
		  delega,
		  colonia,
		  domicilio,
		  cp,
		  telefono,
		  tipo_personal,
		  tipo_docente,
		  descrip_docente,
		  status_captura
		    
		 )";
		 
    $linea2="VALUES(	
	  '$curp_doc',
	  '$rfc_doc',
	  '$usuario',
	  '$do_final',
	  '$fecha_cap',
	 
	  '$paterno_doc',
	  '$materno_doc',
	  '$nombre_doc',
	 
	  '$sexo_doc',
	  '$fecha_nac_doc',
	  '$entidad_nac_doc',
	  

	  '$permiso_doc1',
	  '$vigencia_doc1',
	  
	  '$estado_c_doc',
	 
	  '$entidad_doc',
	  '$delegacion_doc',
	  '$colonia_doc',
	  '$domicilio_doc',
	  '$cp_doc',
	  '$telefono_doc',
	  
	  '$tipo_empleado_doc',	  
	  '$funcion_doc',
	  '$otro_doc',
	  '$status_captura'

)";



/////////////////////////  Inserción Datos Academicos


   $linea3="INSERT INTO datos_aca(rfc,
		  cct,
		  actualizacion,
		  niv_max_est,
		  est_niv_est,
		  egresado,
		  des_egresado,
		  profesion,
		  ced_prof,
		  otros_est,
		  cursos    
		 )";
		 
    $linea4="VALUES('$rfc_doc',
	  '$usuario',
	  '$fecha_cap',  	  
	  '$nivel_est_doc',
	  '$status_est_doc',
	  '$egresado_doc',
	  '$des_egresado_doc',
	  '$profesion_doc',
	  '$cedula_doc',
	  '$otros_est_doc',
	  '$cursos_doc'	  
       )";



/////////////////////////  Inserción Datos Laborales


    mysql_select_db("plantilla_part", $conexion);
 
 
   $linea5="INSERT INTO datos_lab(rfc,
		  cct,
		  actualizacion, 
		  ing_plantel,
		  tipo_personal,
		  tipo_docente,
		  asignatura1,
		  asignatura2,
		  asignatura3,
		  asignatura4,
		  
		  hrs_gpo,
		  hrs_serv,
		  hrs_sin_gpo,
		  
		  hr_lun_e,
		  hr_lun_s,
		  
		  hr_mar_e,
		  hr_mar_s,
		  
		  hr_mie_e,
		  hr_mie_s,
		  
		  hr_jue_e,
		  hr_jue_s,
		  
		  hr_vie_e,
		  hr_vie_s,
		  
		  cct1,
		  cct2,
		  cct3,
		  hr1,
		  hr2,
		  hr3,
		  
		  otro_empleo,
		  des_empleo
				   
		 )";
		 
    $linea6="VALUES('$rfc_doc',
	    '$usuario',
	    '$fecha_cap',
	
	    '$fecha_ing_doc',
		'$tipo_empleado_doc',
		
		'$funcion_doc',
		
		'$asignatura1_doc',
		'$asignatura2_doc',
		'$asignatura3_doc',
		'$asignatura4_doc',
		
		'$hr_grupo_doc',
		'$hr_servi_doc',
		'$hr_sin_doc',
		
		'$lunes_e_doc',
		'$lunes_s_doc',
		
		'$martes_e_doc',
		'$martes_s_doc',
		
		'$miercoles_e_doc',
		'$miercoles_s_doc',
		
		'$jueves_e_doc',
		'$jueves_s_doc',
		
		'$viernes_e_doc',
		'$viernes_s_doc',
		
		'$cct_otro1_doc',
		'$cct_otro2_doc',
		'$cct_otro3_doc',
		
		
		'$hr_otro1_doc',
		'$hr_otro2_doc',
		'$hr_otro3_doc',

		'$cct_empleo_doc',
        '$des_empleok'

       )";




$consulta=$linea1.$linea2;
$consulta2=$linea3.$linea4;
$consulta3=$linea5.$linea6;


$result=mysql_query($consulta,$conexion);
$result2=mysql_query($consulta2,$conexion);
$result3=mysql_query($consulta3,$conexion);


if ($result3==1)  {
 
 
 
 
 header("Location:cambio_result.php"); 

} 

else {
header("location:error_result.php?errorusuario=1"); 
}

/// cierro la consulta

mysql_close($link);




		?>     
         <?
		 echo "<BR>";
		
		?>

        
        <?
/*
		 echo $curp_doc.$rfc_doc.$paterno_doc.$materno_doc.$nombre_doc.$sexo_doc.$fecha_nac_doc.$entidad_nac_doc.$estado_c_doc 
	*/	
		?>
		 <?
		 echo "<BR>";
		
		?>
        <?  
		/*
		echo $entidad_doc.$delegacion_doc.$colonia_doc.$domicilio_doc.$cp_doc.$telefono_doc 
		*/
		?>
         <?
		 echo "<BR>";
		
		?>
<?
	 	
	 
	  
	

?>



 <?
		 echo "<BR>";
		
		?>
        
    
        <?
		 echo "<BR>";
		
		?>
        <?
		
		
		echo 
		$curp_doc."<br>".
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
		

		?>
        
        
         
                  