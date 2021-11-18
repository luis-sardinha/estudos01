<?php

$hostname = "localhost";
$dbname = "banco_novo";
$user = "root";
$passw = "eumesmo";
$port = 3306;


try {

    $pdo = new PDO("mysql:host=$hostname;dbname=" . $dbname, $user, $passw);
    
}   catch(PDOException $err) {
    echo "Erro: Conexão com o banco de dados não foi realizada com sucesso. Erro gerado" . $err->getMessage();
}


?>
