<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre una tirada de dados entre 1 y 6,
 * al azar, y coloque la ficha en la posición correspondiente.
 *
 * La posición de la ficha cx depende del valor obtenido en el dado:
 * La posición se puede calcular a partir del valor del dado mediante la fórmula: $posicion = 100 * $dado - 50
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
    Avance de ficha.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <style>
    th {
      width: 100px;
    }
  </style>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Avance de ficha</h1>
  <?php
  $tirada=(rand(1,6));
  echo "<img src='img/".$tirada.".svg'/><br>";
  ?>
  <table>
  <tr>
    <th>1</th>
    <th>2</th>
    <th>3</th>
    <th>4</th>
    <th>5</th>
    <th>6</th>
  </tr>
</table>
  <?php 
  $posicion=(100*$tirada-50);
    echo "<b 
      style='
    width:20px;
    height:20px;
    margin-left: ".$posicion."px;
    background-color: red; 
    border-radius: 50%;
    display: inline-block;'>
    </b>";
    ?> 
  <p>Actualice la página para mostrar una nueva tirada.</p>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>