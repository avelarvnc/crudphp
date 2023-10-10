CREATE TABLE produto
(
    idProduto       INT AUTO_INCREMENT PRIMARY KEY,
    nome            VARCHAR(100),
    valor           NUMERIC(10,2),
    categoria       VARCHAR(100)
)

DELIMITER $$
CREATE PROCEDURE pi_Produto
( 	
	IN _nome		VARCHAR(100),
    IN _valor		NUMERIC(10,2),
    IN _categoria	VARCHAR(100)
)
BEGIN
	INSERT INTO produto (nome, valor, categoria) VALUES (_nome, _valor, _categoria);
END $$;

CALL pi_Produto ('Chocolate Quente', 4, 'Padaria')