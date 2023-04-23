<?php
function getConexion() {
    $servername = 'localhost:3307';
    $username = "root";
    $password = "";
    $database = "test";

    $conn = new mysqli($servername, $username, $password, $database) or die();
    return $conn;
}

$conexion = getConexion();
$sql = "SELECT * FROM `pokemon`";

$resultado = $conexion->query($sql);
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <title>Clase 7 - MySQL parte 2</title>
</head>
<body>
<div class="container">
    <h2>LISTA DE POKEMONES</h2>
    <ul>
        <?php
        foreach ($resultado as $element) {
            echo "<li>" . $element['nombre'] . "<a href='eliminar.php?id=" . $element["idpokemon"] . "' class='delete'>X</a></li>";
        }
        ?>
    </ul>
</div>
<form action="crear.php" method="POST" class="container">
    <h2>CREAR POKEMON</h2>

    <label for="nombre">Nombre:</label>
    <input type="text" name="nombre">

    <label for="nombre">Tipo:</label>
    <input type="text" name="tipo">

    <label for="nombre">Descripción:</label>
    <input type="text" name="descripcion">

    <input type="submit" value="GUARDAR" class="btn">
</form>
</body>
</html>