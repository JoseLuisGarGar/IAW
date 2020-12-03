<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres cuadrados contiguos con un lado entre 50 y 150 píxeles, al azar.
 *
 * Crea 3 dif con width, height y fondos distintos. Cambia el widht y el heigh con un random
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tres cuadrados.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
</style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tres cuadrados</h1>
  <?php
    for($i=0;$i<3;$i++)
    {
      $ran=rand(50,150);
      $ran2=rand(50,150);
      $ran3=rand(50,150);
      $n1=(rand(0,255));
      $n2=(rand(0,255));
      $n3=(rand(0,255));
      echo "<b 
          style='
        width:".$ran."px;
        height:".$ran."px;
        background-color: rgb(".$n1.",".$n2.",".$n3.");
        display: inline-block;'>
        </b>";
      }
  ?> 
  <br><p>Actualice la página para mostrar tres nuevos cuadrados.</p>


  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
