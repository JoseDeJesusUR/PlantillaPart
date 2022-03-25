<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/login.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Documento sin título</title>
<!-- InstanceEndEditable -->
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
<link href="css/desinglogin.css" rel="stylesheet" type="text/css" />
<link href="css/style.css" rel="stylesheet" type="text/css" />
<script type="text/javascript">
function ventana(){
document.getElementById("bgVentanaModal").style.visibility="hidden";
}
</script>
</head>
<body>
<div id="container">
  <div class="header" id="header"></div>
  <div id="body">
<table   bgcolor="#FFFFFF" border="0" align="center" cellpadding="0" cellspacing="0">
     <tr>
    <td height="88" colspan="3" align="center" class="letra_error"><p class="menu_salir">&nbsp;</p>
      <p class="menu_salir">Se  requiere el uso de Google chrome, para el óptimo funcionamiento del  sistema.</p>
      <p class="menu_salir"><img src="img/Chrome1.png" alt="" width="31" height="31" /></p></td>
    </tr>
  <tr>
    <td width="170" height="146">&nbsp;</td>
    <td width="560"><!-- InstanceBeginEditable name="login" -->
    <form action="particulares/control.php" method="post" name="login">
      <table width="506" border="0" align="center" cellpadding="0" cellspacing="0">
        <tr>
          <td height="19" colspan="4" align="center"><p>&nbsp;</p>            <?php 
	if ($_GET['errorusuario']==1){
		echo"<span class='titulos'> Datos Incorrectos</span>";}
		else{
			echo"<span class='titulos'>Introduce tus datos de acceso</span>";
		}
			
	?></td>
        </tr>
  <tr>
    <td height="19" colspan="4" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td width="61" align="left" class="usuarioBold">&nbsp;</td>
    <td width="111" align="left" class="usuarioBold">Usuario</td>
    <td width="191"><input name="usuario" type="text" class="color_fondo3" id="usuario" /></td>
    <td width="143"><label for="usuario"></label></td>
  </tr>
  <tr>
    <td align="left" class="usuarioBold">&nbsp;</td>
    <td height="32" align="left" class="usuarioBold">Contraseña</td>
    <td><input name="password" type="password" class="color_fondo3" id="password" /></td>
    <td><label for="password"></label></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
    <td>&nbsp;</td>
    <td align="center"><input type="submit" name="iniciar" id="iniciar" value="Iniciar" /></td>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center" class="letra_error">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="4" align="center"><table width="480" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td colspan="5" align="center">&nbsp;</td>
        </tr>
      <tr>
        <td width="186">&nbsp;</td>
        <td width="54">&nbsp;</td>
        <td width="50">&nbsp;</td>
        <td colspan="2">&nbsp;</td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td colspan="2"></tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
        <td width="99">&nbsp;</td>
        <td width="91">&nbsp;</td>
      </tr>
</table></td>
  </tr>
  <tr>
    <td colspan="4" align="center">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="4" align="center">&nbsp;</td>
  </tr>
</table>
    </form>
<!-- InstanceEndEditable -->
      <p>&nbsp;</p>
    <p>&nbsp;</p></td>
    <td width="170">&nbsp;</td>
  </tr>
</table>
  </div>
  <div class="footer" id="footer"></div>
</div>
</body>
<!-- InstanceEnd --></html>
