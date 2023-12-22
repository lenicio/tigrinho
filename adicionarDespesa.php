<?php
require "config.php";


if (!empty($_GET["descricao"]) && !empty($_GET["valor"]) && !empty($_GET["data"])) {
  $descricao = $_GET["descricao"];
  $valor = $_GET["valor"];
  $data = $_GET["data"];

  $sql = "INSERT INTO transacao_despesa (descricao, valor, data_movimento) values
          (:descricao, :valor, :data)";

  $sql = $pdo->prepare($sql);
  $sql->bindValue(":descricao", $descricao);
  $sql->bindValue(":valor", $valor);
  $sql->bindValue(":data", $data);

  $sql->execute();
}


header("Location: despesas.php");
exit;
