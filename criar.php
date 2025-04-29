<?php
include("conexao.php");

$nome = $_POST['nome'];
$numero = $_POST['numero'];
$email = $_POST['email'];
$senha = $_POST['senha'];

$sql = "INSERT INTO usuarios (nome, numero, email, senha) VALUES ('$nome', '$numero', '$email', '$senha')";

if (mysqli_query($conexao, $sql)) {
    header("Location: dashboard.php");
    exit;
} else {
    echo "Erro ao cadastrar: " . mysqli_error($conexao);
}

mysqli_close($conexao);
?>