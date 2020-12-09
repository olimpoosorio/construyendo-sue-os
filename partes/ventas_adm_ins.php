<div id="formulario">
	<form action="ventas_admin.php?da=2" method="post" enctype="multipart/form-data">
	
	<input type="text" name="venta" required="required" placeholder="venta disponible descripcion conjunto y si es apto o casa">
	<input type="number" name="precio" required="required" placeholder="Precio">
	<input type="file" name="imagen" required="required">
	<textarea name="descripcion" rows="4" cols="50" required="required" placeholder="descripcion del bien inmueble" class="ckeditor"></textarea>
	<input type="submit" name="boton" value="Guargar">
	
	</form>
</div>

<?php 

//si el boton fue precionado-----

if(isset($_POST['boton'])) {
	$venta = $_POST ['venta'];
	$precio =$_POST ['precio'];
	$imagen = $_FILE['imagen'];
	
	$destino = 'img/ventas';
	$descripcion = $_POST['descripcion'];
	list ($nombre_img,$ext_img) = explode ('.', $imagen['name']);
	$tamano = $imagen['size'];
	$nombrefinal = $venta."_" . $precio."_".$nombre_img.".".$ext_img;
	
	//grabo base de datos
	$insertar= "insertar into ventas(venta, precio, imagen, descripcion) values ('$venta', $precio, '$descripcion', '$nombrefinal')";
	
	$ins = new sen ($insertar,$conexion,'ventas');
	$ins->insedbo();
	
	//muevo el archivo a la carpeta
	if($tamano < 100000000) {
		move_uploaded_file($imagen['tmp_name'], $destino. '/'.$nombrefinal);
} else {
	echo "la imagen supera el tamaño permitido";
	}
}
?>


