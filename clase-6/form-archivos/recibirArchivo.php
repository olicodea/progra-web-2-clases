<?php
#var_dump($_FILES);

echo "Hemos recibido el archivo: " . $_FILES["archivo"]["name"] . "<br>";
echo "Recibimos el archivo: " . $_FILES["archivo"]["type"] . " y tamaño: " . $_FILES["archivo"]["size"] . "<br>";

move_uploaded_file($_FILES["archivo"]["tmp_name"], "archivos/" . $_POST["nombreArchivo"]);
