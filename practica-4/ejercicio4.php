<!-- El siguiente codigo muestra el texto "El" y luego
intenta mostrar la variable flor y la variable color pero
como no existen no muestra nada.
Luego muestra el texto "El cavel blanco" que clavel es lo que 
contiene la variable flor y blanco es lo que contiene la variable
color que ahora si existen ya que se importa el contenido del
archivo "datos.php" con include
-->
<?php
echo "El $flor $color <br>"; 
include 'datos.php';
echo " El $flor $color"; 
?>