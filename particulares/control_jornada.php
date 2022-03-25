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
	$cct_general=$_SESSION['cct_g'];
	

		

	//// GENERAMOS LA VARIABLE DATE (Fecha captura)
	$fecha_cap =date ("m/d/Y");




	      ///consulta informacion del si es turno es Tiempo Completo////
	    $query="SELECT * FROM datos_cct WHERE cct='$cct_general'; "; 
        $result= mysql_query($query) or die (mysql_error());
		while ($row = @mysql_fetch_array($result)){
			
		     ///Regreso valores del la consulta/// 
        $turno=$row['turno']; 

if ($turno==3){
 
 header("Location:1121.php"); 

} 
else {
header("location:1211.php"); 
}


}



/// cierro la consulta

mysql_close($link);
	
		?>     