<?php
include("cnx.php"); 

session_start(); 

$usuario=$_POST['usuario']; //variables form
$password=$_POST['password']; //variables form



$resultado=mysql_query("SELECT cct from cct_part where cct='$usuario' and cct_pass='$password' ; ",$conexion);  
$filas=mysql_num_rows($resultado);


if ($filas==1){
	$_SESSION['autentificado']="1";
    $_SESSION['user']=$_POST['usuario'];
    $_SESSION['pass']=$password;
header("Location:menu-carpeta.php"); 
}
else {
header("location:../index.php?errorusuario=1"); 
}


    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];
	$nombre_final =$_SESSION['nom']; 

  
	 
?>