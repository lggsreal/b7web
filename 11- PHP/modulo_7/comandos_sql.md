\\Conectar ao banco de dados com PHP
$pdo = new PDO("mysql: host=numero/nome do servidor ; dbname = nome_da_tabela" , "login", "senha")


\\Inserir valores:
INSERT INTO `nome_da_tabela` VALUES (aqui são os valores)
ex:                                \\Nome      \Sobrenome
INSERT INTO `clientes` VALUES ('Gustavo', 'Gomes');


\\Atualizar e modificar valores
UPDATE `nome_da_tabela` SET nome="Agnaldo" sobrenome="Timoteo" WHERE id = id

