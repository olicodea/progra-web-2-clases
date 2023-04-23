<?php
$servername = 'localhost:3307';
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($servername, $username, $password, $database) or die();

$nombre = $_POST["nombre"];
$tipo = $_POST["tipo"];
$descripcion = $_POST["descripcion"];

$sql = "INSERT INTO `pokemon` (`nombre`, `tipo`, `descripcion`) VALUES (?, ?, ?)";

//PREPARAR EL SQL (interpretarlo)
$statement = $conn->prepare($sql);

// EJECUTAR ESA CONSULTA
// En caso de querer pasar fechas se pasa de type string
$statement->bind_param("sss", $nombre, $tipo, $descripcion);

$result = $statement->execute();

header("location: index.php");
exit();