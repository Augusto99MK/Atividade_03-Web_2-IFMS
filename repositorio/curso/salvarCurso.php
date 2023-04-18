<?php
try {
    $conexao = new PDO("mysql:host=localhost; dbname=web2", "root", "Carlos11425@");
} catch (PDOException $e) {
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$nome = $_POST['nome'];
$nota = $_POST['nota'];

try {
    $sql = "insert into curso (nomeCurso, notaCurso) values ('$nome','$nota')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
} catch (PDOException $e) {
    die("Ocorreu um erro " . $e->getMessage());
}
