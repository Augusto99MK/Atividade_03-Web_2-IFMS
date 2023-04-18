<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/devweb22023'; ?>

<head>
    <meta charset="UTF-8">
    <title>Busca de Area</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js"
        integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="<?php echo $path; ?>/arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo $path; ?>/arquivos/js/bootstrap.bundle.min.js"></script>
    <script type="text/javascript" src="<?php echo $path; ?>/arquivos/js/busca.cep.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>
    <div class="container">
        <div class="row mb-4 mt-4">
            <!-- Botao X que retorna ao menu principal -->
            <a href="../../index.php" class="btn btn-close" aria-label="Close"></a>
            <div class="alert alert-light" role="alert">
                <h1>Busca de Area</h1>
            </div>
        </div>
        <div class="row">
            <?php
            try {
                $conexao = new PDO("mysql:host=localhost; dbname=web2", "root", "Carlos11425@");
            } catch (PDOException $e) {
                die('aconteceu um erro: ' . $e->getMessage());
            }

            try {
                $sql = "select * from area";
                $resultado = $conexao->query($sql);
                if ($resultado->rowCount() > 0) {
            ?>
            <table class="table border-dark">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nome Area</th>
                        <th scope="col">CEP</th>
                        <th scope="col">#</th>
                        <th scope="col">#</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                            /*iterando cada linha, fetch tem uma condição de parada automatica
                            enquanto ouver linhas e a cada iteração do loop, a função fetch() recupera
                              uma única linha de resultado do conjunto de resultados
                               e atribui os valores dessa linha a variável $linha.*/
                            while ($linha = $resultado->fetch()) {
                                echo "<tr>";
                                echo "<td>" . $linha['idArea'] . "</td>";
                                echo "<td>" . $linha['nomeArera'] . "</td>";
                                echo "<td><a href=\"../../repositorio/area/removerArea.php?id_Area=" . $linha['idArea'] . "\" class=\"btn btn-danger\">Remover</a></td>";
                                echo "<td><a href=\"editarArea.php?id_Area=" . $linha['idArea'] . "\" class=\"btn btn-secondary\">Editar</a></td>";
                                echo "</tr>";
                            }
                            ?>
                </tbody>
            </table>
            <?php
                }
            } catch (PDOException $e) {
                die('aconteceu um erro: ' . $e->getMessage());
            }
            ?>
        </div>
    </div>
</body>

</html>