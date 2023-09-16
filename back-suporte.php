<?php
header("Location: suporte.php");
$nome = $_POST['nome'];
$email = $_POST['email'];
$msg = $_POST['conteudo'];
$data = date('d/m/Y');
$hr = date('h:i:s');

$arquivo = "
    <html>
        <p>Nome: $nome</p>
        <p>Email: $email</p>
        <p>Mensagem: $msg</p>
        <p>O email foi enviado $data às $hr.</p>
    </html>
    ";

$destino = "Jovito098@gmail.com";
$assunto = "Enviado pelo site!!";

$headers = "MIME-Version: 1.0\n";
$headers .= "Content-type: text/html; charset=iso-8859-1\n";
$headers .= "From: $nome <$email>";

if (mail($destino, $assunto, $arquivo, $headers)) {
    $con->close();
} else {
    echo "Falha ao enviar o e-mail.";
}

?>