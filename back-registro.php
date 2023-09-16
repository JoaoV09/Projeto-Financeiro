<?php
//header("Location: login.php");

use Random\Randomizer;
date_default_timezone_set('America/Sao_Paulo');

for ($i = 0; $i < 10; $i++) {
    $num = rand(1, 9);

    $n[] = $num;
}

$infomacoes = array(
    "nome" => $_POST["nome"],
    "email" => $_POST["email"],
    "senha" => $_POST["senha"],
    "cpf" => $_POST["cpf"],
    "data_nascimento" => $_POST["nascimento"],
    "data_criacao" => date("Y/m/d H:i:s"),
    "conta" => implode('', $n),
    "valor" => "0.0"
);

    include_once "conexao.php";
    $sql = "insert usuario values (null, '".$infomacoes["nome"]."', null, '".$infomacoes["email"]."','".$infomacoes["senha"]."','".$infomacoes["cpf"]."', null, '".$infomacoes["data_nascimento"]."', '".$infomacoes["data_criacao"]."', '".$infomacoes["conta"]."','".$infomacoes["valor"]."')";
    $con->query($sql);
    $con->close();
?>