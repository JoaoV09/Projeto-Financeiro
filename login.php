<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/login.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <h1 id="titulo">Bem-vindo</h1>
        <p>Aprimore já sua gestão financeira - entre agora e experimente a rapidez!</p>

        <div class="card">
            <img src="img/semofundo.png" class="logo"/>
            <form action="back-login.php" method="post" id="form">
                <label class="label">E-mail:</label>
                <input type="email" class="input" name="email" required>
                <label class="label">Senha:</label>
                <input type="text" class="input" name="senha" required>

                <input type="submit" value="Enviar" class="botao">
            </form>
            <p>OU</p>
            <img src="https://via.placeholder.com/52x55" class="google">
            <a href="index.php">Ainda não tem uma conta?</a>

        </div>

        <p id="copy">Copyright © 2023 CHECK’N NOW.</p>
    </div>
</body>

</html>