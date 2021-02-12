<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/
session_start();
$servername = "localhost";
$database = "nba2";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

if((isset($_POST['equipo1']) && $_POST['equipo2'] != '') && ((isset($_POST['equipo2']) && $_POST['equipo2'] != '')) && (isset($_POST['resultado']) && $_POST['resultado'] != '')){
    unset($_SESSION['error_insertar_partido']);
    $sql = "INSERT INTO `partido` (`equipo_v_id`, `equipo_l_id`, `resultado`) VALUES 
    ('".$_POST['equipo1']."','".$_POST['equipo2']."','".$_POST['resultado']."')";
    
    $resultado = $conn->query($sql);
    if (!$resultado) {
        die("error al insertar");
    }
    mysqli_close($conn);
    $_SESSION['equipo1']=$_POST['equipo1'];
    $_SESSION['equipo2']=$_POST['equipo2'];
    $_SESSION['resultado']=$_POST['resultado'];
    header("Location:home.php");
}else{
    $_SESSION['error_insertar_partido'] = "El nombre es requerido";
    mysqli_close($conn);
    
    header("Location:insertar_datos_equipo_form.php");
}