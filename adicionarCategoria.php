<?php
require 'config.php';
$categoria = $_GET['categoria'];

$sql = "SELECT * FROM categoria_despesa WHERE descrição = :categoria";
$sql = $pdo->prepare($sql);
$sql->bindValue(":categoria", $categoria);

$sql->execute();

if ($sql->rowCount() == 0) {
  $sql = "INSERT INTO categoria_despesa (descrição, Ativo) VALUES (:categoria, 0)";
  $sql = $pdo->prepare($sql);

  $sql->bindValue(":categoria", $categoria);
  $sql->execute();
}

header("Location: index.php");
exit;
