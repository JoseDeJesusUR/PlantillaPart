<?php
include("cnx.php"); 

session_start(); 


/////////////////// INICIAMOS VARIABLES DE SESSION DE USUARIO ///////////////

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];

////////////// Variable status

//$estatus='1';

//import_request_variables ("P","f_");

	$_SESSION['cct_g']=$f_cct_gral;
	$cct_cam=$_SESSION['cct_g'];
	
	
    $_SESSION['grado_g']=$f_grado;
	$grado_cam=$_SESSION['grado_g'];

   $_SESSION['curp_g']=$f_curp;
	$curp_cam=$_SESSION['curp_g'];
	
	$_SESSION['paterno_g']=$f_paterno;
	$paterno_cam=$_SESSION['paterno_g'];
	
	$_SESSION['materno_g']=$f_materno;
	$materno_cam=$_SESSION['materno_g'];
	
	$_SESSION['nombre_g']=$f_nombre;
	$nombre_cam=$_SESSION['nombre_g'];
			
		

	//// GENERAMOS LA VARIABLE DATE (Fecha captura)
	$fecha_cap =date ("m/d/Y");



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
	
		?>     
        
        
        <?
		 echo $cct_general.$grado_cam.$curp_cam.$paterno_cam.$materno_cam.$nombre_cam.$turno.$fecha_cap;
		?>