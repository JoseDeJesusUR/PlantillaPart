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
	


///////////////////////  Actualizar Datos Personales 


    mysql_select_db("plantilla_part", $conexion);
 
    
	$linea1="UPDATE datos_lab_dire SET 
	
	 actualizacion='$fecha_cap',
	 ing_plantel='$f_fecha_ing', 
	 funcion='$f_funcion',
	
	 especifique='$f_especifique'
	
	 
	

    
	
	WHERE rfc='$rfc_row'";
	
///////////////////////////////////////// 
mysql_select_db("plantilla_part", $conexion);
 
    
	$linea2="UPDATE datos_per SET 
	

	 tipo_docente='$f_funcion'

	
	WHERE rfc='$rfc_row'";




$consulta=$linea1;

$consulta2=$linea2;



$result=mysql_query($consulta,$conexion);
$result2=mysql_query($consulta2,$conexion);


if ($result==1)  {
 
 

 
 header("Location:update_result.php"); 

} 

else {
header("location:error_update.php?errorusuario=1"); 
}

/// cierro la consulta

mysql_close($link);




		?>     





       
        
        
         
                  