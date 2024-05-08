<?php
include_once "../vistas/menu.php"
?>

<link rel="stylesheet" href="../css/acercaDe.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<body>
    <div class="card" style="max-width: 500px; border-radius: 30px;">
        <div class="text-right cross"> </div>
        <div class="card-body text-center"> <img src="../img/email.png" height="150px">
        <h2 class="form-title"> <strong>Desencriptado </strong></h2>
            <p>Desencripta el mensaje cifrado utilizando la clave privada</p>
            <br>
            <button type="button" class="btn btn-primary" id="verMensajeDesencriptado">Ver mensaje desencriptado</button>
            <div id="mensajeDescifrado"></div>
        </div>
    </div>
</body>

<script>
$(document).ready(function() {
    $("#verMensajeDesencriptado").click(function() {
        var mensajeDescifrado = localStorage.getItem('mensajeDescifrado');
        if (!mensajeDescifrado) {
            alert('No se encontró ningún mensaje descifrado en el almacenamiento local.');
            return;
        }
        $("#mensajeDescifrado").text(mensajeDescifrado);
    });
});

</script>
