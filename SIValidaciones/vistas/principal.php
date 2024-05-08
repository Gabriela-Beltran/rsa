<?php

?>
<link rel="stylesheet" href="../css/principal.css">
<script src="../js/principal.js" defer></script>
<head>
   <link href="https://fonts.googleapis.com/css2?family=Lato&display=swap" rel="stylesheet">
<link href="https://use.fontawesome.com/releases/v5.6.1/css/all.css" rel="stylesheet">
  </head>
  <body>
    <input type="checkbox" id="check">
    <label for="check">
      <i class="fas fa-bars" id="btn"></i>
      <i class="fas fa-times" id="cancel"></i>
    </label>
    <div class="sidebar">
      <header>Menu</header>
      <a href="./principal.php" class="active">
        <i class="fas fa-qrcode"></i>
        <span>Pagina principal</span>
      </a>
      <a href="./GenerarLlaves.php">
        <i class="fas fa-lock"></i>
        <span>Generar llaves</span>
      </a>
      <a href="encriptar.php">
        <i class="fas fa-link"></i>
        <span>Encriptar</span>
      </a>
      <a href="./desencriptar.php">
        <i class="fas fa-lock-open"></i>
        <span>Desencriptar</span>
      </a>
      <a href="./acercaDe.php">
        <i class="fas fa-sliders-h"></i>
        <span>Acerca de</span>
      </a>
      <a href="../control/logout.php">
      <i class="fas fa-user"></i>
        <span>Salir</span>
      </a>
    </div>
</body>
    
<?php
include_once "../vistas/dash.php"
?>
</body>