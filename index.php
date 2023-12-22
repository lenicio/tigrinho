<?php
require 'config.php';

$sql = "SELECT * FROM categoria_despesa";
$sql = $pdo->prepare($sql);
$sql->execute();

$quantidade = $sql->rowCount(); # Retorna a quantidade de categorias
$dados = $sql->fetchAll(PDO::FETCH_ASSOC);


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

  <form action="adicionarCategoria.php" method="get">
    <label for="categoria">Insira uma nova categoria: </label>
    <input type="text" name="categoria" id="categoria">
    <button type="submit">Cadastrar</button>
  </form>

  <p>Quantidade de Categorias: <strong><?= $quantidade ?></strong></p>

  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Ações</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dados as  $linha => $dado) :  ?>
        <tr>
          <td> <?= $linha + 1; ?> </td>
          <td> <?= $dado['descrição']; ?></td>
          <td>
            <a href="editarCategoria.php?id=<?= $dado['id']; ?>">[ Editar ]</a>
            <a href="excluirCategoria.php?id=<?= $dado['id']; ?>">[ Excluir ]</a>
          </td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>

</html>