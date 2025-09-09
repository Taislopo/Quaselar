<?php
include './template/header.php';
?>
<!--CABEÇALHO =====================================================================-->
<header class="navbar">
    <a href="" class="logo"><img src="./img/Cat-logo.png">QuaseLar</a> <!--logo-->
    <div class="hamburguer"> <!--icone de menu-->
        <div class="linha1"></div>
        <div class="linha2"></div>
        <div class="linha3"></div>
    </div>
    <ul class="bnt"> <!--botões principais-->
        <li><a href="./pagina_cadas_entrar.php" class="bnt_entrar">Entrar</a></li>
        <li><a href="./pagina_cadas_entrar.php" class="bnt_cadastrar">Cadastrar-se</a></li>
    </ul>
    <ul class="menu-burguer"> <!--itens do menu-->
        <li><a href="1">Quem somos?</a></li>
        <li><a href="2">Quero adotar!</a></li>
        <li><a href="3">Procurados</a></li>
        <li><a href=";" class="bnt_entrar-2">Entrar</a></li>
        <li><a href="@" class="bnt_cadastrar-2">Cadastrar-se</a></li>
    </ul>
</header>
<!--===============================================================================-->
<!--inicio-->
<section class="fundo">
    <section class="banner">
        <h1>Todo animalzinho merece ser amado!!</h1>
        <p>Arraste para baixo e conheça muitos bichinhos<br> que estão precisando de lar.</p>
    </section>
</section>
<div class="titulo">
    <h1>Adoção</h1>
    <p>Mude um destino...adote um pet hoje!</p>
</div>

<section class="inicio">
    <main class="card-group">

        <?php
        for ($i = 0; $i < 9; $i++) { ?>
            <div class="card"> <!--CARD-->
                <img src="./img/sem_foto.png" alt="">
                <div class="layer"></div>
                <div class="info">
                    <h1>Junior</h1>
                    <p>Mussum Ipsum, cacilds vidis litro abertis. Mauris nec dolor in eros commodo tempor.</p>
                    <ul>
                        <li><img src="./img/genero_icon.png" alt="">macho</li>
                        <li><img src="./img/local_icon.png" alt="">Americana</li>
                    </ul>
                    <a href="./tela-info-adocao.php" class="btn btn-primary" class="btn btn-success">Tenho interesse</a>
                </div>
            </div>
        <?php } ?>




    </main>
</section>
</body>

</html>