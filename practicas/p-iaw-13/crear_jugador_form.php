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
    <h1>INSERTAR DATOS JUGADOR</h1>
    <form action="crear_jugador_action.php" method="post">
        Nombre del jugador: 
        <input type="text" name="nombre_jugador" >
        <?php
            if(isset($_SESSION['insertar_jugador'])){
                echo "<p class='aviso'>".$_SESSION['insertar_jugador']."</p>";
            }
        ?>
        Número del equipo: 
        <input type="number" name="equipo_id" >
        <?php
            if(isset($_SESSION['insertar_equipo_id'])){
                echo "<p class='aviso'>".$_SESSION['insertar_equipo_id']."</p>";
            }
        ?>
        <input type="submit" name="enviar" value="Guardar datos">
    </form>
  
</body>
</html>