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
$sql = "DROP DATABASE nba2;";

$resultado = $conn->query($sql);
if ($resultado) {
    $_SESSION['reset'] = true;
}else{
    $_SESSION['reset'] = false;
}
session_destroy();

$sql2= "CREATE DATABASE IF NOT EXISTS `nba2`";
$resultado2 = $conn->query($sql2);
if ($resultado2) {
    $_SESSION['start'] = true;
}else{
    $_SESSION['start'] = false;
}
echo "Connected successfully";
mysqli_close($conn);

header("Location:home.php");
