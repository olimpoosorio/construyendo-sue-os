<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>CONSTRUYENDO SUEÑOS</title>

<link href="css/contactenos.css" type="text/css" rel="stylesheet">


</head>
<body>

<center>
<div>
	<h2>
		<span>CONSTRUYENDO SUEÑOS</span>
	
	</h2>
	<h1>inmobiliaria</h1>
</div>
<div>

<h3>
	<a href="inicio.php" name="">Inicio</a>
	<a href="quienes_somos.php" name=" ">Quienes somos</a>
	<a href="arriendos.php" name=" ">arriendos</a>
	<a href="ventas.php" name=" ">ventas</a>
	<a href="contactenos.php" name=" ">Contactenos</a>
</h3>
<header>

<div class="slider-wrapper theme-dark">
<div id="slider" class="nivoSlider"> 

<img src="img/casa.jpg" width="1200" height="400" alt="">


</div>
</div>

</header>
<br>
<section>
<h4>ESCRIBENOS</h4>
	
	<div id="mapa">
	
	<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.6155399273885!2d-75.29413658573702!3d2.926348355299174!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8e3b747d01843659%3A0x69973077ea69e99f!2sEFECTY%20CENTRO%20COMERCIAL%20COMUNEROS!5e0!3m2!1ses!2sco!4v1596950585693!5m2!1ses!2sco" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
	
	
	</div>
	<div id="formulario">
	
	
	<form method="post">
	
	<input type="text" name="nombre" required="required" placeholder="ingresa tu nombre" ><br>
	
	<input type="email" name="email" required="required" placeholder="ingresa tu email" ><br>
	
	<input type="text" name="asunto" required="required" placeholder="ingrese su asunto o cotizacion que deseas saber..." ><br>
	
	<textarea name="mensaje" required="required" placeholder="ingresa su mensaje especificando su interes. ejemplo casa: 12 conjunto: caminos etc." rows="10" cols="40"></textarea><br>
	
	<input type="submit" name="ENVIAR"><br>
	
	
	
	</form>
	
<?php

	if(isset($_POST['boton'])) {
		$nombre = $_POST['nombre'];
		$email = $_POST['email'];
		$asunto = $_POST['asunto'];
		$men = $_POST['mensaje'];
		
		$mensaje = "El mensaje fue enviado por: ". $nombre. "\n";
		$mensaje = $mensaje . "El correo es: ". $email. "\n";
		$mensaje = $mensaje . $men;
		
		mail('limpiatanquesbadus@gmail.com', $asunto, $mensaje, "FROM: $email");	
		echo '<script>alert("Su mensaje fue enviado")</script>';
		}

?>
	
	
	
	</div>
	
	
	
	
	
	
</section>

</div>
<footer>
<br>@ TODOS LOS DERECHOS RESERVADOS
<br> CONSTRUYENDO SUEÑOS INMOBILIARIA
<br> 2020
<br> NEIVA-HUILA



</footer>
</center>



</body>
</html>