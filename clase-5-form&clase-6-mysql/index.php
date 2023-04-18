<?php
if(isset($_POST["btnEnviar"])) {
    $user = $_POST["user"];
    $pw = $_POST["pass"];

    // Clase 6 - MySQL

    $db = new mysqli("localhost:3307", "root", "", "users");
    #echo $db -> connect_errno;
    #echo "<br>";
    $sql = "SELECT idusuario, nick, nombre, clave FROM usuario WHERE nick = '$user' AND clave = '$pw'";

    $resultado = $db->query($sql);

    # $fila = $resultado->fetch_assoc();
    # var_dump($fila);

    #$filas = $resultado->fetch_all();

    /*
    foreach ($filas as $clave => $fila) {
        echo "$fila[0] <br>";
        echo "$fila[1] <br>";
        echo "$fila[2] <br>";
        echo "$fila[3] <br>";
    }
    */

    while($fila = $resultado->fetch_assoc()) {
        echo "<div class='notify'>";
        echo "Nick: " . $fila["nick"] . "<br>";
        echo "Nombre: " . $fila["nombre"] . "<br>";
        echo "</div>";
    }

    // Fin clase 6 - MySQL

    // Clase 5 - Form

    /*
        if($user == "pepe" && $pw == "pedro") {
            $url = "prueba.php";
            header("Location:" . $url);
            exit();
        } else {
            echo "Error: Usuario o clave incorrecto/s";
        }
    */
    // Fin clase 5 - Form
}
?>

<html>
<head>
    <style>
        body {
            background: #333333;
            color: #fff;
            font-family: "Segoe UI", sans-serif;
        }
        form{
            display: flex;
            flex-direction: column;
            align-items: center;
            width: 50%;
            margin: auto;
            padding: 30px 100px;
            gap: 10px;
        }

        form input{
            height: 35px;
            border-radius: 6px;
            border: none;
        }

        form input, form label {
            width: 35%;
        }

        form label {
            text-align: left;
        }

        form input[type="submit"]{
            font-family: "Segoe UI", sans-serif;
            height: 40px;
            padding: 0 10px;
            margin-top: 15px;
            background: #663399FF;
            color: #ffffff;
            cursor: pointer;
            transition: box-shadow 0.3s ease;
        }

        form input[type="submit"]:hover {
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.4);
        }
    </style>
</head>
<body>
<form action="index.php" method="POST" enctype="application/x-www-form-urlencoded">
    <label for="userId">User:</label>
    <input type="text" name="user" id="userId">
    <label for="password">Password:</label>
    <input type="password" name="pass" id="password">
    <input type="submit" value="ENVIAR FORM" name="btnEnviar">
</form>
<script>

</script>
</body>
</html>

<?php
/*
$error = isset($_GET["error"]) && $_GET["error"];

if($error) {
    echo "Usuario o clave erroneo/s";
}
*/
?>