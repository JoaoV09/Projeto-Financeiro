<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel.css">
    <link rel="stylesheet" href="css/painel-cadastro.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <?php
        $tipo = $_GET["tipo"];
            include_once "painel.php";
        ?>

        <div class="card">
            <div class="cadastro">
                <h1 class="title">Cadastro de contas</h1>

                <form action="back-cadastro.php?tipo=<?php echo $tipo ?>" method="post" class="form-cadastro">
                    <label for="" class="label">Nome do Beneficiador:</label>
                    <input type="text" name="nome_bene" class="input">

                    <label for="" class="label">Codigo de Barras:</label>
                    <input type="text" name="codigoBarra" class="input">

                    <label for="" class="label">Valor:</label>
                    <input type="number" name="valor" class="input" step="0.01">

                    <label for="" class="label">Data de vencimento:</label>
                    <input type="date" name="data_venc" class="input">

                    <label for="" class="label">CPF:</label>
                    <input type="number" name="cpf" class="input">

                    <input type="submit" value="Enviar" class="botao">
                </form>
            </div>
        </div>

    </div>


</body>

</html>