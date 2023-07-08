<!---
Este controlador recibe los datos de "index.php"
y coteja el 'checkbox' de SI o NO para decidir
si redirigir hacia la página con contenido de Star Trek.
Además los datos obtenidos en la página anterior son 
rescatados y enviados a la página recién mencionada, 
para mostrar ciertas características gráficas.
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
	header("Location: startrek.php?nombre=" . urlencode($nombre) . 
		   "&edad=" . urlencode($edad) .
		   "&interesado=" . urlencode($interesado)  );
	exit();

	echo '</div>';
}
?>
