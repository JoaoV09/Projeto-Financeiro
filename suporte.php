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
    <link rel="stylesheet" href="css/suporte.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <?php
        include_once "painel.php";
        ?>

        <div class="card">
            <img src="img/semofundo.png" alt="" class="logo">
            <form action="back-suporte.php" method="post">
                <input type="text" name="nome" class="input" placeholder="Nome">
                <input type="text" name="email" class="input" placeholder="Email">
                <textarea name="conteudo" id="" cols="30" rows="10" class="textearea" placeholder="conteudo"></textarea>
                <input type="submit" class="botao" value="Enviar">
            </form>
        </div>
    </div>

</body>

</html>