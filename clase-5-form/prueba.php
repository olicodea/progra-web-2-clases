<?php

# FOREACH con PHP

/*
foreach($_POST as $clave => $valor) {
    echo $clave . " - " . $valor . "<br>";
}

echo "<br>";

foreach ($_SERVER as $clave => $valor) {
    echo $clave . " - " . $valor . "<br>";
}
*/

# Operador ternario
/*
$user = isset($_POST["user"]) ? $_POST["user"] : "Error: No se especifico el usuario";
$pw = isset($_POST["pass"]) ? $_POST["pass"] : "Error: No se especifico la contraseña";

if($user == "pepe" && $pw == "pedro") {
    echo "Bienvenido " . $user;
} else {
    $url = "index.php?error=1";
    // Hago un Redirect (En el servidor)
    header("Location:" . $url);
    // Luego mato la ejecución del script con exit() o die()
    exit();
    //die();
}
*/

echo "TODO OK";
?>

<html>
<head>
    <style>
        body{
            background: #333333;
            color: #fff;
        }
    </style>
</head>
</html>
