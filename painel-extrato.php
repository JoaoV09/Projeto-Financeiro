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
    <link rel="stylesheet" href="css/painel-extrato.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <?php
        include_once "painel.php";

        $sql = "select * from boletos where id_pagador = '" . $_SESSION['id'] . "' and status_pagamento = 'pago'";
        $result = $con->query($sql);
        ?>
        <div class="card">
        <h1 class="title">Extrato</h1>

            <div class="conta">
                <?php
                while ($row = mysqli_fetch_array($result)) { ?>
                    <div class="infoContas">
                        <p class="cont-nome"><?php echo $row["nome_do_beneficiario"] ?></p>
                        <a href="saibaMais.php?id=<?php echo $row["id"] ?>" class="saibaMais">Saiba Mais ></a>
                    </div>

                <?php
                }
                ?>
            </div>
        </div>
    </div>

</body>

</html>