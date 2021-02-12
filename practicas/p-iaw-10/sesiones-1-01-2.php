<?php
  session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario Texto 1 (Resultado).
    Sesiones (1). Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Formulario Texto 1 (Resultado)</h1>

<?php

  if (isset($_POST['texto'])) {
    echo "El texto que has escrito es: ".$_POST['texto'];
     $_POST['texto']=$_session'texto'[];
  }

?>

  <p><a href="sesiones-1-01-1.php">Volver a la primera página.</a></p>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
