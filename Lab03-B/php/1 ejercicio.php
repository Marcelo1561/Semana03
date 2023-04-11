<?php
$usuario = $_POST['usuario'];
$email = $_POST['email'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>1 - DATOS</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous"> 
</head>
<body>
  <div class="container">
    <div class="row">

      <?php
        if ( $usuario == 'Alonso' && $email == 'Alonso@gmail.com' ) {
          echo "<h1>Bienvenido</h1>";
          echo "<p> Usuario: " . $usuario . "</p>";
          echo "<p> Email: " . $email . "</p>";
        }
        else {
      ?>
      <h1>Usuario y/o Email No Valido</h1>
      <a href="/html/1 ejercicio.html" class="btn btn-danger">Regresar</a>
      <?php
        }
      ?>

    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js" integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N" crossorigin="anonymous"></script>
</body>
</html>