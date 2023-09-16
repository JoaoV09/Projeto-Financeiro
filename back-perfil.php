<?php
header("Location: painel-perfil.php");

session_start();
$info = array(
    "nome" => $_POST["nome"],
    "email" => $_POST["email"],
    "telefone" => $_POST["telefone"],
    "data_nasc" => $_POST["data-nasc"],
    "perfil" => $_FILES['perfil']
);
if ($info["perfil"] != null) {
    $ext = explode(".", $capa["name"]);
    $ext = array_reverse($ext);
    $ext = strtolower($ext[0]);

    if ($ext != 'jpg' && $ext != 'jpeg' && $ext != 'png' && $ext != 'gif') {
        echo 'O arquivo enviado não e uma imagem!!';
    } elseif ($capa['size'] > 1024 * 500) {
        echo 'A imagem e grande de mais!!';
    } else {
        $nomedacapa = date("Y-m-d-h-m-s") . "." . $ext;
    }
}

include_once 'conexao.php';

$sql = "update usuario set nome = '" . $info["nome"] . "', email = '" . $info["email"] . "', telefone = '" . $info["telefone"] . "', data_nasc = '" . $info["data_nasc"] . "' where id = '" . $_SESSION["id"] . "' ";

if ($con->query($sql)) {
    $_SESSION['nome'] = $info["nome"];
    $_SESSION['email'] = $info["email"];
    $_SESSION['telefone'] = $info["telefone"];
    $_SESSION['data_nasc'] = $info["data_nasc"];
    move_uploaded_file($capa['tmp_name'], "perfil/".$nomedacapa);
}
    $con->close();
?>