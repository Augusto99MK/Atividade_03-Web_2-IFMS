<?php
// Estabelecendo conexao com o diretorio devweb22023
$path = 'http://' . $_SERVER["HTTP_HOST"] . '/devweb22023';
?>
<!-- Criando um componente de barra de navegação com a classe "navbar" -->
<!-- expand-lg significa que a barra de navegação possa ser expandida em telas de dispositivos largas
ao mesmo tempo que pode ser compacta em telas menores -->
<nav class="navbar navbar-expand-lg bg-body-primary mt-3">
    <!-- container fluid se estende por toda a largura disponivel fluid é um elemento de responsividade -->
    <div class="container-fluid">
        <img src="<?php echo $path; ?>/arquivos/imagens/ifmscb.png" width="9%">
        <!-- navbar-toggler cria o botao que pode ser usada para recolher a barra -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse " id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo $path; ?>/index.php">Home</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Campus
                    </a>
                    <!--Sanduiche do bootstrap para o cadastro de campus-->
                    <ul class="dropdown-menu">
                        <!--chamada das paginas php -->
                        <li><a class="dropdown-item" href="<?php echo $path; ?>./view/campus/cadastroDeCampus.php">Cadastrar Campus</a></li>
                        <li><a class="dropdown-item" href="<?php echo $path; ?>./view/campus/buscarCampus.php">Buscar
                                Campus</a>

                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Area
                    </a>
                    <!--Sanduiche do bootstrap para o cadastro de area-->
                    <ul class="dropdown-menu">

                        <!--Sanduiche do bootstrap para o cadastro de area-->
                        <li><a class="dropdown-item" href="<?php echo $path; ?>./view/area/cadastroDeArea.php">Cadastrar
                                Area</a></li>
                        <li><a class="dropdown-item" href="<?php echo $path; ?>./view/area/buscarArea.php">Buscar
                                Area</a>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Curso
                    </a>
                    <!--Sanduiche do bootstrap para o cadastro de curso-->
                    <ul class="dropdown-menu">

                        <!--Sanduiche do bootstrap para o cadastro de Curso-->
                        <li><a class="dropdown-item" href="<?php echo $path; ?>./view/curso/cadastroDeCurso.php">Cadastrar
                                Curso</a></li>
                        <li><a class="dropdown-item" href="<?php echo $path; ?>./view/curso/buscarCurso.php">Buscar
                                Curso</a>
                    </ul>
                </li>
            </ul>
            <form class="d-flex" role="search">
                <a class="btn btn-outline-primary me-2" id="linkDeslogar" href="#">Deslogar</a>
                <a class="btn btn-outline-primary" id="linkLogar" href="#">Logar</a>
            </form>
        </div>
    </div>
</nav>