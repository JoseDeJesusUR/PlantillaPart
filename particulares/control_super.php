<?php

session_start();

  include("seguridad.php");  
  include("cnx.php"); 
	


//////////////Variables session usuario //////////////////
    $id_crono=$_SESSION['id']; 
    $usuario=$_SESSION['user'];
	$cct_visita=$_SESSION['cctvis'];
	$dop_final=$_SESSION['dop']; 
	$fecha_visita=$_SESSION['fech'];
	
//// GENERAMOS LA VARIABLE DATE (Fecha captura)
	$fecha_cap =date ("m/d/Y");   
	
//	$tipo_row=$_SESSION['tp'];  
	$VA_row=$_SESSION['$VA'];
	
	$nombre_final =$_SESSION['nom'];	
	
	$estatus_ruta ='0';

////////////////// Importamos variables y se genera su session ///////////

//import_request_variables ("P","f_");

	$_SESSION['cate']=$f_cate_ruta;
	$cate_ruta=$_SESSION['cate'];

    $_SESSION['provis']=$f_prop_vis;
	$prop_vis=$_SESSION['provis'];
   
    $_SESSION['sisbas']=$f_sis_bas;
	$sis_bas=$_SESSION['sisbas'];
    
	$_SESSION['asob']=$f_aspec_ob;
	$aspec_ob=$_SESSION['asob'];
			
	$_SESSION['asmej']=$f_aspec_mejo;
	$aspec_mejo=$_SESSION['asmej'];	

	$_SESSION['com']=$f_com_acue;
	$com_acue=$_SESSION['com'];	
	
	$_SESSION['segui']=$f_seguimiento;
	$seguimiento=$_SESSION['segui'];	




 mysql_select_db("sisue", $conexion);
		  
		$linea1="INSERT INTO reg_super (id_crono,
		id_usuario,
		cct_vis,
        do,
		fecha_vis,
		fecha_cap,
		tipo_descrip,
		cate_ruta,
		prop_vis,
		sis_bas,
		aspec_ob,
		aspec_mejo,
		com_acue,
		seguimiento
		 )";
		 
       $linea2="VALUES('$id_crono',
	         '$usuario',
			 '$cct_visita',
			 '$dop_final',
			 '$fecha_visita',
			 '$fecha_cap',
			 '$VA_row',
			 '$cate_ruta',
			 '$prop_vis',
			 '$sis_bas',
			 '$aspec_ob',
			 '$aspec_mejo',
			 '$com_acue',
			 '$seguimiento'
 	    )";


$registro=$linea1.$linea2;

$resultado=mysql_query($registro,$conexion);



 mysql_close($link);





////////////////////// Registra Categoria de la Ruta de mejora ////////////////////////// 

 mysql_select_db("sisue", $conexion);
		  
		$ruta1="INSERT INTO reg_ruta (id_crono,
		id_usuario,
		cct_vis,
        do,
		fecha_vis,
		cate_ruta,
		estatus
		 )";
		 
       $ruta2="VALUES('$id_crono',
	    '$usuario',
		'$cct_visita',
		'$dop_final',
		'$fecha_visita',	
		'$cate_ruta',
		'$estatus_ruta'
 	    )";


$reg_ruta=$ruta1.$ruta2;

$resultado_ruta=mysql_query($reg_ruta,$conexion);




///////////////////// Cambiar STATUS de registro de la tabla crono_vis ////////////////////////		  


        mysql_select_db("sisue", $conexion);
		  
		$update1="UPDATE crono_vis set estatus=1 where id_crono='$id_crono' ";


$registro2=$update1;

$resultado2=mysql_query($registro2,$conexion);
		
		if ($resultado2==1){
 
 header("Location:vis_super_reg2.php"); 

} 

 mysql_close($link);



echo $usuario;
echo '<br>';
echo $id_crono;
echo '<br>';
echo $cct_visita;
echo '<br>';
echo $dop_final;
echo '<br>';
echo $fecha_visita;
echo '<br>';
echo $fecha_cap;
echo '<br>';
echo $VA_row;
echo '<br>';
echo $cate_ruta;
echo '<br>';
echo $prop_vis;
echo '<br>';
echo $sis_bas;
echo '<br>';
echo $aspec_ob;
echo '<br>';
echo $aspec_mejo;
echo '<br>';
echo $com_acue;
echo '<br>';
echo $seguimiento;


?>