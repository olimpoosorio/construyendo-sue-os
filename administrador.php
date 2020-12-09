<?php
require_once('clases_usuario/conexion.php');
require_once('clases_usuario/sentencia.php');
session_start();

//echo $_SESSION['usuario']

if(isset($_SESSION['usuario']) && $_SESSION['usuario'] != "") {

$con_u = " select * from usuario where id_usuario = ". $_SESSION['usuario'] ;$resultado =new sen($con_u, $conexion, 'usuario'); 
$resultado->con();


$usuario = mysqli_fetch_array($resultado->res);}
else {
	header("location: inicio.php");

?>

<html>
<head>
<meta charset="utf-8" />
<title>CONSRUYENDO SUEÑOS </title>

    <style type="text/css">
        a:link, a:visited, a:active {
            text-decoration:none;
        }
    </style>
<link href="css/css_administrador.css" type="text/css" rel="stylesheet">

</head>

<body>

<form action="" method="post">
<nav> 

<img src="img/logo_inmobiliaria.png" width="200" height="120" alt="">

<p>construyendo "sueños" </p>

<h2> 

<a href="inicio.php">SALIR</a>

</h2>
<strong>
<div id="menu">
<a href="administrador.php">PRINCIPAL</a>
<a href="#">CORREOS</a>
<a href="#">PQRS</a>
<a href="#">INFORMES</a></strong>
</div>
 </nav>

<aside>

 <strong>
<br><a href="#">CUMPLIMIENTO CONTRATOS</a><br>
<br><a href="ventas_admin.php?da=1">VENTAS </a><br>
<br><a href="arriendo_admin.php?da=1">ARRIENDOS</a><br>
<br><a href="cotizacion_admin.php?da=1">COTIZACIONES</a><br>
<br><a href="estados_finan_admin.php?da=1">ESTADOS FINANCIEROS</a><br>
<br><a href="nomina_admin.php?da=1">NOMINA</a><br>
<br><a href="facturacion_admin.php?da=1">FACTURACION</a><br></strong>

</aside>

<section> 


<div id="cerrar">
bienvenido <?php  echo $usuario ['nombre']; ?> &nbsp;
cerrar sesion

</div>













</section>

<footer>
<br>@ TODOS LOS DERECHOS RESERVADOS
<br> CONSTRUYENDO SUEÑOS INMOBILIARIA
<br> 2020
<br> NEIVA-HUILA



</footer>


</body>
</html>