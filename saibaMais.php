<?php
session_start();
include_once 'conexao.php';
$id_cont = $_GET["id"];
$pesq = "select * from boletos where id = '" . $id_cont . "'";
$re = $con->query($pesq);
$row = mysqli_fetch_array($re);
$url = basename($_SERVER['REQUEST_URI']);

$data = str_replace("-", "/", $row["data_de_vencimento"]);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/saibaMais.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <?php
        include_once "painel.php";
        $sql = "select * from usuario where id = '".$_SESSION["id"]."' ";
        $pe = $con->query($sql);
        $info = mysqli_fetch_array($pe);
        ?>
        <div class="card">
            <h1 class="title"><?php echo $row["nome_do_beneficiario"] ?></h1>
            <div class="pagamento">

                <div class="info">
                </div>

                <div class="conta">
                    <p>Hoje</p>
                    <div class="infoContas">
                        <p class="cont-nome">Vencimento</p>
                        <p class="vencimento"><?php echo $data ?></p>
                    </div>
                    <div class="infoContas">
                        <p class="cont-nome">Valor</p>
                        <p class="vencimento"><?php echo "R$ " . number_format($row["valor"], 2, ',', '.') ?></p>
                    </div>
                </div>

                <div class="total">
                    <div class="in">
                        <h2>Total a pagar</h2>
                        <h3><?php echo "R$ " . number_format($row["valor"], 2, ',', '.') ?></h3>
                    </div>
                    <?php if($row["status_pagamento"] != "pago" && $row["tipo"] == "pagamento") {?>
                        <a href="pagar.php?pagar=<?php echo $row["valor"]; ?>&&t=<?php echo $info["valor"]; ?>&&url=<?php echo $url; ?>" class="botao">Pagar Contas</a>
                    <?php } ?>
                </div>

            </div>
        </div>
    </div>

    <a href="painel-cadastro.php?tipo=pagamento" class="botao-voa"><img src="img/+.svg" class="add"></a>
    <?php $con->close(); ?>
</body>

</html>