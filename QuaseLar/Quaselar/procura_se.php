<?php
include './template/header.php';
?>

<body>

  <section class="fundo3">
    <main class="row">

      <div class="caixa-aviso2">
        <div class="texto3">
          <h1>PROCURA - SE </h1>
          <p>Você viu algum desses animais? Por favor entre em contato.</p>
        </div>
      </div>
    </main>

    <!-- cards em cada um deles tem o backgroud imagem -->
    <main class="grid-procurados3">

      <?php for ($i = 0; $i < 6; $i++) { ?>
        <figure class="card33">
          <h4>Americana/SP</h4>
          <figcaption class="text222">
            <h1>Leo</h1>
            <p><strong>Ultimo lugar visto:</strong><br>Bairro Vila Jones</p>
            <h6>Ultima Atualização 3 Horas</h6>
          </figcaption>
        </figure>
      <?php } ?>

    </main>


  </section>
</body>

</html>