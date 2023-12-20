<?php
require "config.php";

$id = $_GET['id'];

$sql = "SELECT * FROM categoria_despesa WHERE id = :id";
$sql = $pdo->prepare($sql);
$sql->bindValue(":id", $id);
$sql->execute();

$dado = $sql->fetch(PDO::FETCH_ASSOC);
$descricao = $dado['descrição'];

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <style>
    * {
      font-family: sans-serif;
      font-size: 26px;
    }
  </style>
</head>

<body>

  <form action="editarCategoriaConfirmar.php" method="get">
    <label for="categoria">Insira uma nova categoria: </label>
    <input type="hidden" name="id_categoria" id="id_categoria" value="<?= $id ?>">
    <input type="text" name="categoria" id="categoria" value="<?= $descricao ?>">
    <button type="submit">Confirmar Edição</button>
  </form>

</body>

</html>