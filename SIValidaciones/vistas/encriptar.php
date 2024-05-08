<?php
include_once "../vistas/menu.php";
?>

<link rel="stylesheet" href="../css/encriptar.css">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js"></script>

<div class="card" style="border-radius: 30px;">
    <div class="row my-2 mx-2">
        <div class="col-md-6">
            <img src="../img/encriptar.png">
        </div>
        <div class="col-md-6">
            <h2 class="form-title">Encriptar</h2>
            <p class="justify text-muted">A continuación ingresa el mensaje a encriptar</p>
            <form id="formulario" action="./prueba2.php" method="post">
                <div class="form-group pl-1">
                    <label for="exampleFormControlTextarea1">Escribe tu mensaje</label>
                    <textarea class="form-control" id="mensaje" name="mensaje" rows="5" require></textarea>
                </div>
                <br>
                <br>
                <br>
                <br>
                <br>
                <div class="row">
                    <div class="col-md-3 offset-md-9">
                        <button type="submit" id="enviarBtn" class="btn" style="background-color: #ee9ca7;">Ver</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Nuevo modal para mostrar el mensaje cifrado -->
<div class="modal fade" id="modalCifrado" tabindex="-1" role="dialog" aria-labelledby="modalCifradoLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header border-none">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body p-0">
                <div class="crop">
                    <img src="../img/cifrar.png" height="20px">
                    <h2 class="text-center">Mensaje Cifrado</h2>
                    <br>
                    <p class="text-center"><small class="text-muted">El mensaje se ha cifrado correctamente:</small></p>
                    <p id="mensajeCifrado" class="text-center"></p>
                </div>
            </div>
            <div class="modal-footer">
                <div class="text-center">
                    <button type="button" class="okay btn" data-dismiss="modal">OK</button>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    $(document).ready(function() {
        $("#enviarBtn").click(function(e) {
            e.preventDefault();
            var mensaje = $("#mensaje").val().trim();
            if (!mensaje) {
                $('#modalNoPrimos').modal('show');
                return false;
            }

            $.ajax({
                url: './prueba2.php',
                type: 'POST',
                data: {
                    mensaje: mensaje
                },
                success: function(response) {
                    localStorage.setItem('mensajeCifrado', response); // Guardar el mensaje cifrado
                    localStorage.setItem('mensajeDescifrado', mensaje); // Guardar el mensaje original (no cifrado)
                    $('#mensajeCifrado').text(response);
                    $('#modalCifrado').modal('show');
                },
                error: function() {
                    alert('Hubo un error al obtener el mensaje cifrado.');
                }
            });

        });
    });

    function cerrarModal() {
        $('#modalNoPrimos').modal('hide');
    }

    function cerrarModal2() {
        $('#modalPrimos').modal('hide');
    }
</script>