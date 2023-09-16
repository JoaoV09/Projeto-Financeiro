<?php
    header("Location: deposito.php");
    session_start();
    include_once 'conexao.php';
    $qsl = "select * from usuario where id = '".$_SESSION["id"]."'";
    $res = $con->query($qsl);
    $row = mysqli_fetch_array($res);
    $total = $row["valor"];

    $valor = $_POST["valor"];
    $total += $valor;

    $sql = "update usuario set valor = '".$total."' where id = '".$_SESSION["id"]."'";
    $con->query($sql);
    $con->close();
?>