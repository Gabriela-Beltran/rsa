<?php
session_start();
include "Auth.php";

$usuario = $_POST['usuario'];
$password = $_POST['password'];

$Auth = new Auth();

if ($Auth->logear($usuario, $password)) {
    header("location:../vistas/principal.php");
    exit();
} else {
    echo "No se pudo logear";
}
?>
