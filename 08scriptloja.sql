CREATE DATABASE loja;
USE loja;

CREATE TABLE produtos(
	id INT AUTO_INCREMENT PRIMARY KEY,
    nome VARCHAR(70),
    preco DECIMAL(10,2),
    estoque INT 
);

INSERT INTO produtos(nome, preco, estoque) VALUES
  ('guitarra', 1483.00, 58), 
  ('bateria', 576.00, 37), 
  ('caixa de som', 675.00, 12);

SELECT id, nome, preco, estoque FROM produtos;
