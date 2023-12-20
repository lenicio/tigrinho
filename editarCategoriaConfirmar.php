<?php
require "config.php";

$id = $_GET['id_categoria'];
$descricao = $_GET['categoria'];

$sql = "UPDATE categoria_despesa set descrição = :descricao WHERE id = :id";
$sql = $pdo->prepare($sql);
$sql->bindValue(":descricao", $descricao);
$sql->bindValue(":id", $id);
$sql->execute();


header("Location: index.php");
exit;
