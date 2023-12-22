<?php
require "config.php";

$sql = "SELECT * FROM transacao_despesa";
$sql = $pdo->prepare($sql);
$sql->execute();

if ($sql->rowCount() > 0) {
  $dados = $sql->fetchAll(PDO::FETCH_ASSOC);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Despesas</title>
  <style>
    * {
      font-size: 26px;
      font-family: sans-serif;
    }

    table {
      text-align: center;
    }

    input {
      margin-bottom: 10px;
    }
  </style>
</head>

<body>

  <h2>Adicionar Despesa</h2>
  <form action="adicionarDespesa.php">
    <label for="descricao">Descrição: </label>
    <input type="text" name="descricao" id="descricao">

    <br>

    <label for="">Valor: </label>
    <input type="number" name="valor" id="valor" step="0.01">

    <br>

    <label for="data">Data: </label>
    <input type="date" name="data" id="data">

    <br>

    <button type="submit">Adicionar</button>

  </form>




  <h2>Lista de Despesas</h2>
  <table>
    <thead>
      <tr>
        <th>ID</th>
        <th>Descrição</th>
        <th>Valor</th>
        <th>Data</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach ($dados as $dado) : ?>
        <tr>
          <td><?= $dado["id"] ?></td>
          <td><?= $dado["descricao"] ?></td>
          <td><?= $dado["valor"] ?></td>
          <td><?= $dado["data_movimento"] ?></td>
        </tr>
      <?php endforeach; ?>
    </tbody>
  </table>

</body>

</html>