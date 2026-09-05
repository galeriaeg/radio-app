const modal = document.getElementById("modal");
const header = document.getElementById("header");

header.onmousedown = (e) => {
  // Calcula o deslocamento do clique em relação ao canto do modal
  let shiftX = e.clientX - modal.offsetLeft;
  let shiftY = e.clientY - modal.offsetTop;

  function moveAt(pageX, pageY) {
    modal.style.left = pageX - shiftX + "px";
    modal.style.top = pageY - shiftY + "px";
    modal.style.margin = "0"; // Remove a centralização automática ao mover
  }

  function onMouseMove(e) {
    moveAt(e.pageX, e.pageY);
  }

  // Move o modal enquanto o mouse se mexe
  document.addEventListener("mousemove", onMouseMove);

  // Solta o modal
  document.onmouseup = () => {
    document.removeEventListener("mousemove", onMouseMove);
    document.onmouseup = null;
  };
};

// Impede o arraste padrão de elementos internos
header.ondragstart = () => false;
