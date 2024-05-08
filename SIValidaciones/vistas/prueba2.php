<?php
$mensaje = $_POST['mensaje'] ?? '';
if (!$mensaje) {
    echo 'Error: No se proporcionó ningún mensaje.';
    exit;
}
$keypublica = openssl_pkey_get_public(file_get_contents('publica.key'));
openssl_public_encrypt($mensaje, $mensaje_cifrado, $keypublica);
$keyprivada = openssl_pkey_get_private(file_get_contents('privada.key'));
openssl_private_decrypt($mensaje_cifrado, $mensaje_descifrado, $keyprivada);

echo  $mensaje_cifrado; 
?>
