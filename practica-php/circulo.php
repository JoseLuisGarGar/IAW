<?php
/**
 * Escriba un programa que cada vez que se ejecute
 * muestre un círculo de 50px de radio y de un color elegido al azar.
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
    Círculo de color.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <style>
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Círculo de color</h1>
  <?php
  $n1=(rand(0,255));
  $n2=(rand(0,255));
  $n3=(rand(0,255));
  $n4=(rand(0,255));
  $n5=(rand(0,255));
  $n6=(rand(0,255));
    echo "<b 
      style='
    width:200px;
    height:200px;
    background-color: rgb(".$n1.",".$n2.",".$n3."); 
    border-radius: 50%;
    display: inline-block;'>
    </b>";
    echo "<br><span 
      style='
    width:200px;
    height:200px;
    background-color: rgb(".$n4.",".$n5.",".$n6."); 
    border-radius: 50%;
    display: inline-block;'>
    </span>";
    ?> 
  <p>Actualice la página para mostrar un nuevo círculo.</p>

<?php


?>

  <footer>
    <p>Jose Luis</p>
  </footer>
</body>
</html>
