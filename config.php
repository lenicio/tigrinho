<?php

$host = "5ps.site";
$bd_name = "hg5pss68_vermelho";
$usuario = "hg5pss68_equipe_vermelha";
$senha = "9@J),KC^H}aP";


try {

  $pdo = new PDO("mysql:host=$host;dbname=$bd_name", $usuario, $senha);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $erro) {
  echo "Erro no banco de dados " . $erro->getMessage();
}
