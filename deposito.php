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
    <link rel="stylesheet" href="css/deposito.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <?php
        include_once "painel.php";
        ?>

        <div class="card">
            <form action="back-deposito.php" method="post">
                <label for="">Valor: </label>
                <input type="number" class="input" name="valor">
                <input type="submit" class="botao" value="Enviar">
            </form>
        </div>
    </div>

</body>

</html>