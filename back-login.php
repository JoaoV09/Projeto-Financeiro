<?php
session_start();

$informacao = array(
    "email" => $_POST["email"],
    "senha" => $_POST["senha"]
);

include_once "conexao.php";

$sql = "select * from usuario where email = '".$informacao["email"]."' and senha = '".$informacao["senha"]."' ";

$result = $con->query($sql);
    
if ($row = mysqli_fetch_array($result)){
    $_SESSION['logado'] = true;
    $_SESSION['id'] = $row["id"];
    $_SESSION['nome'] = $row["nome"];
    $_SESSION['email'] = $row["email"]; 
    $_SESSION['cpf'] = $row["cpf"];
    $_SESSION['data_nasc'] = $row["data_nasc"];
    $_SESSION['data_cria'] = $row["data_cria"];
    $_SESSION['conta'] = $row["conta"];
    header("Location: painel-home.php");
}else{
    header("Location: login.php");
}


$con->close();

?>