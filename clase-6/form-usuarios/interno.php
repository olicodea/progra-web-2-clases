<?php
session_start();

if(file_get_contents("seg.txt")) {
    header("Location: index.php");
    exit();
}

echo "HOLA " . $_SESSION["usuario"] . "!!!";
