<div class="box-logo">
  <img src="assets/imgs/logo-app.png" alt="Logo" class="logo" />
  <img src="assets/imgs/icon-play.svg" alt="play" onclick="modal.show()" class="icon-play" />
</div>

<nav class="box-menu">
  <a href="#" class="amenu">Home</a>
  <a href="#sobre" class="amenu">Sobre</a>
  <a href="#programacao" class="amenu">Programação</a>
  <a href="#contato" class="amenu">Contato</a>
</nav>

<!--popup live-->
<dialog id="modal">
  <div id="header">Arraste</div>
  <script type="text/javascript" src="https://hosted.muses.org/mrp.js"></script>
  <script type="text/javascript">
    MRP.insert({
      'url': 'https://das-edge11-live365-dal03.cdnstream.com/a06375',
      //'url': 'https://26733.live.streamtheworld.com/CBLAFM_CBC.mp3?dist=onlineradiobox',
      //'url': 'https://livesh.com.br/proxy/galeria1?mp=/stream;',
      'lang': 'pt',
      'codec': 'mp3',
      'volume': 92,
      'autoplay': false,
      'forceHTML5': true,
      'jsevents': true,
      'buffering': 0,
      'title': 'Rádio',
      'welcome': 'Bem-vindo',
      'wmode': 'transparent',
      'skin': 'kplayer',
      'width': 220,
      'height': 200
    });
  </script>
  <button onclick="modal.close();MRP.stop();">Fechar</button>
</dialog>
<!--popup live-->




<script>
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
</script>