<!DOCTYPE html>
<html>
<head>
  <title>Serie Fibonacci</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    #fibonacci-list {
      list-style-type: none;
      padding: 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <h1 class="mt-4">Serie Fibonacci</h1>
    <form method="post" action="">
      <div class="form-group">
        <label for="fibonacci-input">Mostrar hasta el número:</label>
        <input type="number" class="form-control" id="fibonacci-input" name="limit" min="1" max="99" required>
      </div>
      <button type="submit" class="btn btn-primary">Generar</button>
    </form>

    <?php
    // Función para generar la serie de Fibonacci
    function generateFibonacci($limit) {
      $fibonacci = [0, 1]; // Primeros dos números de la serie
      
      for ($i = 2; $i <= $limit; $i++) {
        $fibonacci[$i] = $fibonacci[$i - 1] + $fibonacci[$i - 2];
      }
      
      return $fibonacci;
    }
    
    // Verificar si se envió el formulario
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
      $limit = intval($_POST["limit"]);
      
      // Validar si el número es válido
      if ($limit < 1 || $limit > 99) {
        echo "<p class='text-danger'>Por favor, ingresa un número válido entre 1 y 99.</p>";
      } else {
        echo "<ul id='fibonacci-list' class='mt-4'>";
        
        // Generar la serie de Fibonacci
        $fibonacciSeries = generateFibonacci($limit);
        
        // Mostrar la serie iteración por iteración
        for ($j = 0; $j <= $limit; $j++) {
          echo "<li>" . $fibonacciSeries[$j] . "</li>";
        }
        
        echo "</ul>";
      }
    }
    ?>
  </div>
  
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
