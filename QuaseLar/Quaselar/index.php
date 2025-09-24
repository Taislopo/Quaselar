<?php
include './template/header.php';
?>

<!--inicio-->
<section class="fundo_inicial">
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