<?php
try {
    $conexao = new PDO("mysql:host=localhost; dbname=web2", "root", "Carlos11425@");
} catch (PDOException $e) {
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$idCampus = $_POST['idCampus'];
$idArea = $_POST['idArea'];
$nome = $_POST['nome'];
$nota = $_POST['nota'];

try {
    $sql = "insert into curso (nomeCurso, notaCurso, idCampus, idArea) values ('$nome','$nota', '$idCampus', '$idArea')";
    $conexao->exec($sql);
    echo "Salvo com sucesso !!!";
} catch (PDOException $e) {
    die("Ocorreu um erro " . $e->getMessage());
}
