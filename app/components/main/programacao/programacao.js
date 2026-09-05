// Espera a página carregar completamente
window.onload = function () {
  const container = document.getElementById("cards-container");
  const btnLeft = document.getElementById("btn-left");
  const btnRight = document.getElementById("btn-right");

  // Teste de diagnóstico: se aparecer no console, o JS achou os elementos
  console.log("Container:", container, "Botoes:", btnLeft, btnRight);

  if (btnLeft && btnRight && container) {
    btnLeft.onclick = function () {
      console.log("Clicou na esquerda");
      container.scrollBy({ left: -300, behavior: "smooth" });
    };

    btnRight.onclick = function () {
      console.log("Clicou na direita");
      container.scrollBy({ left: 300, behavior: "smooth" });
    };
  } else {
    console.error("Erro: Elementos não encontrados. Verifique os IDs no HTML.");
  }
};
