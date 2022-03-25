<?php
include("cnx.php"); 

session_start(); 


/////////////////// INICIAMOS VARIABLES DE SESSION DE USUARIO ///////////////

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];

////////////// Variable status

//$estatus='1';

//import_request_variables ("P","f_");

	$_SESSION['fech']=$f_fecha1;
	$fecha_vis=$_SESSION['fech'];
	
	$_SESSION['cctgral']=$f_cct_gral;
	$cct_gral1=$_SESSION['cctgral'];	

	$_SESSION['grup']=$f_grupos;
	$grupos1=$_SESSION['grup'];
	
	$_SESSION['alum']=$f_alumnos;
	$alumnos1=$_SESSION['alum'];
	
	$_SESSION['doce']=$f_docentes;
	$docentes1=$_SESSION['doce'];
	
	$_SESSION['direc']=$f_director;
	$director1=$_SESSION['direc'];
	
	$_SESSION['acade']=$f_academico;
	$academico1=$_SESSION['acade'];
	
	$_SESSION['esco']=$f_escolar;
	$escolar1=$_SESSION['esco'];
	
	$_SESSION['lec']=$f_lectura;
	$lectura1=$_SESSION['lec'];
	
	$_SESSION['medio']=$f_medios;
	$medios1=$_SESSION['medio'];
	
	$_SESSION['foca']=$f_focalizada;
	$focalizada1=$_SESSION['foca'];	
	
		

	//// GENERAMOS LA VARIABLE DATE (Fecha captura)
	$fecha_cap =date ("m/d/Y");


echo "<br>";
echo $cct_gral1;
echo "<br>";
echo $usuario;
echo "<br>";
echo $dop_final;
echo "<br>";
echo $grupos1;
echo "<br>";
echo $alumnos1;
echo "<br>";
echo $docentes1;
echo "<br>";
echo $director1;
echo "<br>";
echo $academico1;
echo "<br>";
echo $escolar1;
echo "<br>";
echo $lectura1;
echo "<br>";
echo $medios1;
echo "<br>";
echo $focalizada1;




//Inserción datos generales

    mysql_select_db("sisue", $conexion);
    
	$linea1="INSERT INTO datos_generales(id_cct,
         id_inspeccion,
		 do, 
         grupos,
		 alumnos,
		 docentes,
		 director,
         sub_academico,
         sub_escolar,
		 mtro_lectura,
		 mtro_medios,
		 focalizada
		 
		 )";
		 
    $linea2="VALUES('$cct_gral1',
     '$usuario',
     '$dop_final',  
     '$grupos1',
     '$alumnos1',
     '$docentes1',
     '$director1',
     '$academico1',
     '$escolar1',
     '$lectura1',
     '$medios1',
     '$focalizada1'
 
)";


//echo $consulta;

$consulta=$linea1.$linea2;

$result=mysql_query($consulta,$conexion);

/*
if ($result==1){
 
 header("Location:generales.php?correcto=2"); 

} 
else {
header("location:generales.php?errorusuario=1"); 
}
*/

//mysql_close($link);
 
 
///////////////////// Cambiar estado de registro de ta tabla datos_cct en el campo de la captura de los datos generales ///		  

    

        mysql_select_db("sisue", $conexion);
		  
		$linea_upadate="UPDATE datos_cct set datos_gral=1 where cct='$cct_gral1' ";
		 
       


$registro=$linea_upadate;

$resultado=mysql_query($registro,$conexion);

		
		if ($resultado==1){
 
 header("Location:generales.php?correcto=2"); 

} 
else {
header("location:generales.php?errorusuario=1"); 
}
		
		
		/*
		
		if ($resultado==1){
 
 header("Location:generales.php"); 

} 
*/
 mysql_close($link);

		?>     