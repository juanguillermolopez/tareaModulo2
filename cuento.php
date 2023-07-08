<!DOCTYPE html>
<html>
<head>
  <title>Un cuento para niños</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <style>
    #cuento-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 20px;
    }
  </style>
</head>
<body>

  <div class="container" id="cuento-container">
    <h1>El conejo Benito</h1>

    <div>
		<?php  $img = "img/benito.png" ?>
      <img class="rounded" src=<?php echo $img;  ?> alt="Conejo Benito" style="max-width: 100%;">
    </div>

    <div class="form-group mt-4">
      <label for="idioma">Idioma:</label>
      <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <select class="form-control" id="idioma" name="idioma" onchange="this.form.submit()">
          <option value="es" <?php if(isset($_POST['idioma']) && $_POST['idioma'] === 'es') echo 'selected'; ?>>Español</option>
          <option value="en" <?php if(isset($_POST['idioma']) && $_POST['idioma'] === 'en') echo 'selected'; ?>>Inglés</option>
          <option value="ru" <?php if(isset($_POST['idioma']) && $_POST['idioma'] === 'ru') echo 'selected'; ?>>Ruso</option>
        </select>
      </form>
    </div>

    <div id="cuento">
      
      <?php
        $idioma = isset($_POST['idioma']) ? $_POST['idioma'] : 'es';

        if ($idioma === 'es') {
          echo '<p><h1>El pequeño conejito aventurero</h1><br>

			Había una vez un pequeño conejito llamado Benito. Benito vivía en un bosque mágico rodeado de árboles altos y flores coloridas. Un día, Benito decidió explorar más allá de su madriguera y descubrir nuevas aventuras.

			Con sus largas orejas y saltitos rápidos, Benito se adentró en el bosque. Pasó por arroyos cristalinos y se encontró con pájaros cantores. Pero de repente, oyó un ruido extraño. Siguió el sonido y encontró a una tortuguita perdida. Benito la ayudó a regresar a su hogar y se hicieron amigos para siempre.

			Juntos, Benito y la tortuguita exploraron el bosque y vivieron muchas aventuras emocionantes. Descubrieron un lago secreto, construyeron una casita en un árbol y hasta encontraron un tesoro escondido. Benito aprendió que la amistad y la valentía hacen que la vida sea aún más maravillosa.</p>';
          echo '<p>¡Y así, Benito y la tortuguita vivieron felices para siempre, compartiendo risas y nuevas travesuras en el mágico bosque!<br>
		  
		  ¡Fin!" </p>';
			
			
			
			
        } elseif ($idioma === 'en') {
          echo '<p><h1>The little adventurous bunny</h1><br>

			Once upon a time there was a little bunny named Benito. Benito lived in a magical forest surrounded by tall trees and colorful flowers. One day, Benito decided to explore beyond his burrow and discover new adventures.<br>

			With his long ears and quick hops, Benito entered the forest. He passed through crystal clear streams and met songbirds. But suddenly, he heard a strange noise. He followed the sound and found a lost baby turtle. Benito helped her return to her home and they became friends forever.<br>

			Together, Benito and the little turtle explored the forest and had many exciting adventures. They discovered a secret lake, built a treehouse, and even found hidden treasure. Benito learned that friendship and courage make life even more wonderful.<br>
			
			</p>';
          echo '<p>And so, Benito and the little turtle lived happily ever after, sharing laughter and new mischief in the magical forest!<br>

			End!</p>';
			
			
			
			
        } elseif ($idioma === 'ru') {
          echo '<p><h1>Маленький предприимчивый кролик</h1><br>

			Жил-был маленький кролик по имени Бенито. Бенито жил в волшебном лесу, окруженном высокими деревьями и яркими цветами. Однажды Бенито решил отправиться за пределы своей норы и открыть для себя новые приключения.<br>

			Со своими длинными ушами и быстрыми прыжками Бенито вошел в лес. Он миновал кристально чистые ручьи и был встречен певчими птицами. Но вдруг он услышал странный шум. Он пошел на звук и нашел потерявшуюся черепаху. Бенито помог ей вернуться домой, и они навсегда подружились.<br>

			Вместе Бенито и маленькая черепашка исследовали лес и пережили множество захватывающих приключений. Они обнаружили секретное озеро, построили дом на дереве и даже нашли спрятанные сокровища. Бенито понял, что дружба и мужество делают жизнь еще прекраснее.<br></p>';
			
			
			
          echo '<p>Так и жили Бенито и маленькая черепашка долго и счастливо, делясь смехом и новыми проказами в волшебном лесу!<br>

			Конец!</p>';
        }
      ?>
    </div>
  </div>

  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

</body>
</html>
