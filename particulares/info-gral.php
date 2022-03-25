<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/carpeta-unica.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1" />

<style>
ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color: #333;
}

li {
    float: left;
}

li a, .dropbtn {
    display: inline-block;
    color: white;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

li a:hover, .dropdown:hover .dropbtn {
    background-color: red;
}

li.dropdown {
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
   color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {background-color: #f1f1f1}

.dropdown:hover .dropdown-content {
    display: block;
}
</style>


<?
session_start();

header('Content-Type: text/html; charset=UTF-8');



  include("seguridad.php");  
  include("cnx.php"); 
 

    $usuario=$_SESSION['user']; 
    $dop_final=$_SESSION['dop'];
	$nombre_final =$_SESSION['nom']; 

  

	      ///consulta informacion del usuario////
	
	  
	    $query="SELECT * FROM cct_part WHERE cct='$usuario'; "; 
        $result= mysql_query($query) or die (mysql_error());
		while ($row = @mysql_fetch_array($result)){
			
		     ///Regreso valores del la consulta/// 
        $nombre=$row['nom_esc'];
	  
	    $do_log=$row['do']; 
		 /*
	    $nombre=$row['nombre'];
		$paterno=$row['paterno'];
		$materno=$row['materno'];
		$cargo=$row['cargo'];
		$espacio=" ";	
		$inspector="$nombre$espacio$paterno$espacio$materno";	
		*/
}
	/////////////////Genero variables de session ////////////// 
	
	   $_SESSION['no_esc']=$nombre;
	   $nombre_final=$_SESSION['no_esc'];
	   
	   $_SESSION['do_esc']=$do_log;
	   $do_final=$_SESSION['do_esc'];
	   	   
	   
	/// cierro la consulta

//mysql_close($query);


?>

<!-- InstanceBeginEditable name="doctitle" -->
<title>CSES</title>
 <?
	 
	 $num_dirOK= array();
	 $color= array();
	 $color[0]='#ff3300';
	 $i=0;
	 
	 

  ////////// Query //////////////////////

	    $numero_dir=mysql_query("SELECT COUNT(`director`) FROM `datos_gral` where cct_insp='$usuario' and director='1' ;"); 
        while ($row = @mysql_fetch_array($numero_dir)){
		     
			
			 
        $num_dir=$row[COUNT(`cct`)];
		}
	
	
	   $numero_grup=mysql_query("SELECT SUM(`total_grupos`)as grupos FROM `datos_gral` where cct_insp='$usuario' ;"); 
        while ($row = @mysql_fetch_array($numero_grup)){
		     
			
		$num_grup=$row[COUNT(`grupos`)];
	
		
		}   
		
	    $numero_alum=mysql_query("SELECT SUM(`total_alum`)as total FROM `datos_gral` where cct_insp='$usuario' ;"); 
        while ($row = @mysql_fetch_array($numero_alum)){
		     
			
       $num_alum=$row[COUNT(`total`)];
		}   
		
		$numero_doc=mysql_query("SELECT SUM(`total_doc`)as total FROM `datos_gral` where cct_insp='$usuario' ;"); 
        while ($row = @mysql_fetch_array($numero_doc)){
		     
			
       $num_doc=$row[COUNT(`total`)];
		}   
		
	    ?>



<script src="../SpryAssets/loader.js" type="text/javascript"></script>
<!-- <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script> -->
 <script type="text/javascript" src="https://www.google.com/jsapi"></script>

 
  <script type="text/javascript">
    google.charts.load("current", {packages:['corechart']});
    google.charts.setOnLoadCallback(drawChart);
   
    function drawChart() {
      var data = google.visualization.arrayToDataTable([
        ///
	//	var fem0 = parseInt(document.getElementById("muj0").value);
		
		["TIPOS", "Total", { role: "style" } ],
      
	    ['<? echo "Grupos" ?>',<? echo $num_grup ?> ,"#e5e4e2"],
		['<? echo "Alumnos" ?>',<? echo $num_alum ?> ,"#b87333"],
		['<? echo "Docentes" ?>',<? echo $num_doc ?> ,"#871B47"]
		
	
		 
			
	    //["Grupos",10, "#b87333"],
	    //["Alumnos",10, "silver"],
        //["Docentes", 19.30, "gold"],
        //["Director", 21.45, "color: #e5e4e2"],
		//["Sub Academico", 11.45, "color: #76A7FA"],
		//["Sub Gestión E.", 10.45, "color: #e5e4e2"],
		//["Lectura", 15.45, "color: #871B47"],
		//["Aula Medios", 21.45, "color: #76A7FA"],
		//["Focalizada", 40.45, "color: #e5e4e2"]
      
	  ]);

      var view = new google.visualization.DataView(data);
      view.setColumns([0, 1,
                       { calc: "stringify",
                         sourceColumn: 1,
                         type: "string",
                         role: "annotation" },
                       2]);

      var options = {
        title: "GRAFICA DATOS GENERALES ZONA",
        width: 600,
        height: 400,
        bar: {groupWidth: "95%"},
        legend: { position: "none" },
      };
      var chart = new google.visualization.ColumnChart(document.getElementById("columnchart_values"));
      chart.draw(view, options);
  }
  </script>

<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="../css/desing.css" rel="stylesheet" type="text/css" />
<link href="../css/style.css" rel="stylesheet" type="text/css" />

<link href="../fuentes.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>
<body bgcolor="#EFEFEF" class="fondo">
<div id="container_stc">
  <div class="header" id="header_stc"></div>
  <div class="login" id="login">
    <table width="976" height="30" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="78">&nbsp;</td>
        <td width="78">&nbsp;</td>
        <td width="78">&nbsp;</td>
        <td colspan="2" align="right"><i class="fa fa-user-circle-o" style="font-size:24px;color:red"></i><? echo "<span class='usuarioBold'> DO$do_final </span>" ?><? echo "<span class='usuarioBold'>| $usuario </span>" ?><? echo "<span class='usuarioBold'>| $nombre_final  </span>" ?></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="622">&nbsp; </td>  
      </tr>
    </table>
  </div>
<div id="menu_stc">
 
  <ul>
  <!--
  <li><a href="../particulares/menu-carpeta.php">INICIO</a></li>
  -->
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">ACTUALIZAR</a>
    <div class="dropdown-content">
      <a href="modi_docente.php">DOCENTE</a>
      <a href="#">ADMINISTRATIVO</a>
      <a href="#">DIRECTIVO</a>
   
   <!-----------------MENÚ------------------>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">PLANTILLA</a>
    <div class="dropdown-content">
      <a href="result_docente.php">DOCENTE</a>
      <a href="result_adm.php">ADMINISTRATIVO</a>
      <a href="result_dir.php">DIRECTIVO</a>
  
  
    <!-----------------MENÚ------------------>
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn">CAPTURA PERSONAL</a>
    <div class="dropdown-content">
      <a href="captura.php">DOCENTE</a>
      <a href="captura_adm.php">ADMINISTRATIVO</a>
      <a href="captura_dir.php">DIRECTIVO</a>
    
    
     <!-----------------MENÚ------------------>
  
   <li class="dropdown">
    <a href="javascript:void(0)" class="dropbtn"><i class="fa fa-cog fa-spin" style="font-size:18px"></i></a>
    <div class="dropdown-content">
      <a href="menu-carpeta.php">INICIO</a>
      <a href="salir.php">SALIR</a>
     
    
    </div>
  </li>
</ul> 



</div>
  <div id="body_stc"><!-- InstanceBeginEditable name="body" -->
  
  <p>&nbsp;</p>
  <p class="titulos2">&nbsp;</p>
  <p class="titulos2">&nbsp;</p>
  <p class="titulos2">DATOS GENERALES ZONA</p>
  
  <table width=90%  border="1" cellpadding="0" cellspacing="0" align="center">
      <tr>  
     
    <td width=11% align="center" bgcolor="#7DB1FF" class="titulos_tablas">CCT</td>					
    <td width=8% align="center" bgcolor="#7DB1FF"><span class="titulos_tablas">TOTAL GRUPOS</span>
    <td width=8% align="center" bgcolor="#7DB1FF"><p class="titulos_tablas">TOTAL ALUMNOS</p>
    <td width=9% align="center" bgcolor="#7DB1FF"><span class="titulos_tablas">TOTAL DOCENTES</span>        
    <td width=9% align="center" bgcolor="#7DB1FF"><span class="titulos_tablas">DIRECTOR</span>        
    <td width=13% align="center" bgcolor="#7DB1FF"><p class="titulos_tablas">SUBDIRECTOR ACADEMICO                </p>
    <td width=13% align="center" bgcolor="#7DB1FF"><span class="titulos_tablas">SUBDIRECTOR GESTION ESCOLAR</span>        
    <td width=10% align="center" bgcolor="#7DB1FF"><span class="titulos_tablas">TALLER DE LECTURA Y ESCRITURA</span>    
    <td width=9% align="center" bgcolor="#7DB1FF"><span class="titulos_tablas">AULA DE MEDIOS</span>        
    <td width=10% align="center" bgcolor="#7DB1FF"><span class="titulos_tablas">FOCALIZADA</span></tr>

  <?
  /*

	/*Consulta datos visita por cct y asignatura, ordenado por folio*/
	$query="SELECT *
           FROM datos_gral
           WHERE cct_insp='$usuario' and cct<>'$usuario'  order by cct;";
          
		 
		   
    $result= mysql_query($query) or die (mysql_error());
    while ($row = @mysql_fetch_array($result)){
	
		 
		 
		 
		  $cct_gral=$row['cct'];
		  $total_grupos=$row['total_grupos'];
		  $total_alum=$row['total_alum'];
		  $total_doc=$row['total_doc'];
		  $director=$row['director'];
		  $sub_aca=$row['sub_aca'];
		  $sub_gest=$row['sub_gest'];
		  $lectura=$row['lectura'];
		  $tic=$row['tic'];
		  $medios=$row['medios'];
		  $focalizada=$row['focalizada'];
		  
		  
		  
		  
	
		  
		  ///////////////// Cambiamos los valores de la consulta de numerico a texto SI,NO

 if($director==0)
 {
    $_SESSION['$DIR']='NO';
	$director1=$_SESSION['$DIR'];
 }
 if($director==1)
 {
	 
	 
    $_SESSION['$DIR']='SI';
	$director1=$_SESSION['$DIR'];
 }
 ///////////////// Sub Academico
 
  if($sub_aca==0)
 {
    $_SESSION['$SUBA']='NO';
	$sub_aca1=$_SESSION['$SUBA'];
 }
 if($sub_aca==1)
 {
	  
    $_SESSION['$SUBA']='SI';
	$sub_aca1=$_SESSION['$SUBA'];
 }
 
 ///////////////// Sub Gestion Escolar
 
  if($sub_gest==0)
 {
    $_SESSION['$SUBG']='NO';
	$sub_gest1=$_SESSION['$SUBG'];
 }
 if($sub_gest==1)
 {
	  
    $_SESSION['$SUBG']='SI';
	$sub_gest1=$_SESSION['$SUBG'];
 }

///////////////// Lectura y Escritura
 
  if($lectura==0)
 {
    $_SESSION['$LEC']='NO';
	$lectura1=$_SESSION['$LEC'];
 }
 if($lectura==1)
 {
	  
    $_SESSION['$LEC']='SI';
	$lectura1=$_SESSION['$LEC'];
 }
///////////////// TIC
 
  if($tic==0)
 {
    $_SESSION['$TI']='NO';
	$tic1=$_SESSION['$TI'];
 }
 if($tic==1)
 {
	  
    $_SESSION['$TI']='SI';
	$tic1=$_SESSION['$TI'];
 }
 ///////////////// Focalizada
 
  if($focalizada==0)
 {
    $_SESSION['$FOC']='NO';
	$focalizada1=$_SESSION['$FOC'];
 }
 if($focalizada==1)
 {
	  
    $_SESSION['$FOC']='SI';
	$focalizada1=$_SESSION['$FOC'];
 }

  
 
?>


  <tr> 
    
    <td align="center"><? echo $cct_gral ?></td>
    <td align="center"><? echo $total_grupos ?></td>
    <td align="center"><? echo $total_alum ?></td>
    <td align=center><? echo $total_doc ?></td>
    <td align=center><? echo $director1 ?></td>
    <td align=center><? echo $sub_aca1 ?></td>
    <td align=center><? echo $sub_gest1 ?></td>
    <td align=center><? echo $lectura1 ?></td>
    <td align=center><? echo $tic1 ?></td>
    <td align=center><? echo $focalizada1 ?></td>
    <tr>
<?   
	 }
 	
?>

  </tr>
  
</table>

  
  <table width="800" border="0" align="center" cellpadding="0" cellspacing="0">
    <tr>
      <td align="center">
          <div id="columnchart_values" style="width: 900px; height: 300px;">
            <p>&nbsp;</p>
            <p>&nbsp;</p>
          </div>
      </td>
    </tr>
  </table>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  <p>&nbsp;</p>
  
  <!-- InstanceEndEditable --></div>
  <div class="footer" id="footer_stc"></div>
</div>

</body>
<!-- InstanceEnd --></html>
