<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if(isset($_POST["enviar"])) {
    #$hash = md5(time());
    if($_POST["usuario"] == "pepe" && $_POST["clave"] == "1234") {
        #file_put_contents("seguridad.txt", $hash);
        #setcookie("seguridad", $hash, time()+6000);
        $_SESSION["validado"] = 1;
        $_SESSION["usuario"] = $_POST["usuario"];
        header("Location: interno.php");
        exit();
    } else {
        #setcookie("seguridad", $hash, time()-6000);
        echo "Error de usuario o clave";
    }
}
?>
<form action="index.php" method="post" enctype="application/x-www-form-urlencoded">
    <input type="text" name="usuario" placeholder="Usuario">
    <input type="password" name="clave" placeholder="Clave">
    <input type="submit" name="enviar">
</form>
</body>
</html>