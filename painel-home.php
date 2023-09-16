<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/painel-home.css">
    <link rel="shortcut icon" href="img/semofundo.png" type="image/x-icon">
    <title>Check'n Now</title>
</head>

<body>
    <div class="conteudo">
        <?php
        include_once "painel.php";
        ?>
        <div class="slid">
            <img src="img/Paisagem Nórdica - Fundo Virtual de Zoom.png" class="img-slid" />
        </div>
        <div class="card">
            <h1>Sobre</h1>
            <div class="cont">
                <p>Bem-vindo ao Check'n Now, o site de gestão financeira que nasceu da paixão e experiência de um talentoso grupo de programadores e designers. Estamos comprometidos em ajudá-lo a tomar o controle de suas finanças de uma maneira intuitiva, eficaz e visualmente atraente.</p>
            </div>
            <h2>Equipe</h2>
            <div class="cont">
                <div class="per">
                    <img src="img/joao.jpg" alt="joao" class="equipe">
                    <p>João Vitor</p> <p> Programador</p>
                </div>
                <div class="per">
                    <img src="img/juliana.jpg" alt="juliana" class="equipe">
                    <p>Juliana Rodrigues</p> <p>Líder de Equipe</p>
                </div>
                <div class="per">
                    <img src="img/breno.png" alt="breno" class="equipe">
                    <p>Breno Cruz</p> <p>Designer</p>
                </div>
                <div class="per">
                    <img src="img/nathan.jpg" alt="nathan" class="equipe">
                    <p>Natan luiz</p> <p>Arquivista</p>
                </div>
                <div class="per">
                    <img src="img/kauan.jpg" alt="kauan" class="equipe">
                    <p>Kauan Santos</p> <p>Arquivista</p>
                </div>
            </div>
        </div>
    </div>

</body>

</html>