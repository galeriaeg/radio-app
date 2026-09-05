const slides = document.querySelectorAll(".slide");
let indexAtual = 0;
let emTransicao = false;
let slideTimer;

function mudarSlide(direcao) {
  if (emTransicao || slides.length <= 1) return;

  emTransicao = true;

  // 1. Remove a classe do slide atual
  slides[indexAtual].classList.remove("active");

  // 2. Calcula o próximo índice
  indexAtual = (indexAtual + direcao + slides.length) % slides.length;

  // 3. Adiciona a classe ao novo slide
  slides[indexAtual].classList.add("active");

  // 4. Libera a transição após o tempo do CSS (ex: 1s)
  setTimeout(() => {
    emTransicao = false;
  }, 1000);
}

// Função apenas para o Timer
function iniciarAutoPlay() {
  stopAutoPlay(); // Garante que não existam múltiplos timers
  slideTimer = setInterval(() => {
    mudarSlide(1);
  }, 5000);
}

function stopAutoPlay() {
  clearInterval(slideTimer);
}

// Inicialização
document.addEventListener("DOMContentLoaded", () => {
  // Garante que o primeiro slide esteja ativo
  if (slides.length > 0) slides[0].classList.add("active");
  iniciarAutoPlay();
});

// Opcional: Pausar ao passar o mouse e retomar ao sair
const boxSlide = document.querySelector(".box-slide");
boxSlide.addEventListener("mouseenter", stopAutoPlay);
boxSlide.addEventListener("mouseleave", iniciarAutoPlay);
