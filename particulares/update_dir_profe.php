<?php
include("cnx.php"); 

session_start(); 


/////////////////// INICIAMOS VARIABLES DE SESSION DE USUARIO ///////////////

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];///// Incorrecto
	$do_final=$_SESSION['do_esc'];
	
	$rfc_row=$_SESSION['rfc_do1']; 

////////////// Variable status

//$estatus='1';

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
 
    
	$linea1="UPDATE datos_aca_dire SET 
	
	 actualizacion='$fecha_cap',
	 niv_max_est='$f_nivel_est',
     est_niv_est='$f_status_est',  
    
	 egresado='$f_egresado',
	 des_egresado='$f_des_egresado',
	 profesion='$f_carrera',
	 ced_prof='$f_cedula',
      
     otros_est='$f_otros_est', 
	 cursos='$f_cursos'
	
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

      
                  