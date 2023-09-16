<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/index.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <h1 id="titulo">Inscreva-se</h1>
        <p>Crie uma nova conta gratuitamente.</p>

        <div class="card">
            <form action="back-registro.php" method="post" id="form">
                <label class="label">Nome:</label>
                <input type="text" class="input" name="nome" required>
                <label class="label">E-mail:</label>
                <input type="email" class="input" name="email" required>
                <label class="label">Senha:</label>
                <input type="text" class="input" name="senha" required minlength="8">
                <label class="label">CPF:</label>
                <input type="text" class="input" name="cpf" required minlength="11">
                <label class="label">Nascimento:</label>
                <input type="text" class="input" name="nascimento" required>

                <input type="submit" value="Enviar" class="botao">

            </form>
            <p>OU</p>
            <img src="https://via.placeholder.com/52x55" class="google">
            <a href="login.php">já tem uma conta?</a>

        </div>

        <p id="copy">Copyright © 2023 CHECK’N NOW.</p>
    </div>
</body>

</html>