<!DOCTYPE html>
<html lang="en">
<?php $path = 'http://' . $_SERVER["HTTP_HOST"] . '/devweb22023'; ?>

<head>
    <meta charset="UTF-8">
    <title>Cadastro de Curso</title>

    <script src="https://code.jquery.com/jquery-3.6.4.min.js" integrity="sha256-oP6HI9z1XaZNBrJURtCoUT5SUnxFr8s3BzRl+cbzUq8=" crossorigin="anonymous"></script>
    <link href="<?php echo $path; ?>/arquivos/css/bootstrap.min.css" rel="stylesheet">
    <script src="<?php echo $path; ?>/arquivos/js/bootstrap.bundle.min.js"></script>
</head>

<body>
    <?php include("../../menu.php") ?>

    <div class="container">
        <div class="row mb-4 mt-4">
            <!-- Botao X que retorna ao menu principal -->
            <a href="../../index.php" class="btn btn-close" aria-label="Close"></a>
            <div class="alert alert-light" role="alert">
                <h1>Cadastro de Curso</h1>
            </div>
        </div>
        <form action="<?php echo $path; ?>/repositorio/curso/salvarCurso.php" method="POST">
            <div class="row mb-3">
                <div class="col col-md-3">
                    <label class="form-label" for="idNome">Nome do Curso</label>
                    <input class="form-control border-dark" type="text" name="nome" id="idNome" required>
                </div>
            </div>

            <div class="row mb-3">
                <div class="col col-md-3">
                    <label class="form-label" for="idNome">Nota Curso</label>
                    <input class="form-control border-dark" min="1" max="10" type="number" name="nota" id="idNome" placeholder="Digite uma nota de curso de 1 a 10" required>
                </div>
            </div>

            <!-- Consulta Campus -->
            <?php
            try {
                $conexao = new PDO("mysql:host=localhost; dbname=web2", "root", "Carlos11425@");
            } catch (PDOException $e) {
                die('aconteceu um erro: ' . $e->getMessage());
            }

            try {
                $sql = "select * from campus";
                $resultado = $conexao->query($sql);
                if ($resultado->rowCount() > 0) {
            ?>


                    <div class="row mb-3">
                        <div class="col col-md-3">
                            <label class="form-label" for="idNome">Campus do Curso</label>
                            <select class="form-control border-dark" id="select_opcao" name="idCampus">
                                <?php
                                while ($linha = $resultado->fetch()) {
                                    echo "<option value =\"" . $linha['idCampus'] . "\">" . $linha['nomeCampus'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

            <?php
                } else {
                    echo "<div class='row'><div class='col-md-12'><p>Nenhum campus encontrado.</p></div></div>";
                }
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
            ?>

            <?php
            try {
                $conexao = new PDO("mysql:host=localhost; dbname=web2", "root", "Carlos11425@");
            } catch (PDOException $e) {
                die('aconteceu um erro: ' . $e->getMessage());
            }

            /* Consulta area */
            try {
                $sql = "select * from area";
                $resultado = $conexao->query($sql);
                if ($resultado->rowCount() > 0) {
            ?>


                    <div class="row mb-3">
                        <div class="col col-md-3">
                            <label class="form-label" for="idNome">Area do Curso</label>
                            <select class="form-control border-dark" id="select_opcao" name="idArea">
                                <?php
                                while ($linha = $resultado->fetch()) {
                                    echo "<option value =\"" . $linha['idArea'] . "\">" . $linha['nomeArera'] . "</option>";
                                }
                                ?>
                            </select>
                        </div>
                    </div>

            <?php
                } else {
                    echo "<div class='row'><div class='col-md-12'><p>Nenhuma area encontrada.</p></div></div>";
                }
            } catch (PDOException $e) {
                echo "Erro: " . $e->getMessage();
            }
            ?>
            <input class="btn btn-primary" type="submit" value="Salvar">
        </form>
</body>

</html>