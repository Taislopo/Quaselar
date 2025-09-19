<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuaseLar</title>
    <!-- conexão para o css -->
    <!-- <link rel="stylesheet" href="./css/header.css"> -->
    <link rel="stylesheet" href="./css/pagina_cadas_entrar.css">
    <link rel="stylesheet" href="./css/cadastro-procrados.css">
    <link rel="stylesheet" href="./css/procura_se.css">
    <link rel="stylesheet" href="./css/sobre-nos.css">
    <link rel="stylesheet" href="./css/tela-info-procuados.css">

    <!-- bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <!-- bootstrap js-->
    <script defer src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
    <!-- arquivos JS -->
    <script defer src="./js/pagina_cadas_entrar.js"></script>
    <script defer src=""></script>
    <script defer src=""></script>
</head>
<body>
    <header class="header_html">
        <nav class="nav-itens">
            <img src="./img/cat_logo.png" alt="">
            <nav class="bnt-group1">
                <ul>
                    <li class="bnt_entrar"><a href="">Entrar</a></li>
                    <li class="bnt_cadastrar"><a href="">Cadastre-se</a></li>
                    <div class="hamburguer"> <!--icone de menu-->
                        <div class="linha1"></div>
                        <div class="linha2"></div>
                        <div class="linha3"></div>
                    </div>
                </ul>
            </nav>
        </nav>
    </header>



<?php
include './template/footer.php';
?>