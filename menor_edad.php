<!---
Las rutas y los nombres de las imágenes son referenciadas
mediante variables de PHP.
-->

<!doctype html>
<html lang="es">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">   
    <link rel="stylesheet" href="css/estilos.css">
	  <?php $img =  "childimg/child.png" ; ?>
    <link rel="shortcut icon" href=<?php echo $img;  ?> >
	<?php $title = "Entretención para niños" ;  ?>
    <title><?php echo $title; ?></title>
  </head>
  <body>




<!--
  el carousel me dio problemas al hacer ajustar las imagenes al tamaño del
  contenedor.
  finalmente, decidí redimensionar las imágenes con una herramienta de internet
-->
	<?php
		$carpetaimagenes = "./childimg/";
	    $tipoarchivos = "*.jpg";
	  	$imagenes = glob($carpetaimagenes . $tipoarchivos)
	?>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
      <div class="carousel-inner">
		  
		  <!-- si elimmino este IMG, las demás no se muestran ni el carousel funciona.
				entonces tengo que dejarlo aquí, aunque se repita una imagen, aunque me duela.-->
        <div class="carousel-item active">
          <img class="d-block w-100" src="childimg/img0.jpg" >
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
		  <?php $saludo = "Bienvenido!";  ?>
        <p class="h1 saludo"><?php echo $saludo;  ?></p>
		  <?php  $subtitulo = "Esta es una página con un poco de color para tu entretención y pasar
		  tus tardes de aburrimiento." ?>
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
          <a class="nav-link text-white" href="startrek.php">Inicio</a>
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
			<?php 
				$img0 = 'img0.jpg' ;
				$imagen0 =  $carpetaimagenes . $img0 ; 
			?>
          <img src="<?php echo $imagen0; ?>" class="card-img-top rounded" alt="...">
          <div class="card-body">
			  <?php $titulo1 = "Thor"; ?>
            <h5 class="card-title"><?php echo $titulo1; ?></h5>
			  <?php $texto1 = "Thor, un poderoso dios asgardiano del trueno y la guerra, es un personaje icónico de Marvel. Creado por Stan Lee, Larry Lieber y Jack Kirby, Thor hizo su primera aparición en 1962. Dotado con el martillo encantado Mjolnir, Thor lucha por proteger a la humanidad y los Nueve Reinos de amenazas cósmicas como su hermano Loki, el titán loco Thanos y Hela, la diosa de la muerte. Su historia incluye la formación de los Vengadores, su lucha por redimirse y su viaje de autodescubrimiento. Con su poder y nobleza, Thor se ha convertido en uno de los héroes más queridos del Universo Marvel."; ?>
            <p class="card-text"><?php echo $texto1;  ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php 
				$img1 = 'img1.jpg' ;
				$imagen1 =  $carpetaimagenes . $img1 ; ?>
          <img src="<?php echo $imagen1; ?>" class="card-img-top rounded" alt="...">
          <div class="card-body">
			  <?php $titulo2 = "Loki"; ?>
            <h5 class="card-title"><?php echo $titulo2; ?></h5>
			  <?php  $texto2 = "Loki, el dios asgardiano de la astucia y el engaño, es un personaje fascinante en el universo de Marvel. Hermano adoptivo de Thor, Loki ha sido tanto un aliado como un enemigo de los héroes. Su búsqueda de poder y su constante lucha por la aceptación lo llevan a realizar actos malvados, como su alianza con Thanos y su intento de conquistar Asgard. Sin embargo, Loki también muestra momentos de redención y vulnerabilidad, explorando su compleja relación con su familia y su identidad. Su historia incluye su transformación en diferentes formas, su papel como agente de la TVA y su viaje hacia la autorreflexión. A pesar de sus acciones controvertidas, Loki se ha convertido en un personaje querido y cautivador en el Universo Marvel.";   ?>
            <p class="card-text"><?php  echo $texto2; ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php 
			$img2 = 'img2.jpg' ;	
			$imagen2 =  $carpetaimagenes . $img2 ; ?>
          <img src="<?php echo $imagen2; ?>" class="card-img-top rounded" alt="...">
          <div class="card-body">
			  <?php $titulo3 = "Superman"; ?>
            <h5 class="card-title"><?php echo $titulo3; ?></h5>
			  <?php $texto3 = "Superman, el icónico héroe de DC Comics, es conocido como el último hijo de Krypton. Enviado a la Tierra cuando era un bebé, fue criado como Clark Kent por la pareja de granjeros Jonathan y Martha Kent. Con poderes sobrehumanos, como la fuerza y la velocidad, Superman se convierte en el protector de Metrópolis, luchando contra villanos como Lex Luthor y Doomsday. Su identidad secreta como reportero del Daily Planet, junto con su amor por Lois Lane, añade una dimensión humana a su historia. Superman es símbolo de esperanza y justicia, inspirando a generaciones de fans con su valentía y nobleza.";  ?>
            <p class="card-text"><?php  echo $texto3; ?>
            </p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php 
				$img3 = 'img3.jpg' ;
				$imagen3 =  $carpetaimagenes . $img3 ; ?>
          <img src="<?php echo $imagen3; ?>" class="card-img-top rounded" alt="...">
          <div class="card-body">
			  <?php $titulo4 = "La Sirenita"; ?>
            <h5 class="card-title"><?php echo $titulo4; ?></h5>
			  <?php $texto4 = "La Sirenita es una historia de Hans Christian Andersen, adaptada en la famosa película de Disney. Ariel, una joven sirena, anhela vivir en la tierra y se enamora de un príncipe humano llamado Eric. Haciendo un trato con la malvada Úrsula, Ariel se convierte en humana a cambio de su voz. Con la ayuda de sus amigos Flounder y Sebastián, Ariel lucha contra los obstáculos para ganar el amor de Eric y recuperar su voz. La historia destaca el valor de perseguir los sueños y la importancia de la familia y el amor verdadero."; ?>
            <p class="card-text"><?php  echo $texto4; ?>
			</p>
          </div>
        </div>
      </div>
      <div class="col">
        <div class="card">
          <?php 
				$img4 = 'img4.jpg' ;
				$imagen4 =  $carpetaimagenes . $img4 ; ?>
          <img src="<?php echo $imagen4; ?>" class="card-img-top rounded" alt="...">
          <div class="card-body">
			  <?php $titulo5 = "Iron Man"; ?>
            <h5 class="card-title"><?php echo $titulo5; ?></h5>
			  <?php $texto5 = "Iron Man, también conocido como Tony Stark, es un personaje clave en el Universo Marvel. Genio, multimillonario y playboy, Tony Stark crea una armadura tecnológica después de ser gravemente herido en un secuestro. Utilizando su traje de Iron Man, se convierte en un héroe que lucha contra el mal y protege al mundo. A lo largo de su historia, Stark enfrenta desafíos personales y batallas épicas, como su enfrentamiento con el Mandarín y su participación en los Vengadores. Su viaje lo lleva a una búsqueda de redención y a una evolución como personaje, sacrificando incluso su vida para salvar el universo. Iron Man se ha convertido en un ícono querido y un símbolo de heroísmo en el mundo de los cómics y el cine."; ?>
            <p class="card-text"><?php echo $texto5; ?>
            </p>
          </div>
        </div>
      </div>
    </div>


  

<!--
esto fue fácil
-->
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
