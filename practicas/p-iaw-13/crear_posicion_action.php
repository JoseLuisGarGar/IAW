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

if(isset($_POST['nombre_posicion'])){
    unset($_SESSION['error_insertar_posicion']);

    $sql = "INSERT INTO `posicion` (`name`) VALUES ('".$_POST['nombre_posicion']."')";
    
    $resultado = $conn->query($sql);
    if (!$resultado) {
        die("error al insertar");
    }
    mysqli_close($conn);
    $_SESSION['nombre_posicion']=$_POST['nombre_posicion'];
    header("Location:home.php");
}else{
    $_SESSION['error_insertar_posicion'] = "El nombre es requerido";
    mysqli_close($conn);
    
    header("Location:crear_posicion_form.php");
}
?>