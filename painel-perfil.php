<?php
    include_once "conexao.php";
    session_start();
    $sql = "select * from usuario where id = '".$_SESSION["id"]."' ";
    $res = $con->query($sql);
    $row = mysqli_fetch_array($res);
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel-perfil.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <?php
        include_once "painel.php";
        ?>

        <div class="card">

            <img src="img/perfil.jpg" alt="" class="perfil">
            
            <form action="back-perfil.php" method="post" class="form" enctype="multipart/form-data">
                <label for="name" class="label">Nome: </label>
                <input type="text" class="input" name="nome" value  ="<?php echo $row["nome"] ?>">
                
                <label for="email" class="label">Email: </label>
                <input type="text" class="input" name="email" value="<?php echo $row["email"] ?>">
                
                <label for="telefone" class="label">Telefone: </label>
                <input type="text" class="input" name="telefone" value="<?php echo $row["telefone"] ?>">
                
                <label for="data_nasc" class="label">Data de nascimento: </label>
                <input type="text" class="input" name="data-nasc" value="<?php echo $row["data_nasc"] ?>">
                
                <label for="meuInputFile" class="custom-file-upload">
                    Foto de Perfil
                </label>
                <input type="file" id="meuInputFile" name="perfil" value="" style="display: none;">
                
                <input type="submit" class="botao" value="Atualizar">
            </form>

        </div>
    </div>

</body>

</html>