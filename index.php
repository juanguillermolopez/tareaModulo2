<!---
Este archivo es el principal de de todo el preyecto.
Pregunta por el nombre y la edad; estos datos son enviados
al controlador de PHP que se llama "procesar_formulario.php"
-->

<!DOCTYPE html>
<html>
<head>
  <title>Página de inicio</title>
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
</head>
<body>
  <div class="container">
    <h1 class="mt-5">Bienvenido(a) a nuestra página de inicio</h1>

	  <!--  envia los datos para verificar la edad   -->
    <form method="post" action="procesar_formulario.php">
      <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" required>
      </div>

      <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" class="form-control" name="edad" required>
      </div>

      <div class="form-group">
        <div class="form-check">
          <input class="form-check-input" type="checkbox" name="interesado" value="si">
          <label class="form-check-label" for="interesado">¿Está interesado en la información de la página?</label>
        </div>
      </div>

      <button type="submit" class="btn btn-primary">Enviar</button>
    </form>
  </div>

  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
</body>
</html>
