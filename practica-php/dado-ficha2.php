
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Avance de ficha.
    Variables. Sin formularios.
    Escriba aquí su nombre
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>Avance de ficha</h1>
  <?php
        echo "<form action='dado-ficha2.php' method='POST' enctype='multipart/form-data'>";
        echo "Introduce un número y te digo su cara del dado: <br>";
        echo "Número : <input type='number' name='numero' min='1' max='6' >";
        echo "<input type='submit' value='Enviar' name='enviar'>";
        echo "</form>";  
        if((isset($_POST['enviar'])))
        {
            echo "<img src='img/".$_POST['numero'].".svg'/>";  
        }
        ?>
  <p>Actualice la página para mostrar una nueva tirada.</p>
  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
