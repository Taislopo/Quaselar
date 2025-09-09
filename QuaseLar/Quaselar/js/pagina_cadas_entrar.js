let movido = false;

function moverTela() {
  const tela = document.querySelector('.tela_extra');

  if (!movido) {
    tela.style.transform = 'translateX(50%)';
    movido = true;
  } else {
    tela.style.transform = 'translateX(-50%)';
    movido = false;
  }
}
