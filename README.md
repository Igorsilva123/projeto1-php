criacao do banco

CREATE DATABASE projeto_1;

tabelas de clientes

CREATE TABLE clientes (
id int AUTO_INCREMENT PRIMARY KEY,
cliente VARCHAR(150) NOT NULL,
cidade VARCHAR(150),
estado VARCHAR(50)
)


nova parte implementada tabela de produtos

CREATE TABLE produtos (
id int AUTO_INCREMENT PRIMARY KEY,
nome VARCHAR(150) NOT NULL,
valor int(150),
quantidade int(50)
)


Implementação no Projeto PHP

foi adicionado ao projeto um CRUD para a tabela produtos

Funcionalidades:

Criar: cadastrar novos produtos no banco de dados.

Ler: listar produtos cadastrados e exibir detalhes.

Atualizar: editar informações de produtos existentes.

Excluir: remover produtos do sistema.

todas as operacões sao executadas no admin so a listagem de produtos que esta na pagina principal na aba de produtos
