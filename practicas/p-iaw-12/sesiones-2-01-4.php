<?php
/**
 * Sesiones (2) 01 - sesiones-2-01-4.php
 *
 * @author Escriba aquí su nombre
 *
 */

session_start();
$_SESSION["error"]="";

if ($_POST["apellidos"] == "") {
    $_SESSION["error"]="Introduce un apellido.";
    header("Location:sesiones-2-01-3.php");
} else {
    $_SESSION["apellidos"]=$_POST["apellidos"];
    header("Location:sesiones-2-01-5.php");
}
?>
