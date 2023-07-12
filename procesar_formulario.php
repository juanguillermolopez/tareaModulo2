<!---
Este controlador recibe los datos de "index.php"
y coteja la edad para mostrar la página de 'Star Trek' o la infantil.
Coteja el 'checkbox' de SI o NO para decidir
si redirigir hacia la página con contenido de Star Trek con el banner al pie.
--->


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$nombre = $_POST["nombre"];
	$edad = $_POST["edad"];
	$interesado = isset($_POST["interesado"]) ? $_POST["interesado"] : "";

	// Ejemplo de impresión de los datos en pantalla
	echo '<div class="container">';
	echo '<h1 class="mt-5">Procesando formulario</h1>';
	
	// Redirigir al usuario a otra página si selecciona "Sí" en el checkbox
	// usando el metodo GET
	header("Location: startrek.php?nombre=" . urlencode($nombre) . 
		   "&edad=" . urlencode($edad) .
		   "&interesado=" . urlencode($interesado)  );
	exit();

	echo '</div>';
}
?>
