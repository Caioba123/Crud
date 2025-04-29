<?php
$servidor = "localhost";
$usuarios = "root";
$senha = "123456";
$dbname = "Nautico";



$conexao = mysqli_connect($servidor, $usuarios, $senha, $dbname);
if (!$conexao) {
    die("Ocorreu um erro: " . mysqli_connect_error());
}
?>
