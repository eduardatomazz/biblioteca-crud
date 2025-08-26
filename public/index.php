<?php include __DIR__.'partials/header.php'; ?>
<div class="card">
  <p>Este é um CRUD simples para <strong>Autores, Livros, Leitores e Empréstimos</strong> usando PHP (PDO) + MySQL (XAMPP).</p>
  <p>Regras de negócio implementadas:</p>
  <ul>
    <li>Um autor possui vários livros; cada livro tem apenas um autor.</li>
    <li>Um livro só é emprestado se não houver empréstimo ativo.</li>
    <li>Ano de publicação: &gt; 1500 e ≤ ano atual.</li>
    <li>Data de devolução não pode ser anterior à data de empréstimo.</li>
    <li>Leitor: no máximo 3 empréstimos ativos.</li>
  </ul>
  <p>Use o menu acima para navegar.</p>
</div>
<?php include __DIR__.'partials/footer.php'; ?>