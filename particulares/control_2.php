<?php
include("cnx.php"); 

session_start(); 

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];
	


	     ///consulta informacion del usuario////
	    $query="SELECT * FROM usuarios_registro WHERE cct_insp='$usuario'; "; 
        $result= mysql_query($query) or die (mysql_error());
		while ($row = @mysql_fetch_array($result)){
			
		     ///Regreso valores del la consulta/// 
        $do=$row['do']; 
	    $nombre=$row['nombre'];
		$paterno=$row['paterno'];
		$materno=$row['materno'];
		$cargo=$row['cargo'];
		$espacio=" ";	
		$inspector="$nombre$espacio$paterno$espacio$materno";	
		

	/////////////////Genero variables de session ////////////// 
	
	   $_SESSION['inspec']=$inspector;
	   $nombre_final=$_SESSION['inspec'];	   
	   
	
if  ($result==1){
	
	header("Location:menu-carpeta.php"); 
}

}
	 
?>