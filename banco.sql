CREATE DATABASE bibliotecaa;
USE bibliotecaa;

CREATE TABLE autores (
    id_autor INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(45) NOT NULL, 
    nacionalidade VARCHAR(45)NOT NULL, 
    ano_nascimento DATE NOT NULL 
);

CREATE TABLE livros ( 
    id_livro INT AUTO_INCREMENT PRIMARY KEY, 
    titulo VARCHAR(45) NOT NULL, 
    genero VARCHAR(45)NOT NULL, 
    ano_publicado DATE NOT NULL, 
    id_autor INT, 
    FOREIGN KEY (id_autor) REFERENCES autores(id_autor) 
);

CREATE TABLE leitores ( 
    id_leitor INT AUTO_INCREMENT PRIMARY KEY, 
    nome VARCHAR(45) NOT NULL,
    email VARCHAR(45) NOT NULL, 
    telefone INT NOT NULL 
);

CREATE TABLE emprestimos ( 
    id_emprestimo INT AUTO_INCREMENT PRIMARY KEY, 
    data_emprestimo DATE NOT NULL, 
    data_delovucao DATE NOT NULL, 
    id_livro INT, 
    id_leitor INT, 
    FOREIGN KEY (id_livro) REFERENCES livros(id_livro), 
    FOREIGN KEY (id_leitor) REFERENCES leitores(id_leitor) 
);