<?php
include("cnx.php"); 

session_start(); 


/////////////////// INICIAMOS VARIABLES DE SESSION DE USUARIO ///////////////

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];

////////////// Variable status


//import_request_variables ("P","f_");

			
		$do_final=$_SESSION['do_esc'];

	//// GENERAMOS LA VARIABLE DATE (Fecha captura)
	$fecha_cap =date ("Y/m/d");

	$tipo_empleado="DIRECTIVO";
    $_SESSION['$tipo_empleadox']=$tipo_empleado;
	$tipo_empleado_dir=$_SESSION['$tipo_empleadox'];
	$status_captura="1";



/////////////////////// Variables Datos Personales ////////////////////////////// 

    $curp_doc_dir=$_SESSION['curpx'];
     
		
	$rfc_doc_dir=$_SESSION['rfcx'];
	$paterno_doc_dir=$_SESSION['paternox'];		
	$materno_doc_dir=$_SESSION['maternox'];		
	$nombre_doc_dir=$_SESSION['nombrex'];	
	$sexo_doc_dir=$_SESSION['sexox'];	
	$fecha_nac_doc_dir=$_SESSION['fecha_nacx'];
	$entidad_nacx_doc_dir=$_SESSION['entidad_nacx'];
	$estado_c_doc_dir=$_SESSION['estado_cx'];	
	
	
	//////////////////// Validación vacio 
    $_SESSION['funcionx']=$f_funcion_dir;
	$funcion_doc_dir=$_SESSION['funcionx'];	
	
    if ($funcion_doc_dir==""){
	
	$funcion_doc_dir='N/A';
}		



     $permiso_dir=$_SESSION['permisox'];
	 
	 if ($permiso_dir==""){
	
	$permiso_dir='N/A';
}
	 
	 	
	$vigencia_dir=$_SESSION['vigenciax'];
	
	
	if ($vigencia_dir==""){
	
	$vigencia_dir='N/A';
}
	

//////////////////// Validación vacio 

     $asigna_dir=$_SESSION['asignax'];
	 
	 if ($asigna_dir==""){
	
	$asignatura_dir='N/A';
}		
	
	  $espe_dir=$_SESSION['especialx'];
	 
	 if ($espe_dir==""){
	
	$especialidad_dir='N/A';
}		
	


		
	
			
///////////////////// Domicilio ////////////////////////////// 
	$entidad_doc_dir=$_SESSION['entidadx'];
	$delegacion_doc_dir=$_SESSION['delegacionx'];
	$colonia_doc_dir=$_SESSION['coloniax'];		
	$domicilio_doc_dir=$_SESSION['domiciliox'];		
	$cp_doc_dir=$_SESSION['cpx'];	
	$telefono_doc_dir=$_SESSION['telefonox'];
	

	

/////////////////////// Preparación Profesional ///////////////


	$nivel_est_doc_dir=$_SESSION['nivel_estx'];
	$status_est_doc_dir=$_SESSION['status_estx'];
	$egresado_doc_dir=$_SESSION['egresadox'];		
	$des_egresado_doc_dir=$_SESSION['des_egresadox'];	
	$perfil_doc_dir=$_SESSION['perfilx'];
	$profesion_doc_dir=$_SESSION['profesionx'];	
	$cedula_doc_dir=$_SESSION['cedulax'];
	$otros_est_doc_dir=$_SESSION['otros_estx'];
	$cursos_doc_dir=$_SESSION['cursosx'];

/////////////////////// Información Laboral ////////////////////////////// 


    $_SESSION['fecha_ingx']=$f_fecha_ing_dir;
	$fecha_ing_doc_dir=$_SESSION['fecha_ingx'];
	
	$_SESSION['estatus_labx']=$f_estatus_lab_dir;
	$estatus_lab_doc_dir=$_SESSION['estatus_labx'];
	
	
	                            
	$_SESSION['funcionx']=$f_funcion_dir;
	$funcion_doc_dir=$_SESSION['funcionx'];		
   
    $_SESSION['especifiquex']=$f_especifique_dir;
	$especifique_doc_dir=$_SESSION['especifiquex'];
	
	if ($especifique_doc_dir==""){
	
	$especifique_doc_dir='N/A';
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
		 
    $linea2="VALUES('$curp_doc_dir',
	  '$rfc_doc_dir',
	  '$usuario',
	  '$do_final',
	  '$fecha_cap',
	 
	  '$paterno_doc_dir',
	  '$materno_doc_dir',
	  '$nombre_doc_dir',
	 
	  '$sexo_doc_dir',
	  '$fecha_nac_doc_dir',
	  '$entidad_nacx_doc_dir',
	  '$permiso_dir',
	  '$vigencia_dir',
	  
	  
	  '$estado_c_doc_dir',
	 
	  '$entidad_doc_dir',
	  '$delegacion_doc_dir',
	  '$colonia_doc_dir',
	  '$domicilio_doc_dir',
	  '$cp_doc_dir',
	  '$telefono_doc_dir',
	  '$tipo_empleado_dir',
	  '$funcion_doc_dir',
	  '$asignatura_dir',
	  '$status_captura'
 
)";

/////////////////////////  Inserción Datos Academicos

   $linea3="INSERT INTO datos_aca_dire(rfc,
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
		 
    $linea4="VALUES('$rfc_doc_dir',
	  '$usuario',
	  '$fecha_cap', 
	   	  
	  '$nivel_est_doc_dir',
	  '$status_est_doc_dir',
	  '$egresado_doc_dir',
	  '$des_egresado_doc_dir',
	  '$profesion_doc_dir',
	  '$cedula_doc_dir',
	  '$otros_est_doc_dir',
	  '$cursos_doc_dir'	  
       )";






/////////////////////////  Inserción Datos Laborales

  
    mysql_select_db("plantilla_part", $conexion);
 
 
   $linea5="INSERT INTO datos_lab_dire(rfc,
		  cct,
		  actualizacion, 
		  ing_plantel,
		  tipo_empleado,
		  funcion,
		  especifique

				   
		 )";
		 
    $linea6="VALUES('$rfc_doc_dir',
	    '$usuario',
	    '$fecha_cap',
	
	    '$fecha_ing_doc_dir',
		'$tipo_empleado_dir',
		
		'$funcion_doc_dir',
		'$especifique_doc_dir'
	
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
header("location:control_result.php?errorusuario=1"); 
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
		 echo 
        $curp_doc_dir."<br>".
	   $rfc_doc_dir."<br>".
	   $usuario."<br>".
	   $do_final."<br>".
	   $fecha_cap."<br>".
	 
	   $paterno_doc_dir."<br>".
	   $materno_doc_dir."<br>".
	   $nombre_doc_dir."<br>".
	 
	   $sexo_doc_dir."<br>".
	   $fecha_nac_doc_dir."<br>".
	   $entidad_nacx_doc_dir."<br>".
	   $permiso_dir."<br>".
	   $vigencia_dir."<br>".
	  
	  
	   $estado_c_doc_dir."<br>".
	 
	   $entidad_doc_dir."<br>".
	   $delegacion_doc_dir."<br>".
	   $colonia_doc_dir."<br>".
	   $domicilio_doc_dir."<br>".
	   $cp_doc_dir."<br>".
	   $telefono_doc_dir."<br>".
	   $tipo_empleado_dir."<br>".
	   $funcion_doc_dir."<br>".
	   $asignatura_dir."<br>".
	   $status_captura ;
		
		?>
        
    
        <?
		 echo "<BR>";
		 
		 
		 
		
		?>
       
        
         
                  