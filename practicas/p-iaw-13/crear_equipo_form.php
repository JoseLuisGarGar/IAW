<?php
/**
 * Escriba un programa que cada vez que se ejecute muestre tres cuadrados contiguos con un lado entre 50 y 150 píxeles, al azar.
 *
 * Crea 3 dif con width, height y fondos distintos. Cambia el widht y el heigh con un random
 *
 * @author Escriba aquí su nombre
 *
 */
  session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    form equipo
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
    <h1>INSERTAR DATOS EQUIPO</h1>
    <form action="crear_equipo_action.php" method="post">
        Nombre del equipo: 
        <input type="text" name="nombre" >
        <?php
            if(isset($_SESSION['insertar_equipo'])){
                echo "<p class='aviso'>".$_SESSION['insertar_equipo']."</p>";
            }
        ?>
        <input type="submit" name="enviar" value="Guardar datos">
    </form>
  
</body>
</html>