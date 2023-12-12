<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    // Ajuste as configurações do servidor de e-mail conforme necessário
    $to = "seu@email.com";
    $subject = "Nova mensagem de contato de $name";
    $headers = "From: $email";

    // Envie o e-mail
    mail($to, $subject, $message, $headers);
}
?>
