<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Login</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="stylesheet" href="../css/login.css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="../js/registro.js"></script>
<script src="../js/login.js" defer></script>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
<script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<body>
<div class="container">
    <div class="card-wrap">
        <div class="card border-0 shadow card--welcome is-show" id="welcome">
            <div class="card-body">
                <h2 class="card-title">BIENVENIDO</h2>
                <p>Bienvenido a la página de inicio de sesión</p>
                <div class="btn-wrap"><a class="btn btn-lg btn-register js-btn" data-target="register">REGISTRATE</a><a class="btn btn-lg btn-login js-btn" data-target="login">INICIA SESION</a></div>
            </div>
        </div>
        <div class="card border-0 shadow card--register" id="register">
            <div class="card-body">
                <h2 class="card-title">Crea una cuenta</h2>
                <form action="../control/registrar.php" method="post" onsubmit="return validarDatos()">
                    <div class="form-group">
                        <input type="text" class="form-control" name="nombre" id="nombre" placeholder="Nombre" required="required"/>
                        <span id="nom" class="mensaje-error"></span>
                    </div>
                    <div class="form-group">
                        <input type="number" class="form-control" name="edad" id="edad" placeholder="Edad" required="required"/>
                        <span id="ed" class="mensaje-error"></span>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="correo" id="correo" placeholder="Correo electrónico" required="required"/>
                        <span id="cor" class="mensaje-error"></span>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required="required"/>
                        <span id="usu" class="mensaje-error"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="pass" placeholder="Password" required="required"/>
                        <span id="pas" class="mensaje-error"></span>
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password_confirm" id="passConf" placeholder="Confirmar Password" required="required"/>
                        <span id="pasConf" class="mensaje-error"></span>
                    </div>
                    
                    <div class="mb-3">
                        <div class="g-recaptcha" data-sitekey="6Lf8qtApAAAAAC8t5TEsW-XjVCXCDgjYAsBgAU_1" name="g-recaptcha-response"></div>
                    </div>
                    <button class="btn btn-lg" type="submit">Registrate</button>
                </form>
            </div>
            <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
        </div>
        <div class="card border-0 shadow card--login" id="login">
            <div class="card-body">
                <h2 class="card-title">¡Bienvenido de nuevo!</h2>
                <form action="../control/logear.php" method="post">
                    <div class="form-group">
                        <input type="text" class="form-control" name="usuario" id="usuario" placeholder="Usuario" required="required">
                    </div>
                    <div class="form-group">
                        <input type="password" class="form-control" name="password" id="password" placeholder="Password" required="required">
                    </div>
                    <button class="btn btn-lg" type="submit">Iniciar sesión</button>
                </form>
            </div>
            <button class="btn btn-back js-btn" data-target="welcome"><i class="fas fa-angle-left"></i></button>
        </div>
    </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
