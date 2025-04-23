document.addEventListener("DOMContentLoaded", function() {
    // Aplicar validación de números a los campos txtPass y txtCelular
    document.getElementById("txtPass").addEventListener("keypress", function(e) {
        validarNumeros(e, "txtPass");
    });
    document.getElementById("txtCelular").addEventListener("keypress", function(e) {
        validarNumeros(e, "txtCelular");
    });

    // Aplicar validación de números a los campos txtTarjeta y txtCVV
    document.getElementById("txtTarjeta").addEventListener("keypress", function(e) {
        validarNumeros(e, "txtTarjeta");
    });
    document.getElementById("txtCVV").addEventListener("keypress", function(e) {
        validarNumeros(e, "txtCVV");
    });
});