<?php
try {
    $conexao = new PDO("mysql:host=localhost; dbname=web2", "root", "Carlos11425@");
} catch (PDOException $e) {
    die("Ocorreu um erro inesperado " . $e->getMessage());
}

$idArea = $_GET['id_Area'];

try {
    $sql = "delete from area where idArea = " . $idArea;
    $conexao->exec($sql);
    echo "Removido com sucesso !!!";
} catch (PDOException $e) {
    die("Ocorreu um erro " . $e->getMessage());
}
header('Location: ../../view/area/buscarArea.php');
