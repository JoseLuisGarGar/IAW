<?php
/**
 * Tirada dados - tirada-dados-1.php
 *
 * @author Escriba aquí su nombre
 */
session_start();
print "<!-- Ejercicio incompleto -->\n";

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Tirada dados (Formulario).
    Con sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Tirada de dados</h1>
<?php
if (isset($_GET['reset'])){
  $_SESSION['partidas'] = [];
}
$resultado=0;
for ($i=1; $i <= 3; $i++) { 
  $ran=rand(1,6);
  echo "<img src='img/".$ran.".SVG'>";
  $resultado=$resultado + $ran;
}

$_SESSION['partidas'][] = $resultado;
echo "<ol>";
foreach ($_SESSION['partidas'] as $key => $value) {
  if ($value>8) {
    echo "<li><b>Puntuacion conseguida en la ".($key+1)."º tirada es :".$value."</b></li>";
  } else {
    echo "<li>Puntuacion conseguida en la ".($key+1)."º tirada es :".$value."</li>";
  }
  
}
echo "</ol>";
echo "<br>";
echo "El sumatorio de los dados actuales es: ".$resultado;
?>
<br><br>
<a href="tirada-dados-1.php">Volver a tirar</a>
<br>
<a href="tirada-dados-1.php?reset=true">Eliminar resultados</a>

<footer>
  <p>José Luis García</p>
</footer>
</body>
</html>
