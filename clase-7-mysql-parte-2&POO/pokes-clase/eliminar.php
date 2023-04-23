<?php
if(empty($_GET["id"])){
    header("location:index.php");
    exit();
}

$servername = 'localhost:3307';
$username = "root";
$password = "";
$database = "test";

$conn = new mysqli($servername, $username, $password, $database) or die();

$id = $_GET["id"];

$sql = "DELETE FROM pokemon WHERE `idpokemon` = $id";

$result = $conn->query($sql);

header("location:index.php");
exit();