<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres carta entre 1 y 10,
 * al azar, e indique el valor más alto.
 *
 * El valor más alto se puede obtener con la función max().
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
    La carta más alta.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>La carta más alta</h1>
  <p>Actualice la página para mostrar un nuevo trío de cartas.</p>
  <?php
      $c1=rand(1,10);
      $c2=rand(1,10);
      $c3=rand(1,10);
      echo "<img src='img/c".$c1.".svg'/>";    
      echo "<img src='img/c".$c2.".svg'/>"; 
      echo "<img src='img/c".$c3.".svg'/>";      
      $max=max($c1,$c2,$c3);
      echo "<br>La carta mas alta es :<br><img src='img/c".$max.".svg'/>"
      
  
  ?> 
<?php
?>

  <footer>
    <p>Jose Luis</p>
  </footer>
</body>
</html>
