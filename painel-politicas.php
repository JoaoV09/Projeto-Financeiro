<?php
session_start();
include_once 'conexao.php';
$pesq = "select valor from usuario where id = '" . $_SESSION['id'] . "'";
$re = $con->query($pesq);
$info = mysqli_fetch_array($re);
$total = 0;
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel-politicas.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <?php
        include_once "painel.php";
        ?>
        <div class="card">
            <h1>Política de Privacidade</h1>

            <p>Última Atualização: [Data da última atualização]</p>
            <br>
            <p>Bem-vindo ao Check'n Now. Esta Política de Privacidade descreve como coletamos, usamos, divulgamos e protegemos as informações pessoais que você fornece ao utilizar nosso site e serviços de organização financeira online. Ao utilizar nosso site e serviços, você concorda com os termos e condições desta política.</p>
            <br>
            <h2>Informações que Coletamos</h2>
            <br>
            <ol>
                <li><strong>Informações de Registro:</strong> Quando você se registra em nosso site, coletamos informações pessoais, como seu nome, endereço de e-mail e outras informações de contato.</li>
                <li><strong>Informações Financeiras:</strong> Nossos Serviços permitem que você insira informações financeiras pessoais, como receitas, despesas, saldos de contas e outras informações relacionadas à sua situação financeira. Essas informações são armazenadas de forma segura e são usadas para fornecer funcionalidades de organização financeira.</li>
                <li><strong>Informações de Uso:</strong> Coletamos informações sobre como você utiliza nosso site, incluindo as ações que você executa e os recursos que utiliza.</li>
                <li><strong>Informações de Localização:</strong> Se você optar por permitir, coletamos informações de localização para fornecer recursos baseados em localização, como rastreamento de despesas em locais específicos.</li>
            </ol>
            <br>
            <h2>Como Usamos Suas Informações</h2>

            <p>Utilizamos suas informações pessoais para os seguintes propósitos:</p>
            <br>

            <ol>
                <li><strong>Fornecer e Personalizar Nossos Serviços:</strong> Usamos suas informações para fornecer e personalizar nossos Serviços de acordo com suas preferências.</li>
                <li><strong>Análise e Melhorias:</strong> Utilizamos informações de uso para análises internas e para melhorar continuamente nossos Serviços, incluindo o desenvolvimento de novos recursos.</li>
                <li><strong>Comunicações:</strong> Podemos usar seu endereço de e-mail para enviar informações relacionadas aos nossos Serviços, como atualizações, notificações importantes e boletins informativos. Você pode optar por não receber essas comunicações a qualquer momento.</li>
            </ol>
            <br>

            <h2>Divulgação de Informações</h2>

            <p>Não compartilhamos suas informações pessoais com terceiros, exceto nas seguintes circunstâncias:</p>
            <br>
            
            <ol>
                <li><strong>Parceiros de Serviço:</strong> Podemos compartilhar informações com prestadores de serviços terceirizados que nos auxiliam na operação e melhoria de nossos Serviços.</li>
                <li><strong>Requisitos Legais:</strong> Podemos divulgar informações quando exigido por lei ou para cumprir com obrigações legais.</li>
            </ol>

            <a href="painel-home.php" class="concordo">Concorde com os termos!</a>
        </div>

</body>

</html>