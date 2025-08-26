<?php
require 'db.php';
require 'functions.php';
include __DIR__.'partials/header.php';

$err = $ok = "";

if ($_SERVER['REQUEST_METHOD']==='POST') {
  $id = $_POST['id'] ?? '';
  $nome = trim($_POST['nome'] ?? '');
  $nacionalidade = trim($_POST['nacionalidade'] ?? '');
  $ano_nascimento = intval($_POST['ano_nascimento'] ?? 0);

  if ($nome === '') { $err = "Nome é obrigatório."; }
  if (!$err) {
    if ($id) {
      $stmt = $pdo->prepare("UPDATE autores SET nome=?, nacionalidade=?, ano_nascimento=? WHERE id_autor=?");
      $stmt->execute([$nome, $nacionalidade, $ano_nascimento, $id]);
      $ok = "Autor atualizado.";
    } else {
      $stmt = $pdo->prepare("INSERT INTO autores (nome, nacionalidade, ano_nascimento) VALUES (?,?,?)");
      $stmt->execute([$nome, $nacionalidade, $ano_nascimento]);
      $ok = "Autor criado.";
    }
  }
}
