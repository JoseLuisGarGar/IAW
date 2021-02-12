<?php
/**
 * Descarta palo - descarta-palo-2.php
 *
 * @author Escriba aquí su nombre
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Descarta palo (Resultado).
    Con formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Descarta palo (Resultado)</h1>

<?php
$contador=0;
  for ($i=0; $i < $_POST['cantidad']; $i++) { 
    $r=rand(1,10);
    $palo=array("c","d","p","t");
    $r_palo=rand(0,3);
    $final=$palo[$r_palo];
    echo"<img src='img/".$final.$r.".svg' width='100px' height='100px'>";
    if ($final != ($_POST['palo']) {
      $no[]= "<img src='img/".$final.$r.".svg' width='100px' height='100px'>";
      $contador++;
    }
  }
  echo "<br>"
  if ($contador == 0) {
    echo "No hay cartas que no sean de ".$_POST['palo'."";
  } else {
    "Habia ".$contador." cartas que no sean ".$_POST['palo']."";
    foreach ($no as $key => $value) {
      echo $value;
    }
  }

?>
  <p><a href="descarta-palo-1.php">Volver al formulario.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>

