<!---
En ésta página, se  reciben los datos de la página anterior.
Por ejemplo, si el checkbox es positivo (true), se muestra 
un banner  o corrusel al final de la pagina.

Las rutas y los nombres de las imágenes son referenciadas
mediante variables de PHP.

-->


<?php
if ($_SERVER["REQUEST_METHOD"] == "GET") {
	$edad = $_GET["edad"];
	$interesado = $_GET["interesado"];
	$verbanner = false;

  // Verificar la edad del usuario y tomar una decisión
  if ($edad < 18) {
    // Redirigir al usuario a otra página si tiene menos de 18 años
    header("Location: menor_edad.php");
    exit();
  } 
	else {
		// aqui cotejo el chack este marcado para mostrar el banner antes del footer
		if ($interesado == "si") {
			$verbanner = true;
	} 
  }
}
?>



<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    <link rel="stylesheet" href="css/estilos.css">
    <script src="js/script.js"></script>
    <link rel="shortcut icon" href="img/favicon.png">
	<?php $title = "Star Trek Fanpage Chile" ;  ?>
    <title><?php echo $title; ?></title>
  </head>
  <body>


     


<!--
  el carousel me dio problemas al hacer ajustar las imagenes al tamaño del
  contenedor.
  finalmente, decidí redimensionar las imágenes con una herramienta de internet
-->
	<?php
		$carpetaimagenes = "./jpg/";
	    $tipoarchivos = "*.jpg";
	  	$imagenes = glob($carpetaimagenes . $tipoarchivos)
	?>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
		  
		  <!-- si elimmino este IMG, las demás no se muestran ni el carousel funciona.
				entonces tengo que dejarlo aquí, aunque se repita una imagen, aunque me duela.-->
        <div class="carousel-item active">
          <img class="d-block w-100" src="jpg/img0.jpg" >
        </div>
		  <!---->
		  <?php
			foreach ($imagenes as $imagen){
				echo "<div class='carousel-item'>
						<img class='d-block w-100' src='" . $imagen ."'>
						</div>";
			}
			?>
      </div>
      <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Anterior</span>
      </a>
      <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Próxima</span>
      </a>	 		
    </div>

 


    <!-- esto fue fácil -->

    <div class="container centrado">
      <div class="jumbotron text-white">
		  <?php $saludo = "Greetings!";  ?>
        <p class="h1 saludo"><?php echo $saludo;  ?></p>
		  <?php  $subtitulo = "Bienvenidos a la Fanpage chilena de Star Trek.
        Creada por admiradores de la serie de ciencia ficción para todo el mundo." ?>
        <p class="h2 subtitulo"><?php   echo $subtitulo; ?>  </p>
      </div>
    </div>


 



    <!-- NAVBAR    -->
    <!--
      esta paete me fue especialmente dificil de hacer funcionar,
      ya que casi todo los ejemplos son para bootstrap 5.3,
      mientras que la plantilla es de bootstrap 4.0
    -->
      
  <nav class="navbar navbar-expand-lg navbar-light" style="background-color: rgb(67, 67, 254);">
    <!-- <a class="navbar-brand" href="#">Mi Sitio</a>  -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
		 
        <li class="nav-item active  ">
          <a class="nav-link text-white" href="index.php">Inicio</a>
        </li>
  
        <li class="nav-item dropdown ">
          <a class="nav-link dropdown-toggle text-white " href="#" id="navbarDropdownMenuLink" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            Galería de páginas
          </a>
			<!-- cada página se abre en una pestaña nueva -->
          <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
			<a class="dropdown-item" href="https://intl.startrek.com/" target="_blank">Sitio oficial de Star Trek</a>
            <a class="dropdown-item" href="fibonacci.php" target="_blank">Serie Fibonacci</a>
            <a class="dropdown-item" href="cuento.php" target="_blank">Un Cuento para niños</a>
          </div>
        </li>
      </ul>
    </div>
  </nav>



<!------------------------------------------------------------------------------------->
    <!-- esto fue fácil -->
    <div class="centrado color-fondo-1"  >
		<?php  $h3 = "Esta es una pequeña muestra de la historia de la serie en las figuras de sus personajes."  ?>
      <p class="h3"><?php   echo $h3; ?></p>
		<?php  $h4 = ""  ?>
      <p class="h4"><?php   echo $h4; ?></p>
    </div>


 


    <!-- esto fue fácil -->
    <div class="centrado color-fondo-1">
      <div class="container">
        <div class="row align-items-start">
			<?php  $h5 = "Los siguientes son algunos de sus principales personajes y su icónica nave espacial.";  ?>
          <div class="col h5"><?php echo $h5; ?></div>
        </div>
      </div>
    </div>

 

<!--
  esto no me dio tantos problemas.
  es bonito el efecto de las tarjetas
-->
	  
    <div class="row row-cols-1 row-cols-md-3 g-4 centrado color-fondo-2">
      <div class="col">
        <div class="card">
			<?php $imagen0 =  $carpetaimagenes . 'img0.jpg'; ?>
          <img src="<?php echo $imagen0; ?>" class="card-img-top rounded" alt="...">
          <div class="card-body">
			  <?php $titulo1 = "USS Enterprise"; ?>
            <h5 class="card-title"><?php echo $titulo1; ?></h5>
			  <?php $texto1 = "Con su designación NCC 1701-D, es la nave más conocida de toda la saga de la serie. Apareció en la película 'Generaciones',
              y en el capítulo final de la nueva serie 'Picard'. Esta nave fue destruida durante la película en Veridian 3 por un ataque Klingon (eternos enemigos de la federación) y restaurada por Geordi La Forge para la serie 'Picard'."; ?>
            <p class="card-text"><?php echo $texto1;  ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php $imagen1 =  $carpetaimagenes . 'img1.jpg'; ?>
          <img src="<?php echo $imagen1; ?>" class="card-img-top rounded" alt="...">
          <div class="card-body">
			  <?php $titulo2 = "The Original Series (TOS)"; ?>
            <h5 class="card-title"><?php echo $titulo2; ?></h5>
			  <?php  $texto2 = "Esta es la serie de 1966. Incluye a los inolvidables Kirk y al vulcano Señor Spock. Al principio no se apostaba nada por el éxito de la producción, sin embargo, la serie tocó problemas serios y profundos de la sociedad de ese momento, tales como la pena de muerte, las guerras, las dictaduras. Todo ello cautivó al público joven con la idea de que trabajando juntos los problemas se podían superar. Ese es su gran valor.";   ?>
            <p class="card-text"><?php  echo $texto2; ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php $imagen2 =  $carpetaimagenes . 'img2.jpg'; ?>
          <img src="<?php echo $imagen2; ?>" class="card-img-top rounded" alt="...">
          <div class="card-body">
			  <?php $titulo3 = "La Nueva Generación"; ?>
            <h5 class="card-title"><?php echo $titulo3; ?></h5>
			  <?php $texto3 = "Este es el Staff de personajes de la segunda serie Star Trek. Esta nueva historia tiene lugar 80 años después de la serie original.
              Su personaje principal es el capitán Jean Luc Picard, interpretado por Sir Patrick Stewart, Jonathan Frakes, Gates McFadden, entre otros.";  ?>
            <p class="card-text"><?php  echo $texto3; ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php $imagen3 =  $carpetaimagenes . 'img3.jpg'; ?>
          <img src="<?php echo $imagen3; ?>" class="card-img-top rounded" alt="...">
          <div class="card-body">
			  <?php $titulo4 = "Voyager"; ?>
            <h5 class="card-title"><?php echo $titulo4; ?></h5>
			  <?php $texto4 = "Esta es la tercera serie que compone el universo de Star Trek. Se caracteriza porque su principal protagonista es una mujer, la capitán Kathryn Janeway. La historia se centra en el viaje de retorno a la Tierra, después de ser desplazados 70.000 años luz al otro extremo de la galaxia Vía Láctea. En su viaje de retorno conocen cientos de nuevas civilizaciones con aventuras e historias de vida de cada uno de los personajes."; ?>
            <p class="card-text"><?php  echo $texto4; ?>
			</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php $imagen4 =  $carpetaimagenes . 'img4.jpg'; ?>
          <img src="<?php echo $imagen4; ?>" class="card-img-top rounded" alt="...">
          <div class="card-body">
			  <?php $titulo5 = "3 generaciones"; ?>
            <h5 class="card-title"><?php echo $titulo5; ?></h5>
			  <?php $texto5 = "Estas son las figuras que representan 3 épocas en la línea de tiempo de Star Trek. La Comandante Michael Burnham, anterior a la historia de Kirk y Spock. Después está el reboot de la serie original con James T. Kirk, y la Nueva Generación con Jean Luc Picard."; ?>
            <p class="card-text"><?php echo $texto5; ?>
            </p>
          </div>
        </div>
      </div>
    </div>


  


<!----->
	  
	  
	  
<!--
esto fue fácil
-->
	  <?php
	  	if ($verbanner == true){ ?>
	    	<div id="myCarousel" class="carousel slide" data-ride="carousel">
				<div class="carousel-inner">
				  <div class="carousel-item active">
					<img src="imgcorp/img1.jpg" alt="Imagen 1" style="width:100px;">
				  </div>
				  <div class="carousel-item">
					<img src="imgcorp/img2.jpg" alt="Imagen 2" style="width:100px;">
				  </div>
				  <div class="carousel-item">
					<img src="imgcorp/img3.jpg" alt="Imagen 3" style="width:100px;">
				  </div>
				</div>
				<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
				  <span class="sr-only">Anterior</span>
				</a>
				<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				  <span class="carousel-control-next-icon" aria-hidden="true"></span>
				  <span class="sr-only">Siguiente</span>
				</a>
			</div>
	  <?php 
		}  
	  ?>
	  
<!--------------------------------------------------------->







		<div class=" text-white" style="background-color: rgb(67, 67, 254);">
		  <div class="container">
			  <div class="row ">
				  <div class="col-8 col-sm-6 col-md-6 centrado">
					  <?php $minombre =  "2023 Juan Guillermo López García"; ?>
					  <p class="text-start" style="margin-top:5%;margin-bottom:3%;"><?php echo $minombre; ?></p>
				  </div>
				  <?php $sitioweb = "Susistema.cl"; ?>
				  <div class="col-12 col-sm-6 col-md-6 centrado">
					  <p class="text-end" style="margin-top:5%;margin-bottom:8;font-size:1em;">
						  <a href="https://susistema.cl" target="_blank"><?php echo $sitioweb; ?></a> 
					  </p>
				  </div>
			  </div>
		  </div>
		</div>








      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    
  </body>
</html>





























