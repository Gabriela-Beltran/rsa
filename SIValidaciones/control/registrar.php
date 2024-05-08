<?php 
    include "Auth.php";
    $usuario = $_POST['usuario'];
    $password = $_POST['password'];
    $captcha = $_POST['g-recaptcha-response'];
    
    $ip = $_SERVER['REMOTE_ADDR'];
    $secretKey = "6Lf8qtApAAAAAGUhMhfOTplawOfqjQRUyiKKMBJB";
    
    $respuesta = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$captcha&remoteip=$ip");
        
    $atributos = json_decode($respuesta, TRUE);
    
    if (!$atributos['success']) {
        echo "Captcha incorrecto.";
        exit;
    }
    
    if (!contrasenaValida($password)) {
        echo "La contraseña no cumple con los requisitos.";
        exit;
    }
    $Auth = new Auth();
    if ($Auth->registrar($usuario, $password)) {
        header("location:../vistas/login.php");
    } else {
        echo "No se pudo registrar";
    }
    function contrasenaValida($password) {
        return true;
    }
?>

