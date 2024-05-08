<?php
include_once "../vistas/menu.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Policy Update</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/llaves.css">
</head>

<body>
    <div class='container'>
        <div class="card mx-auto mt-10" style="max-width: 500px; border-radius: 30px;">
            <div class="card-body p-4" style="align-items: center;">
                <div class='top  text-center'>
                    <img src="../img/llave-de-la-puerta.png" height="150px" />
                    <h2 class="form-title">Generar llaves</h2>
                </div>
                <div class="modal-header border-0 mb-2">
                        <div class="modal-title" style="text-align: center;">
                            <div>
                            Las llaves públicas y privadas en el algoritmo RSA se generan para permitir la comunicación segura entre dos partes a través de un canal inseguro. La llave pública se comparte libremente y se utiliza para cifrar los mensajes, mientras que la llave privada, que se mantiene en secreto, se utiliza para descifrar los mensajes cifrados. Esto asegura que solo el destinatario previsto pueda leer los mensajes cifrados, proporcionando confidencialidad y seguridad en las comunicaciones.
                            </div>
                        </div>
                    </div>
                <div class="modal fade" id="modalPrimos" tabindex="-1" role="dialog" aria-labelledby="modalPrimosLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header border-none">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <div class="modal-body p-0">
                                <div class="crop text-center">
                                    <img src="../img/letra.png" class="mx-auto" height="200px">
                                    <h2 class="text-center">¡Exito!</h2>
                                    <br>
                                    <p class="text-center"><small class="text-muted">Las llaves se crearon correctamente</small></p>
                                </div>
                            </div>

                            <div class="modal-footer">
                                <div class="text-center">
                                    <button type="button" class="okay btn" onclick="cerrarModal2()">ok</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-backdrop fade show" id="backdrop" style="display: none;"></div>
                <div class="modal-body text-center">
                    <button id="generarBtn" class="btn btn-primary">Generar</button>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function() {
            $("#generarBtn").click(function() {
                $.ajax({
                    url: "prueba1.php",
                    type: "POST",
                    success: function(response) {
                        $('#modalPrimos').modal('show');
                    }
                });
            });
        });

        function cerrarModal2() {
            $('#modalPrimos').modal('hide');
        }
    </script>
</body>

</html>