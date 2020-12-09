<?php
require_once('clases_usuario/conexion.php');
require_once('clases_usuario/sentencia.php');
session_start();

if(isset($_POST['boton'])) {
	
	$usuario = $_POST['usuario'];
	$clave = sha1($_POST['clave']);
	
	$sql = "select * from usuario where usuario = '$usuario' AND clave = '$clave'";
	
	$consulta = new sen($sql, $conexion, 'usuario');
	$consulta->con();
	
	$usuario = mysqli_fetch_array($consulta->res);
	
	if( $usuario['usuario'] != "" ) {
		$_SESSION['usuario'] = $usuario['id_usuario'];
		header("Location: administrador.php?d=1"); 
	}else{
		header("Location: index.php"); 
	}	
	
}

?>


<html>
<head>
<meta charset="utf-8" />
<title>ingrese administrador</title>
<img src="img/logo_inmobiliaria.png" width="200" height="120" alt="">
<link href="css/admi.css" type="text/css" rel="stylesheet">
</head>
<body>
<center><h1>
<form action="administrador.php" method="post">

<center><p> INGRESAR USUARIO</p></center>

<table width="400" border="0" align="center" >
<tr>
<td>USUARIO</td>
<td><input type="text" name="usuario" required="required"></td>
</tr>
<tr>
<td>CONTRASEÑA</td>
<td><input type="password" name="clave" required="required"></td>
</tr>
<tr>
<td></td>
<td><input type="submit" name="boton" value="entrar"></td>
</tr>
</table>

</form>


</h1></center>

</body>
</html>
