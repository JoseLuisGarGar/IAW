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
  $errores=[];
  $user="joseluis";
  $pass=1234;
  if (isset($_POST['user']) && $_POST['pass']) {
    if (($_POST['user'])==$user && ($_POST['pass'])==$pass) {
      $_SESSION['user']=$_POST['user'];
      $_SESSION['pass']=$_POST['pass'];
    } else {
      $errores[]="Usuario y/o contraseña erroneas</li>";
    }
  } else {
    if (($_POST['user'])=="") {
      $errores[]="Introduce un usuario";
    }
    if (($_POST['user'])=="") {
      $errores[]="Introduce una contraseña";
    }
  }
  if (count($errores)>0) {
    echo "<ul>";
    foreach ($errores as $key => $value) {
      echo "<li>.$value.</li>";
    }
    echo "</ul>";
  }


?>

  <p><a href="sesiones-1-01-1.php">Volver a la primera página.</a></p>

  <footer>
    <p>José Luis García</p>
  </footer>
</body>
</html>
