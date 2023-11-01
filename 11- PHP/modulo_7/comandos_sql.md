\\Conectar ao banco de dados com PHP
$pdo = new PDO("mysql: host=numero/nome do servidor ; dbname = nome_da_tabela" , "login", "senha")


\\Inserir valores:
INSERT INTO `nome_da_tabela` VALUES (aqui são os valores)
ex:                                \\Nome      \Sobrenome
INSERT INTO `clientes` VALUES ('Gustavo', 'Gomes');


\\Atualizar e modificar valores
UPDATE `nome_da_tabela` SET nome="Agnaldo" sobrenome="Timoteo" WHERE id = id

\\Deletar algo:
DELETE FROM `nome_da_tabela` WHERE especificações 
ex:
DELETE FROM `clientes` WHERE id = 3;

\\Selecionar partes da tabela ou a tabela toda:
SELECT * FROM nome_da_tabela

ou....

SELECT * FROM nome_da_tabela WHERE especificaçoes
ex: 
$pdo = new PDO("bla bla bla);
$sql = $pdo->prepare("SELECT * FROM nome_da_tabela WHERE id = ?")
$sql->execute();

$info = $sql->fetchAll();

foreach ($info as $key -> $value){
    echo $value['nome'];
}



\\AGRUPAR POR ALGO E LIMITAR

$sql = $pdo->prepare("SELECT * FROM `nome_da_tabela` GROUP BY `nome_da_coluna` LIMIT ?);
Ex:
$sql = $pdo->prepare("SELECT * FROM `clientes` GROUP BY `cargo` LIMIT 3);
$sql->execute();


\Order by:
$sql->prepare("SELECT * FROM `clientes` ORDER BY nome asc);
                                                     desc
 

 \\LEFT JOIN - MESMO QUE NÃO BATA... ME RETORNE MESMO ASSIM.
 Ex:
  $sql = $pdo->prepare("SELECT * FROM `nome_da_tabela` LEFT JOIN nome_da_coluna ON `nome_da_tabela1` . `nome_da_coluna1` = `nome_da_tabela2` . `nome_da_coluna2`");  

Ex prático:
  $sql = $pdo->prepare("SELECT * FROM `clientes` LEFT JOIN cargos ON `clientes` . `cargo` = `cargos` . `id`");
  $sql->execute();
