# CRUD Futebol - Laribol

Aplicação simples em **PHP + MySQL (XAMPP)** para gerenciamento de **autores**, **livros**, **leitores** e **emprestimos**.  
Este projeto implementa um **CRUD completo** (Create, Read, Update, Delete) com validações e regras de negócio.

---

## Regras de Negócio
- Um autor pode ter vários livros, mas um livro pertence a apenas um autor.
- Um livro só pode ser emprestado se não houver outro empréstimo ativo (sem data de devolução).
- O ano de publicação do livro deve ser maior que 1500 e menor ou igual ao ano atual.
- A data de devolução não pode ser anterior à data de empréstimo.
- Cada leitor pode ter no máximo 3 empréstimos ativos ao mesmo tempo.
---

## Como rodar no XAMPP

### 1. Instalar e configurar XAMPP
- Baixe e instale o [XAMPP](https://www.apachefriends.org/).
- Inicie os módulos **Apache** e **MySQL** no painel de controle.

### 2. Copiar o projeto
- Coloque a pasta **Biblioteca/** dentro do diretório: C:\xampp\htdocs\

### 3. Criar o banco de dados
- Abra o **phpMyAdmin** no navegador: http://localhost/phpmyadmin
- Clique em **SQL** e rode o script que está no arquivo: banco.sql
- Isso criará o banco **bibliotecaa** com as tabelas `autores`, `livros`, `leitores` e `emprestimos`.