<?php
session_start();

?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Formulario Texto 1 (Formulario).
    Sesiones (1). Sesiones.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Formulario Texto 1 (Formulario)</h1>

<?php

?>

  <form action="sesiones-1-01-2.php" method="POST">
    <p><label>Nombre: <input type="text" name="user" size="20" maxlength="20"></label></p>
    <p><label>Contraseña: <input type="password" name="pass" size="20" maxlength="20"></label></p>
    <p>
      <input type="submit" value="Entrar">
    </p>
  </form>

  <footer>
    <p>José Luis García</p>
  </footer>
</body>
</html>
