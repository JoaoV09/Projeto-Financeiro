<?php
session_start();
include_once 'conexao.php';

$valor = $_GET["pagar"];
$tem = $_GET["t"];
$url = $_GET["url"];
$id = explode("=", $url);
echo $id[1];

if($tem < $valor)
    echo "erro ao pagar";
else
{
    $result = $tem - $valor;
    $sql = "update boletos set status_pagamento = 'pago' where id = '".$id[1]."' "; 
    $con->query($sql);

    $pes = "update usuario set valor = '".$result."' where id = '".$_SESSION["id"]."' ";
    $con->query($pes);

    header("Location: $url");   
}
?>