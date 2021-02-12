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

if(isset($_POST['nombre_jugador']) && $_POST['nombre_jugador'] != '' && isset($_POST['equipo_id']) && $_POST['equipo_id'] != ''){
    unset($_SESSION['error_insertar_jugador']);

    $sql = "INSERT INTO `jugador` (`name`, `equipo_id`) VALUES ('".$_POST['nombre_jugador']."','".$_POST['equipo_id']."')";
    
    $resultado = $conn->query($sql);
    if (!$resultado) {
        die("error al insertar");
    }
    mysqli_close($conn);
    $_SESSION['nombre_jugador']=$_POST['nombre_jugador'];
    $_SESSION['equipo_id']=$_POST['equipo_id'];
    header("Location:home.php");
}else{
    $_SESSION['error_insertar_jugador'] = "El nombre es requerido";
    $_SESSION['error_insertar_equipo_id'] = "El equpo es requerido";
    mysqli_close($conn);
    
    header("Location:crear_jugador_form.php");
}
?>