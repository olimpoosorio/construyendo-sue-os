

<!DOCTYPE html>
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


<script src="ckeditor/ckeditor.js" ></script>

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

<?php


	$dato = $_GET['da'];

	switch($dato) {
		case 1:
			require_once('partes/ventas_adm.php');
			break;
		case 2:
			require_once('partes/ventas_adm_ins.php');
			break;
		case 3:
			require_once('partes/ventas_adm_ed.php');
			break;
		case 4:
			require_once('partes/ventas_adm_bo.php');
			break;
			
	}

?>

<center><article> articulos </article><c/enter>

</section>

<footer>
<br>@ TODOS LOS DERECHOS RESERVADOS
<br> CONSTRUYENDO SUEÑOS INMOBILIARIA
<br> 2020
<br> NEIVA-HUILA



</footer>


</body>
</html>

?>