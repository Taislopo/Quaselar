<?php
include './template/header.php';
?>

<body>

  <section class="fundo">
    <main class="row">

      <div class="caixa-aviso">
        <div class="texto">
          <h1>PROCURA - SE </h1>
          <p>Você viu algum desses animais? Por favor entre em contato.</p>
        </div>
      </div>
    </main>

    <!-- cards em cada um deles tem o backgroud imagem -->
    <main class="grid-procurados">

      <?php for ($i = 0; $i < 6; $i++) { ?>
        <figure class="card">
          <h4>Americana/SP</h4>
          <figcaption class="text2">
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