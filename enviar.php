<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nome = htmlspecialchars(trim($_POST['nome']));
    $email = htmlspecialchars(trim($_POST['email']));
    $whatsapp = htmlspecialchars(trim($_POST['whatsapp']));
    $curso = htmlspecialchars(trim($_POST['curso']));

    $to = 'fabianeabreujp@gmail.com'; // Altere para o seu e-mail
    $subject = 'Nova Solicitação de Curso';
    $body = "Nome: $nome\n";
    $body .= "E-mail: $email\n";
    $body .= "WhatsApp: $whatsapp\n";
    $body .= "Curso desejado: $curso\n";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Falha no envio da mensagem.";
    }
} else {
    echo "Método de requisição inválido.";
}
?>
