<?php
if(isset($_POST["btnEnviar"])) {
    $user = $_POST["user"];
    $pw = $_POST["pass"];

    if($user == "pepe" && $pw == "pedro") {
        $url = "prueba.php";
        header("Location:" . $url);
        exit();
    } else {
        echo "Error: Usuario o clave incorrecto/s";
    }
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

        form label{
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