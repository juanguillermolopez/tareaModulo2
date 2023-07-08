Si el usuario es mayor de edad:

1.- El archivo "index.php" es el principal de todo el proyecto.
Pide ingresar el nombre y la edad del usuario y confirmar que 
realmente quiere entrar a la página.

2.- Una vez que se a confirmado con el checkbox, lleva a la página
'startrek.php'; al final de la página se muestra un pequeño
corrousel con imágenes de empresas, solo para comprobar que 
la lógica boolena funciona.

3.- 'startrek.php' tiene un menú que lleva a la página de:
(cada página se abre en una pestaña nueva)

- un link para volver a la página principal

- al sitio oficial de Star Trek (https://intl.startrek.com/)

- un cuento infantil (cuento.php), con traducción a Español, Inglés y Ruso.

- una calculadora de series Fibonacci.


4.- 'cuento.php' contiene un cuento para niños en tres idiomas a elegir,
español, inglés y ruso; se utiliza PHP para elegir una traducción.

5.- 'fibonacci.php' contiene una calculadora de la serie; 
los cálculos son totalmente realizados en PHP.

Luego, si el usuario es menor de edad:

6.- el usuario es conducido a una página con contenido para niños,
con personajes del cine de moda actualmnete (año 2023).

Esta página tiene un menú que lleva a la página de:
(cada página se abre en una pestaña nueva)

- un link para volver a la página principal

- el sitio oficial de Star Trek (https://intl.startrek.com/)

- un cuento infantil (cuento.php), con traducción a Español, Inglés y Ruso.

- una calculadora de series Fibonacci.


Finalmente, los textos y las imágenes son llamados desde
variables PHP e invocadas con la función 'echo' de PHP.


NOTA: no se puede ejecutar una página por separado, ya que
siempre llevará a 'menor_edad.php' porque la variable '$edad'
estará en 0.



