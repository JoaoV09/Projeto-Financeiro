<?php
session_start();
include_once 'conexao.php';
$total = 0;
$pesq = "select valor from usuario where id = '" . $_SESSION['id'] . "'";
$re = $con->query($pesq);
$info = mysqli_fetch_array($re);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel-pagamentos.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <?php
        include_once "painel.php";
        ?>

        <div class="card">
            <h1 class="title">Contas a pagar</h1>
            <div class="pagamento">

                <div class="info">
                    <h2 class="seuValor">Saldo</h2>
                    <h3 class="seuValor"><?php echo "R$ " . number_format($info["valor"], 2, ',', '.') ?></h3>
                </div>

                <div class="conta">
                    <p>Hoje</p>
                    <?php
                    $sql = "select * from boletos where id_pagador = '" . $_SESSION['id'] . "' and tipo = 'pagamento' and status_pagamento = 'pendente'";
                    $result = $con->query($sql);

                    while ($row = mysqli_fetch_array($result)) {
                    ?>
                        <div class="infoContas">
                            <p class="cont-nome"><?php echo $row["nome_do_beneficiario"] ?></p>
                            <a href="saibaMais.php?id=<?php echo $row["id"] ?>" class="saibaMais">Saiba Mais ></a>
                        </div>
                    <?php
                        $total += $row["valor"];
                    }
                    ?>
                </div>

                <div class="total">
                    <div class="in">
                        <h2>Total a pagar</h2>
                        <h3><?php echo "R$ " . number_format($total, 2, ',', '.') ?></h3>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <a href="painel-cadastro.php?tipo=pagamento" class="botao-voa"><img src="img/+.svg" class="add"></a>
    <?php $con->close(); ?>
</body>

</html>