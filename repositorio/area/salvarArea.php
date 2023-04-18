<?php
try {
    $conexao = new PDO("mysql:host=localhost; dbname=web2", "root", "Carlos11425@");
} catch (PDOException $e) {
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nome = $_POST['nomeA'];

try {
    $sql = "insert into area (nomeArera) values ('$nome')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
} catch (PDOException $e) {
    die("Ocorreu um erro " . $e->getMessage());
}
