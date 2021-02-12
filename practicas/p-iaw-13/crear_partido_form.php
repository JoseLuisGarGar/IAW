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
    <h1>INSERTAR DATOS PARTIDO</h1>
    <form action="crear_partido_action.php" method="post">
        Número del equipo visitante: 
        <input type="number" name="equipo1" >
        <?php
            if(isset($_SESSION['insertar_partido'])){
                echo "<p class='aviso'>".$_SESSION['insertar_partido']."</p>";
            }
        ?>
        Número del equipo local: 
        <input type="number" name="equipo2" >
        <?php
            if(isset($_SESSION['insertar_partido'])){
                echo "<p class='aviso'>".$_SESSION['insertar_partido']."</p>";
            }
        ?>
        Resultado del partido: 
        <input type="name" name="resultado" >
        <?php
            if(isset($_SESSION['insertar_partido'])){
                echo "<p class='aviso'>".$_SESSION['insertar_partido']."</p>";
            }
        ?>
        <input type="submit" name="enviar" value="Guardar datos">
    </form>
  
</body>
</html>