<?php
//https://www.hostinger.es/tutoriales/conectar-php-mysql/
session_start();
$servername = "localhost";
$username = "test";
$password = "test";
// Create connection
$conn = mysqli_connect($servername, $username, $password);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
$sql = "CREATE DATABASE IF NOT EXISTS `nba2`;
  ";
$resultado = $conn->query($sql);

if ($resultado) {
    $_SESSION['crear_tabla'] = true;
}else{
    $_SESSION['crear_tabla'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");
