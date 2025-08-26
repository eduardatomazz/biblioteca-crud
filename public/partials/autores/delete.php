<?php
include __DIR__.'partials/header.php';

$id = $_GET['id'];
$err = $ok = "";

if (($_GET['delete'] ?? '') !== '') {
  $id = $_GET['delete'];
  $c = $pdo->prepare("SELECT COUNT(*) FROM livros WHERE id_autor=?");
  $c->execute([$id]);
  if ((int)$c->fetchColumn() > 0) {
    $err = "Não é possível excluir. Existem livros relacionados.";
  } else {
    $pdo->prepare("DELETE FROM autores WHERE id_autor=?")->execute([$id]);
    $ok = "Autor excluído.";
  }
}


$q = trim($_GET['q'] ?? '');
$params = [];
$sql = "SELECT * FROM autores";
if ($q !== '') {
  $sql .= " WHERE nome LIKE ? OR nacionalidade LIKE ?";
  $like = "%$q%";
  $params = [$like, $like];
}
$sql .= " ORDER BY nome ASC";


?>
