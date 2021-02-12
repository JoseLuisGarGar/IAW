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
    DATABASE MENU
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="style.css" title="Color">
</head>

<body>
  <h1>OPCIONES DATABASE</h1>

  <ol>
  <li>
      <a href="crear_tabla.php">Crear base de datos</a>
      <?php
        if(isset($_SESSION['crear_tabla'])){
          if($_SESSION['crear_tabla']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
      <a href="crear_equipo.php">Crear tabla equipo</a>
      <?php
        if(isset($_SESSION['crear_tabla_equipo'])){
          if($_SESSION['crear_tabla_equipo']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_equipo.php">Insertar datos equipo</a>
      <?php
        if(isset($_SESSION['insertar_datos_equipo'])){
          if($_SESSION['insertar_datos_equipo']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="crear_equipo_form.php">Insertar equipo</a>
      <?php
        if(isset($_SESSION['nombre_equipo'])){
          echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
      ?>
    </li>
    <li><a href="crear_jugador.php">Insertar datos jugador</a>
      <?php
        if(isset($_SESSION['crear_jugador'])){
          if($_SESSION['crear_jugador']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_jugador.php">Insertar datos jugador</a>
      <?php
        if(isset($_SESSION['insertar_datos_jugador'])){
          if($_SESSION['insertar_datos_jugador']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="crear_jugador_form.php">Insertar jugador</a>
      <?php
        if(isset($_SESSION['nombre_jugador'])&&isset($_SESSION['equipo_id'])){
          echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
      ?>
    </li>
    <li>
      <a href="crear_partido.php">Crear tabla partido</a>
      <?php
        if(isset($_SESSION['crear_tabla_partido'])){
          if($_SESSION['crear_tabla_partido']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_partido.php">Insertar datos partido</a>
      <?php
        if(isset($_SESSION['insertar_datos_partido'])){
          if($_SESSION['insertar_datos_partido']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="crear_partido_form.php">Insertar partido</a>
      <?php
        if(isset($_SESSION['equipo1'])&&isset($_SESSION['equipo2'])&&isset($_SESSION['resultado'])){
          echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
      ?>
    </li>
    <li>
      <a href="crear_posicion.php">Crear tabla posicion</a>
      <?php
        if(isset($_SESSION['crear_tabla_posicion'])){
          if($_SESSION['crear_tabla_posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_posicion.php">Insertar datos posicion</a>
      <?php
        if(isset($_SESSION['insertar_datos_posicion'])){
          if($_SESSION['insertar_datos_posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="crear_posicion_form.php">Insertar posicion</a>
      <?php
        if(isset($_SESSION['nombre_posicion'])){
          echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
      ?>
    </li>
    <li>
      <a href="crear_jugadorposicion.php">Crear tabla jugador-posicion</a>
      <?php
        if(isset($_SESSION['crear_tabla_jugadorposicion'])){
          if($_SESSION['crear_tabla_jugadorposicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li><a href="insertar_datos_jugadorposicion.php">Insertar datos jugador-posicion</a>
      <?php
        if(isset($_SESSION['insertar_datos_jugador-posicion'])){
          if($_SESSION['insertar_datos_jugador-posicion']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
    <li>
      <a href="reset.php">Reiniciar tabla</a>
      <?php
        if(isset($_SESSION['reset']) && isset($_SESSION['start'])){
          if($_SESSION['reset'] && $_SESSION['start']){
            echo "<span class='green'>Hecho exitosamente</span>";
          }else{
            echo "<span class='red'>Hecho con errores</span>";
          }
        }
      ?>
    </li>
  </ol>

  <footer>
    <p>Escriba aquí su nombre</p>
  </footer>
</body>
</html>
