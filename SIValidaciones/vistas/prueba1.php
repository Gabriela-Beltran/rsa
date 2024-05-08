<?php
$configargs= array(
"config" => "C:\Users\DELL\Desktop\ESCUELA ITSON\SEGURIDAD INFORMATICA\OpenSSL-1.1.1h_win32\openssl.cnf",
'private_key_bits' => 2048,
'default_md' => "sha256",
);

$generar= openssl_pkey_new($configargs); 
openssl_pkey_export($generar, $keypriv, NULL, $configargs); 

$keypub = openssl_pkey_get_details ($generar);

file_put_contents('privada.key', $keypriv);
file_put_contents('publica.key',$keypub['key']);

echo"<br> LAS LLAVES SE CREARON CORRECTAMENTE";
?>