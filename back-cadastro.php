<?php
session_start();
$conta = array(
    "id_pagador" => $_SESSION['id'],
    "codigo de barras" => $_POST["codigoBarra"],
    "valor" => $_POST["valor"],
    "data_venc" => $_POST["data_venc"],
    "nome_bene" => $_POST["nome_bene"],
    "CPF" => $_POST["cpf"],
    "tipo" => $_GET["tipo"],
    "status" => "pendente"
);


include_once "conexao.php";

$sql = "insert boletos values (null, '" . $conta["id_pagador"] . "', '" . $conta["codigo de barras"] . "', '" . $conta["valor"] . "', '" . $conta["data_venc"] . "', '" . $conta["nome_bene"] . "', '" . $conta["CPF"] . "', '" . $conta["tipo"] . "', '" . $conta["status"] . "')";

if ($con->query($sql)) {
    header("Location: painel-cadastro.php?tipo=" . $conta["tipo"] . "");
}
$con->close();
?>