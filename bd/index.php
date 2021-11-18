<?php

include_once ("conexao.php");

    $achei = "";

    if ( verificaTabela("cadastro", $pdo) ) {
        //faz alguma coisa
        $achei = "ACHEI A TABELA";
    } else {
        //faz outra coisa
        $achei = "NÃO ACHEI A TABELA";
    }
    //esta funcao foi criada para verificar se uma tabela existe no banco com o mesmo nome do parametro $termo
    function verificaTabela( $termo, $pdo ) {
        //cria um vetor (array) em branco
        $tabelas = [];

        $results = $pdo->query('SHOW TABLES');

        $tabelas_banco = $results->fetchAll();

        foreach($tabelas_banco as $linha) {

            $tabelas[] = $linha[0];
        
        }
   
       return in_array($termo, $tabelas);

   }



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Banco novo</title>
</head>
<body>
    <h1>Pagina de consulta</h1>
    <p>
        <?=$achei?>
    </p>
</body>
</html>

<!--
CREATE TABLE banco_novo.cadastro (
	id INT UNSIGNED auto_increment NOT NULL,
	nome varchar(100) NULL,
	CONSTRAINT cadastro_PK PRIMARY KEY (id)
)
ENGINE=InnoDB
DEFAULT CHARSET=utf8mb4
COLLATE=utf8mb4_general_ci;
-->