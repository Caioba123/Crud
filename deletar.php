<?php
include 'conexão.php';
$id = $_GET['id'];
$sql = "DELETE FROM usuarios WHERE id = $id";
$conn->query("Delete From usuarios where id = $id");
header("Location: dashboard.php");
?>