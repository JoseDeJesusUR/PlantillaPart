<?php
include("cnx.php"); 

session_start(); 


/////////////////// INICIAMOS VARIABLES DE SESSION DE USUARIO ///////////////

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];

////////////// Variable status

//$estatus='1';

//import_request_variables ("P","f_");

	
	$do_final=$_SESSION['do_esc'];		
		

	//// GENERAMOS LA VARIABLE DATE (Fecha captura)
	$fecha_cap =date ("Y/m/d");

	$tipo_empleado_adm1="ADM-APOYO";
    $_SESSION['$tipo_empleadox_adm']=$tipo_empleado_adm1;
	$tipo_empleado_adm=$_SESSION['$tipo_empleadox_adm'];
	
	$status_captura="1";



/////////////////////// Variables Datos Personales ////////////////////////////// 


	$curp_doc_adm=$_SESSION['curpx'];
	$rfc_doc_adm=$_SESSION['rfcx'];	
	$paterno_doc_adm=$_SESSION['paternox'];		
	$materno_doc_adm=$_SESSION['maternox'];	
	$nombre_doc_adm=$_SESSION['nombrex'];	
	$sexo_doc_adm=$_SESSION['sexox'];	
	$fecha_nac_doc_adm=$_SESSION['fecha_nacx'];
	$entidad_nacx_doc_adm=$_SESSION['entidad_nacx'];
	$estado_c_doc_adm=$_SESSION['estado_cx'];	
	
	
	//////////////////// Validación vacio 

     $permiso_doc=$_SESSION['permisox'];
	 
	 if ($permiso_doc==""){
	
	$permiso_doc1='N/A';
}
	 
	 	
	$vigencia_doc=$_SESSION['vigenciax'];
	
	
	if ($vigencia_doc==""){
	
	$vigencia_doc1='N/A';
}

	
	
		
			
/////// Domicilio///	
	
	$entidad_doc_adm=$_SESSION['entidadx'];
	$delegacion_doc_adm=$_SESSION['delegacionx'];
	$colonia_doc_adm=$_SESSION['coloniax'];		
	$domicilio_doc_adm=$_SESSION['domiciliox'];		
	$cp_doc_adm=$_SESSION['cpx'];	
	$telefono_doc_adm=$_SESSION['telefonox'];



/////////////////////// Preparación Profesional ////////////////////////////// 



	$nivel_est_doc_adm=$_SESSION['nivel_estx'];
	$status_est_doc_adm=$_SESSION['status_estx'];
	$egresado_doc_adm=$_SESSION['egresadox'];			
	$perfil_doc_adm=$_SESSION['perfilx'];
	
	///////////////////////
	$otros_est_doc_adm=$_SESSION['otros_estx'];
	 if ($otros_est_doc_adm==""){
	
	$otros_est_doc_adm='N/A';
}		

	
	$cursos_doc_adm=$_SESSION['cursosx'];
	 if ($cursos_doc_adm==""){
	
	$cursos_doc_adm='N/A';
}		


/////////////////////// Información Laboral ////////////////////////////// 


    $_SESSION['fecha_ingx']=$f_fecha_ing_adm;
	$fecha_ing_doc_adm=$_SESSION['fecha_ingx'];
	
	//$_SESSION['estatus_labx']=$f_estatus_lab_adm;
	//$estatus_lab_doc_adm=$_SESSION['estatus_labx'];
	
	$_SESSION['funcionx']=$f_funcion_adm;
	$funcion_doc_adm=$_SESSION['funcionx'];	
	
    if ($funcion_doc_adm==""){
	
	$funcion_doc_adm='N/A';
}		

		
   
    $_SESSION['especifiquex']=$f_especifique_adm;
	$especifique_doc_adm=$_SESSION['especifiquex'];
			
			
	//////////////////// Validación vacio 

     $asigna_adm=$_SESSION['asignax'];
	 
	 if ($asigna_adm==""){
	
	$asignatura_adm='N/A';
}		
	
	  $espe_adm=$_SESSION['especialx'];
	 
	 if ($espe_adm==""){
	
	$especialidad_adm='N/A';
}		
			
			
			
	
///////////////	validacion vacio  
    $_SESSION['lunes_ex']=$f_lunes_e_adm;
	$lunes_e_doc_adm=$_SESSION['lunes_ex'];
	
	
		if ($lunes_e_doc_adm==""){
	
	$lunes_e_doc_adm='N/A';
    }	
	
	$_SESSION['lunes_sx']=$f_lunes_s_adm;
	$lunes_s_doc_adm=$_SESSION['lunes_sx'];
	
	if ($lunes_s_doc_adm==""){
	
	$lunes_s_doc_adm='N/A';
    }	
	
	
	$_SESSION['martes_ex']=$f_martes_e_adm;
	$martes_e_doc_adm=$_SESSION['martes_ex'];
	
		if ($martes_e_doc_adm==""){
	
	$martes_e_doc_adm='N/A';
    }	
	
	
	$_SESSION['martes_sx']=$f_martes_s_adm;
	$martes_s_doc_adm=$_SESSION['martes_sx'];
	
		if ($martes_s_doc_adm==""){
	
	$martes_s_doc_adm='N/A';
    }	
	
	
	
	$_SESSION['miercoles_ex']=$f_miercoles_e_adm;
	$miercoles_e_doc_adm=$_SESSION['miercoles_ex'];
	
		if ($miercoles_e_doc_adm==""){
	
	$miercoles_e_doc_adm='N/A';
    }
	
	$_SESSION['miercoles_sx']=$f_miercoles_s_adm;
	$miercoles_s_doc_adm=$_SESSION['miercoles_sx'];
	
	if ($miercoles_s_doc_adm==""){
	
	$miercoles_s_doc_adm='N/A';
    }
	
	
	$_SESSION['jueves_ex']=$f_jueves_e_adm;
	$jueves_e_doc_adm=$_SESSION['jueves_ex'];
	
	if ($jueves_e_doc_adm==""){
	
	$jueves_e_doc_adm='N/A';
    }
	
	$_SESSION['jueves_sx']=$f_jueves_s_adm;
	$jueves_s_doc_adm=$_SESSION['jueves_sx'];
	
	if ($jueves_s_doc_adm==""){
	
	$jueves_s_doc_adm='N/A';
    }
	
	
	$_SESSION['viernes_ex']=$f_viernes_e_adm;
	$viernes_e_doc_adm=$_SESSION['viernes_ex'];
	
	if ($viernes_e_doc_adm==""){
	
	$viernes_e_doc_adm='N/A';
    }
	
	$_SESSION['viernes_sx']=$f_viernes_s_adm;
	$viernes_s_doc_adm=$_SESSION['viernes_sx'];
	
	if ($viernes_s_doc_adm==""){
	
	$viernes_s_doc_adm='N/A';
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
	
	
    mysql_select_db("plantilla_part", $conexion);
		 
    $linea2="VALUES(	
	  '$curp_doc_adm',
	  '$rfc_doc_adm',
	  '$usuario',
	  '$do_final',
	  '$fecha_cap',
	 
	  '$paterno_doc_adm',
	  '$materno_doc_adm',
	  '$nombre_doc_adm',
	 
	  '$sexo_doc_adm',
	  '$fecha_nac_doc_adm',
	  '$entidad_nacx_doc_adm',
	  
	  '$permiso_doc1',
	  '$vigencia_doc1',
	  
	  
	  '$estado_c_doc_adm',
	 
	  '$entidad_doc_adm',
	  '$delegacion_doc_adm',
	  '$colonia_doc_adm',
	  '$domicilio_doc_adm',
	  '$cp_doc_adm',
	  '$telefono_doc_adm',
	  '$tipo_empleado_adm1',
	  
	  '$funcion_doc_adm',
	  '$especifique_doc_adm',
      '$status_captura'
	  
 
)";

/////////////////////////  Inserción Datos Academicos

   $linea3="INSERT INTO datos_aca_adm(rfc,
		  cct,
		  actualizacion,
		  niv_max_est,
		  est_niv_est,
		  egresado,
		  perfil_aca,
		  otros_est,
		  cursos    
		 )";
		 
    $linea4="VALUES('$rfc_doc_adm', 
	  '$usuario',
	  '$fecha_cap',  	  
	  '$nivel_est_doc_adm',
	  '$status_est_doc_adm',
	  '$egresado_doc_adm',
	  '$perfil_doc_adm',
	  '$otros_est_doc_adm',
	  '$cursos_doc_adm'	  
       )";





/////////////////////////  Inserción Datos Laborales

  
    mysql_select_db("plantilla_part", $conexion);
 
 
   $linea5="INSERT INTO datos_lab_adm(rfc,
		  cct,
		  actualizacion, 
		  ing_plantel,
		  tipo_empleado,
		  funcion,
		  especifique,
		
		  hr_lun_e,
		  hr_lun_s,
		  
		  hr_mar_e,
		  hr_mar_s,
		  
		  hr_mie_e,
		  hr_mie_s,
		  
		  hr_jue_e,
		  hr_jue_s,
		  
		  hr_vie_e,
		  hr_vie_s
		  
		 			   
		 )";
		 
    $linea6="VALUES('$rfc_doc_adm',
	    '$usuario',
	    '$fecha_cap',
	
	    '$fecha_ing_doc_adm',
		'$tipo_empleado_adm',
		
		'$funcion_doc_adm',
		'$especifique_doc_adm',
		

		'$lunes_e_doc_adm',
		'$lunes_s_doc_adm',
		
		'$martes_e_doc_adm',
		'$martes_s_doc_adm',
		
		'$miercoles_e_doc_adm',
		'$miercoles_s_doc_adm',
		
		'$jueves_e_doc_adm',
		'$jueves_s_doc_adm',
		
		'$viernes_e_doc_adm',
		'$viernes_s_doc_adm'
		
		
       )";





//echo $consulta;

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





/*

	      ///consulta informacion del si es turno es Tiempo Completo////
	    $query="SELECT * FROM datos_cct WHERE cct='$cct_general'; "; 
        $result= mysql_query($query) or die (mysql_error());
		while ($row = @mysql_fetch_array($result)){
			
		     ///Regreso valores del la consulta/// 
        $turno=$row['turno']; 

if ($turno==3){
 
 //header("Location:1121.php"); 

} 
else {
///header("location:1211.php"); 
}


}
//Inserción datos generales

    mysql_select_db("sisue", $conexion);
    
	$linea1="INSERT INTO cambios(cct,
         curp,
		 paterno, 
         materno,
		 nombre,
		 cct_insp,
		 do,
         fecha 
		 )";
		 
    $linea2="VALUES('$cct_cam',
     '$curp_cam', 
     '$paterno_cam',
     '$materno_cam',
     '$nombre_cam',
	 '$usuario',
	 '$dop_final',
     '$fecha_cap'
 
)";


//echo $consulta;

$consulta=$linea1.$linea2;

$result=mysql_query($consulta,$conexion);


if ($result==1){
 
 header("Location:cambio_result.php"); 

} 
else {
header("location:cambio.php?errorusuario=1"); 
}


//mysql_close($link);


/// cierro la consulta

mysql_close($link);
	
	
	*/
	
	
		?>     
         <?
		 echo "<BR>";
		
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
		 echo "<BR>";
		
		?>
        <?
		echo 
 $curp_doc_adm."<br>".
	   $rfc_doc_adm."<br>".
	   $usuario."<br>".
	   $do_final."<br>".
	   $fecha_cap."<br>".
	 
	   $paterno_doc_adm."<br>".
	   $materno_doc_adm."<br>".
	   $nombre_doc_adm."<br>".
	 
	   $sexo_doc_adm."<br>".
	   $fecha_nac_doc_adm."<br>".
	   $entidad_nacx_doc_adm."<br>".
	  
	   $permiso_doc1."<br>".
	   $vigencia_doc1."<br>".
	  
	  
	   $estado_c_doc_adm."<br>".
	 
	   $entidad_doc_adm."<br>".
	   $delegacion_doc_adm."<br>".
	   $colonia_doc_adm."<br>".
	   $domicilio_doc_adm."<br>".
	   $cp_doc_adm."<br>".
	   $telefono_doc_adm."<br>".
	   $tipo_empleado_adm1."<br>".
	  
	   $funcion_doc_adm."<br>".
	   $especifique_doc_adm."<br>".
       $especialidad_adm ;


/*


	  $curp_doc_adm."<br>".
	  $rfc_doc_adm."<br>".
	  $usuario."<br>".
	  
	  $fecha_cap."<br>".
	 
	  $paterno_doc_adm."<br>".
	  $materno_doc_adm."<br>".
	  $nombre_doc_adm."<br>".
	 
	  $sexo_doc_adm."<br>".
	  $fecha_nac_doc_adm."<br>".
	  $entidad_nacx_doc_adm."<br>".
	  
	  $permiso_doc1."<br>".
	  $vigencia_doc1."<br>".
	  
	  $estado_c_doc_adm."<br>".
	 
	  $entidad_doc_adm."<br>".
	  $delegacion_doc_adm."<br>".
	  $colonia_doc_adm."<br>".
	  $domicilio_doc_adm."<br>".
	  $cp_doc_adm."<br>".
	  $telefono_doc_adm."<br>".
	  $tipo_empleado_adm1."<br>".
	  $funcion_doc_adm."<br><br>".
	  $asignatura_adm."<br>".
      $especialidad_adm;
		*/
		?>
        
        
         
                  